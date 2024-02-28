<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Faker\Factory;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        // $user = User::factory()->create();
        // $user->phone()->create([
        //     'phone' => '066240404',
        // ]);
        // $users = User::find(2);
        // return $users->phone;
        // foreach($phones as $phone){
            
        // }
        // $user = new User;
        // $user->name = fake()->name();
        // $user->email = fake()->email();
        // $user->password = fake()->password();
        // $user->save();
        // $post = new Post;
        // $post->title = fake()->title();
        // $post->body = fake()->text(50);
        // $user->posts()->save($post);
        $posts = Post::all();
        return view('relation.index',['posts'=>$posts]);
    }
}
