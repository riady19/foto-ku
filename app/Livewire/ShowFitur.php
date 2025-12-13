<?php

namespace App\Livewire;

use Livewire\Component;

class ShowFitur extends Component
{
    public $messages = [
        ['role' => 'assistant', 'content' => 'Halo! Saya adalah Assisten Lumina. Ada yang bisa saya bantu mengenai teknologi atau fotografi hari ini?']
    ];
    public $userInput = '';
    public $isTyping = false;

    public function sendMessage()
    {
        $this->validate([
            'userInput' => 'required|string|max:1000',
        ]);

        // Add user message
        $this->messages[] = ['role' => 'user', 'content' => $this->userInput];
        $input = $this->userInput;
        $this->userInput = '';
        $this->isTyping = true;

        // Simulate AI response delay
        // In a real app, this would be an API call
        // We use a simple match for mock responses
        $response = $this->getMockResponse($input);
        
        // Dispatch browser event or use sleep to simulate delay if needed, 
        // but for Livewire simple updates we'll just append.
        // To make it feel real, we could use a job or just append immediately for now.
        $this->messages[] = ['role' => 'assistant', 'content' => $response];
        $this->isTyping = false;
    }

    private function getMockResponse($input)
    {
        $input = strtolower($input);
        
        // Greeting
        if (str_contains($input, 'halo') || str_contains($input, 'hi') || str_contains($input, 'siapa')) {
            return 'Halo! Saya Assisten Lumina. Lumina adalah website yang memberikan informasi teknologi dan fotografi. Kami beroperasi di Provinsi Kepulauan Riau dengan tagline "Satu Foto Berjuta Cerita".';
        }
        
        // General Info & Tagline
        if (str_contains($input, 'lumina') || str_contains($input, 'apa itu') || str_contains($input, 'tagline')) {
            return 'Lumina adalah media informasi yang disajikan dalam bentuk foto, berfokus pada teknologi dan fotografi. Tagline kami adalah "Satu Foto Berjuta Cerita".';
        }

        // Founding Date
        if (str_contains($input, 'kapan') || str_contains($input, 'berdiri') || str_contains($input, 'tahun') || str_contains($input, 'sejak')) {
            return 'Lumina didirikan sejak bulan November 2025.';
        }

        // Location
        if (str_contains($input, 'lokasi') || str_contains($input, 'dimana') || str_contains($input, 'kepri') || str_contains($input, 'daerah')) {
            return 'Kami beroperasi di Provinsi Kepulauan Riau (Kepri).';
        }

        // Team
        if (str_contains($input, 'tim') || str_contains($input, 'siapa yang menjalankan') || str_contains($input, 'pengelola')) {
            return 'Lumina dijalankan oleh Tim Lumina yang memiliki kompetensi dalam bidang fotografi.';
        }

        // Journalism & Values
        if (str_contains($input, 'jurnalistik') || str_contains($input, 'nilai') || str_contains($input, 'prinsip') || str_contains($input, 'dasar')) {
            return 'Tim redaksi Lumina selalu mengikuti role dalam jurnalistik. Fotografi jurnalistik menjadi dasar pengembangan website ini, mengedepankan nilai-nilai sosial, ekonomi, politik, dan lainnya.';
        }

        // Categories
        if (str_contains($input, 'kategori') || str_contains($input, 'category') || str_contains($input, 'jenis') || str_contains($input, 'genre')) {
            return 'Lumina menyediakan beragam kategori fotografi, antara lain: Portrait, Street, Landscape, Humans, Peristiwa, dan Black and White.';
        }

        // Photo Pintar Feature
        if (str_contains($input, 'foto') || str_contains($input, 'photo') || str_contains($input, 'edit')) {
            return 'Selain informasi, kami juga memiliki fitur Photo Pintar untuk membantu Anda. Lumina sendiri menjadikan foto sebagai bentuk utama penyajian informasi.';
        }

        // Price (Keep existing logic if relevant, or update)
        if (str_contains($input, 'harga') || str_contains($input, 'biaya')) {
            return 'Layanan informasi kami dapat diakses secara gratis.';
        }

        return 'Maaf, saya masih belajar. Anda bisa bertanya tentang sejarah Lumina, tim, lokasi, atau topik fotografi lainnya.';
    }

    public function render()
    {
        return view('livewire.show-fitur')->layout('layouts.news');
    }
}
