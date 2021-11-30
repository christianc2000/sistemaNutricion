<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        // $roles = Role::all();

        return view('user.create', compact('users', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->password = bcrypt($request->get('password'));
        $users->ci_trab = $request->get('ci_trab');
        $users->save();
        $users->assignRole($request->rol); //crear rol
        // $users->syncRoles($request->rol);//sincronizar rol
        //    return redirect()->route('users.edit', $user)->with('info', 'Se asignó los roles correctamente');
        // User::create($request->all());

        // activity()->useLog('Usuario')->log('Nuevo')->subject();
        // $lastActivity = Activity::all()->last();
        // $lastActivity->subject_id = User::all()->last()->id;
        // $lastActivity->save();

        return redirect()->route('users.index')->with('info', 'Se creó un nuevo usuario'); //redirige a la vista index de la carpeta cargo
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.show', compact('user', 'trabajador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();

        return view('user.edit', compact('user', 'users', 'roles'));
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
