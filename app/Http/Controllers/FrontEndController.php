<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;



use Illuminate\Http\Request;

class FrontEndController extends Controller
{
   public function home(){
     $posts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->take(5)->get();
     $firstposts = $posts->splice(0, 2);
     $middleposts = $posts->splice(0, 1);
     $lastposts = $posts->splice(0,1);
     $footerposts = Post::with('category', 'user')->inRandomOrder()->limit(4)->get();
     $firstfooter = $footerposts->splice(0, 2);
     $middlefooter = $footerposts->splice(0, 2);
     $lastfooter = $footerposts->splice(0, 1);

     $recentpost =  Post::with('category', 'user')->orderBy('created_at', 'DESC')->paginate(9);

     return view('website.home', compact(['posts','firstposts','middleposts','lastposts','footerposts',
      'recentpost', 'firstfooter','middlefooter','lastfooter']));
   }
    
     public function about(){
        return view('website.about');
   }
    
     public function category($slug){
        $category = Category::where('slug', $slug)->first();
        if($category){
            $posts =Post::where('category_id', $category->id)->paginate(9);
            return view('website.category',compact(['category','posts']) );
        } else {
            return redirect()->route('website');
        }
        
    }
   
     public function contact(){
        return view('website.contact');
    }
    
     public function post($slug){
        $post = Post::with('category', 'user')->where('slug', $slug)->first();
        $posts = Post::with('category', 'user')->inRandomOrder()->limit(3)->get();
        //dd("gfd");
        $categories =Category::with('posts')->get();
        //dd($categories);
        $tags =Tag::all();


        if($post){
        $tags =Category::all();
            return view('website.post', compact('post','posts','categories','tags'));
        } else {
            return redirect('/');
        }
     
    }
}
