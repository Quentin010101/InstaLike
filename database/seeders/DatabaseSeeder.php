<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
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

        //Tag
        $arr = ['nature', 'beauty', 'food', 'art', 'technology', 'hobby', 'history', 'sport', 'science', 'funny', 'pets', 'tv', 'gaming', 'fashion'];
        for($i = 0; $i < count($arr); $i++):
        Tag::create([
            'tag' => $arr[$i]
        ]);
        endfor;
        
        $arrPrivacy=['public', 'private'];
        foreach(User::all() as $user):
            DB::table('settings')->insert([
                'user_id' => $user->id,
                'pseudo' => fake()->name(),
                'avatar' => 'Avatar/avatar' . rand(1,11) . '.png',
                'country' => fake()->country(),
                'city' => fake()->city(),
                'privacy' => $arrPrivacy[rand(0,1)],
                'description' => fake()->sentence(rand(23,56))
            ]);
            
            $randomInt = mt_rand(6,9);
            for($i = 0; $i < $randomInt; $i++):
                DB::table('user_follower')->insert([
                    'follower_id' => $user->id,
                    'following_id' => mt_rand(1,$nbUtilisateur),
                ]);
            endfor;
            $randomInt2 = mt_rand(2,3);
            for($i = 0; $i < $randomInt2; $i++):
                DB::table('user_friends')->insert([
                    'user_id' => $user->id,
                    'friend_id' => mt_rand(1, $nbUtilisateur),
                ]);
            endfor;



            $randomInt_img = mt_rand(3,7);
            for($i = 0; $i < $randomInt_img; $i++):
                $im = DB::table('images')->insert([
                    'user_id' => $user->id,
                    'path' => 'Images/' . rand(1,92) . '.jpg',
                    'like' => mt_rand(2,560),
                    'description' => fake()->sentence(rand(12,22)),
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

            $randomInt3 = mt_rand(2,5);
            for($i = 0; $i < $randomInt3; $i++):
                DB::table('image_tag')->insert([
                    'image_id' => $image->id,
                    'tag_id' => mt_rand(1, count($arr)),
                ]);
            endfor;
        endforeach;

        
        // \App\Models\User::factory()->create([
        //     'name' => 'Quentin',
        //     'email' => 'q_cozic@hotmail.fr',
        // ]);
    }
}
