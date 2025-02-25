<?php

namespace App\Livewire\Module\Menu;

use Livewire\Component;

class MediatorMainMenuComponent extends Component
{
    public function MediatorInitialized(){
        $this->dispatch('unblock-sidebar');
        // $this->js("initFlowbite()");
    }

    public function render()
    {
        return view('livewire.module.menu.mediator-main-menu-component');
    }
}
