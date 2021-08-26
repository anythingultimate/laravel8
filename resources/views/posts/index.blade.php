<x-layout>
    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-post-grid :posts="$posts" />
            {{ $posts->links() }}
        @else
            <h1>No Post Yet. Please check back later.</h1>
        @endif
    </main>

</x-layout>



