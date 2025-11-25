<?php

namespace App\Livewire;

use Livewire\Component;

class GalleryTeam extends Component
{
      public $team;
    public function mount() {
        $this->team = ['gambar1.jpg', 'gambar2.jpg', 'gambar3.jpg', 'gambar4.jpg', 'gambar5.jpg', 'gambar6.jpg'];
    }
    public function render()
    {
        return view('livewire.gallery-team');
    }
}
