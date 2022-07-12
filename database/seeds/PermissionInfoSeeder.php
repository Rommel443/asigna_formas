<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Period;
use App\Permission\Models\Role;
use App\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PermissionInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate tables
        /*DB::statement("SET foreign_key_checks=0");
        DB::table('role_user')->truncate();
        DB::table('permission_role')->truncate();
        Permission::truncate();
        Role::truncate();
        DB::statement("SET foreign_key_checks=1");*/
        DB::statement("TRUNCATE TABLE role_user RESTART IDENTITY CASCADE");
        DB::statement("TRUNCATE TABLE permission_role RESTART IDENTITY CASCADE");
        Permission::truncate();
        Role::truncate();

        //user admin
        $useradmin = User::where('email','admin@admin.com')->first();
        if ($useradmin){
            $useradmin->delete();
        }
        $useradmin = User::create([
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admin'),
            'estado'  => '0'

        ]); 

        

        //rol admin
        $roladmin = Role::create([
            'name' => 'Administrador',
            'slug' => 'admin',
            'descripcion' => 'Administrator',
            'full-access' => 'yes'
        ]);

        
        
        //tabla role_user
        $useradmin->roles()->sync([$roladmin->id]);

        //user test
        $usertest = User::create([
            'name'      => 'test',
            'email'     => 'test@test.com',
            'password'  => Hash::make('test'),
            'estado'  => '0'

        ]); 

        //rol editor
        $roledit = Role::create([
            'name' => 'Editor',
            'slug' => 'editor',
            'descripcion' => 'Editor',
            'full-access' => 'no'
        ]);

        $usertest->roles()->sync(2);


        //permission
        $permission_all = [];

        //permission role
        $permission = Permission::create([
            'name' => 'Listar Rol',
            'slug' => 'role.index',
            'descripcion' => 'El usuario podrá listar roles',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Visualizar Rol',
            'slug' => 'role.show',
            'descripcion' => 'El usuario podrá visualizar roles',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Crear Rol',
            'slug' => 'role.create',
            'descripcion' => 'El usuario podrá crear roles',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Editar Rol',
            'slug' => 'role.edit',
            'descripcion' => 'El usuario podrá editar roles',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Eliminar Rol',
            'slug' => 'role.destroy',
            'descripcion' => 'El usuario podrá eliminar roles',
        ]);

        $permission_all[] = $permission->id;


        //permission user

        $permission = Permission::create([
            'name' => 'Listar usuario',
            'slug' => 'user.index',
            'descripcion' => 'El usuario podrá listar usuarios',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Visualizar usuario',
            'slug' => 'user.show',
            'descripcion' => 'El usuario podrá visualizar usuarios',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Crear usuario',
            'slug' => 'user.create',
            'descripcion' => 'El usuario podrá crear usuarios',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Editar usuarios',
            'slug' => 'user.edit',
            'descripcion' => 'El usuario podrá editar usuarios',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Eliminar usuarios',
            'slug' => 'user.destroy',
            'descripcion' => 'El usuario podrá eliminar usuarios',
        ]);

        $permission_all[] = $permission->id;

        //tabla permission_role
        //$roladmin->permissions()->sync( $permission_all );

        //new
        $permission = Permission::create([
            'name' => 'Visualizar propio usuario',
            'slug' => 'userown.show',
            'descripcion' => 'El usuario podrá visualizar su propio usuario',
        ]);

        $permission_all[] = $permission->id;

       

        $permission = Permission::create([
            'name' => 'Editar propio usuario',
            'slug' => 'userown.edit',
            'descripcion' => 'El usuario podrá editar su propio usuario',
        ]);

        $permission_all[] = $permission->id;

        //new
        $permission = Permission::create([
            'name' => 'Show own positionown',
            'slug' => 'positionown.show',
            'descripcion' => 'A user can edit a own position',
        ]);

        $permission_all[] = $permission->id;

       

        $permission = Permission::create([
            'name' => 'Edit own positionown',
            'slug' => 'positionown.edit',
            'descripcion' => 'A user can edit a own position',
        ]);

        $permission_all[] = $permission->id;

        
        //posiciones permisos

        $permission = Permission::create([
            'name' => 'List Position',
            'slug' => 'position.index',
            'descripcion' => 'A user can list a position',
        ]);

        $permission_all[] = $permission->id;

        
        $permission = Permission::create([
            'name' => 'Show Position',
            'slug' => 'position.show',
            'descripcion' => 'A user can view a position',
        ]);

        $permission_all[] = $permission->id;

        
        $permission = Permission::create([
            'name' => 'Edit Position',
            'slug' => 'position.edit',
            'descripcion' => 'A user can edit a position',
        ]);

        $permission_all[] = $permission->id;

        

        $permission = Permission::create([
            'name' => 'Create Position',
            'slug' => 'position.create',
            'descripcion' => 'A user can create a position',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy Position',
            'slug' => 'position.destroy',
            'descripcion' => 'A user can destroy a position',
        ]);

        $permission_all[] = $permission->id;

        /// permiso usuarios
        $roledit->permissions()->sync(1);

        $period = Period::create([
            'id' => '503',
            'nombre' => 'TEST',
            'descripcion' => 'TEST SBAC',
            'codigo' => 'SBAC',
            'fecha_inicio_evaluacion' => '2022-05-01 13:01:01',
            'fecha_fin_evaluacion' => '2022-06-01 13:01:01',
            
        ]);

    }
}
