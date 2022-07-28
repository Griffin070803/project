<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Event\StoreRequest;
use App\Http\Requests\Event\UpdateRequest;

class EventController extends Controller
{
    public function index () {
        $events=DB::table('events')->orderBy('created_at', 'DESC')->get();
        return view('admin.event.index',['events'=>$events]);
    } 

    public function details ($id) {
        $events = DB::table('events')->where('id', $id)->get();

        $details=DB::table('information_people')
        ->join('events','information_people.events_id','=','events.id')
        ->select('events.*','information_people.*')
        ->where('events_id',$id)
        ->get();
        // return view('admin.event.details',['details'=>$details]);
        // $details = DB::table('information_people')->where('id', $id)->get();
        return view('admin.event.datails',['id' => $id],['details'=>$details,'events'=>$events]);
    } 


    public function create () {
        $category = DB::table('categorys')->get();
        
        return view('admin.event.create', ['categories'=> $category]);
    } 
    public function delete ($id) {
        DB::table('information_people')->where('events_id',$id)->delete();
        DB::table('events')->where('id', $id)->delete();
        return redirect()->route('admin.event.index');
    } 
    public function edit ($id) {
        $event = DB::table('events')->where('id', $id)->first();

        return view('admin.event.edit',['id' => $id],['event' => $event]);
    } 
    public function update (UpdateRequest $request,$id) {

        $data = $request->except('_token', 'image');
        if (!empty($request->image)) {
            $data_old = DB::table('events')->where('id', $id)->first();
            $url_image_old_path = public_path('assets/dist/img/' . $data_old->image);
            if (file_exists($url_image_old_path)) {
                unlink($url_image_old_path);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/dist/img/'), $imageName);
            $data['image'] = $imageName;
        }
        DB::table('events')->where('id', $id)->update($data);
        return redirect()->route('admin.event.index')->with('success', 'Edit Successfully');

    } 
    public function store (StoreRequest $request) {
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/dist/img'), $imageName);
        $data['image'] = $imageName;

        DB::table('events')->insert($data);
        return redirect()->route('admin.event.index')->with('success', 'Insert Successfully');
    } 
}
