<?php

namespace App\Http\Controllers\Admin;

use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CartRequest;
use Cart;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\NotifyMail;

class CartController extends Controller
{
    public function index($id) {
        $datas = DB::table('events')->where('id',$id)->first();
        $sum_adult = DB::table('information_people')->where('events_id',$id)->sum('adult');
        $sum_children = DB::table('information_people')->where('events_id',$id)->sum('children');
        return view('index',['datas'=>$datas,'sum_children'=>$sum_children,'sum_adult'=>$sum_adult]); 
    }

    public function addToCart($id){
        $product = DB::table('events')->where('id',$id)->first();
        return redirect()->route('index',['id'=>$product->id]);
    }
    public function addStoreCart(Request $request) {
        // dd($request);
        $event_id = $request->events_id ;
        $get_price_event = DB::table('events')->where('id',$event_id)->first();
        $price_event = $get_price_event->price;
        // // dd($price_event);
        $quantity_adult = $request->adult ;
        Session::put('adult',$quantity_adult);
        $quantity_children = $request->children ;
        Session::put('children',$quantity_children);
        $sub_total = ($price_event * $quantity_adult) + ($price_event * $quantity_children);
        $data=$request->except('_token');
        $data['created_at'] = new \DateTime();
       
        // $id_event = $data['events_id'];
        // dd($data);
        
        $data_infor= $request->except('_token','name_events','timeend','timestart');
        $code = $request->code;
        Session::put('code',$code);
        $fullname = $request->fullname;
        Session::put('fullname',$fullname);
        $phone = $request->phone;
        Session::put('phone',$phone);
        $email = $request->email;
        Session::put('email',$email);
        $address = $request->address;
        Session::put('address',$address);
        $event_id = $request->events_id;
        Session::put('events_id',$event_id);
        $check=Session::all();
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
     
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => "$sub_total"
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('createTransaction')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    

        
        // DB::table('information_people')->insert($data_infor);
        // $email_id = DB::table('information_people')
        // ->where('email','LIKE','%'.$email.'%')
        // ->where('events_id',$id_event)
        // ->first();
        
        // return redirect()->route('infor',['id'=>$id_event])->with('success','Please Check Your Mail');
    }
public function createTransaction()
    {
        return redirect()->route('master');
    }
    public function successTransaction(Request $request)
    {
        
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // $data= Session::all();
            // DB::table('information_people')->insert($data); 
            Session::forget('_token');
            Session::forget('_previous');
            Session::forget('_flash');
            Session::forget('event_id');
            Session::forget('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
            
            $check = Session::all();
            
            
            // Mail::send('emails.demoMail', $check,function($email) use($request){
            //     $email->subject('Jenkinson Sea Life | Feedback');
            //     $email->to($request->email);
            // });
            $infor = DB::table('information_people')->insert($check);

            $id = DB::table('information_people')->where('code', $check['code'])->first();
            
            // $event_id =Session::get('event_id');
            return redirect()
                ->route('sendEmail',['id'=>$id->id]);
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }

    public function sendEmail($id){
        $data = DB::table('information_people')->where('id',$id)->first();
        $fullname = $data->fullname;
        $adult = $data->adult;
        $children = $data->children;
        $code = $data->code;
        $emails = $data->email;
        $event = DB::table('events')->where('id',$data->events_id)->first();
        $name = $event->name;
        $timestart = $event->timestart;
        $timeend = $event->timeend;

        Mail::send('emails.demoMail',compact('fullname','code','adult','children','name', 'timestart', 'timeend'), 
        function($email) use($emails,$fullname,$code,$adult,$children,$name, $timestart,$timeend){
            $email->subject('Jenkinson Sea Life | Feedback');
            $email->to($emails,$fullname,$code,$adult,$children,$name, $timestart,$timeend);      
        });
        return redirect()->route('infor',['id'=>$data->events_id])->with('success','Please Check Your Mail');
    }

    // public function sendEmail($id)
    // {
    //     $event = DB::table('events')->where('id',$id)->first();
    //     return redirect()->route('infor',['id' =>$email->events_id]);
    // }
    public function getRegister() {
        $data = DB::table('information_people')
        ->join('events','information_people.events_id','=','events.id')
        ->select('information_people.*','events.name as CName')
        ->get();

        return view('admin.register.index',['data'=>$data]);

    }
    public function edit($id){
        $product = DB::table('information_people')->where('id',$id)->first();
        $event = DB::table('events')->where('id',$product->events_id)->first();
        $sum_adult = DB::table('information_people')->where('events_id',$event->id)->sum('adult');
        $sum_children = DB::table('information_people')->where('events_id',$event->id)->sum('children');
        return view('admin.register.edit',['product'=>$product,'sum_children'=>$sum_children,'sum_adult'=>$sum_adult],['event'=>$event]);
    }
    public function updateEdit(CartRequest $request,$id){
        $data = $request->except('_token');
        DB::table('information_people')->where('id','=',$id)->update($data);
        return redirect()->route('getRegister')->with('success','Edit Successfully');
}
    public function delete($id){
        DB::table('information_people')->where('id',$id)->delete();
        return redirect()->route('getRegister')->with('success','Delete Successfully');
        
    }
   
}
