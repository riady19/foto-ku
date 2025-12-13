<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class PhotoPintar extends Component
{
    use WithFileUploads;

    public $activeTab = 'photo-produk';
    public $photo;
    public $prompt = '';
    public $generatedImages = [];
    public $isGenerating = false;
    public $productType = 'general';
    public $viewingImage = null;
    public $aspectRatio = '1:1';
    public $subjectCount = '1';
    public $layout = 'photo-strip';
    public $boothTheme = 'k-pop-cute';
    public $mockupType = 'apparel';

    public function setTab($tab)
    {
        $this->activeTab = $tab;
        $this->reset(['prompt', 'generatedImages', 'isGenerating', 'photo', 'productType', 'viewingImage', 'aspectRatio', 'subjectCount', 'layout', 'boothTheme', 'mockupType']);
    }

    public function viewImage($index)
    {
        if (isset($this->generatedImages[$index])) {
            $this->viewingImage = $this->generatedImages[$index];
        }
    }

    public function closeView()
    {
        $this->viewingImage = null;
    }

    public function updatedPhoto()
    {
        $this->generatePromptFromImage();
        $this->generate();
    }

    public function updatedLayout()
    {
        if (!empty($this->generatedImages) && $this->activeTab === 'photobot') {
            $layoutClass = match($this->layout) {
                'photo-strip' => 'aspect-[1/3]',
                'stiker-set' => 'aspect-square',
                '4r-grid' => 'aspect-[2/3]',
                'polaroid-collage' => 'aspect-[4/5]',
                default => 'aspect-square',
            };

            foreach ($this->generatedImages as &$image) {
                $image['wrapper_class'] = $layoutClass;
                $image['overlay_text'] = $this->layout === 'photo-strip' ? '3 FRAMES' : ($this->layout === '4r-grid' ? '6 FRAMES' : '');
            }
        }
    }

    public function updatedBoothTheme()
    {
        if (!empty($this->generatedImages) && $this->activeTab === 'photobot') {
             $this->applyThemeToImages();
        }
    }

    private function applyThemeToImages()
    {
        $url = $this->photo ? $this->photo->temporaryUrl() : 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';
        $layoutClass = match($this->layout) {
            'photo-strip' => 'aspect-[1/3]',
            'stiker-set' => 'aspect-square',
            '4r-grid' => 'aspect-[2/3]',
            'polaroid-collage' => 'aspect-[4/5]',
            default => 'aspect-square',
        };

        $this->generatedImages = [];
        for ($i = 0; $i < 4; $i++) {
            $styleName = '';
            $styleClass = '';
            
            if ($this->boothTheme === 'k-pop-cute') {
                $variations = [
                    ['Soft Pastel', 'brightness-110 saturate-105 sepia-[.1] hue-rotate-[-10deg] border-4 border-pink-200'],
                    ['Pink Blush', 'brightness-105 saturate-150 sepia-[.2] hue-rotate-[-20deg] border-4 border-pink-300'],
                    ['Dreamy', 'brightness-115 contrast-90 saturate-50 sepia-[.1] border-4 border-purple-200'],
                    ['Pop Star', 'contrast-110 saturate-125 brightness-110 border-4 border-pink-400']
                ];
                $styleName = $variations[$i][0];
                $styleClass = $variations[$i][1];
            } elseif ($this->boothTheme === 'y2k-aesthetic') {
                $variations = [
                    ['Cyber Angel', 'contrast-125 brightness-110 saturate-150 hue-rotate-[15deg] border-4 border-cyan-400'],
                    ['Glitch Core', 'contrast-150 saturate-200 hue-rotate-[90deg] border-4 border-green-400'],
                    ['Retro Tech', 'sepia-[.5] contrast-110 brightness-90 border-4 border-gray-400'],
                    ['Bling Bling', 'brightness-125 contrast-110 saturate-0 border-4 border-indigo-400']
                ];
                $styleName = $variations[$i][0];
                $styleClass = $variations[$i][1];
            } elseif ($this->boothTheme === 'cyberpunk-neon') {
                $variations = [
                    ['Neon City', 'contrast-125 brightness-110 hue-rotate-[180deg] saturate-150 border-4 border-fuchsia-500 shadow-[0_0_15px_rgba(217,70,239,0.5)]'],
                    ['Night Life', 'contrast-150 brightness-75 saturate-200 border-4 border-blue-500 shadow-[0_0_15px_rgba(59,130,246,0.5)]'],
                    ['Matrix', 'contrast-125 brightness-110 hue-rotate-[90deg] saturate-100 border-4 border-green-500 shadow-[0_0_15px_rgba(34,197,94,0.5)]'],
                    ['Blade Runner', 'sepia-[.2] contrast-125 brightness-90 saturate-150 border-4 border-orange-500 shadow-[0_0_15px_rgba(249,115,22,0.5)]']
                ];
                $styleName = $variations[$i][0];
                $styleClass = $variations[$i][1];
            } elseif ($this->boothTheme === 'classic-bw') {
                $variations = [
                    ['Noir', 'grayscale contrast-150 brightness-90 border-4 border-black'],
                    ['Soft B&W', 'grayscale contrast-110 brightness-110 border-4 border-gray-200'],
                    ['High Contrast', 'grayscale contrast-200 brightness-100 border-4 border-gray-800'],
                    ['Faded Mono', 'grayscale contrast-75 brightness-125 border-4 border-gray-400']
                ];
                $styleName = $variations[$i][0];
                $styleClass = $variations[$i][1];
            } elseif ($this->boothTheme === 'warm-sepia') {
                $variations = [
                    ['Vintage', 'sepia contrast-110 brightness-100 border-4 border-amber-200'],
                    ['Golden Hour', 'sepia-[.5] contrast-105 brightness-110 saturate-150 border-4 border-orange-200'],
                    ['Old Photo', 'sepia contrast-125 brightness-90 grayscale-[.2] border-4 border-stone-300'],
                    ['Nostalgia', 'sepia-[.3] contrast-90 brightness-105 border-4 border-yellow-100']
                ];
                $styleName = $variations[$i][0];
                $styleClass = $variations[$i][1];
            } else {
                $styleName = 'Standard';
                $styleClass = 'border-4 border-white';
            }

            $this->generatedImages[] = [
                'type' => 'booth',
                'url' => $url,
                'style' => $styleName,
                'class' => $styleClass . ' w-full h-full shadow-xl',
                'wrapper_class' => $layoutClass,
                'overlay_text' => $this->layout === 'photo-strip' ? '3 FRAMES' : ($this->layout === '4r-grid' ? '6 FRAMES' : '')
            ];
        }
    }

    public function generatePromptFromImage()
    {
        $this->validate([
            'photo' => 'required',
        ]);

        // Simulate AI analysis delay
        sleep(1);

        // Mock generated prompt with random variations to feel more "AI"
        $prompts = [
            "A futuristic product shot with neon lighting, cyberpunk aesthetic, 8k resolution, highly detailed, cinematic lighting.",
            "Minimalist studio photography, soft pastel background, professional lighting, 4k, award-winning composition.",
            "Vintage 90s film style, grainy texture, warm tones, nostalgic atmosphere, photorealistic.",
            "Luxury product display on black marble, gold accents, dramatic spotlight, high contrast, elegant vibe."
        ];

        $this->prompt = $prompts[array_rand($prompts)];
    }

    public function generate()
    {
        // Allow generation without prompt for auto-trigger, but validate if manually called without photo
        // Allow generation without prompt for auto-trigger, but validate if manually called without photo
        if (!$this->photo && empty($this->prompt) && !in_array($this->activeTab, ['photobot', 'foto-mockup', 'foto-baner'])) {
             $this->validate([
                'prompt' => 'required|min:3',
            ]);
        }

        $this->isGenerating = true;

        // Simulate AI processing delay
        sleep(2);

        $url = $this->photo ? $this->photo->temporaryUrl() : 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80';

        $ratioClass = match($this->aspectRatio) {
            '9:16' => 'aspect-[9/16]',
            '16:9' => 'aspect-video',
            default => 'aspect-square',
        };

        if ($this->activeTab === 'photo-produk') {
            $this->generatedImages = [
                [
                    'type' => 'style',
                    'url' => $url, 
                    'style' => 'Neon Cyberpunk',
                    'class' => 'ring-4 ring-pink-500 shadow-[0_0_30px_rgba(236,72,153,0.9)] contrast-125 hue-rotate-15 saturate-200 brightness-110 w-full h-full object-cover',
                    'wrapper_class' => $ratioClass
                ],
                [
                    'type' => 'style',
                    'url' => $url, 
                    'style' => 'Vintage Polaroid',
                    'class' => 'p-4 bg-white shadow-2xl rotate-2 sepia contrast-110 brightness-110 grayscale-[0.2] w-full h-full object-cover',
                    'wrapper_class' => 'bg-stone-200 p-6 ' . $ratioClass
                ],
                [
                    'type' => 'style',
                    'url' => $url, 
                    'style' => 'Cinematic Moody',
                    'class' => 'brightness-75 contrast-150 grayscale-[0.4] shadow-2xl rounded-lg ring-1 ring-gray-800 w-full h-full object-cover',
                    'wrapper_class' => $ratioClass
                ],
                [
                    'type' => 'style',
                    'url' => $url, 
                    'style' => 'Modern Gradient',
                    'class' => 'rounded-2xl p-1.5 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 shadow-xl w-full h-full',
                    'inner_class' => 'rounded-xl bg-white h-full w-full object-cover',
                    'wrapper_class' => $ratioClass
                ],
            ];
        } elseif ($this->activeTab === 'photobot') {
            $this->applyThemeToImages();
        } elseif ($this->activeTab === 'foto-mockup') {
            $this->generatedImages = [];
            
            if ($this->mockupType === 'apparel') {
                $this->generatedImages = [
                    ['type' => 'mockup', 'url' => $url, 'style' => 'T-Shirt White', 'class' => 'mask mask-squircle bg-gray-100'],
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Hoodie Black', 'class' => 'rounded-lg border-4 border-gray-800 brightness-90'],
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Cap', 'class' => 'rounded-full border-4 border-white shadow-lg'],
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Tote Bag', 'class' => 'sepia-[.2] rounded-md border-2 border-stone-300']
                ];
            } elseif ($this->mockupType === 'branding') {
                $this->generatedImages = [
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Business Card', 'class' => 'rounded shadow-xl rotate-3 scale-90 bg-white p-2'],
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Mug Ceramic', 'class' => 'rounded-full border-4 border-white shadow-lg'],
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Notebook', 'class' => 'rounded-r-lg border-l-8 border-gray-700 shadow-md'],
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Paper Bag', 'class' => 'rounded-sm border-b-4 border-yellow-600 shadow-xl']
                ];
            } elseif ($this->mockupType === 'tech') {
                $this->generatedImages = [
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Phone Case', 'class' => 'rounded-[2rem] border-8 border-gray-900 shadow-2xl'],
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Laptop Screen', 'class' => 'rounded-t-lg border-x-8 border-t-8 border-gray-800 shadow-2xl'],
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Tablet', 'class' => 'rounded-xl border-8 border-gray-800 shadow-xl'],
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Smart Watch', 'class' => 'rounded-[2.5rem] border-8 border-gray-700 shadow-lg scale-75']
                ];
            } else {
                 // Fallback to mixed
                 $this->generatedImages = [
                    ['type' => 'mockup', 'url' => $url, 'style' => 'T-Shirt', 'class' => 'mask mask-squircle'],
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Mug', 'class' => 'rounded-full border-4 border-white'],
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Phone Case', 'class' => 'rounded-[2rem] border-8 border-gray-800'],
                    ['type' => 'mockup', 'url' => $url, 'style' => 'Business Card', 'class' => 'rounded shadow-lg rotate-2']
                ];
            }
        } elseif ($this->activeTab === 'foto-baner') {
            $this->generatedImages = [
                [
                    'type' => 'banner',
                    'url' => $url,
                    'style' => 'Big Sale',
                    'overlay_text' => 'BIG SALE 50%',
                    'class' => 'border-4 border-red-500 w-full h-full object-cover',
                    'wrapper_class' => $ratioClass
                ],
                [
                    'type' => 'banner',
                    'url' => $url,
                    'style' => 'New Arrival',
                    'overlay_text' => 'NEW ARRIVAL',
                    'class' => 'border-b-8 border-indigo-500 w-full h-full object-cover',
                    'wrapper_class' => $ratioClass
                ],
                [
                    'type' => 'banner',
                    'url' => $url,
                    'style' => 'Special Event',
                    'overlay_text' => 'SPECIAL EVENT',
                    'class' => 'ring-4 ring-yellow-400 w-full h-full object-cover',
                    'wrapper_class' => $ratioClass
                ],
                [
                    'type' => 'banner',
                    'url' => $url,
                    'style' => 'Exclusive',
                    'overlay_text' => 'EXCLUSIVE',
                    'class' => 'grayscale w-full h-full object-cover',
                    'wrapper_class' => $ratioClass
                ],
            ];
        }
        
        $this->isGenerating = false;
    }



    public function render()
    {
        return view('livewire.photo-pintar')->layout('layouts.news');
    }
}
