<x-layout>
  <x-slot:tittle>By {{$tittle}}</x-slot>
  
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <button type="button" class="inline-flex items-center rounded-md bg-stone-100 px-3 py-2 text-sm my-4 font-semibold text-gray-900 shadow-sm  hover:bg-gray-50">
        <a href="/article"><- kembali</a>
      </button>
  @foreach ($articles as $article)
  <ul role="list" class=" text-white divide-y divide-gray-100">
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
      <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      <div class="min-w-0 flex-auto">
        <a href="/article/{{$article['tittle']}}" class="hover:underline text-xl font-bold "><p>{{$article['tittle']}}</p></a>
        <a href="/category/{{$article->category->name}}"><p class="mt-1 truncate text-xs leading-5 text-gray-300 hover:underline">category {{$article->category->name}}</p></a>
      </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
      <p class="mt-1 text-xs leading-5 text-gray-300">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
    </div>
  </li>
  @endforeach
</div>

</x-layout>