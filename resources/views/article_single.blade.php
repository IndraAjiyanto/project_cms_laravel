<x-layout>
  <x-slot:tittle>Single Article</x-slot>
  
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <button type="button" class="inline-flex items-center rounded-md bg-stone-100 px-3 py-2 text-sm mb-4 font-semibold text-gray-900 shadow-sm  hover:bg-gray-50">
        <a href="/article"><- kembali</a>
      </button>
  <div class="px-4 sm:px-0">
    <p class="mt-1 max-w-2xl text-3xl font-bold leading-6 text-white-500">{{$articles['tittle']}}</p>
  </div>
  <div class="mt-6 border-t border-white-100">
    <dl class="divide-y divide-white-100">
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white-900">By</dt>
        <dd class="mt-1 text-sm leading-6 text-white-700 sm:col-span-2 sm:mt-0">{{$articles->user->name}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white-900">Category</dt>
        <dd class="mt-1 text-sm leading-6 text-white-700 sm:col-span-2 sm:mt-0">{{$articles->category->name}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white-900">Content</dt>
        <dd class="mt-1 text-sm leading-6 text-white-700 sm:col-span-2 sm:mt-0">{{$articles['content']}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white-900">comment :</dt>
        @foreach ($coments as $coment)
        <dd class="mt-1 text-sm leading-6 text-white-700 sm:col-span-2 sm:mt-0"></dd>
        <ul role="list" class=" text-white divide-y divide-gray-100">
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
      <img class="h-12 w-12 flex-none rounded-full border-2 border-white-900 bg-gray-50" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      <div class="min-w-0 flex-auto">
        <a href="/user/{{$coment->user->name}}"><p class="mt-1 truncate text-xs leading-5 text-gray-300"><span class="hover:underline">{{$coment->user->name}}</span></a> : {{$coment->content}}</p>
      </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
      
      <p class="mt-1 text-xs leading-5 text-gray-300">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
    </div>
  </li>
        @endforeach
      </div>
      <!-- <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white-900">Attachments</dt>
        <dd class="mt-2 text-sm text-white-900 sm:col-span-2 sm:mt-0">
          <ul role="list" class="divide-y divide-white-100 rounded-md border border-white-200">
            <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
              <div class="flex w-0 flex-1 items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-white-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                </svg>
                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                  <span class="truncate font-medium">resume_back_end_developer.pdf</span>
                  <span class="flex-shrink-0 text-white-400">2.4mb</span>
                </div>
              </div>
              <div class="ml-4 flex-shrink-0">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
              </div>
            </li>
            <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
              <div class="flex w-0 flex-1 items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-white-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                </svg>
                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                  <span class="truncate font-medium">coverletter_back_end_developer.pdf</span>
                  <span class="flex-shrink-0 text-white-400">4.5mb</span>
                </div>
              </div>
              <div class="ml-4 flex-shrink-0">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
              </div>
            </li>
          </ul>
        </dd>
      </div> -->
    </dl>
  </div>
</div>

</div>

</x-layout>