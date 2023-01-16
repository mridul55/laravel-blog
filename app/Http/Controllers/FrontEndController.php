<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use App\Models\Contact;





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
        $user = User::first();
        return view('website.about',compact('user'));
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
    public function tag($slug){
        $tag = Tag::where('slug', $slug)->first();
        
        if($tag){
            $posts = $tag->posts()->orderBy('created_at','desc')->paginate(9);
            return view('website.tag',compact(['tag','posts']) );
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

        $relatedPosts = Post::orderBy('category_id', 'desc')->inRandomOrder()->take(4)->get();
        $firstRelatedPost = $relatedPosts->splice(0, 1);
        $firstRelatedPosts2 = $relatedPosts->splice(0, 2);
        $lastRelatedPost = $relatedPosts->splice(0, 1);
        $categories =Category::with('posts')->get();
        //dd($categories);
        $tags =Tag::all();
        if($post){
        $tags =Category::all();
        $firstRelatedPosts2 = $relatedPosts->splice(0, 2);
        return view('website.post', compact('post','posts','categories','tags','firstRelatedPost','firstRelatedPosts2','lastRelatedPost'));
        } else {
            return redirect('/');
        }
     
    }
    // public function contactMessage(){

    //     return view('website.contactMessage');
    // }
    public function contactMessageStore(Request $request){
            $this->validate($request,[
            'name' => 'required', 
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
         ]);
        
        $data =$request->all();
        $setting = new Contact();
        $setting->create($data);
        Session::flash('message_sent', 'Thanks for your message');
        return redirect()->back();
    }
}
