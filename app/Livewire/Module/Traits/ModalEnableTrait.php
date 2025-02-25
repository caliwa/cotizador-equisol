<?php

namespace App\Livewire\Module\Traits;

use Livewire\Attributes\On;

trait ModalEnableTrait
{
    #[On('MediatorSetModalTrue')]
    public function SetModalTrue($modal_to_invisible){
        // if (property_exists($this, $modal_to_invisible)) {
            $this->dispatch($modal_to_invisible, true);
            // $this->$modal_to_invisible = true;
        // }
    }

    #[On('MediatorSetModalFalse')]
    public function SetModalFalse($modal_to_invisible){
        // if (property_exists($this, $modal_to_invisible)) {
            $this->dispatch($modal_to_invisible, false);
            // $this->$modal_to_invisible = false;
        // }
    }

    #[On('OnlyMediatorSetModalFalse')]
    public function OnlySetModalFalse($modal_to_invisible){
        if (property_exists($this, $modal_to_invisible)) {
            $this->$modal_to_invisible = false;
        }
    }

    
}