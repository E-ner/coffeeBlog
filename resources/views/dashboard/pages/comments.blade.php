@extends('dashboard.starter.master')
@section('header','Comments')
@section('content')

<div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Sender's name</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @forelse($comments as $comment)
                                           <tr>
                                                <td><textarea readonly rows='10' columns='40'>{{$comment->description}}</textarea></td>
                                                <td>{{$comment->name}}</td>
                                                <td>{{$comment->email}}</td>
                                                </td>
                                            </tr>
                                          @empty

                                          @endforelse
                                        </tbody>
                                    </table>
                                </div>

@endsection()