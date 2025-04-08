<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Item;


class SearchResult extends Component
{

    public $query;
    public $results = [];

    public function mount()
    {
        $this->query = request()->query('query');

        $this->results = Item::where('title', 'like', "%{$this->query}%")
                            ->orWhere('description', 'like', "%{$this->query}%")
                            ->get();
    }

    public function render()
    {
        return view('livewire.search-result')->layout('livewire.layouts.app');
    }
}
