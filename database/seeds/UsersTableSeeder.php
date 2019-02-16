<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Maruf',
            'mobile_number' => '01630891595',
            'facebook_profile_id' => 'anmoneLife',
            'linkedin_profile_id' => 'maruf-alom',
            'designation' => 'Software Developer',
            'work_at' => 'EnerGaia Co Ltd',
            'mailing_address' => 'TA 96, Boishakhi Swarani, Middle Badda',
            'user_name' => 'maruf',
            'email' => 'desk.maruf@gmail.com',
            'password'=> bcrypt('test@test')
        ]);
    }
}
