<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i=0;$i<4;$i++){
        DB::table('followers')->insert([
          'name'=>'Ahmet',
          'slug'=>'ahmet',
          'image'=>'ahmet',
          'job'=>'işçi',
          'twitter'=>'twitter',
          'facebook'=>'facebook',
          'instagram'=>'instagram',
          'linkedin'=>'linkedin',
          'created_at'=>now(),
          'updated_at'=>now()
        ]);
      }
    }
}
