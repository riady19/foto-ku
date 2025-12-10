<div>

            <div class=>
               <div class="container space-y-5 mx-auto">
 <div class="grid grid-cols-12 gap-y-5 lg:gap-10">
     {{-- Trending Artikel --}}
    <div class="col-span-12 lg:col-span-4 mb-4 m-2">
      @livewire("tranding-artikel")
      {{-- End Trending Artikel --}}
      </div>
        <div class="col-span-12 lg:col-span-8">
                <h1 class="font-bold text-2xl divider divider-warning mb-6">Detail Foto</h1>
       <div>
        <div class="container">
         <h1 class="text-2xl font-bold px-10">{{ $artikel->title }}</h1>
         <p class="px-10 text-red-500">{{ $artikel->catagory->nama }} | <i class="text-black">{{ $artikel->tanggal_published }}</i></p>
         <div class="rounded-2xl">
         <img src="{{ asset('storage/' .$artikel->image) }} " alt="{{ $artikel->title }}" class="h-full w-full lg:h--100 w-full px-10 py-4 rounded-2xl">
         </div>
         <h3 class="text-md px-10 text-red-500">Caption:</h3>
         <p class="px-10">{{ $artikel->content }}</p>

         <div class="mt-4 px-3">
            <p style="font-size: 13px"><b>Share this</b></p>
            <a class="btn btn-primary rounded-full" href="https://facebook.com/sharer.php?u={{ url()->current() }}" target="_blank"><i class="fa-brands fa-facebook fa-1x"></i></a>
            <a class="btn btn-success rounded-full" href="https://api.whatsapp.com/send?text={{ url()->current() }}" target="_blank"><i class="fa-brands fa-whatsapp fa-1x"></i></a>
         </div>
         <div>
            @livewire( 'list-show-artikel')
            </div>
       </div>
       </div>
       </div>
       </div>
    </div>
    </div>
    </div>
 {{-- Author --}}

    <div class="col-span-12 lg:col-span-3">
   {{-- Gallery Team --}}
   <div class="pt-4 space-y-5">
    <div class="flex flex-col items-center justify-center">
      <h1 class="title text-center divider divider-warning text-2xl font-bold">Team_Gallery</h1>
      <small class="text-black">Team Lumina Punya Cerita</small>
    </div>
     @livewire('gallery-team')
     {{-- end Gallery Team --}}
   </div>
    </div>
   </div>
</div>
</div>


