<?php

namespace App\Livewire;

use Livewire\Component;

class Landing extends Component
{
    public $slides = [
        [
            'image' => 'https://images.pexels.com/photos/1365425/pexels-photo-1365425.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        ],
        [
            'image' => 'https://images.pexels.com/photos/2161467/pexels-photo-2161467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        ],
        [
            'image' => 'https://images.pexels.com/photos/8828328/pexels-photo-8828328.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        ],
    ];

    public $editorsPicks = [
        [
            'title' => 'Lekki Conservation Center',
            'image' => 'assets/img/locations/dora-img-1.png',
            'category' => 'Lifestyle',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => 'Badagry Black Heritage Adventure',
            'image' => 'assets/img/locations/dora-img-2.png',
            'category' => 'Photography',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => 'Coscharis Assembly Plant',
            'image' => 'assets/img/locations/dora-img-3.png',
            'category' => 'Business',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => 'Ibadan Cultural and Historical Tour',
            'image' => 'assets/img/locations/dora-img-4.png',
            'category' => 'Sports',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => 'Splurge Or Save: Last Minute Pampering Gift Ideas',
            'image' => 'assets/img/locations/dora-img-1.png',
            'category' => 'Education',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => 'How To Make Your Life Routine More Fun And Eco-friendly',
            'image' => 'assets/img/locations/dora-img-2.png',
            'category' => 'Technology',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
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

    public function render()
    {
        return view('livewire.landing');
    }
}
