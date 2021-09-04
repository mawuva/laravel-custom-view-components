<?php

namespace Mawuekom\Customponents\View\Components\Resources;

use Illuminate\View\Component;

class Assets extends Component
{
    /** @var string */
    public $type;

    /** @var string */
    public $path;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $type, string $path, $external = false)
    {
        $this ->type = $type;
        $this ->path = $external ? $path : asset($path);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('customponents::components.resources.assets');
    }
}