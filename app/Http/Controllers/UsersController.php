<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;


use App\Http\Requests\CreateNewUserRequest;
use Session;
use Redirect;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view("admin.usuario.index",compact('users'));
    }


    public function trashed(){

        $users = User::onlyTrashed()->paginate(5);
        return view("admin.usuario.trashed",compact('users'));

    }

    public function restore($id){
        $user= User::withTrashed()->find($id)->restore();

        Session::flash('message','Se ha restaurado el usuario');
        return redirect::to("/admin/users");
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.usuario.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewUserRequest $request)
    {
        User::create($request->all());
        Session::flash('message','Usuario creado correctamente');
        return redirect::to("/admin/users");
    }

    /**
     * Display the specified resourc
     e.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view("admin.usuario.edit",compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user= User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message','Usuario modificado correctamente');
        return redirect::to('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();

        Session::flash('message','Usuario eliminado correctamente');
        return redirect::to("/admin/users");
    }
}
