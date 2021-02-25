@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/user-photo.jpg" alt="" class="rounded-circle user-photo">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong>followers</div>
                <div class="pr-5"><strong>212</strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/img-post-01.jpg" alt="Our first post" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/img-post-02.jpg" alt="Our second post" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/img-post-03.jpg" alt="Our third post" class="w-100">
        </div>
    </div>
</div>
@endsection
