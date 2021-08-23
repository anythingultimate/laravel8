<x-layout>
    <x-slot name="title">
        {{$post->title}}
    </x-slot>

    <article class="px-3 mb-3 py-4">
        <h1 class="text-3xl font-semibold">{{ $post->title }}</h1>
        <p>Posted by <a href="/authors/{{ $post->author->id }}" class="text-blue-600">{{ $post->author->name }}</a> in <a href="/categories/{{$post->category->slug}}"  class="text-blue-600">{{$post->category->name}}</a> category</p>
        <p class="py-4">
            {!! $post->body !!}
        </p>
    </article>
    <a class="px-3" href="/"> Go Back</a>
</x-layout>
