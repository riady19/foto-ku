<div class="">
   <div class="container space-y-5 px-12 mx-auto">
    <div class="grid grid-cols-2 min-h-[70vh]">
    <div class="col-span-2 lg:col-span-1 py-2 lg:px-4 space-y-4 mt-8">
      <div class="flex flex-col justify-center items-center gap-y-4">
        <div class="bg-slate-300 w-24 aspect-square rounded-full shadow-md">
        <img src="{{ asset('gambar/avatar.png') }}" alt="avatar" class="w-full h-full object-cover rounded-full">
      </div>
      <h1 class="text-2xl font-jost"><span class="text-gray-500">by.</span> Riadi<span class="font-medium"></span></h1>
      </div>
      <div class="flex flex-col justify-center items-center gap-y-2">
        <h1 class="font-jost text-2xl lg:text-5xl w-full lg:w[35rem] text-center">Satu Foto Berjuta Cerita, Catatan Dari Sudut Negeri</h1>
    <small class="gray-600">Karimun-Kepri|@2025</small>
      </div>
    </div>

    <div class="col-span-2 lg:col-span-1 p-0 text-bold rounded-2xl lg:p-2 text-bold rounded-2xl">
        <h1 class="text-2xl font-bold divider divider-warning mb-4">Foto Terbaru</h1>
<div class="bg-red-500 rounded-2xl">
    @foreach ( $artikel as $item )
        <a href="/" wire:navigate>
        <img src="{{ asset('storage/' .$item->image) }}" alt="{{ $item->title }}" class="w-full h-75  rounded-xl shadow-md hover:opacity-50 border border-amber-50" ></a>
       <a href="/" wire:navigate>
      <h1 class="text-center text-white font-bold mt-2 py-1 hover:opacity-50 ">{{ $item->title }}</h1></a>
        <p class="text-white text-center p-2 px-3">{{ $item->content }}</p>
        {{-- <img src="{{ asset('gambar/gambardepan.jpg') }}" alt="gambar2" class="rounded-xl shadow-md"> --}}
@endforeach
</div>
    </div>
   </div>

   <div>
      <div class="grid grid-cols-12 gap-y-5 lg:gap-8">
     {{-- Peristiwa --}}
    <div class="col-span-12 lg:col-span-4">
         <h1 class="text-2xl font-bold text-center divider divider-warning p-4">Peristiwa</h1>
        <div class="hero mx-auto mt-8"
  style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);"
>
  <div class="hero-overlay"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
      <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
      <p class="mb-5">
        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
        quasi. In deleniti eaque aut repudiandae et a id nisi.
      </p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </div>
</div>
    </div>
    {{-- End Peristiwa --}}

    {{-- Pilihan Lainnya --}}
    <div class="col-span-12 lg:col-span-4 mt-6">
       <ul class="list bg-base-100 rounded-box shadow-md">

  <li class="p-4 pb-2 text-xl text-blue-800 opacity-80 tracking-wide">Pilihan Lainnya</li>

  <li class="list-row">
    <div class="text-2xl font-thin opacity-80 tabular-nums">01</div>
    <div><img class="size-15 rounded-box" src="https://img.daisyui.com/images/profile/demo/1@94.webp"/></div>
    <div class="list-col-grow">
      <div class="font-bold uppercase text-red-400">Dio Lupa</div>
  </li>

  <li class="list-row">
    <div class="text-2xl font-thin opacity-80 tabular-nums">02</div>
    <div><img class="size-15 rounded-box" src="https://img.daisyui.com/images/profile/demo/4@94.webp"/></div>
    <div class="list-col-grow">
      <div>Ellie Beilish</div>
    </div>
  </li>

  <li class="list-row">
    <div class="text-2xl font-thin opacity-80 tabular-nums">03</div>
    <div><img class="size-15 rounded-box" src="https://img.daisyui.com/images/profile/demo/3@94.webp"/></div>
    <div class="list-col-grow">
      <div>Sabrino Gardener</div>
    </div>
  </li>
</ul>
    </div>
     {{-- End Pilihan Lainnya --}}
     {{-- Daerah --}}
     <div class="col-span-12 lg:col-span-4 mt-1 px-4">
         <div class="hero bg-base-200 ">
  <div class="hero-content flex-row-reverse">
    <img
      src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
      class="size-40 h-full rounded-lg shadow-2xl"
    />
    <div>
      <h1 class="text-2xl font-bold">Box Office News!</h1>
      <p class="py-6">
        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitatione
      </p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </div>
</div>
        </div>
        {{-- Daerah --}}
    </div>

   <div class="grid grid-cols-12 gap-y-5 lg:gap-10 px-4">
     {{-- list Artikel --}}
    <div class="col-span-12 lg:col-span-8 mb-8">
      @livewire("list-foto")
      {{-- End List Artikel --}}

      {{-- Tranding Artikel -1 --}}
    <div class="col-span-12 lg:col-span-4 mt-1 px-4">
      @livewire("tranding-artikel")
      {{-- <hr class="mt-8"/> --}}
            {{-- end Tranding Artikel -1 --}}
            {{-- Peristiwa --}}
    <div class="col-span-12 lg:col-span-4 mt-1 px-4">
      @livewire("esay-foto")
    </div>
     {{-- ENd Peristiwa --}}
    <hr class="mt-8"/>
    </div>
</div>
   {{-- Author --}}
       <div class="grid grid-cols-12 py-4 mx-auto border border-warning m-3">
        <div class="col-span-12 flex justify-center">
            <div class="hero bg-base-200 ">
  <div class="hero-content flex-row">
    <img
      src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
      class="rounded-lg shadow-2xl p-2"
    />
    <div>
      <h1 class="text-5xl font-bold">Box Office News!</h1>
      <p class="py-2">
        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
        quasi. In deleniti eaque aut repudiandae et a id nisi.
      </p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </div>
</div>
        </div>
        {{-- <div class="col-span-4 flex justify-center">KANAN</div>
    End Author --}}
</div>
    {{-- End Tranding -1 --}}

        {{-- Author --}}
    <div class="col-span-12 lg:col-span-3">
     @livewire("show-author")
 </div>
    {{-- End Author --}}

   {{-- Gallery Team --}}
   <div class="pt-4 space-y-5">
    <div class="flex flex-col items-center justify-center">
      <h1 class="title text-center divider divider-warning text-2xl font-bold">Team_Gallery</h1>
      <small class="text-black">Team Fotoku Punya Cerita</small>
    </div>
     @livewire('gallery-team')
     {{-- end Gallery Team --}}
   </div>
    </div>
   </div>
</div>
