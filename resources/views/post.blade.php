<x-layout>
    <x-slot name="title">
        {{$post->title}}
    </x-slot>

    <article class="px-3 mb-3 py-4">
        <h1 class="text-3xl font-semibold">{{ $post->title }}</h1>
        <p><a href="categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
        <p class="py-4">
            {!! $post->body !!}
        </p>
    </article>
    <a class="px-3" href="/"> Go Back</a>
</x-layout>
