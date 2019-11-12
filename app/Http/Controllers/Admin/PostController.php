<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Notifications\AuthorPostApprovel;
use App\Notifications\NewPostNotify;
use App\Post;
use App\Subscriber;
use App\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' =>'required',
            'zip' => 'mimes:css,html,php,js,zip',
            'image' => 'mimes:jpeg,jpg,bmp,png',
            'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
            'live_demo' =>'required'

        ]);


         $zipfile = $request->file('zip');
        $slug = str_slug($request->title);
        if (isset($zipfile))
        {
            $currentDate = Carbon::now()->toDateString();
            $zipname = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $zipfile->getClientOriginalExtension();
            if (!file_exists('storage/uploads/zip'))
            {
                mkdir('storage/uploads/zip',0777,true);
            }
            $zipfile->move('storage/uploads/zip',$zipname);
        }else{
            $zipname = "default.zip";
        }


          $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());   
            $image_resize->resize(1600,1066);
            if (!file_exists('storage/uploads/post'))
            {
                mkdir('storage/uploads/post',0777,true);
            }
            //$image->move('storage/uploads/post',$imagename);
            $image_resize->save('storage/uploads/post/'.$imagename);
        }else{
            $imagename = "default.png";
        }
   
         $post = new Post();
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->image = $imagename;
        $post->zip = $zipname;
        $post->body = $request->body;
        $post->price = $request->price;
        $post->live_demo = $request->live_demo;
        if(isset($request->status))
            {
                $post->status =true;
            }else
            {
                $post->status = false;
            }
        $post->is_approved = true;
        $post->save();
        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);
        $subscribers = Subscriber::all();
        foreach ($subscribers as $subscriber)
        {
            Notification::route('mail',$subscriber->email)
                ->notify(new NewPostNotify($post));
        }
        Toastr::success('Post Successfully Save:)','Success');
        return redirect()->route('admin.post.index');
      //  return $request;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return  view('admin.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit',compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
         $this->validate($request,[
            'title' =>'required',
           // 'zip' => 'zip',
            'image' => 'image',
            'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
             'live_demo' =>'required'
        ]);


         $zipfile = $request->file('zip');
        $slug = str_slug($request->title);
        if (isset($zipfile))
        {
            $currentDate = Carbon::now()->toDateString();
            $zipname = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $zipfile->getClientOriginalExtension();
            if (!file_exists('storage/uploads/zip'))
            {
                mkdir('storage/uploads/zip',0777,true);
            }
            unlink('storage/uploads/zip/'.$post->zip);
            $zipfile->move('storage/uploads/zip',$zipname);
        }else{
            $zipname = $post->zip;
        }


          $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());   
            $image_resize->resize(1600,1066);
            if (!file_exists('storage/uploads/post'))
            {
                mkdir('storage/uploads/post',0777,true);
            }
            unlink('storage/uploads/post/'.$post->image);
            $image_resize->save('storage/uploads/post/'.$imagename);
        }else{
            $imagename = $post->image;
        }
   
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->image = $imagename;
        $post->zip = $zipname;
        $post->body = $request->body;
        $post->price = $request->price;
        $post->live_demo = $request->live_demo;
        if(isset($request->status))
            {
                $post->status =true;
            }else
            {
                $post->status = false;
            }
        $post->is_approved = true;
        $post->save();
        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);



        Toastr::success('Post Successfully Updated:)','Success');
        return redirect()->route('admin.post.index');
    }

    public  function pending()
    {
        $posts = Post::where('is_approved',false)->latest()->get();
        return view('admin.post.panding',compact('posts'));
    }

    public function approvel($id)
    {
        $post = Post::find($id);
        if($post->is_approved ==  false)
        {
            $post->is_approved = true;
            $post->save();
            $post->user->notify(new AuthorPostApprovel($post));
            $subscribers = Subscriber::all();
            foreach ($subscribers as $subscriber)
            {
                Notification::route('mail',$subscriber->email)
                    ->notify(new NewPostNotify($post));
            }
            Toastr::success('This Post Successfully Approved','Success');
        }else{
            Toastr::if('This Post Allready Approved','Info');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // Delete for image coding
       if(Storage::disk('public')->exists('uploads/post/'.$post->image))
       {
           Storage::disk('public')->delete('uploads/post/'.$post->image);
       }
    // Delete code for zipfile
       if(Storage::disk('public')->exists('uploads/zip/'.$post->zip))
       {
           Storage::disk('public')->delete('uploads/zip/'.$post->zip);
       }
        $post->categories()->detach();
        $post->tags()->detach();
        $post->delete();
        Toastr::success('Post Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
