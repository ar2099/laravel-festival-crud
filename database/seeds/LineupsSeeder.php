<?php

use Illuminate\Database\Seeder;

use App\Models\Lineup;

class LineupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $data = config('lineup');

        foreach($data as $da){

            $new_data = new Lineup();

            $new_data->fill($da);

            $new_data->save();
        }



    }
}
