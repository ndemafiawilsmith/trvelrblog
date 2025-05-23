<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;



class TourMarketplace extends Component
{

    public $editorsPicks = [
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
    public $countries = [
        [
            'image' => 'assets/img/locations/dora-country-1.png',
            'flag-icon' => 'assets/img/flags/Ghana.png',
            'flag-name' => 'Ghana',

        ],
        [
            'image' => 'assets/img/locations/dora-country-2.png',
            'flag-icon' => 'assets/img/flags/Nigeria.png',
            'flag-name' => 'Nigeria',

        ],
        [
            'image' => 'assets/img/locations/dora-country-3.png',
            'flag-icon' => 'assets/img/flags/Kenya.png',
            'flag-name' => 'Kenya',

        ],
        [
            'image' => 'assets/img/locations/dora-country-4.png',
            'flag-icon' => 'assets/img/flags/Tanzania.png',
            'flag-name' => 'Tanzania',

        ],
        [
            'image' => 'assets/img/locations/dora-country-1.png',
            'flag-icon' => 'assets/img/flags/Ghana.png',
            'flag-name' => 'assets/img/flags/Ghana.png',

        ],
        [
            'image' => 'assets/img/locations/dora-country-2.png',
            'flag-icon' => 'assets/img/flags/Nigeria.png',
            'flag-name' => 'Nigeria',

        ],

    ];
    public $discoverAfrica = [
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
            'tour_type' => 'Historical Tour',
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
    public function render()
    {
        return view('livewire.pages.tour-marketplace')->layout('livewire.layouts.app', [
            'title' => 'Tour Marketplace', // Pass the title directly to the layout
        ]);
    }
}
