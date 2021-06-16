<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
  
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Administrator', 
            'email' => 'admin@rdk.com',
            'password' => bcrypt('123456')
        ]);

        // $user1 = User::create([
        //     'name' => 'Administrator1', 
        //     'email' => 'admin1@rdk.com',
        //     'password' => bcrypt('123456')
        // ]);

        // $user2 = User::create([
        //     'name' => 'Administrator2', 
        //     'email' => 'admin2@rdk.com',
        //     'password' => bcrypt('123456')
        // ]);

        // $user3 = User::create([
        //     'name' => 'Administrator3', 
        //     'email' => 'admin3@rdk.com',
        //     'password' => bcrypt('123456')
        // ]);
    
        $role = Role::create(['name' => 'Admin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}