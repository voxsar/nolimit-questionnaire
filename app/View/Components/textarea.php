<?php

namespace App\View\Components;

use Illuminate\View\Component;

class textarea extends Component
{
    public $label;
    public $name;
    public $help;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $help, $value = '')
    {
        //
        $this->label = $label;
        $this->name = $name;
        $this->help = $help;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.textarea');
    }
}
