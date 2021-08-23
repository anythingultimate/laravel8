<x-layout>
    @foreach ($posts as $post)
        <article class="px-3 mb-3 py-4">
            <h1 class="text-3xl font-semibold"><a href="posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <p><a href="categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
            <p class="py-4">
                {{ $post->excerpt }}
            </p>
            <hr />
        </article>
    @endforeach;
</x-layout>



