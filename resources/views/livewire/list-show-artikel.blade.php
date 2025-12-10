<div>
   <div class="mt-6 px-3">
   {{-- carousel --}}
  <p class="text-red-500">Foto Lainnya</p>
<div class="carousel rounded-box w-full mt-4 lg:mt-2 border border-amber-950">

    @foreach ( $artikel as $item )
    <div class="carousel-item p-2">
         <a href="/show/{{ $item->slug }}" wire:navigate>
    <img
      src="{{ asset('storage/' .$item->image) }}" alt="{{ $item->title }}" class="size-30 rounded-box lg:size-40 rounded-box rounded-xl hover:opacity-50"
      class="size-30" /></a>
  </div>
   @endforeach

</div>

