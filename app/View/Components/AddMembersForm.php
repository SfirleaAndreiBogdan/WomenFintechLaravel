<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddMembersForm extends Component
{
    public $action;
    public $method;
    public $fields;
    public function __construct($action,$method='POST',$fields=[])
    {
        $this->$action = $action;
        $this->$method = $method;
        $this->$fields = $fields;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.add-members-form');
    }
}
