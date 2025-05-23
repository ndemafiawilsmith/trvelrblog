<?php

namespace App\Livewire;

use Livewire\Component;

class FeaturedSlider extends Component
{
    public $editorsPicks = [];

    public function mount()
    {
        // Load the data when the component is mounted
        $this->editorsPicks = [
            [
                'title' => 'Lekki Conservation Center',
                'image' => 'assets/img/locations/dora-img-1.png',
                'category' => 'Lifestyle',
                'amount' => 'N120,000',
                'tour_type' => 'Private Sightseeing',
                'link' => 'business-details.html',
            ],
            [
                'title' => 'Badagry Black Heritage Adventure',
                'image' => 'assets/img/locations/dora-img-2.png',
                'category' => 'Photography',
                'amount' => 'N120,000',
                'tour_type' => 'Private Sightseeing',
                'link' => 'business-details.html',
            ],
            [
                'title' => 'Coscharis Assembly Plant',
                'image' => 'assets/img/locations/dora-img-3.png',
                'category' => 'Business',
                'amount' => 'N120,000',
                'tour_type' => 'Luxury Tour',
                'link' => 'business-details.html',
            ],
            [
                'title' => 'Ibadan Cultural and Historical Tour',
                'image' => 'assets/img/locations/dora-img-4.png',
                'category' => 'Sports',
                'amount' => 'N120,000',
                'tour_type' => 'Full Day Tour',
                'link' => 'business-details.html',
            ],
            [
                'title' => 'Splurge Or Save: Last Minute Pampering Gift Ideas',
                'image' => 'assets/img/locations/dora-img-1.png',
                'category' => 'Education',
                'amount' => 'N120,000',
                'tour_type' => 'Private Tour',
                'link' => 'business-details.html',
            ],
            [
                'title' => 'How To Make Your Life Routine More Fun And Eco-friendly',
                'image' => 'assets/img/locations/dora-img-2.png',
                'category' => 'Technology',
                'amount' => 'N120,000',
                'tour_type' => 'Tech Tour',
                'link' => 'business-details.html',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.featured-slider');
    }
}
