<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Client;
use App\Assignment;

class AssignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $lang = ['Arabic', 'English', 'Franch'];
        for($i = 1; $i <= 10; $i++){
            $client = Client::inRandomOrder()->first();
            $assignment = new Assignment;
            $assignment->acode = 'acodel'.time();
            $assignment->client_id = $client->id;
            $assignment->client_team_id = $client->team_id;
            $assignment->client_requester_name = $client->requester_name;

            $assignment->assignment_name = 'Assignment Name '.$i;
            $assignment->created_by = 1;
            $assignment->source_lang = $lang[mt_rand(0, 2)];
            $assignment->target_lang = $lang[mt_rand(0, 2)];
            $assignment->word_count = 1000;
            $assignment->page_count = 10;
            $assignment->comment = 'Dummy Text '.$i;
            $assignment->duration = 3600;
            $assignment->deadline = date("Y-m-d H:i:s", strtotime(now().' +4 hours'));
            $assignment->save();
        }
    }
}
