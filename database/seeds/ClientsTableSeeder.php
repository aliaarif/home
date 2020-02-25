<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++){
            $client = new Client;
            $client->team_id = mt_rand(000000, 999999);
            $client->requester_name = mt_rand(000000, 999999);
            $client->save();
        }
    }
}
