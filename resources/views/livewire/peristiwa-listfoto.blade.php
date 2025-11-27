<div>
     <div>
        <h1 class="text-2xl font-bold text-warning">Foto Lainnya</h1><hr>
    </div>

   <div class="grid grid-cols-3 gap-5">
   @foreach ( $artikel as $item )
    <div class="col-span-1 mt-5">
{{-- Card Star --}}
<div class="card bg-base-100 shadow-sm ">
  <figure>
    <a href="" wire:navigate>
    <img
      src="{{ asset('storage/' .$item->image) }}" alt="{{ $item->title }}" class="w-40 h-40 lg:w-full h-45 rounded-xl hover:opacity-50" /></a>
  </figure>
  <div class="card-body mt-1 text-center">
     <a href="" wire:navigate class="card-title text-sm lg:text-lg flex lg:justify-center hover:opacity-50">{{ $item->title }}</a>
  </div>
</div>
{{-- Card end  --}}
    </div>
 @endforeach

   </div>
</div>
