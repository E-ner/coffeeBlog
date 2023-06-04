@extends('dashboard.starter.master')
@section('button')
<div class="overview-wrap">
                                    <a href="{{route('pproducts')}}" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>home</a>
</div>
@endsection()
@section('header','Services')
@section('content')
@include('flash_message')

                            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">

                            @csrf
                                    <label>Name</label>
                                    <input type='text' class="form-control" name="name" placeholder="Product name" required>
                                    <label>Price</label>
                                    <input type='number' class="form-control" name="price" placeholder="Price" required>
                                    <label>Description</label>
                                    <textarea type='text' name="description" cols="30" rows="30" class="form-control" name="description" placeholder="Description" required></textarea>
                                <div class="form-group">
                                    <label for="image">Upload image</label>
                                    <input type="file" class="form-control" name='images' required>
                                </div>
                                <button class="btn btn-success" type="submit">Create Product</button>

                            </form>
@endsection()