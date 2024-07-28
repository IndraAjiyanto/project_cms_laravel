<x-layout>
  <x-slot:tittle>{{$tittle}}</x-slot>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="lg:flex gap-x-44 lg:px-24 lg:pt-0" >
      <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Buat artikel yang menarik untuk seluruh dunia!!</h2>
        <p class="mt-6 text-lg leading-8 text-gray-300">tas tes tas tes tass</p>
        <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
          <a href="{{route('tambah')}}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Tambah Artikel+</a>
        </div>
      </div>
      <div class="container mx-auto mt-20 max-w-full max-h-96  flex items-center justify-center">
    <img src="{{asset('images/santai.png')}}" class="max-h-80 "/>
      </div>
    </div>

    <h2 class="text-center text-5xl font-bold tracking-tight">ARTICLE</h2>
    <ul role="list" class=" text-white divide-y divide-gray-100">
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
      <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      <div class="min-w-0 flex-auto">
        <p >Lindsay Walton</p>
        <p class="mt-1 truncate text-xs leading-5 text-gray-300">lindsay.walton@example.com</p>
      </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
      <p>Front-end Developer</p>
      <p class="mt-1 text-xs leading-5 text-gray-300">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
    </div>
  </li>
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
      <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      <div class="min-w-0 flex-auto">
        <p>Courtney Henry</p>
        <p class="mt-1 truncate text-xs leading-5 text-gray-300">courtney.henry@example.com</p>
      </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
      <p >Designer</p>
      <p class="mt-1 text-xs leading-5 text-gray-300">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
    </div>
  </li>
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
      <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      <div class="min-w-0 flex-auto">
        <p>Courtney Henry</p>
        <p class="mt-1 truncate text-xs leading-5 text-gray-300">courtney.henry@example.com</p>
      </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
      <p >Designer</p>
      <p class="mt-1 text-xs leading-5 text-gray-300">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
    </div>
  </li>
</ul>


</div>


</x-layout>