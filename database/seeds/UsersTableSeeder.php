<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
  public function run()
  {
    $role_administrator = Role::where('name', 'Administrator')->first();
    $administrator = new User;
    $administrator->ucode = 'ucodel'.mt_rand(1234567891, 9999999999);
    $administrator->role_id = 1;
    $administrator->role = 'Administrator';
    $administrator->email = 'administrator@example.com';
    $administrator->password = bcrypt('password');
    $administrator->email_verified_at = now();
    $administrator->save();
    $administrator->roles()->attach($role_administrator);
    $administrator->profile()->create([
      'user_id' => $administrator->id,
      'ucode' => $administrator->ucode,
      'first_name' => $administrator->role,     
    ]);
    $administrator->profile()->create([
      'user_id' => $administrator->id,
      'ucode' => $administrator->ucode
    ]);
    $administrator->settings()->create([
      'user_id' => $administrator->id,
      'ucode' => $administrator->ucode
    ]);

    $role_translator = Role::where('name', 'Translator')->first();
    $translator = new User;
    $translator->ucode = 'ucodel'.mt_rand(1234567891, 9999999999);
    $translator->role_id = 2;
    $translator->role = 'Translator';
    $translator->email = 'translator@example.com';
    $translator->password = bcrypt('password');
    $translator->email_verified_at = now();
    $translator->save();
    $translator->roles()->attach($role_translator);
    $translator->profile()->create([
      'user_id' => $translator->id,
      'ucode' => $translator->ucode,
      'first_name' => $translator->role,	
    ]);
    $translator->profile()->create([
      'user_id' => $translator->id,
      'ucode' => $translator->ucode
    ]);
    $translator->settings()->create([
      'user_id' => $translator->id,
      'ucode' => $translator->ucode
    ]);

    $role_operations = Role::where('name', 'Ops')->first();
    $operations = new User;
    $operations->ucode = 'ucodel'.mt_rand(1234567891, 9999999999);
    $operations->role_id = 3;
    $operations->role = 'Ops';
    $operations->email = 'ops@example.com';
    $operations->password = bcrypt('password');
    $operations->email_verified_at = now();
    $operations->save();
    $operations->roles()->attach($role_operations);
    $operations->profile()->create([
      'user_id' => $operations->id,
      'ucode' => $operations->ucode,
      'first_name' => $operations->role,		
    ]);
    $operations->profile()->create([
      'user_id' => $operations->id,
      'ucode' => $operations->ucode
    ]);
    $operations->settings()->create([
      'user_id' => $operations->id,
      'ucode' => $operations->ucode
    ]);

    $role_quality_analyst = Role::where('name', 'QA')->first();
    $quality_analyst = new User;
    $quality_analyst->ucode = 'ucodel'.mt_rand(1234567891, 9999999999);
    $quality_analyst->role_id = 4;
    $quality_analyst->role = 'QA';
    $quality_analyst->email = 'qa@example.com';
    $quality_analyst->password = bcrypt('password');
    $quality_analyst->email_verified_at = now();
    $quality_analyst->save();
    $quality_analyst->roles()->attach($role_quality_analyst);
    $quality_analyst->profile()->create([
      'user_id' => $quality_analyst->id,
      'ucode' => $quality_analyst->ucode,
      'first_name' => $quality_analyst->role,		
    ]);
    $quality_analyst->profile()->create([
      'user_id' => $quality_analyst->id,
      'ucode' => $quality_analyst->ucode
    ]);
    $quality_analyst->settings()->create([
      'user_id' => $quality_analyst->id,
      'ucode' => $quality_analyst->ucode
    ]);


    $role_role_client = Role::where('name', 'Client')->first();
    $role_client = new User;
    $role_client->ucode = 'ucodel'.mt_rand(1234567891, 9999999999);
    $role_client->role_id = 5;
    $role_client->role = 'Client';
    $role_client->email = 'client@example.com';
    $role_client->password = bcrypt('password');
    $role_client->email_verified_at = now();
    $role_client->save();
    $role_client->roles()->attach($role_role_client);
    $role_client->profile()->create([
      'user_id' => $role_client->id,
      'ucode' => $role_client->ucode,
      'first_name' => $role_client->role,   
    ]);
    $role_client->profile()->create([
      'user_id' => $role_client->id,
      'ucode' => $role_client->ucode
    ]);
    $role_client->settings()->create([
      'user_id' => $role_client->id,
      'ucode' => $role_client->ucode
    ]);


    


    for($i = 6; $i <= 10; $i++){
      $role_translator = Role::where('name', 'Translator')->first();
      $translator = new User;
      $translator->ucode = 'ucodel'.mt_rand(1234567891, 9999999999);
      $translator->role_id = 2;
      $translator->role = 'Translator';
      $translator->email = 'translator'.$i.'@example.com';   
      $translator->password = bcrypt('password');
      $translator->email_verified_at = now();
      $translator->save();
      $translator->roles()->attach($role_translator);
      $translator->profile()->create([
        'user_id' => $translator->id,
        'ucode' => $translator->ucode,
        'first_name' => $translator->role.' '.$i        
      ]);
      $translator->profile()->create([
        'user_id' => $translator->id,
        'ucode' => $translator->ucode
      ]);
      $translator->settings()->create([
        'user_id' => $translator->id,
        'ucode' => $translator->ucode
      ]);
    }
  }
}
