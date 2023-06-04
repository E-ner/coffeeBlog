@extends('dashboard.starter.master')
@section('button')
<div class="overview-wrap">
                                    <a href="{{route('product.create')}}" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add product</a>
                                </div>
@endsection()
@section('header','Products')
@section('content')
 <div class="row m-t-30">
                            <div class="col-md-12">
                            @include('flash_message')

                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Description</th>
                                                <th>Product name</th>
                                                <th>Images</th>
                                                <th>Price</th>
                                                <th>Created at</th>
                                                <th colspan='2'>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @forelse($products as $product)
                                           <tr>
                                                <td>{{$product->id}}</td>
                                                <td><textarea rows='10' readonly columns='40'>{{$product->description}}</textarea></td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->price.'frw'}}</td>
                                                <td><img src="{{asset($product->image)}}" width='120%'></td>
                                                <td class="process">{{$product->created_at}}</td>
                                                <td><a href="{{route('product.edit',$product->id)}}" class="zmdi zmdi-edit"></a></td>
                                                <td><a href="{{route('product.delete',$product->id)}}" class="zmdi zmdi-delete"></a></td>
                                                </td>
                                            </tr>
                                          @empty

                                          @endforelse
                                        </tbody>
                                    </table>
                                </div>
@endsection()
