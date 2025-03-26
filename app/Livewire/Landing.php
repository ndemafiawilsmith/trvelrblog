<?php

namespace App\Livewire;

use Livewire\Component;

class Landing extends Component
{


    public $editorsPicks = [
        [
            'title' => 'Jiraiya Banks Wants To Teach You How To Build A House',
            'image' => 'assets/img/news/news-80.webp',
            'category' => 'Lifestyle',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => 'The Secret Math Behind Mind Reading Magic Tricks',
            'image' => 'assets/img/news/news-81.webp',
            'category' => 'Photography',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => 'Recovery And Cleanup In Florida After Hurricane Ian',
            'image' => 'assets/img/news/news-82.webp',
            'category' => 'Business',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => '6 Romantic Places You Want to Visit with Your Partner',
            'image' => 'assets/img/news/news-83.webp',
            'category' => 'Sports',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => 'Splurge Or Save: Last Minute Pampering Gift Ideas',
            'image' => 'assets/img/news/news-84.webp',
            'category' => 'Education',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => 'How To Make Your Life Routine More Fun And Eco-friendly',
            'image' => 'assets/img/news/news-85.webp',
            'category' => 'Technology',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
    ];
    public $countryPicks = [
        [
            'title' => 'Jiraiya Banks Wants To Teach You How To Build A House',
            'image' => 'assets/img/news/news-80.webp',
            'category' => 'Lifestyle',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => 'The Secret Math Behind Mind Reading Magic Tricks',
            'image' => 'assets/img/news/news-81.webp',
            'category' => 'Photography',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => 'Recovery And Cleanup In Florida After Hurricane Ian',
            'image' => 'assets/img/news/news-82.webp',
            'category' => 'Business',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => '6 Romantic Places You Want to Visit with Your Partner',
            'image' => 'assets/img/news/news-83.webp',
            'category' => 'Sports',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => 'Splurge Or Save: Last Minute Pampering Gift Ideas',
            'image' => 'assets/img/news/news-84.webp',
            'category' => 'Education',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
        [
            'title' => 'How To Make Your Life Routine More Fun And Eco-friendly',
            'image' => 'assets/img/news/news-85.webp',
            'category' => 'Technology',
            'date' => 'Feb 27, 2024',
            'read_time' => '15 Min Read',
            'link' => 'business-details.html',
        ],
    ];

    public function render()
    {
        return view('livewire.landing');
    }
}
