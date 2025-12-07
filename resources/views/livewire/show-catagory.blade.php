<div>
    <div class="container space-y-5 mx-auto">
 <div class="grid grid-cols-12 gap-y-5 lg:gap-10">
     {{-- Trending Artikel --}}
    <div class="col-span-12 lg:col-span-4 mt-1 px-4">
      @livewire("tranding-artikel")
      {{-- End Trending Artikel --}}
      {{-- Esay Foto --}}
      <div class="col-span-12 lg:col-span-4 mt-1 px-2">
          {{-- @livewire('esay-foto') --}}
          {{-- End Esay Foto --}}

          {{-- List Author  --}}
       <div class="col-span-12 lg:col-span-4 mt-1 px-2">
     {{-- @livewire('show-authorlist') --}}
       </div>
          {{-- End ist Autho  --}}
        </div>
      </div>
       {{-- Potrait Foto --}}
     <div class="col-span-12 lg:col-span-8 px-2 mx-auto">
      @livewire("peristiwa-foto")
      {{-- End Potrait Foto --}}
    <div class="col-span-3 lg:col-span-12 bg-amber-600 rounded-2xl px-2 mx-auto">
      @livewire("peristiwa-listfoto")
      {{-- End list peristiwa Foto --}}
        </div>
    {{-- Potrait Foto --}}
      @livewire('potrait-foto')
      <div class="mt-2">
      @livewire('potrait-list-foto')
    </div>
    </div>

          {{-- End Potrait Foto --}}
<div class="grid grid-cols-12 gap-y-5 lg:gap-10">
      {{-- list Artikel --}}
    <div class="col-span-12 lg:col-span-4">
      {{-- End List Artikel --}}
      </div>
      {{-- Streets Foto --}}
 <div class="col-span-12 lg:col-span-12">
      {{-- @livewire("street-foto") --}}
      {{-- End Streets Foto --}}

<div class="grid grid-cols-12 gap-y-5 lg:gap-10">
      {{-- list Artikel --}}
    <div class="col-span-12 lg:col-span-4">
      {{-- End List Artikel --}}
      </div>
<div class="col-span-12 lg:col-span-12">
      {{-- @livewire("peristiwa-foto") --}}
      {{-- End Peristiwa Foto --}}
      <div class="col-span-6 lg:col-span-12">
      {{-- @livewire("list-peristiwa") --}}
      {{-- End list peristiwa Foto --}}
        </div>


      </div>
    </div>
    </div>

</div>
</div>

