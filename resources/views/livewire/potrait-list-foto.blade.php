<div>
   {{-- carousel --}}
<div class="carousel rounded-box w-full mt-10 lg:mt-10 border border-amber-950">
    @foreach ( $artikel as $item )
    <div class="carousel-item p-2">
         <a href="/show/{{ $item->slug }}" wire:navigate>
    <img
      src="{{ asset('storage/' .$item->image) }}" alt="{{ $item->title }}" class="size-30 rounded-box lg:size-40 rounded-box rounded-xl hover:opacity-50"
      class="size-30" /></a>
  </div>
   @endforeach

</div>
