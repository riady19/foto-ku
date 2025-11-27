{{-- Author --}}

       <div class="col-span-12 lg:col-span-3 bg-gray-500 pt-2 pb-6">
        <h1 class="text-center font-bold text-2xl divider divider-warning text-white">Author</h1>
        <div class="p-2">
            <div class="flex justify-center gap-10">
                @foreach ( $authors as $item )
                      <div class="avatar">
                     <div class="w-24 h-24 border border-b-black rounded-full">
                    <img src="{{ asset('storage/' .$item->avatar) }}" alt="gambar" class="hover:opacity-2  hover:opacity-50">
                </div>
                </div>
                @endforeach
            </div>
        </div>


        {{-- End Author --}}
