<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::all();
        return view('Users.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $this->validate($req,[
            'username'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required',
            'status'=>'required',


        ]);
        User::create([
            'username'=>$req->username,
            'email'=>$req->email,
            'password'=>Hash::make($req->password),
            'dob'=>$req->dob,
            'city'=>$req->city,
            'country'=>$req->country,
            'status'=>$req->status,
        ]);
        return back()->with('message','Registration Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=User::find($id);
        return view('Users.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,$id)
    {
        $edit_data=User::find($id);
        $edit_data->username=$req->username;
        $edit_data->email=$req->email;
        $edit_data->dob=$req->dob;
        $edit_data->password=Hash::make($req->cell);
        $edit_data->city=$req->city;
        $edit_data->country=$req->country;
        $edit_data->status=$req->status;
        $edit_data->update();
        return back()->with('message','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $data=User::find($id);
        $data->delete();
        return back();
    }
}
