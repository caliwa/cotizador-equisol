<?php

namespace App\Livewire\Module\Traits;

trait AdapterNoSymbolsCleaveZenJSTrait {

    public function noSymbolsCleaveZenJS($ArrayNumberString, $data_get_set = false){

        foreach ($ArrayNumberString as $NumberStringProperty) {
            $property_name = $NumberStringProperty['property_name'];
            $decimals = $NumberStringProperty['decimals'];

            if($data_get_set){
                $value_set = $this->convertionSymbolsCleaveZenJS(data_get($this, $property_name), $decimals);

                data_set($this, $property_name, $value_set);

            }else if(property_exists($this, $property_name))
            {
                $this->$property_name = $this->convertionSymbolsCleaveZenJS($this->$property_name, $decimals);
            }
        }

        return true;
    }

    private function convertionSymbolsCleaveZenJS($numberString, $decimals){
        $numberString = trim($numberString);
        
        if (empty($numberString) || !preg_match('/[0-9]/', $numberString)) {
            return '';
        }
        
        $cleanNumber = preg_replace('/^[^0-9]+|[^0-9.]+$/', '', $numberString);
        
        $withoutCommas = str_replace(',', '', $cleanNumber);
        
        if (empty($withoutCommas) || !preg_match('/[0-9]/', $withoutCommas)) {
            return '';
        }
        
        $parts = explode('.', $withoutCommas);
        
        $integerPart = $parts[0];
        
        if (isset($parts[1])) {
            $decimalPart = substr($parts[1], 0, $decimals);
            $decimalPart = str_pad($decimalPart, $decimals, '0');
        } else {
            $decimalPart = str_repeat('0', $decimals);
        }
        
        if (empty($integerPart) && preg_match('/^0*$/', $decimalPart)) {
            return '';
        }
        
        return $integerPart . ($decimals > 0 ? '.' . $decimalPart : '');
    }
}