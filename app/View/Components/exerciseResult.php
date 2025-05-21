<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class exerciseResult extends Component
{
    public $idBtn;
    public $idInput;

    /**
     * Create a new component instance.
     */
    public function __construct($idBtn, $idInput)
    {
        $this->idBtn = $idBtn;
        $this->idInput = $idInput;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.exercise-result');
    }
}
