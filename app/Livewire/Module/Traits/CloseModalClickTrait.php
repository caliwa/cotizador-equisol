<?php

namespace App\Livewire\Module\Traits;

trait CloseModalClickTrait
{
    public function CloseModalClick($modal_to_close){

        $this->dispatch('MediatorSetModalFalse', $modal_to_close);

    }
}