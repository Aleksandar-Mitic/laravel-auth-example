<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Page::class, 50)->create()->each(function ($user) {
            $user->pages()->save(factory(App\Page::class)->make());
        });
    }
}
