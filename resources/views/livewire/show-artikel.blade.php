<div>

            <div class=>
               <div class="container space-y-5">
 <div class="grid grid-cols-12 gap-y-5 lg:gap-10">
     {{-- Trending Artikel --}}
    <div class="col-span-12 lg:col-span-4 mb-4">
      @livewire("tranding-artikel")
      {{-- End Trending Artikel --}}
      </div>
        <div class="col-span-12 lg:col-span-8">
                <h1 class="font-bold text-2xl divider divider-warning mb-6">Detail Foto</h1>
       <div>
        <div class="container">
         <h1 class="text-2xl font-bold px-10">{{ $artikel->title }}</h1>
         <div class="rounded-2xl">
         <img src="{{ asset('storage/' .$artikel->image) }} " alt="{{ $artikel->title }}" class="h-100 w-full px-20 py-4 rounded-2xl">
         </div>
         <h3 class="text-xl px-10 text-red-500">Caption:</h3>
         <p class="px-10">{{ $artikel->content }}</p>
       </div>

       </div>
       </div>
       </div>

        {{-- Gallery Team --}}
    <div claas="mt-5 col-span-12 gap-5">
        <div class="flex flex-col items-center justify-center">
                <h1 class="title text-center divider divider-warning">Team_Gallery</h1>
                <small class="text-gray-300">Team Fotoku Punya Cerita</small>
    </div>
            @livewire('gallery-team')
            {{-- end Gallery Team --}}
   </div>

</div>


