<?php

namespace App\View\Components;

use Illuminate\View\Component;
use phpDocumentor\Reflection\Type;

class Alert extends Component
{

    public $type, $message;

    public function __construct($type, $message)
    {
        $this->type = $type;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.alert');
    }
}
