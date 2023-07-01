<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    Users,
    Contact
};
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            'name'=>'akash',
            'email'=>'akash@gmail.com',
            'teacher_id'=>10,
            'password'=>bcrypt('password')
        ]);
        // Contact::create([
        //     'user_id'=>1,
        //     'phone'=>'885151655',
        //     'address'=>'address test'
        // ]);
    }
}
