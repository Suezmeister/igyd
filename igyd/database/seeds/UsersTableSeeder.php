<?php

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
        $users = $this->getUsers();
        
        foreach($users as $user){
            factory(App\User::class)->create([
                'name' => $user['name'],
                'email' => $user['email']
            ]);
        }
    }

    private function getUsers()
    {
        $shops = array(
            ['name' => 'Jason', 'email' => 'jason@mail.com'],
            ['name' => 'Jordan', 'email' => 'jordan@mail.com'],
            ['name' => 'Kyle', 'email' => 'kyle@mail.com'],
            ['name' => 'Kate', 'email' => 'kate@mail.com'],
            ['name' => 'Justin', 'email' => 'justin@mail.com'],
            ['name' => 'Nicole', 'email' => 'nicole@mail.com'],
            ['name' => 'Shania', 'email' => 'shania@mail.com'],
        );

        return $shops;
    }
}
