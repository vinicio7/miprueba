<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        factory(App\Models\User::class, 2)->create();
    }

}
