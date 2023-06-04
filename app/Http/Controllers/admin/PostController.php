<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\posts;

class PostController extends Controller
{
    public function posts()
    {
        $posts= $this->getPosts();
        return view('dashboard.pages.posts.posts',compact('posts'));
    }

    public function create()
    {
        return view('dashboard.pages.create');
    }
    
    public function store(Request $request)
    {
        $attr= $request->validate([
            'title'=>'required|string|max:255',
            "description" => 'required|string',
            'images' => 'mimes:jpeg,jpg,png,gif|required|max:500000',
        ]);
        try {
            $image= $request->file('images')->store('storage','public');
            move_uploaded_file($_FILES["images"]["tmp_name"],$image);
            posts::create([
                'title' => $request->title,
                "description" => $request->description,
                'image' => isset($image) ? $image: 'dummy.jpg',
            ]);

            return to_route('posts')->with('message','Operation successfully');

        } catch (\Throwable $th) {
            throw $th;
        }
    }
    private function getPosts()
{
   return \DB::table('posts')
          ->select('posts.*')
          ->get();
}

public function delete($id)
{
    $post= posts::findOrfail($id);
    $post->delete();
    return to_route('posts')->with('message','Operation successfully');
}
    public function edit($id)

    {
        $posts= \DB::table('posts')->select('posts.*')->where('id',$id)->get();
        return view('dashboard.pages.edit',compact('posts'));
    }

    public function update(Request $request,$id)

    {
        $attr= $request->validate([
            'title'=>'required|string|max:255',
            "description" => 'required|string',
            'image' => 'mimes:jpeg,jpg,png,gif|max:50000',
        ]);

        try {
            
            $post= posts::findOrfail($id);

            if ($request->hasFile('image')) {
                $image= $request->file('image')->store('storage','public');
                if(file_exists($image)) delete($image); move_uploaded_file($_FILES["image"]["tmp_name"],$image);
            }else{
                $image= $post->image;
            }

            $post->update([
                'title' => $request->title,
                "description" => $request->description,
                'image' => isset($image) ? $image: 'dummy.jpg',
            ]);

            return to_route('posts')->with('message','Operation successfully');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
