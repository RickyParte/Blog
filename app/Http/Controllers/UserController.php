<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\newblog;
use DateTime;
use DateTimeZone;

class UserController extends Controller
{
    //
    function addPost(Request $request)
    {
        $request->validate([
            "blogtitle"=>"required | min:5",
            "blogdescription"=>"required | min: 3"
        ]);

        $title=$request->blogtitle;
        $description=$request->blogdescription;
        $author=$request->session()->get('userId');
        $dt = new DateTime();
        $tz = new DateTimeZone('Asia/Kolkata'); // or whatever zone you're after

        $dt->setTimezone($tz);
        $createdate=$dt->format('Y-m-d H:i:s');

        $insertBlog=DB::insert("insert into newblogs (author_id, titleofpost, createddate, description) values (?, ?, ?, ?)", [$author, $title, $createdate, $description]);
        if($insertBlog)
        {
            return redirect('/admin/addblog')->with('message',"Blog Added Successfully...");
        }
        else
        {
            return redirect('admin/addblog')->with('error',"Blog Uploading Failed...");
        }

    }

    function retrievePostByUser(Request $request)
    {
        $user=$request->session()->get('userId');;
        $findPost=DB::select('select * from newblogs where author_id=? && isdeleted = ?', [$user,0]);
        return view("viewblog",['posts'=>$findPost]);
    }

    function retrievePostById($id,Request $request)
    {
        $user=$request->session()->get('userId');;
        $findPost=DB::select('select * from newblogs where author_id=? && isdeleted = ? && id=?', [$user,0,$id]);
        // return view("viewblog",['posts'=>$findPost]);
        return view("edit",["posts"=>$findPost]);
    }

    function updatePost($id,Request $request)
    {
        $request->validate([
            "blogtitle"=>"required | min:5",
            "blogdescription"=>"required | min: 3"
        ]);

        $title=$request->blogtitle;
        $description=$request->blogdescription;
        $author=$request->session()->get('userId');
        $dt = new DateTime();
        $tz = new DateTimeZone('Asia/Kolkata'); // or whatever zone you're after

        $dt->setTimezone($tz);
        $updatedate=$dt->format('Y-m-d H:i:s');

        $updateBlog=DB::update('update newblogs set titleofpost=?, description=?, updateddate=? where author_id = ? && id=?', [$title,$description,$updatedate,$author,$id]);
        if($updateBlog)
        {
            return redirect('/admin/addblog')->with('message',"Blog Updated Successfully...");
        }
        else
        {
            return redirect('admin/addblog')->with('error',"Blog Updating Failed...");
        }
    }

        function deletePost($id)
        {
            // return $id;
            // $author=$request->session()->get('userId');
            $dt = new DateTime();
            $tz = new DateTimeZone('Asia/Kolkata'); // or whatever zone you're after

            $dt->setTimezone($tz);
            $deletedate=$dt->format('Y-m-d H:i:s');
            $delete=DB::update('update newblogs set isdeleted=?, deleteddate=? where id=?', [1,$deletedate, $id]);
            if($delete)
            {
                return redirect('admin/viewblog');
            }
        }

        function userViewBlog()
        {
            $data=DB::select('select * from newblogs');
            return view("welcome",["posts"=>$data]);
        }

}
