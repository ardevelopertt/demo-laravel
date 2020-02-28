<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Slim;
use App\UserImage;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        /*max. 5 posts vom eingeloggten user hohlen*/
        $user_id = Auth::user()->id;
        $posts = Post::where('user_id', '=' ,  $user_id)->orderBy('id', 'desc')->paginate(5); ;

        /*upgeloadete bild für view: 'user.index' verfügbar machen*/
        $userimage = UserImage::where('user_id', '=' , $user_id)->get()->last();
 
        return view('intern.user.index', compact('posts', 'userimage'));
 
    }

    public function edit()
    {
        return view('intern.user.edit');
    }

    public function upload(Request $request)
    {

        /* hohle mir das bild über slim und speichere es im public/img ordner */
        $images = Slim::getImages();
        $image = $images[0];
        $name = $image['input']['name'];
        $name =   time() . $name   ;

        //dd($name);

        $data = $image['output']['data'];
        $file = Slim::saveFile($data, $name, 'img', false);

       
   
        $user_id = Auth::user()->id;
        $userimage = UserImage::where('user_id', '=' , $user_id)->get()->first();
  
        $user = Auth::user();
        $userimage = new UserImage;
        $userimage->user_id = $request->user()->id;
        $userimage->filename =   $name;
        $userimage->save();  




        // if ($userimage) {
        // /* vorhandene bild vom user im publich/img ordner löschen */    
        //     $image_path = public_path().'/img/'.$userimage->first()->filename;
        //    // dd($image_path);
        //     unlink($image_path);

        // /* vorhandene bild durch neue bild ersetzen */   
        //     $userimage->first()->filename;
        //     $userimage->filename =   $name;
        //     $userimage->save();  

    
        // /* falls noch kein bild vorhanden, neue eintrag in DB */
        //  }else {
        //   $user = Auth::user();
        //   $userimage = new UserImage;
        //   $userimage->user_id = $request->user()->id;
        //   $userimage->filename =   $name;
        //   $userimage->save();  

        //  }

        return redirect('myprofile')->with('success', 'Image successfully uploadet.');
    }


}
