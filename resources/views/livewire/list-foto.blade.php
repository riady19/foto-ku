<div class="space-y-5">
    <div class="flex flex-col justify-center items-center lg:justify-start lg:items-start">
        <h1 class="title divider divider-warning font-bold text-2xl">List Foto</h1>
        <p class="text-gray-800"><small>Created: </small><span>By. TeamFotoku</span></p>
    </div>
<div class="space-y-5">
    @foreach ( $artikel as $item )
        <div class="grid lg:grid-cols-3 gap-5">
        <div class="lg:col-span-1 bg-slate-300 w-full rounded-xl overflow-hidden shadow-sm h-60">
       <img src="{{ asset('storage/' .$item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover" alt="" sizes="auto" srcset="">
       </div>
        <div class="lg:col-span-2 space-y-3 text-center lg:text-start">
            <div class="flex justify-center lg:justify-start">
                <p class="bg-amber-700 text-lg w-fit px-3 py-1 rounded-full capitalize text-white">{{ $item->catagory->nama }}</p>
            </div>
            <a href="" wire:navigate><h1 class="text-2xl font-semibold tracking-wider hover:opacity-50">{{ Str::limit($item->title, 50) }}</h1>
                </a>
            <small class="text-red-400">{{ $item->created_at }}</small>
            <p class="text-justify">{{ $item->content }}</p>

        </div>
    </div>
    @endforeach
</div>
{{-- {{ $artikel->links() }} --}}
</div>
</div>

