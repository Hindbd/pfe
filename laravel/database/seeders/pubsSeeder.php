<?php

namespace Database\Seeders;

use App\Models\pubs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pubsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        pubs::factory() ->count(10)
                         ->create();   
     }
    // $pubs = new pubs;
    // $pubs->id= 1;
    // $pubs->nom = 'Example Post';
    // $pubs->titre = 'This is an example post';
    // $pubs->contenu = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    // $pubs->date = '2023-03-11 10:30:00'; // Manually set the date to March 11, 2023 at 10:30:00 AM
    // $pubs->save();
    // }
}
