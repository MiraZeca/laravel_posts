@section('title')
    Edit Post
@endsection

@extends('master')

@section('main')
    <div class="container">
        <div class="row">
            <h1>Edit Post</h1>
            <div class="col-8 offset-2">
                <form action="/post/{{$post->id}}/edit" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="input-fleid">
                            <input type="text" name="name" placeholder="your name" id="name" class="{{ $errors->has('name') ? 'red' : '' }}" value="{{ $post->author }}">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-fleid">
                            <input type="text" name="title" placeholder="your title" id="title" class="{{ $errors->has('title') ? 'red' : '' }}" value="{{ $post->title }}">
                            <label for="title">Title</label>
                        </div>
                        <div class="input-fleid">
                            <input type="text" name="body" placeholder="your body" id="body" class="{{ $errors->has('body') ? 'red' : '' }}" value="{{ $post->body }}">
                            <label for="body">Body</label>
                        </div>
                        <div class="input-fleid">
                            <input type="email" name="email" placeholder="your email" id="email" class="{{ $errors->has('email') ? 'red' : '' }}" value="{{ old('email') }}">
                            <label for="email">Email</label>
                        </div>
                      
                        <button class="btn orange col-4 offset-4">Save</button>
                    </div>
                </form>
                @if ($errors->any())
                    <p class="red-text">There was an aerros, try again latter</p>
                @endif
            </div>
        </div>
    </div>
@endsection