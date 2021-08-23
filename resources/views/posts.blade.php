<x-layout>
    @foreach ($posts as $post)
        <article class="px-3 mb-3 py-4">
            <h1 class="text-3xl font-semibold"><a href="posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <p>Posted by <a href="/authors/{{ $post->author->id }}" class="text-blue-600">{{ $post->author->name }}</a> in <a href="/categories/{{$post->category->slug}}"  class="text-blue-600">{{$post->category->name}}</a> category</p>
            <p class="py-4">
                {{ $post->excerpt }}
            </p>
            <hr />
        </article>
    @endforeach;
</x-layout>



