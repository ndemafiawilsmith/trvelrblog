<?php

namespace App\Livewire\Blog;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class ByCategory extends Component
{
    public $category;
    public function mount($slug)
    {
        $this->category = Category::where('slug', $slug)->firstOrFail()->id;
    }


    public function render()
    {
        // Fetch the blogs for the specified category
        $blogs = Post::where('category_id', $this->category)
            ->orderBy('created_at', 'desc') // Optional: Order by creation date (most recent first)
            ->paginate(10); // Optional: Add pagination for better performance and user experience

        // Return the view with the blogs data
        return view('livewire.blog.by-category', compact('blogs'));
    }
}
