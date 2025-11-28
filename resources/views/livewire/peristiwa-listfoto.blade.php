<div>
     <div>
        <h1 class="text-2xl font-bold text-warning p-2 text-white">Foto Lainnya</h1><hr>
    </div>

   <div class="grid grid-cols-4 lg:grid-cols-4 gap-2">
   @foreach ( $artikel as $item )
    <div class="col-span-1 mt-2">
{{-- Card Star --}}
<div class="card bg-amber-600 shadow-sm">
  <figure>
    <a href="" wire:navigate>
    <img
      src="{{ asset('storage/' .$item->image) }}" alt="{{ $item->title }}" class="size-30 rounded-box lg:size-40 rounded-box rounded-xl hover:opacity-50" /></a>
  </figure>
  <div class="m-2">
     <a href="" wire:navigate class="text-xs text-white text-justify lg:text-lg text-center hover:opacity-50">{{ $item->title }}</a>
  </div>
</div>
{{-- Card end  --}}
    </div>
 @endforeach

   </div>
</div>
