<?php

namespace App\Livewire\Layouts;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Isolate;

#[Isolate]
class SidebarComponent extends Component
{
    public $blocked_sidebar = true;

    #[On('unblock-sidebar')]
    public function UnblockSidebar(){
        $this->blocked_sidebar = false;
    }
    
    public function render()
    {
        return view('livewire.layouts.sidebar-component');
    }
}
