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
            'email' => 'ppit@gmail.com',
            'password' => bcrypt('secret'),
            'company_type' => 'Corporation',
            'telephone' => '+18845645312132',
            'url' => 'www.ppit.com',
        ]);
    }
}
