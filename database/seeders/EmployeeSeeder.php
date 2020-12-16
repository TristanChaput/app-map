<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create nine employees entries three per company
        DB::table('employees')->insert([
            'last_name'    => 'MELCHIOR',
            'first_name'   => 'Basile',
            'address'      => 'Lille',
            'phone_number' => '0688296028',
            'company_id'   => '1',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);

        DB::table('employees')->insert([
            'last_name'    => 'MARIANI',
            'first_name'   => 'Romain',
            'address'      => 'Lille',
            'phone_number' => '0600000000',
            'company_id'   => '1',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);

        DB::table('employees')->insert([
            'last_name'    => 'LAZAAR',
            'first_name'   => 'Issam',
            'address'      => 'Lille',
            'phone_number' => '0600000000',
            'company_id'   => '1',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);

        DB::table('employees')->insert([
            'last_name'    => 'PAUL',
            'first_name'   => 'Jean',
            'address'      => 'Lille',
            'phone_number' => '0600000000',
            'company_id'   => '2',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);

        DB::table('employees')->insert([
            'last_name'    => 'CLAIRE',
            'first_name'   => 'Marie',
            'address'      => 'Lille',
            'phone_number' => '0600000000',
            'company_id'   => '2',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);

        DB::table('employees')->insert([
            'last_name'    => 'DUPONT',
            'first_name'   => 'Robert',
            'address'      => 'Lille',
            'phone_number' => '0600000000',
            'company_id'   => '2',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);

        DB::table('employees')->insert([
            'last_name'    => 'DESCHAMPS',
            'first_name'   => 'Ives',
            'address'      => 'Lille',
            'phone_number' => '0600000000',
            'company_id'   => '3',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);

        DB::table('employees')->insert([
            'last_name'    => 'CROCHE',
            'first_name'   => 'Sarah',
            'address'      => 'Lille',
            'phone_number' => '0600000000',
            'company_id'   => '3',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);

        DB::table('employees')->insert([
            'last_name'    => 'HONNETTE',
            'first_name'   => 'Camille',
            'address'      => 'Lille',
            'phone_number' => '0600000000',
            'company_id'   => '3',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);
    }
}
