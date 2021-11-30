<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('rol.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('rol.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role=Role::create($request->all());
        $role->syncPermissions($request->permissions);

        // activity()->useLog('Rol')->log('Nuevo')->subject();
        // $lastActivity = Activity::all()->last();
        // $lastActivity->subject_id = Role::all()->last()->id;
        // $lastActivity->save();

        return redirect()->route('roles.index')->with('info', 'El rol se creó con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        
        return view('rol.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('rol.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->all());
        $role->syncPermissions($request->permissions);

        // activity()->useLog('Rol')->log('Editado')->subject();
        // $lastActivity = Activity::all()->last();
        // $lastActivity->subject_id = Role::all()->last()->id;
        // $lastActivity->save();

        return redirect()->route('roles.index')->with('info', 'El rol se actualizó con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        
        // activity()->useLog('Rol')->log('Eliminado')->subject();
        // $lastActivity = Activity::all()->last();
        // $lastActivity->subject_id = Role::all()->last()->id;
        // $lastActivity->save();
        
        $role->delete();

        

        return redirect()->route('roles.index')->with('info', 'El rol se eliminó con exito');
    }
}
