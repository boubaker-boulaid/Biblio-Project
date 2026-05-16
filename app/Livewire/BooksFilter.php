<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class BooksFilter extends Component
{
    use WithPagination;
    public $sort = 'sort_newest';

    public function updatedSort()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Book::query();

        if ($this->sort === 'sort_newest') {
            $query->latest();
        } elseif ($this->sort === 'sort_oldest') {
            $query->oldest();
        } elseif ($this->sort === 'sort_title') {
            $query->orderBy('designation', 'asc');
        } elseif ($this->sort === 'sort_price_high_low') {
            $query->orderBy('prix', 'desc');
        } elseif ($this->sort === 'sort_price_low_high') {
            $query->orderBy('prix', 'asc');
        }   

        $books = $query->paginate(4);

        return view('livewire.books-filter', [
            'books' => $books,
            'booksCount' => $books->total(),
        ]);
    }
}
