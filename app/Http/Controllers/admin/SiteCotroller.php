<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comments;
class SiteCotroller extends Controller
{
    public function home()
    {
        $products= $this->getProducts();
        $services= $this->getServices();
        return view('front-end.index',compact('products','services'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function menu()
    {
        $products= $this->getProducts();

        return view('pages.menu',compact('products'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function services()
    {
        $services= $this->getServices();
        return view('pages.services',compact('services'));
    }

    public function testimony()
    {
        return view('pages.testimonial');
    }

    private function getProducts()

    {
        return \DB::table('products')->select('products.*')->get();
    }

    private function getServices()
    {
        return \DB::table('posts')->select('posts.*')->get();
    }

    public function comment(Request $request)
    {
        $attr= $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'email|required',
            "description" => 'required|string',
        ]);
        try {
            comments::create([
                'name' => $request->name,
                "description" => $request->description,
                'subject' =>$request->subject,
                'email' =>$request->email
            ]);

            return to_route('index')->with('message','Operation successfully');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getcomments()
    {
        $comments = $this->tcomment();
        return view('dashboard.pages.comments',compact('comments'));
    }


    private function tcomment()
    {
        return \DB::table('comments')->select('comments.*')->get();
    }

}
