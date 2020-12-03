<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $label;
    public $name;
    public $help;
    public $type;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $help, $type = 'text', $value = '')
    {
        //
        $this->label = $label;
        $this->name = $name;
        $this->help = $help;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
