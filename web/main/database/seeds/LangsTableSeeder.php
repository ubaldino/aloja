<?php

use Illuminate\Database\Seeder;
use App\Lang;
class LangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lang::create( [ 'name' => 'c' ] );
        Lang::create( [ 'name' => 'c++' ] );
        Lang::create( [ 'name' => 'java' ] );
        Lang::create( [ 'name' => 'python' ] );
    }
}
