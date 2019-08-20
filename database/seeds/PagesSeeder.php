<?php

use Illuminate\Database\Seeder;
use App\pages;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pages::create([
            'title' => 'Home',
            'slug' => 'home',
            'body' => '<h1>Home</h1><p>This is the home page.</p>',
            'seo_title' => 'Home',
            'seo_description' => 'This is the home page',
            'sites_id' => 1,
        ]);
        pages::create([
            'title' => 'About',
            'slug' => 'about',
            'body' => '<h1>About</h1><p>This is the about page.</p>',
            'seo_title' => 'About Us',
            'seo_description' => 'This is the about page.',
            'sites_id' => 1,
        ]);

        pages::create([
            'title' => 'My Projects',
            'slug' => 'my-projects',
            'body' => '<h1>Projects</h1><p>These are my projects.</p>',
            'seo_title' => 'My Projects',
            'seo_description' => 'These are my projects.',
            'sites_id' => 2,
        ]);
    }
}
