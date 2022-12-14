<?php

namespace App\View\Components;

use App\Models\BlogCategory;
use App\Models\Logo;
use Illuminate\View\Component;

class WebHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
         $logo = Logo::where('id', 1)->first();
         $categories =  BlogCategory::select('id', 'category_name')->where('status', 1)->get();
         return view('components.web-header', compact ('logo', 'categories'));
    }
}
