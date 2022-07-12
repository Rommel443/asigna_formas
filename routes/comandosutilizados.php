<?php
Route::get('/test', function () {
    
    /*return Role::create([
        'name' => 'Admin',
        'slug' => 'admin',
        'descripcion' => 'Administrator',
        'full-access' => 'yes'
    ]);*/

    /*return Role::create([
        'name' => 'Guest',
        'slug' => 'guest',
        'descripcion' => 'guest',
        'full-access' => 'no'
    ]);*/

    /*return Role::create([
        'name' => 'test',
        'slug' => 'test',
        'descripcion' => 'test',
        'full-access' => 'no'
    ]);*/

    //$user = User::find(1);
    //$user->roles()->attach([1,3]);-- crear
    //$user->roles()->detach([1,3]);-- borrar

    //$user->roles()->sync([1]);

    //return $user->roles;

   /*return Permission::create([
        'name' => 'List product',
        'slug' => 'product.index',
        'descripcion' => 'A user can list a permission',
    ]);*/


    $role = Role::find(2);
    $role->permissions()->sync([1,2]);

    return $role->permissions;     

});
