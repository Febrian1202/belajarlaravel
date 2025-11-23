<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md ">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-200">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-300">
            <a href="#">{{ $post['author'] }}</a> | 1 January 2024
        </div>
        <p class="my-4 font-light text-white">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-300 hover:underline">&laquo;Back to post</a>
    </article>
</x-layout>
