<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeds the type_user table
        //DB::table('types')->delete();

        DB::table('type_user')->insert(array(
        array('user_id' => 1, 'type_id' => 1),
        array('user_id' => 1, 'type_id' => 2),
        array('user_id' => 1, 'type_id' => 3),
        array('user_id' => 2, 'type_id' => 4),
        array('user_id' => 2, 'type_id' => 5),
        array('user_id' => 2, 'type_id' => 6),
        array('user_id' => 3, 'type_id' => 7),
        array('user_id' => 3, 'type_id' => 8),
        array('user_id' => 4, 'type_id' => 9),
        array('user_id' => 4, 'type_id' => 10),
        array('user_id' => 5, 'type_id' => 11),
        array('user_id' => 5, 'type_id' => 12),
        array('user_id' => 5, 'type_id' => 13),
        array('user_id' => 6, 'type_id' => 14),
        array('user_id' => 6, 'type_id' => 15),
        array('user_id' => 6, 'type_id' => 16),
        array('user_id' => 7, 'type_id' => 1),
        array('user_id' => 8, 'type_id' => 2),
        array('user_id' => 9, 'type_id' => 3),
        array('user_id' => 10, 'type_id' => 4),
        array('user_id' => 11, 'type_id' => 5),
        array('user_id' => 12, 'type_id' => 6),
        array('user_id' => 13, 'type_id' => 7),
        array('user_id' => 14, 'type_id' => 8),
        array('user_id' => 15, 'type_id' => 9),
        array('user_id' => 16, 'type_id' => 10),
        array('user_id' => 17, 'type_id' => 11),
        array('user_id' => 18, 'type_id' => 12),
        array('user_id' => 19, 'type_id' => 13),
        array('user_id' => 20, 'type_id' => 14),
        array('user_id' => 19, 'type_id' => 15),
        array('user_id' => 18, 'type_id' => 16)
    ));
    
    }
}