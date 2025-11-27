<div class="space-y-5 ml-5 ">
   <div class="text-center lg:text-left">
    <h1 class="title divider divider-primary font-bold text-xl text-red-500 ">Foto Pilihan</h1>
</div>
<div class="space-y-5 bg-primary rounded-2xl p-4">
    @foreach ( $artikel as $item )
    <div class="grid grid-cols-3 gap-5">
        <div class="col-span-1 lg:col-span-1 bg-slate-200 w-full h-full lg:h-28 rounded-xl relative">
           <div class="w-8 h-8 rounded-full bg-red-500 flex justify-center items-center absolute -top-4 -left-4">
            <i class="fa-solid fa-bolt-lightning text-white"></i>
           </div>
           <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover rounded-xl hover:opacity-50 border border-white">
        </div>
        <div class="col-span-2 text-left lg:col-span-2 text-center lg:text-left text-white">
            <a class="hover:opacity-50" href="" wire:navigate class="font-semibold text-lg">{{ $item->title }}</a>
            <p class="text-warning">{{ $item->tanggal_publish }}</p>
        </div>
        </div>
          @endforeach
</div>
</div>
