<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    function create_role(){
        $permissions = Permission::all();
        $roles = Role::all();
        return view('admin.role.create_role',[
            'permissions'=>$permissions,
            'roles'=>$roles,
        ]);
    }

    // function create_role(){
    //     $permissions = Permission::all();
    //     $permission_groups = User::getpermissionGroups();
    //     return view('admin.role.create_role',[
    //         'permissions'=>$permissions,
    //         'permission_groups'=>$permission_groups,
    //     ]);
    // }

    function permissions_store(Request $request){

        Permission::create(['name' => $request->permission_name]);
        return back();
    }

    function role_store(Request $request){
        $role = Role::create(['name' => $request->role_name]);
        $role->givePermissionTo($request->permissions);
        return back();
    }

    function assign_role(){
        $users = User::all();
        $roles = Role::all();
        return view('admin.role.assign_role',[
            'users'=>$users,
            'roles'=>$roles,
        ]);
    }

    function assign_role_store(Request $request){
        $users = User::find($request->user_id);
        $users->assignRole($request->role_id);
        return back();
    }

    function remove_assign($user_id){
        $user = User::find($user_id);
        $user->syncRoles([]);
        return back();
    }

    // function role_edit($role_id){
    //     $role = Role::find($role_id);
    //     $permissions = Permission::all();
    //     $permission_groups = User::getpermissionGroups();
    //     return view('admin.role.role_edit',[
    //         'permissions'=>$permissions,
    //         'permission_groups'=>$permission_groups,
    //         'role'=>$role,
    //     ]);
    // }

    // public function update(Request $request, $id){

    //     $role = Role::findById($id);
    //     $permissions = $request->input('permissions');

    //     if (!empty($permissions)) {
    //         $role->syncPermissions($permissions);
    //     }
    //     return back();
    // }
}
