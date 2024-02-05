<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Horse;
use App\Models\Staff;
use App\Models\VetsSupplier;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->delete();

        User::create([
            'name' => 'Amna Rasheed',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'Admin',
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'Stable Manager',
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'Customer',
        ]);
        User::factory(42)->create();

        Horse::create([
            'name' => 'Valentina',
            'age' => 8,
            'breed' => 'Marwari',
            'training_status' => 'Intermediate',
            'medical_history' => 'None',
        ]);
        Horse::create([
            'name' => 'Gemini',
            'age' => 4,
            'breed' => 'Arabian',
            'training_status' => 'Beginner',
            'medical_history' => 'None',
        ]);
        Horse::create([
            'name' => 'Tempest',
            'age' => 12,
            'breed' => 'Andalusian',
            'training_status' => 'Advanced',
            'medical_history' => 'None',
        ]);
        Horse::create([
            'name' => 'Beauty',
            'age' => 8,
            'breed' => 'Friesian',
            'training_status' => 'Intermediate',
            'medical_history' => 'None',
        ]);
        Horse::create([
            'name' => 'Henry',
            'age' => 6,
            'breed' => 'Pony',
            'training_status' => 'Beginner',
            'medical_history' => 'None',
        ]);
        Horse::create([
            'name' => 'Angel',
            'age' => 5,
            'breed' => 'Arabian',
            'training_status' => 'Beginner',
            'medical_history' => 'None',
        ]);
        Horse::create([
            'name' => 'Magic',
            'age' => 2,
            'breed' => 'Pony',
            'training_status' => 'Beginner',
            'medical_history' => 'None',
        ]);
        Horse::create([
            'name' => 'Jenny',
            'age' => 11,
            'breed' => 'Pony',  
            'training_status' => 'Advanced',
            'medical_history' => 'None',
        ]);
        Horse::create([
            'name' => 'Kane',
            'age' => 13,
            'breed' => 'Marwari',
            'training_status' => 'Advanced',
            'medical_history' => 'None',
        ]);

        Staff::factory(10)->create();
        
        Article::create([
            'title' => 'Correct Riding Techniques',
            'content' => 'A good riding school horse tolerates mistakes from an inexperienced rider. The downside is that as well as ignoring the errors, they also start to ignore a correct aid, which often results in laziness.',
            'link' => 'https://www.horseandrideruk.com/expert-advice/articles/correct-riding-techniques/',
        ]);
        Article::create([
            'title' => 'Horse Care Guidelines',
            'content' => 'Your horse depends on your love, care and commitment, which you can show through grooming, petting, riding and the occasional treat. With good care, your horse can live 35 years or more.',
            'link' => 'https://www.humanesociety.org/resources/horse-care-guidelines',
        ]);
        Article::create([
            
            'title' => 'Horse Riding Tips',
            'content' => 'Horse riding is a great way to get fit and enjoy the outdoors. It is also a great way to bond with your horse. Here are some tips to help you get started.',
            'link' => 'https://www.bhs.org.uk/advice-and-information',
        ]);
        Article::create([
            'title' => 'How to groom your horse',
            'content' => 'Grooming your horse is an essential part of horse care. It helps to keep your horse clean and healthy. It also helps to build a bond between you and your horse. Here are some tips on how to groom your horse.',
            'link' => 'https://www.thesprucepets.com/grooming-your-horse-1886053',
        ]);
        Article::create([
            'title' => 'Weightloss for Horses',
            'content' => 'Being overweight is one of the most serious, preventable problems a horse can have. As well as the increased risk of arthritis, heart disease and lung problems, it is directly linked to laminitis and hyperlipaemia.',
            'link' => 'https://www.horseandrideruk.com/expert-advice/articles/a-weighty-problem/',
        ]);
        Article::create([
            'title' => 'Horses and Fireworks',
            'content' => 'Firework season is rapidly approaching but what can you do to make it a happy one for your horse?Horses and fireworks definitely do not make the best combination (the unusual, loud noises and flashing lights can upset even the quietest of equines).',
            'link' => 'https://www.horseandrideruk.com/expert-advice/articles/horses-and-fireworks/',
        ]);


        //Add 3 suppliers to the database
        VetsSupplier::create([
            'name' => 'Sanath',
            'type' => 'supplier',
            'phone_number' => '077-123-4567',
            'email' => 'supplier1@gmail.com',
            'next_visit_date' => now()->addDays(30),
        ]);
        VetsSupplier::create([
            'name' => 'Peter',
            'type' => 'supplier',
            'phone_number' => '076-123-4567',
            'email' => 'supplier2@smail.com',
            'next_visit_date' => now()->addDays(10),
        ]);
        VetsSupplier::create([
            'name' => 'Mahesh',
            'type' => 'supplier',
            'phone_number' => '077-123-4555',
            'email' => 'supplier3@gmail.com',
            'next_visit_date' => now()->addDays(20),
        ]);
        VetsSupplier::create([
            'name' => 'Vijay',
            'type' => 'vet',
            'phone_number' => '077-123-4127',
            'email' => 'vetclinic@gmail.com',
            'next_visit_date' => now()->addDays(30),
        ]);
        VetsSupplier::create([
            'name' => 'Perera',
            'type' => 'vet',
            'phone_number' => '076-116-4567',
            'email' => 'petsvets@gmail.com',
            'next_visit_date' => now()->addDays(25),
        ]);
    }
}