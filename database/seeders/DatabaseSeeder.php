<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\AmalYaumi;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'keuangan-list',
            'keuangan-create',
            'keuangan-edit',
            'keuangan-delete',
            'donasi-list',
            'donasi-create',
            'donasi-edit',
            'donasi-delete',
            'amal-list',
            'amal-create',
            'amal-delete',
            'post-list',
            'post-create',
            'post-edit',
            'post-delete',
         ];
      
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }

        $user = User::create([
            'name' => 'Administrator', 
            'email' => 'admin@rdk.com',
            'password' => bcrypt('123456'),
            'alamat' => 'planet namek',
            'phone' => '05111840000000',
            'jenis_kelamin' => 'Ikhwan',
        ]);

        $amalyaumi = [
            'Shalat Shubuh',
            'Shalat Dzuhur',
            'Shalat Ashar',
            'Shalat Maghrib',
            'Shalat Isya',
            'Tilawah Al-Quran',
            'Qiyamulail', 
            'Shalat Dhuha',
            'Shalat Rawatib',
            'Riyadhoh (olah raga)',
            'Dzikir Pagi dan Petang',
            'Infaq dan Sedekah',
            'Mengikuti Kajian',
            'Membantu Orang',
            'Murajaah',
            'Membaca Buku',
            'Komunikasi dengan Orang Tua',
         ];
      
         foreach ($amalyaumi as $amalyaumi) {
              AmalYaumi::create(['name' => $amalyaumi]);
         }
    
        $role = Role::create(['name' => 'Admin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}
