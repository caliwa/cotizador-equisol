<?php

namespace App\Livewire\Module\Cost\UpdateCost;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Isolate;
use App\Livewire\Module\Traits\CloseModalClickTrait;

#[Isolate]
class VerifyExchangeRateComponent extends Component
{
    use CloseModalClickTrait;

    public $isVisibleVerifyExchangeRateModal = false;

    public $variables_exchange_rate = [];
    
    #[On('isVisibleVerifyExchangeRateModal')]
    public function setModalVariable($value){
        $this->ResetModalVariables();
        $this->isVisibleVerifyExchangeRateModal = $value;
    }

    #[On('mount-verify-exchange-rate-modal')]
    public function mount_artificially(){
        $this->variables_exchange_rate = $this->Get_InitVerifyExchangeValues();
        $this->isVisibleVerifyExchangeRateModal = true;
        $this->dispatch('EscapeEnabled');
    }
    
    public function Get_InitVerifyExchangeValues(){
        return [
            [
                'Currency' => 'US$',
                'CurrencyValue' => '4150.00',
            ],
            [
                'Currency' => '€',
                'CurrencyValue' => '4500.00',
            ],
            [
                'Currency' => 'GBP',
                'CurrencyValue' => '5800.00',
            ],
        ];
    }

    public function ResetModalVariables(){
        $this->resetErrorBag();
        $this->reset(array_keys($this->all()));
    }


    public function render()
    {
        return view('livewire.module.cost.update-cost.verify-exchange-rate-component');
    }
}
