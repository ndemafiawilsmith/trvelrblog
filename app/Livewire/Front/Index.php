<?php

namespace App\Livewire\Front;

use App\Mail\MyMail;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {

        // Mail::to('ivonjiaka68@gmail.com')->send(new MyMail());
        // Get the main blog post (latest published blog post)
        $mainBlog = Post::where('status', 'draft')
            ->orderBy('published_at', 'desc')
            ->first();

        // Ensure $mainBlog exists before using it
        if ($mainBlog) {
            $trending = Post::where('status', 'draft')
                ->where('id', '!=', $mainBlog->id) // Exclude the main blog post
                ->orderBy('published_at', 'desc')
                ->take(4)
                ->get();
        } else {
            $trending = Post::where('status', 'draft')
                ->orderBy('published_at', 'desc')
                ->take(4)
                ->get(); // Get trending blogs without excluding any
        }

        // Ensure $mainBlog is not null before accessing its ID
        $excludedIds = collect($mainBlog ? [$mainBlog->id] : [])->merge($trending->pluck('id'))->toArray();

        $otherBlogs = Post::where('status', 'draft')
            ->whereNotIn('id', $excludedIds) // Exclude already displayed blogs
            ->orderBy('published_at', 'desc')
            ->paginate(10); // Paginate to control the number of results

        // Fetch all categories
        $categories = Category::all();

        return view('livewire.front.index', compact('mainBlog', 'trending', 'otherBlogs', 'categories'));
    }
}
