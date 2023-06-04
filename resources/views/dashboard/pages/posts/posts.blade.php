@extends('dashboard.starter.master')
@section('button')
<div class="overview-wrap">
                                    <a href="{{route('create')}}" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add service</a>
                                </div>
@endsection()
@section('header','Services')
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
                                                <th>Tittle</th>
                                                <th>Images</th>
                                                <th>Created at</th>
                                                <th colspan='2'>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @forelse($posts as $post)
                                           <tr>
                                                <td>{{$post->id}}</td>
                                                <td><textarea readonly rows='10' columns='40'>{{$post->description}}</textarea></td>
                                                <td>{{$post->title}}</td>
                                                <td><img src="{{asset($post->image)}}" width='120%'></td>
                                                <td class="process">{{$post->created_at}}</td>
                                                <td><a href="{{route('edit',$post->id)}}" class='btn btn-success zmdi zmdi-edit'></a></td>
                                                <td><a href="{{route('delete',$post->id)}}" class='btn btn-danger zmdi zmdi-delete'></a></td>
                                                </td>
                                            </tr>
                                          @empty

                                          @endforelse
                                        </tbody>
                                    </table>
                                </div>
@endsection()
