<?php

namespace App\View\Components;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class MovieCard extends Component
{
    public $index;
    public $title;
    public $releasedate;
    public $image;

    /**
     * Create a new component instance.
     */
    public function __construct($index, $image = null, $title, $releasedate)
    {
        $this->index = $index;
        $this->image = $image;
        $this->title = $title;
        $this->releasedate = $releasedate;
    }

    public function getImage()
    {
        if ($this->image) {
            return $this->image;
        }
        return 'https://via.placeholder.com/300x450';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->title = Str::upper($this->title);
        $this->releasedate = Carbon::parse($this->releasedate)->format('M d, Y');
        return view('components.movie-card');
    }
}
