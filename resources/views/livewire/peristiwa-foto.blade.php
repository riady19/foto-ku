<div>
    <div>
         @foreach ( $artikel as $item )
        <h1 class="text-2xl font-bold text-center divider divider-success">{{ $item->catagory->nama }}</h1>
    </div>
    {{-- coursel --}}
    <div>

        <div class="card bg-base-100 w-full shadow-sm mt-5">
   <figure>
     <img
       src="{{ asset('storage/' .$item->image)}}" alt="{{ $item->title }}" class="w-150 h-80 rounded-xl" />
   </figure>
   <div class="card-body text-center">
     <a href="" wire:navigate class="card-title text-2xl flex justify-center hover:opacity-50">{{ $item->title }}</a>
     <p>{{ $item->content }}</p>
     <div class="card-actions justify-end">
     </div>
   </div>
 </div>
 @endforeach
    </div>
    {{-- end coursel --}}


</div>

