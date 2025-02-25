<?php

namespace App\Livewire\Layouts;

use Livewire\Component;
use Livewire\Attributes\Isolate;

#[Isolate]
class NavbarDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.layouts.navbar-dashboard-component');
    }
}
