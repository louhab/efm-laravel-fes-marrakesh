<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateroleAndPermissionController extends Controller
{
      public function createPermissionsAndRoles() {
        // https://talltips.novate.co.uk/laravel/laravel-breeze-login-conditional-redirect
        $permissions = [
            'Auth',
            'List-Of-Tasks',
            'Add-New-Task',
            'Update-Task',
            'Delet-Task',
        ];
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'api']);
        }
        $adminpermission = Permission::whereIn('name',['Auth','List-Of-Tasks', 'Add-New-Task',  'Update-Task', 'Delet-Task'])->get();
        $simpleuser = Permission::whereIn('name',['Auth'])->get();
        $roles = [
          ['simple-user',$simpleUser],
          ['admin',$admin],
        ];
   }
}
