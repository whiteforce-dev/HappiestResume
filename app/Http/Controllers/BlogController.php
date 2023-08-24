<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogsComment;
use App\Models\TestimonialsModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function blog(){
        $blog = Blog::where('blogs_for','happiest')->where('status',1)->orderBy('id', 'desc')->get();
       
        return view('blog/blogpage')->with(compact('blog'));
    }

    public function blogmaster(){
        $blog = Blog::get();
        
        return view('blog/blogMaster')->with(compact('blog'));
    }

    public function blogAdd(){
        return view('blog/blogAdd');
    }

    public function blogStore(Request $request){
      $blog = new Blog();
      $blog->title = $request->title;
      $blog->description = $request->tem_desc;
      $blog->last_line = $request->end_line;
      $blog->blogs_for = $request->blogs_for;
      $blog->author_name = $request->author;
      $blog->publish_date = $request->publish_date;
      $blog->status = $request->is_active;

      $type = new CommonController();
      $extention = $type->imageType();

      if ($request->hasFile('image') and in_array($request->image->extension(), $extention)) {

          $image = $request->image;
          $filename = time() . '.' . $image->getClientOriginalName();
          $image->move('backend/images/blogs/', $filename);
          $uploadImage = 'backend/images/blogs/' . $filename;
        
          $blog->image = $uploadImage;
          
      }
     else{
        $blog->image = ''; 
     }
     
      $blog->save();
      return redirect()->back()->with('success', 'Item Has Been Added in How It Works Section !!');
    }


   
    public function readMoreBlogs($id){
        $blog = Blog::where('id',$id)->first();
        $comment = BlogsComment::where('blog_id',$id)->where('status',1)->get();
        $comment_count = BlogsComment::where('blog_id',$id)->where('status',1)->count();

        return view('blog/readMoreBlog')->with(compact('blog','comment','comment_count'));
      }

      public function addComment(Request $request,$id){
        $comment = new BlogsComment();
        $comment->blog_id = $id;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->website = $request->website;
        $comment->comment = $request->comment;
        $comment->emoji = $request->emoji;
        $comment->save();
     return redirect()->back()->withErrors(['You comment will be processed within 24 hours. Please check after some time. Thank You For Your Comment']);
      }  

    public function commentMaster(){
        $comment = BlogsComment::orderBy('id', 'DESC')->get();

        return view('blog/commentMaster')->with(compact('comment'));
    }

    public function commentApprove(Request $request,$id){
      $comment = BlogsComment::find($id);
      $comment->status = 1;
      $comment->save();
      return back();
    }

    public function commentDecline(Request $request,$id){
        $comment = BlogsComment::find($id);
        $comment->status = 0;
        $comment->save();
        return back();
    }

    public function commentDelete(Request $request,$id){
        $comment = BlogsComment::find($id);
        $comment->delete();
        return back();
    }

    public function EditBlogs($id){
     $blogs = Blog::find($id);
     return view('blog.editBlog', compact('blogs'));
    }

    public function UpdateBlogs(Request $request, $blog){
      
        $blog = Blog::find($blog);
        $blog->title = $request->title;
        $blog->description = $request->tem_desc;
        $blog->last_line = $request->end_line;
        $blog->blogs_for = $request->blogs_for;
        $blog->author_name = $request->author;
        $blog->publish_date = $request->publish_date;
        $blog->status = $request->is_active;
  
        $type = new CommonController();
        $extention = $type->imageType();
  
        if ($request->hasFile('image') and in_array($request->image->extension(), $extention)) {
  
            $image = $request->image;
            $filename = time() . '.' . $image->getClientOriginalName();
            $image->move('backend/images/blogs/', $filename);
            $uploadImage = 'backend/images/blogs/' . $filename;
          
            $blog->image = $uploadImage;
            
        }
       else{
          $blog->image = ''; 
       }
       
        $blog->save();
        return redirect('blogMaster')->with('success', 'Item Has Been Updated Successfully of How It Works Section !!');
   
       }

       public function DeleteBlogs($id){
        $blog = Blog::find($id)->delete();
        return back();
        // $blog->delete();

       }


}
