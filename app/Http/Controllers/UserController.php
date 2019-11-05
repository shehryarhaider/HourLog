<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get();
        return view('user',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $isEdit = false;
        return view('add-user',compact('isEdit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $pass = Hash::make($request->password);
        $data['password'] = $pass;

        if($request->image)
        {
            $data['image'] = Storage::disk('image')->putFile('',$request->image);
        }
        $insert = User::Create($data);
        if($insert)
        {
            return redirect()->route('users')->with('message','User Create Successfully');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $find_user = $user;
        $isEdit = true;
        return view('add-user',compact('find_user','isEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        if($request->image)
        {
            Storage::disk('image')->delete($user->image);
            $data['image'] = Storage::disk('image')->putFile('',$request->image);
        }
        $update = $user->update($data);
        if($update)
        {
            return redirect()->route('users')->with('message','User Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $exists = Storage::disk('image')->exists($user->image);
        if($exists)
        {
            Storage::disk('image')->delete($user->image);
        }
        $delete = User::where('id',$user->id)->delete();
        if($delete)
        {
            return redirect()->route('users')->with('message','User Deleted Successfully');
        }
    }
}
