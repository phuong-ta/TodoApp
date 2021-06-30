<?php

namespace Database\Seeders;

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;;
use App\Models\User;
use App\Models\Task;
use App\Models\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Task::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            task::create([
                'name' => $faker->sentence,
                'company_id' => $faker->numberBetween($min = 1, $max = 5),
                'description' => $faker->text,
                'situation' => $faker->randomElement(['done', 'undone']),
            ]);
        }
        User::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->company,
                'company_id' => $faker->numberBetween($min = 1, $max = 5),
                'role' => $faker->randomElement(['admin', 'user']),
                'email' => $faker->freeEmail,
                'password'=>$faker->randomElement(['admin123', 'user123'])
            ]);
        }
        

        Company::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            company::create([
                'name' => $faker->company,
                'address' => $faker->address,
            ]);
        }
    }
}
