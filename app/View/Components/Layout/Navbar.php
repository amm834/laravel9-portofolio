<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navItems = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->some = 'some';
        $this->navItems = [
            ['label' => 'About', 'href' => '#about'],
            ['label' => 'Projects', 'href' => '#portofolio'],
            ['label' => 'Coding Tutorials', 'href' => '#tutorials'],
            ['label' => 'Contact', 'href' => '#contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.navbar');
    }
}
