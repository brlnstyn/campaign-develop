<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => ('Admin'),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'entry_date' => date('Y-m-d'),
            'respondent_code' => '001987',
            'respondent_name' => 'Samuel',
            'province' => 'Jawa Barat',
            'district' => 'Bogor',
            'districts' => 'Bogor',
            'ward' => 'Cigombong',
            'address' => 'Cigombong',
            'phone' => '0812345678',
            'gender' => 'Male',
            'age' => '20',
            'marital_status' => 'Single',
            'family_members' => '0',
            'education' => 'Binus University',
            'occupation' => 'Mahasiswa',
            'expense' => '1000000',
            'source_water' => 'PDAM',
            'source_energy' => 'PLN',
            'filename' => "-",
            'status' => "0"
        ]);
    }
}
