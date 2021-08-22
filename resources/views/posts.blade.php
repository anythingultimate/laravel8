<x-layout>
    @foreach ($posts as $post)
        <article class="px-3 mb-3 py-4">
            <h1 class="text-3xl font-semibold"><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h1>
            <p class="pb-4">
                {{ $post->excerpt }}
            </p>
            <hr />
        </article>
    @endforeach;
</x-layout>



