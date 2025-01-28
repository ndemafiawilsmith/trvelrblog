<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Traversable;

class Post extends Model
{
    use UUID;
    
    protected $fillable = [
        'title',
        'slug',
        'author_id',
        'excerpt',
        'content',
        'published_at',
        'featured_image',
        'category_id',
        'tags',
        'status',
        'meta_title',
        'meta_description',
        'seo_keywords',
    ];

    protected $casts = [
        'content' => 'array',
        'tags' => 'array',
        'seo_keywords' => 'array',
    ];


    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }


    // Define the relationship with the Category model
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function readingTime()
    {
        $totalWords = 0;
    
        // Ensure the 'content' attribute exists and is iterable
        if (is_array($this->content) || $this->content instanceof Traversable) {
            foreach ($this->content as $section) {
                if (isset($section['type'], $section['text']) && $section['type'] === 'text' && !empty($section['text'])) {
                    // Strip HTML tags and count words
                    $text = strip_tags($section['text']);
                    $wordCount = str_word_count($text);
    
                    $totalWords += $wordCount;
                }
            }
        }
    
        // Calculate reading time in minutes (assuming 225 words per minute)
        return ceil($totalWords / 225);
    }
}
