@extends('layouts.app')
@section('content')

    <div class="col-12 bgblog p-5">
        <div class="col-4 p-3 mb-2 bg-gradient-dark text-white" >
            <h1 class="display-one">Elisa Blog!</h1>
            <p>Feliz de poder compartir contigo!</p>
        </div>

    </div>

        <div class="container  mb-5" >
        <div class="row">
            <div class="col-12 p-5">



                @forelse($posts as $post)
                    <ul>
                        <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
