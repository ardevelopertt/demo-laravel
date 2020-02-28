<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slim;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Session;
use Illuminate\Support\Facades\Auth;
use App\UserImage;

class PostController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*hohle max 10 posts */
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        /*upgeloadete bild für view: 'posts.index' verfügbar machen*/
        $user_id = Auth::user()->id;
        $userimage = UserImage::where('user_id', '=' , $user_id)->get()->last();

        return view('intern.home', compact('posts', 'userimage'));
 
    }
 
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /* serverseitige validation post erstellen */
        $this->validate($request, array(
                'title' => 'required',
                'body'  => 'required'
            ));

    
        $user = Auth::user();
        $images = Slim::getImages();

        /* wenn post ein bild enthält */
      if(count($images) > 0) {

        $image = $images[0];
        $name = $image['input']['name'];
        $name =   time() . $name   ;

        //dd($name);

        $data = $image['output']['data'];
        $file = Slim::saveFile($data, $name, 'img', false);
        $post = new Post;

        $post->user_id = $user->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->filename =   $name;

        $post->save();

        /* wenn post kein bild enthält */
      }else {

        $post = new Post;

        $post->user_id = $user->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->filename = 'noImage';

        $post->save();

     }

    Session::flash('success', 'Post successfully shared.');

        return redirect('home');
    }

   
}
