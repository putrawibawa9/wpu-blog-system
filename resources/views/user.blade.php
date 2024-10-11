<x-layout>
        <x-slot:header>{{ $header }}</x-slot:header>
    <h3>{{ $header }}</h3>
    @dd($users)
    @foreach ($users as $user)
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/posts/{{ $user->id }}" class="hover:underline"></a>
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $user->posts->title }}</h2>
        <div class="text-base text-gray-500">
            <a class="hover:underline" href="/users/{{ $user->id }}">{{ $user->name }}</a> | {{ $user->posts->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($user->posts->content, 25 )}}</p>
        <a href="/posts/{{$user->posts->slug}}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
      @endforeach 
   
</x-layout>