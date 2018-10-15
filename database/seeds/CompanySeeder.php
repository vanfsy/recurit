<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'PP IT Company',
            'manager_name' => 'Yaoki',
            'email' => 'ppit@gmail.com',
            'tel' => '+18845645312132',
            'password' => bcrypt('secret'),
        ]);
    }
}
