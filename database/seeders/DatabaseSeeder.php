<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $nbUtilisateur = 30;

        User::factory($nbUtilisateur)
        ->create();

        
        foreach(User::all() as $user):
            DB::table('settings')->insert([
                'user_id' => $user->id,
                'pseudo' => fake()->name(),
                'avatar' => 'Avatar/avatar' . rand(1,11) . '.png',
                'country' => fake()->country(),
                'city' => fake()->city(),
            ]);
            
            $randomInt = mt_rand(2,6);
            for($i = 0; $i < $randomInt; $i++):
                DB::table('user_follower')->insert([
                    'follower_id' => $user->id,
                    'following_id' => mt_rand(1,30),
                ]);
            endfor;

            $randomInt_img = mt_rand(3,7);
            for($i = 0; $i < $randomInt_img; $i++):
                DB::table('images')->insert([
                    'user_id' => $user->id,
                    'path' => 'Images/' . rand(1,61) . '.jpg',
                    'like' => mt_rand(2,560),
                    'description' => fake()->sentence(rand(12,22)),
                    'status' => mt_rand(1,2),
                    'created_at' => fake()->dateTimeBetween('-20 days', now())
                ]);
            endfor;
        endforeach;


        foreach(Image::all() as $image):
            $randomIntComment = mt_rand(0,6);
            for($i = 0; $i < $randomIntComment; $i++):
                DB::table('comments')->insert([
                    'comment' => fake()->sentence(rand(2,12)),
                    'image_id' => $image->id,
                    'user_id' => mt_rand(1,30),
                    'created_at' => fake()->dateTimeBetween('-20 days', now())
                ]);
            endfor;

            for($i = 0; $i < mt_rand(8,15); $i++):
                DB::table('likes')->insert([
                    'user_id' => mt_rand(1,30),
                    'image_id' => $image->id
                ]);
            endfor;
        endforeach;

        
        // \App\Models\User::factory()->create([
        //     'name' => 'Quentin',
        //     'email' => 'q_cozic@hotmail.fr',
        // ]);
    }
}
