<?php

namespace App\Livewire\Module\Cost\UpdateCost;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Lazy;
use App\Livewire\Module\Traits\ModalEnableTrait;
use App\Livewire\Module\Traits\EscapeEnableTrait;
use App\Livewire\Module\Traits\AdapterLivewireExceptionTrait;

#[Lazy]
class MediatorUpdateCostComponent extends Component
{
    use AdapterLivewireExceptionTrait,
        ModalEnableTrait,
        EscapeEnableTrait;

    public $isProcessingEscape;

    public function MediatorInitialized(){
        $this->dispatch('unblock-sidebar');
    }

    #[On('mediator-mount-verify-exchange-rate-modal')]
    public function MediatorVerifyExchangeRateModal(){
        $this->dispatch('mount-verify-exchange-rate-modal');
    }

    #[On('mediator-mount-calculate-absolute-frequency-modal')]
    public function MediatorCalculateAbsoluteFrequencyModal(){
        $this->dispatch('mount-calculate-absolute-frequency-modal');
    }

    #[On('confirm-validation-modal')]
    public function MediatorConfirmValidationModal($aux_conf_val_modal){
        $this->dispatch('mount-confirm-validation', $aux_conf_val_modal);
    }

    #[On('mediator-mount-dichotomic-asking-modal')]
    public function MediatorDichotomicAskingModal($value){
        $this->dispatch('mount-dichotomic-asking-modal', $value);
    }

    public function render()
    {
        return view('livewire.module.cost.update-cost.mediator-update-cost-component');
    }
}
