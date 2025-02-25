<?php

namespace App\Livewire\Module\Traits;

trait AdapterValidateLivewireInputTrait
{
    public function validateLivewireInput($variables_validate){
        $dynamicRules = [];
        foreach ($variables_validate as $variable) {
            if (isset($this->getRules()[$variable])) {
                $rules = $this->getRules()[$variable];
                if (is_array($rules)) {
                    $dynamicRules[$variable] = implode('|', $rules);
                } else {
                    $dynamicRules[$variable] = $rules;
                }
            }
        }

        $this->validate($dynamicRules);
    }
}