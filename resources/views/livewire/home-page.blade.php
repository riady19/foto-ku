<div class="">
   <div class="container space-y-5 p-3 mx-auto">
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

    <div class="col-span-2 lg:col-span-1 p-0  p-2 text-bold rounded-2xl lg:p-2 p-2 text-bold rounded-2xl">
        <h1 class="text-2xl font-bold divider divider-warning mb-4">Foto Terbaru</h1>
<div class="bg-red-500 p-8 rounded-2xl">
    @foreach ( $artikel as $item )
        <a href="/" wire:navigate>
        <img src="{{ asset('storage/' .$item->image) }}" alt="{{ $item->title }}" class="w-full rounded-xl shadow-md hover:opacity-50 border border-amber-50" style="height: 80%" ></a>
        {{-- <img src="{{ asset('gambar/gambardepan.jpg') }}" alt="gambar2" class="rounded-xl shadow-md"> --}}
@endforeach
</div>
    </div>
   </div>
   <div class="grid grid-cols-12 gap-y-5 lg:gap-10 px-4">
     {{-- list Artikel --}}
    <div class="col-span-12 lg:col-span-8 mb-8">
      @livewire("list-foto")
      {{-- End List Artikel --}}

      {{-- Tranding Artikel -1 --}}
    <div class="col-span-12 lg:col-span-4 mt-1 px-4">
      @livewire("tranding-artikel")
      <hr class="mt-8"/>

    </div>
</div>
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
