<x-layout>
        <x-slot:header>{{ $header }}</x-slot:header>

    @foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/posts/{{ $post->id }}" class="hover:underline"></a>
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
        <div class="text-base text-gray-500">
            <a class="hover:underline" href="/users/{{ $post->user->username }}">{{ $post->user->name }}</a>
            in
             <a class="hover:underline" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($post->content, 100 )}}</p>
        <a href="/posts/{{$post->slug}}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
      @endforeach 
   
</x-layout>