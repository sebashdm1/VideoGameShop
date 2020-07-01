<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        return view('users.index',['users' => $users]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view("Users.edit")->with([
            "user" =>$user,
            'roles'=>$roles
        ]);// De esta manera se envia dantos hacia la vista
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->userName = $request->userName;
        $user->email= $request->email;
        $user->isBlocked = $request->isBlocked;
        $user->roles()->sync($request->roles);

        if($user->save()){
            return  redirect('/admin/users');
        }else{
            return view("users.edit",["user" =>$user]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user->delete()){
            return  redirect('/admin/users');
        }else{
            return redirect('/admin/users');
        }
    }
}
