@extends('dashboard.starter.master')
@section('button')
<div class="overview-wrap">
                                    <a href="{{route('pproducts')}}" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>products</a>
</div>
@endsection()
@section('header','Update')
@section('content')
@include('flash_message')

                            <form action="{{route('product.update',$products[0]->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @forelse($products as $product)
                                    <label>Product name</label>
                                    <input type='text' class="form-control" name="name" value='{{$product->name}}' placeholder="Product name" required>
                                    <label>Price</label>
                                    <input type='number' class="form-control" name="price" value='{{$product->price}}' placeholder="Price" required>
                                    <label>Description</label>
                                    <textarea type='text' name="description" cols="30" rows="30" class="form-control" name="description" placeholder="Description" required>{{$product->description}}</textarea>
                                <div class="form-group">
                                    <label for="image">Upload image</label>
                                    <input type="file" class="form-control" name='images' required>
                                </div>
                                <button class="btn btn-success" type="submit">Update</button>

                            </form>

                            @empty

@endforelse
@endsection()