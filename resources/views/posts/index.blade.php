@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>

        <div class="col-4">

            <div class="d-flex align-items-center">
                <div style="padding-right: 20px">
                    <img src="/storage/{{ $post->user->profile->image }}" 
                    class="rounded-circle w-100" style="max-width: 40px" alt=""> 
                </div>

                <div>
                    <div style="font-weight: bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>  |
                        <a href="#" style="padding-left: 10px">Follow</a>
                    </div>
                </div>
            </div>

            <hr>
            <div>
                
                <div>
                    <span style="font-weight: bold">
                        <a href="/profile/{{ $post->user->id }}"> 
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span>
                {{ $post->caption }}</div>
            </div>
            
        </div>
    </div>
    @endforeach
  
</div>
@endsection
