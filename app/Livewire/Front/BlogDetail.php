<?php

namespace App\Livewire\Front;

use App\Models\Post;
use App\Models\Resource;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Redis;
use Livewire\Component;

class BlogDetail extends Component
{
    public $id;
    public $pdfLink;
    public $email;
    public $link;
    public function mount($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $blog = Post::findorfail($this->id);
        // dd($blog->content);

        // Calculate Read Time 
        $totalWords = 0;

        foreach ($blog->content as $section) {
            if ($section['type'] === 'text' && !empty($section['text'])) {
                // Strip HTML tags and count words
                $text = strip_tags($section['text']); // Strip HTML tags
                $wordCount = str_word_count($text);   // Count words

                $totalWords += $wordCount;
            }
        }

        // Assuming average reading speed of 225 words per minute
        $averageReadingSpeed = 225;
        $minutesToRead = ceil($totalWords / $averageReadingSpeed);
        return view('livewire.front.blog-detail', with(compact('blog', 'minutesToRead')));
    }

    public function setLink($pdf){
        $this->pdfLink = $pdf;
        $this->dispatch('open-modal');
    }

    public function download(){
        $resource = Resource::findorfail($this->pdfLink);

        Subscriber::create([
            'email'=>$this->email,
            'resource_id'=>$this->pdfLink
        ]);

        if (file_exists($resource->url)) {
            return response()->download($resource->url);
        }

    }
}
