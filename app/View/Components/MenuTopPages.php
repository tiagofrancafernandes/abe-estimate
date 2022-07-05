<?php

namespace App\View\Components;

use App\Models\Page;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class MenuTopPages extends Component
{
    public ?Collection $pages;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->pages = Page::where('active', true)
            ->select([
                'title',
                'slug',
            ])
            ->limit(10)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu-top-pages', [
            'pages' => $this->pages,
        ]);
    }
}
