@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-3 p-5">
          <img src="https://scontent-sin2-2.cdninstagram.com/v/t51.2885-19/s320x320/82895605_484167665622521_6731354491850850304_n.jpg?_nc_ht=scontent-sin2-2.cdninstagram.com&_nc_ohc=NuH5h0knziwAX-AE8D3&oh=b2835e6bfd65f492d510c7cf28916d70&oe=5EAC6CF8" class="rounded-circle w-100">
      </div>
      <div class="col-9 pt-5">
          <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{$user->username}}</h1>
            <a href="#">Add New Post</a>
        </div>
          <div class="d-flex">
              <div class="pr-5"><strong>33</strong> posts</div>
              <div class="pr-5"><strong>300</strong> followers</div>
              <div class="pr-5"><strong>400</strong> following</div>
          </div>
          <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
          <div>{{$user->profile->description}}</div>
          <div><a href="#">{{$user->profile->url}}</a></div>
      </div>
  </div>
    <div class="row pt-4">
        <div class="col-4">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlGy4CYxamgk4ZElZ_Eb6FhDQo2BQeWWUZSpIf4snaN5ctKee2&s" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fktm1-1.fna.fbcdn.net/v/t51.2885-19/s320x320/82895605_484167665622521_6731354491850850304_n.jpg?_nc_ht=instagram.fktm1-1.fna.fbcdn.net&_nc_ohc=NuH5h0knziwAX8OhX3Z&oh=8aa63843a010da6f0b2104ca4e29696a&oe=5EAC6CF8" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fktm1-1.fna.fbcdn.net/v/t51.2885-19/s320x320/82895605_484167665622521_6731354491850850304_n.jpg?_nc_ht=instagram.fktm1-1.fna.fbcdn.net&_nc_ohc=NuH5h0knziwAX8OhX3Z&oh=8aa63843a010da6f0b2104ca4e29696a&oe=5EAC6CF8" class="w-100">
        </div>
    </div>
</div>
@endsection
