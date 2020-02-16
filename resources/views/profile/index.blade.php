@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://scontent.fmnl13-1.fna.fbcdn.net/v/t1.0-1/p160x160/81876386_1020389188361407_5048914234621034496_o.jpg?_nc_cat=100&_nc_ohc=URRTkE6W9AsAX-Pigps&_nc_ht=scontent.fmnl13-1.fna&_nc_tp=6&oh=89291e312249b96fa36e10726ceafa58&oe=5ECC36BF" alt="">    
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1> {{ $user->username }} </h1>
                    <a href="/post/create">Add New Post</a>
            </div>
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            <div class="d-flex">
                {{-- <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div> --}}
                <div class="pr-5"><strong>123</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div> 
            <div class="pt-4 font-weight-bold"></div>
            <div> {{ $user->profile->description }} </div>
            <div class="font-weight-bold"><a href="#"> {{ $user->profile->url }} </a></div>
        </div>
    </div>

    {{-- <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fmnl13-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/81377178_838858446576519_736794861142615830_n.jpg?_nc_ht=instagram.fmnl13-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=CxknjnZyFokAX9rD2nN&oh=896bbb87b2b018e50c5e05aabc664a4a&oe=5EBB822C" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fmnl13-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/82228398_1196880820517601_1532116727247824132_n.jpg?_nc_ht=instagram.fmnl13-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=pGMiG2sUwIgAX_TkkOj&oh=66936c9318a10de03be2e1086c329945&oe=5EBC1598" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fmnl13-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/82371918_174536497115188_1941207440306978394_n.jpg?_nc_ht=instagram.fmnl13-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=GZ18GFhEqLgAX_dddLY&oh=258d581de1774bb74ed2c947aa546de3&oe=5ED2CFB9" alt="" class="w-100">
        </div>
    </div> --}}

    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-4">
                <a href="">
                    <img src="/storage/{{$post->image}}" alt="" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
