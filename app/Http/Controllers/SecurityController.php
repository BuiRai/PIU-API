<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Role;
// use App\Permission;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SecurityController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return response()->json($users);
    }

    public function createRole(Request $request)
    {
        Role::create($request->all());
        // $role = new Role();
        // $role->name = $request->input('name');
        // $role->save();

        return response()->json("created");
    }

    public function createPermission(Request $request)
    {
        Permission::create($request->all());
        // $viewUsers = new Permission();
        // $viewUsers->name = $request->input('name');
        // $viewUsers->save();

        return response()->json("created");
    }

    public function assignRole(Request $request)
    {
        $user = User::where('email', '=', $request->input('email'))->first();

        $role = Role::where('name', '=', $request->input('role'))->first();
        //$user->attachRole($request->input('role'));
        // $user->roles()->attach($role->id);

        $user->assignRole($role->name);

        return response()->json("created");
    }

    public function attachPermission(Request $request)
    {
        $role = Role::where('name', '=', $request->input('role'))->first();
        $permission = Permission::where('name', '=', $request->input('permission'))->first();
        $role->attachPermission($permission);

        return response()->json("created");
    }
}
