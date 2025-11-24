<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Country;
use App\Models\Gender;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);


        Gender::factory()->create([ 'name' => 'Male']);
        Gender::factory()->create([ 'name' => 'Female']);

        Country::factory()->create([ 'name' => 'United States']);
        Country::factory()->create([ 'name' => 'Russia']);
        Country::factory()->create([ 'name' => 'USA']);
        Country::factory()->create([ 'name' => 'China']);
        Country::factory()->create([ 'name' => 'Kazakhstan']);
        Country::factory()->create([ 'name' => 'Japan']);
        Country::factory()->create([ 'name' => 'Germany']);

        Category::factory()->create(['name' => 'Technology']);
        Category::factory()->create(['name' => 'Horror']);
        Category::factory()->create(['name' => 'Fashion']);
        Category::factory()->create(['name' => 'Drama']);
        Category::factory()->create(['name' => 'Superhero']);
        Category::factory()->create(['name' => 'Sport']);
        Category::factory()->create(['name' => 'Thriller']);
        Category::factory()->create(['name' => 'Comedy']);







    }
}
