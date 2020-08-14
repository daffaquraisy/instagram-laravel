@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-3 p-5">
            <img src="{{asset('assets/images/profile.png')}}" class="img-fluid" width="60%" height="60%">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create" class="btn btn-primary btn-sm">Add New Post</a>
                <a href="/p/create" class="btn btn-primary btn-sm">Edit Profile</a>
            </div>

            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>221</strong> followers</div>
                <div class="pr-5"><strong>343</strong> followed</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}.</div>
            <div style="color: lightskyblue">{{$user->profile->url ?? 'N/A'}}</div>
        </div>

    </div>

    <div class="row pt-5">

        @foreach ($user->posts as $post)

        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100">
            </a>
        </div>
            
        @endforeach

    </div>
</div>
@endsection
