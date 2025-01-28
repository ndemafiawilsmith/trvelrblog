<?php

namespace App\Livewire\Front;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // Get the main blog post (latest published blog post)
        $mainBlog = Post::where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->first();

        // Get the next 4 trending blog posts, excluding the main blog
        $trending = Post::where('status', 'published')
            ->where('id', '!=', $mainBlog->id) // Exclude the main blog post
            ->orderBy('published_at', 'desc')
            ->take(4)
            ->get();

        // Get other blogs, excluding the main and trending blogs
        $excludedIds = collect([$mainBlog->id])->merge($trending->pluck('id'))->toArray();

        $otherBlogs = Post::where('status', 'published')
            ->whereNotIn('id', $excludedIds) // Exclude already displayed blogs
            ->orderBy('published_at', 'desc')
            ->paginate(10); // Paginate to control the number of results

        // Fetch all categories
        $categories = Category::all();

        return view('livewire.front.index', compact('mainBlog', 'trending', 'otherBlogs', 'categories'));
    }
}
