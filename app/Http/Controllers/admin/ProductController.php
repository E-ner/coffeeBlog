<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $products= $this->getProducts();
        return view('dashboard.pages.products.products',compact('products'));
    }

    public function createProducts()
    {
        return view('dashboard.pages.products.inc.create');
    }
    
    public function storeProducts(Request $request)
    {
        $attr= $request->validate([
            'name'=>'required|string|max:255',
            "description" => 'required|string',
            'images' => 'mimes:jpeg,jpg,png,gif|required|max:500000',
            'price' =>'integer|required'
        ]);
        try {
            $image= $request->file('images')->store('storage','public');
            move_uploaded_file($_FILES["images"]["tmp_name"],$image);
            products::create([
                'name' => $request->name,
                "description" => $request->description,
                'image' => isset($image) ? $image: 'dummy.jpg',
                'price' =>$request->price,
                'ratings' =>0
            ]);

            return to_route('pproducts')->with('message','Operation successfully');

        } catch (\Throwable $th) {
            throw $th;
        }
    }
    private function getProducts()
{
   return \DB::table('products')
          ->select('products.*')
          ->get();
}

public function deleteProducts($id)
{
    $post= products::findOrfail($id);
    $post->delete();
    return to_route('pproducts')->with('message','Operation successfully');
}
    public function editProducts($id)

    {
        $products= \DB::table('products')->select('products.*')->where('id',$id)->get();
        return view('dashboard.pages.products.inc.edit',compact('products'));
    }

    public function update(Request $request,$id)

    {
        $attr= $request->validate([
            'name'=>'required|string|max:255',
            "description" => 'required|string',
            'image' => 'mimes:jpeg,jpg,png,gif|max:50000',
            'price' =>'integer|required'
        ]);

        try {
            
            $post= products::findOrfail($id);

            if ($request->hasFile('image')) {
                $image= $request->file('image')->store('storage','public');
                if(file_exists($image)) delete($image); move_uploaded_file($_FILES["image"]["tmp_name"],$image);
            }else{
                $image= $post->image;
            }

            $post->update([
                'name' => $request->name,
                "description" => $request->description,
                'image' => isset($image) ? $image: 'dummy.jpg',
                'price' => $request->price
            ]);

            return to_route('products')->with('message','Operation successfully');

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    private function getRatings()
    {

    }
}
