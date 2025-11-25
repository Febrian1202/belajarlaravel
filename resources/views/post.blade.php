<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md ">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-200">{{ $post['title'] }}</h2>
        <div class="text-white">
            By 
                <a href="/authors/{{ $post->author->username }}" class="text-base text-gray-300 hover:underline">{{ $post->author->name }}</a> 
                in 
                <a href="/categories/{{ $post->category->slug }}"  class="text-base text-gray-300 hover:underline">{{ $post->category->name }}</a>
                | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light text-white">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-300 hover:underline">&laquo; Back to post</a>
    </article>
</x-layout>
