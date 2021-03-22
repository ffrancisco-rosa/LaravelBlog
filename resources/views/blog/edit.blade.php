@extends('layouts.default')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-16">
            <h1 class="text-6xl">Edit Post</h1>
        </div>
    </div>
    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors-all() as $error)
                    <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded 2xl py-4 px-6">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>        
    @endif

    <div class="w-4/5 pt-20 m-auto">
        <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="text" name="title" value="{{ $post->title }}" class="bg-transparent block border-0 border-b-2 w-full h-20 text-6xl outline-none">
            <textarea name="description" class="py-20 bg-transparent block border-0 border-b-2 w-full h-60 text-xl outline-none">{{ $post->description }}"</textarea>

            <button type="submit" class="uppercase mt-14 bg-blue-500 text-gray-100 text-lg font-extrabold py-2 px-6 rounded-3xl">
                Submit
            </button>
        </form>
    </div>
@endsection