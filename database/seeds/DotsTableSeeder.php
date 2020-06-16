<?php

use Illuminate\Database\Seeder;
use App\Dot;

class DotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Dot::class, 15)->create();
    }
}
