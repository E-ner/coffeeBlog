@extends('dashboard.starter.master')
@section('button')
<div class="overview-wrap">
                                    <a href="{{route('posts')}}" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>posts</a>
</div>
@endsection()
@section('header','Update')
@section('content')
@include('flash_message')

                            <form action="{{route('update',$posts[0]->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @forelse($posts as $post)
                                <label>Tittle</label>
                                <input type='text' class="form-control" name="title" value='{{$post->title}}' placeholder="Title" required>
                                    <label>Description</label>
                                    <textarea type='text' name="description" cols="30" rows="30" class="form-control" name="description" placeholder="Description" required>{{$post->description}}</textarea>
                                <div class="form-group">
                                    <label for="image">Upload image</label>
                                    <input type="file" class="form-control" name='images' required>
                                </div>
                                <button class="btn btn-success" type="submit">Update</button>

                            </form>

                            @empty

@endforelse
@endsection()