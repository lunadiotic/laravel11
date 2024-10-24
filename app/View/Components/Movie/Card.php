<?php

namespace App\View\Components\Movie;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Card extends Component
{
    public $index;
    public $title;
    public $releasedate;
    public $image;

    /**
     * Create a new component instance.
     */
    public function __construct($index, $title, $releasedate, $image)
    {
        $this->index = $index;
        $this->title = $title;
        $this->releasedate = $releasedate;
        $this->image = $image;

        if ($this->isValid()) {
            $this->title = Str::upper($title);
            $this->releasedate = Carbon::parse($releasedate)->format('M d, Y');
        }
    }

    private function isValid(): bool
    {
        return $this->title && $this->releasedate;
    }

    public function getImage(): string
    {
        if ($this->image) {
            return $this->image;
        }
        return 'https://via.placeholder.com/300x450';
    }

    public function isReleased(): bool
    {
        return $this->releasedate;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if (!$this->isValid()) {
            return '';
        }
        return view('components.movie.card');
    }
}
