<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class StudInsertController extends Controller
{
    public function insertform()
    {
        return view('contact');
    }

    public function insert(Request $request)
    {
        $id= 1;
        $name = $request->input('fullname');
        $phone = $request->input('phone');
        $mail = $request->input('mail');
        $message = $request->input('message');
        $textMessage = "request posted";
        DB::insert('insert into contact (name,phoneNumber,mail,message) values(?,?,?,?)', [$name,$phone,$mail,$message]);
        return view('loginSucces')->with('textMessage',$textMessage );
    }

    public function insertIntoNews(Request $request)
    {

        $user = User::find(Auth::id());
        $eventName = $request->input('eventName');
        $text = $request->input('text');
        $shortText = $request->input('shortText');
        $srcImage = $request->input('srcImage');
        $time = $request->input('date');
        $textMessage = "request posted";
        DB::insert('insert into news (AuthorName,name,text,shortText,srcImage,created_at,updated_at) values(?,?,?,?,?,?,?)', [$user->name,$eventName,$text,$shortText,'pic/'.$srcImage,$time,$time]);
        return view('loginSucces')->with('textMessage',$textMessage );
    }
    public function insertIntoDiscussion(Request $request,$id)
    {

        $user = User::find(Auth::id());
        $message = $request->input('message');
        $postImage = $request->input('srcImage');
        DB::insert('insert into discussion (AuthorName,Message,postImage,underTopicId) values(?,?,?,?)', [$user->name,$message,'pic/'.$postImage,$id]);
        return redirect('/forum');

    }
    public function createNewTopic(Request $request)
    {
        $user = User::find(Auth::id());
        $categoryId = $request->input('sel1');
        $theme = $request->input('theme');
        $fullname = $request->input('fullname');
        $srcImage = $request->input('srcImage');
        if($categoryId == '1 - Solutions')
        {
            $categoryId =1;
        }
        else if($categoryId == '2 - Projects')
        {
            $categoryId =2;
        }
        else if($categoryId == '3 - Event')
        {
            $categoryId =3;
        }
        else if($categoryId == '4 - Discussion')
        {
            $categoryId =4;
        }

        DB::insert('insert into undertopics (Name,AuthorName,theme,postImage,categoryId) values(?,?,?,?,?)', [$fullname,$user->name,$theme,'pic/'.$srcImage,$categoryId]);
        return redirect('/forum');
    }
}
