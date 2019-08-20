<?php

use Illuminate\Database\Seeder;
use App\sites;

class SitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sites::create([
            'site_name' => 'Testing',
            'title' => 'A New Hope',
            'description' => 'This is a testing site',
            'meta_title' => 'a new hope',
            'meta_description' => 'testing a new hope in the galaxy',
        ]);

        sites::create([
            'site_name' => 'Portfolio',
            'title' => 'JCD | Portfolio',
            'description' => 'This is my portfolio site',
            'meta_title' => 'JCD | Portfolio',
            'meta_description' => 'This is my portfolio site',
        ]);
    }
}
