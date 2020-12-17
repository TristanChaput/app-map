<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create three companies entries
        DB::table('companies')->insert([
            'name'         => 'Charlie Solutions',
            'address'      => '11B Avenue de l\'Harmonie, 59650 Villeneuve-d\'Ascq',
            'phone_number' => '0688296028',
            'latitude'     => '50.604553',
            'longitude'    => '3.151654', 
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);

        DB::table('companies')->insert([
            'name'         => 'Auchan Retail',
            'address'      => '62 Avenue Halley, 59650 Villeneuve-d\'Ascq',
            'phone_number' => '0300000000',
            'latitude'     => '50.6033687',
            'longitude'    => '3.1435712',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);

        DB::table('companies')->insert([
            'name'         => 'Pimkie',
            'address'      => '1 Rue John Hadley, 59650 Villeneuve-d\'Ascq',
            'phone_number' => '0320233232',
            'latitude'     => '50.6098859',
            'longitude'    => '3.1518583',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);
    }
}
