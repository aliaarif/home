<?php

use Illuminate\Database\Seeder;
use App\Role;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $role_administrator = new Role;
        $role_administrator->name = 'Administrator';
        $role_administrator->description = 'Its a super administrator';
        $role_administrator->save();

        $role_translator = new Role;
        $role_translator->name = 'Translator';
        $role_translator->description = 'Its a Translator';
        $role_translator->save();

        $role_operations = new Role;
        $role_operations->name = 'Ops';
        $role_operations->description = 'Its an Operation User';
        $role_operations->save();


        $role_quality_analyst = new Role;
        $role_quality_analyst->name = 'QA';
        $role_quality_analyst->description = 'Its a Quality Analyst';
        $role_quality_analyst->save();

        $role_client = new Role;
        $role_client->name = 'Client';
        $role_client->description = 'Its a Super client';
        $role_client->save();


        
    }
}
