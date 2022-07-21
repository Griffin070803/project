<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Member\StoreRequest;
use App\Http\Requests\Member\UpdateRequest;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index () {
        $result = DB::table('members')->orderBy('created_at', 'ASC')->get();
        return view('admin.member.index', ['members' => $result]);
    }

    public function create () {
        return view('admin.member.create');
    }

    public function store (StoreRequest $request) {
        $data = $request->except('_token');
        $data['password'] = bcrypt($request->password);
        $data['created_at'] = new \DateTime();

        $imageName = time().'.'.$request->avatar->extension();
        $request->avatar->move(public_path('assets/dist/img'), $imageName);
        $data['avatar'] = $imageName;
        
        DB::table('members')->insert($data);

        return redirect()->route('admin.member.index')->with('success', 'Insert Successfully');
    }

    public function edit ($id) {
        $member = DB::table('members')->where('id', $id)->first();

        $edit_myself = null;
        if (Auth::user()->id == $id) {
            $edit_myself = true;
        } else {
            $edit_myself = false;
        }

        if (Auth::user()->id != 1 && ($id == 1 || ($member->level == 1 && $edit_myself == false))) {
            return redirect()->route('admin.member.index')->with('warning', 'You dont have permission to edit');
        }
        
        return view('admin.member.edit', ['id' => $id,'member' => $member]);
    }

    public function update (UpdateRequest $request, $id) {
        $data = $request->except('password', '_token', 'avatar');

        if (!empty($request->password)) {
            $data['password'] = bcrypt($request->password);
        }

        if (!empty($request->avatar)) {
            $data_old = DB::table('members')->where('id', $id)->first();
            $url_image_old_path = public_path('assets/dist/img/' . $data_old->avatar);
            if (file_exists($url_image_old_path)) {
                unlink($url_image_old_path);
            }
            $imageName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('assets/dist/img/'), $imageName);
            $data['avatar'] = $imageName;
        }

        DB::table('members')->where('id', $id)->update($data);

        return redirect()->route('admin.member.index')->with('success', 'Edit Successfully');
    }

    public function delete ($id) {
        

        $edit_myself = null;
        if (Auth::user()->id == $id) {
            $edit_myself = true;
        } else {
            $edit_myself = false;
        }
        $member = DB::table('members')->where('id', '=', $id)->first();
        if (($id == 1 || (Auth::user()->id != 1 && $member->level == 1 && $edit_myself == false))) {
            return redirect()->route('admin.member.index')->with('warning', 'You dont have permission to delete');
        }
            
        DB::table('members')->where('id', '=', $id)->delete();
       return redirect()->route('admin.member.index');
    }
}
