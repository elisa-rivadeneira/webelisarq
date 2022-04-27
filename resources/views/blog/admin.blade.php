@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 bgblog p-5">
                        <div class="col-8">
                            <h1 class="display-one">Elisa Blog!</h1>
                            <p>Feliz de poder compartir contigo!</p>
                        </div>


                    </div>

                    <div class="col-4">
                        <p>Crea un Nuevo Post</p>
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Añadir Post</a>
                    </div>
                </div>
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
