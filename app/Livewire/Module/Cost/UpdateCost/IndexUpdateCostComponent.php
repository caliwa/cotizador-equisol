<?php

namespace App\Livewire\Module\Cost\UpdateCost;

use Livewire\Component;
use Livewire\Attributes\On;
use Masmerise\Toaster\Toaster;
use Livewire\Attributes\Isolate;
use Illuminate\Support\Facades\DB;
use App\Livewire\Module\Traits\AdapterLivewireExceptionTrait;
use App\Livewire\Module\Traits\AdapterValidateLivewireInputTrait;

#[Isolate]
class IndexUpdateCostComponent extends Component
{
    use AdapterLivewireExceptionTrait,
        AdapterValidateLivewireInputTrait;

    public $variables_purchase_request = [];

    public $nextIdxArray;

    public $flatpickr_es;
    
    public $flag_reset_purchase_request = false;
    
    public function mount(){
        $this->variables_purchase_request = $this->Get_InitPurchaseRequestValues();
        
        $this->flatpickr_es = "locale:{firstDaycOfWeek:1,weekdays:{shorthand:['Do','Lu','Ma','Mi','Ju','Vi','Sa'],longhand:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado']},months:{shorthand:['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],longhand:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']}}";

        $this->nextIdxArray = count($this->variables_purchase_request) + 1;
        $this->dispatch('EscapeEnabled');
    }

    public function OpenVerifyExchangeRateModal(){
        $this->dispatch('mediator-mount-verify-exchange-rate-modal');   

        $this->resetErrorBag();
    }

    public function Get_InitPurchaseRequest(){
        return ['TimeName'=>'','Courier'=>'','AirType'=>'','MaritimeType'=>''];
    }

    public function Get_InitPurchaseRequestValues(){
        return [
            [
                'TimeName' => 'Italia',
                'Courier' => '4',
                'AirType' => '24',
                'MaritimeType' => '49'
            ],
            [
                'TimeName' => 'Dinamarca',
                'Courier' => '4',
                'AirType' => '24',
                'MaritimeType' => '49'
            ],
            [
                'TimeName' => 'Suecia',
                'Courier' => '4',
                'AirType' => '24',
                'MaritimeType' => '49'
            ],
            [
                'TimeName' => 'Inglaterra',
                'Courier' => '4',
                'AirType' => '24',
                'MaritimeType' => '49'
            ],
            [
                'TimeName' => 'Holanda',
                'Courier' => '4',
                'AirType' => '24',
                'MaritimeType' => '49'
            ],
            [
                'TimeName' => 'Alemania',
                'Courier' => '4',
                'AirType' => '24',
                'MaritimeType' => '49'
            ],
            [
                'TimeName' => 'Finlandia',
                'Courier' => '4',
                'AirType' => '24',
                'MaritimeType' => '49'
            ],
            [
                'TimeName' => 'Francia',
                'Courier' => '4',
                'AirType' => '24',
                'MaritimeType' => '49'
            ],
            [
                'TimeName' => 'Bélgica',
                'Courier' => '4',
                'AirType' => '24',
                'MaritimeType' => '49'
            ],
            [
                'TimeName' => 'USA',
                'Courier' => '3',
                'AirType' => '27',
                'MaritimeType' => '39'
            ],
            [
                'TimeName' => 'Brasil',
                'Courier' => '6',
                'AirType' => '29',
                'MaritimeType' => '54'
            ],
            [
                'TimeName' => 'Argentina',
                'Courier' => '4',
                'AirType' => '25',
                'MaritimeType' => '54'
            ],
            [
                'TimeName' => 'China',
                'Courier' => '8',
                'AirType' => '34',
                'MaritimeType' => '80'
            ],
            [
                'TimeName' => 'Taiwan',
                'Courier' => '8',
                'AirType' => '34',
                'MaritimeType' => '80'
            ],
            [
                'TimeName' => 'Australia',
                'Courier' => '8',
                'AirType' => '34',
                'MaritimeType' => '80'
            ],
            [
                'TimeName' => 'España',
                'Courier' => '6',
                'AirType' => '29',
                'MaritimeType' => '59'
            ]
        ];

    }

    public function GenerateRequestPurchaseRequest(){
        $this->dispatch('mediator-mount-calculate-absolute-frequency-modal');

        $this->resetErrorBag();

    }

    public function AdapterVariablesValidationLivewire($idx, $msg)
    {        
        // $this->validate([
        //     'variables_purchase_request.'.$idx.'.ItemCode' => 'required'
        // ], [
        //     'variables_purchase_request.'.$idx.'.ItemCode.required' => $msg . " (ARTÍCULO)"
        // ]);
        
        // $this->validate([
        //     'variables_purchase_request.'.$idx.'.TimeName' => 'required'
        // ], [
        //     'variables_purchase_request.'.$idx.'.TimeName.required' => $msg . " (DESCRIPCIÓN)"
        // ]);
        
        // $this->validate([
        //     'variables_purchase_request.'.$idx.'.Courier' => 'required'
        // ], [
        //     'variables_purchase_request.'.$idx.'.Courier.required' => $msg . " (TEXTO LIBRE)"
        // ]);
        
        // $this->validate([
        //     'variables_purchase_request.'.$idx.'.AirType' => 'required'
        // ], [
        //     'variables_purchase_request.'.$idx.'.AirType.required' => $msg . " (CANTIDAD NECESARIA)"
        // ]);

        // $this->validate([
        //     'variables_purchase_request.'.$idx.'.AirType' => 'gt:0'
        // ], [
        //     'variables_purchase_request.'.$idx.'.AirType.gt' => $msg . " (CANTIDAD NECESARIA MAYOR A 0)"
        // ]);

        // $this->validate([
        //     'variables_purchase_request.'.$idx.'.MaritimeType' => 'required'
        // ], [
        //     'variables_purchase_request.'.$idx.'.MaritimeType.required' => $msg . " (INDICADOR IMPUESTO)"
        // ]);
        
        // $this->validate([
        //     'variables_purchase_request.'.$idx.'.ProjectCode' => 'required'
        // ], [
        //     'variables_purchase_request.'.$idx.'.ProjectCode.required' => $msg . " (PROYECTO)"
        // ]);
        
        // $this->validate([
        //     'variables_purchase_request.'.$idx.'.WarehouseCode' => 'required'
        // ], [
        //     'variables_purchase_request.'.$idx.'.WarehouseCode.required' => $msg . " (ALMACÉN)"
        // ]);
        
        // $this->validate([
        //     'variables_purchase_request.'.$idx.'.CostingCode' => 'required'
        // ], [
        //     'variables_purchase_request.'.$idx.'.CostingCode.required' => $msg . " (CENTRO OPERACIONES)"
        // ]);
        
        // $this->validate([
        //     'variables_purchase_request.'.$idx.'.CostingCode3' => 'required'
        // ], [
        //     'variables_purchase_request.'.$idx.'.CostingCode3.required' => $msg . " (CENTRO COSTOS)"
        // ]);
        
        // $this->validate([
        //     'variables_purchase_request.'.$idx.'.CostingCode4' => 'required'
        // ], [
        //     'variables_purchase_request.'.$idx.'.CostingCode4.required' => $msg . " (DEPARTAMENTOS)"
        // ]);
        
        // $this->validate([
        //     'variables_purchase_request.'.$idx.'.Description' => 'required'
        // ], [
        //     'variables_purchase_request.'.$idx.'.Description.required' => $msg . " (DESCRIPCIÓN ADICIONAL)"
        // ]);
        
        // $this->validate([
        //     'variables_purchase_request.'.$idx.'.LineVendor' => 'required'
        // ], [
        //     'variables_purchase_request.'.$idx.'.LineVendor.required' => $msg . " (PROVEEDOR)"
        // ]);
    }

    public function AddValueInputVariables(){
        $this->resetErrorBag();
        array_push($this->variables_purchase_request, $this->nextIdxArray);
        $this->variables_purchase_request[count($this->variables_purchase_request) - 1] = $this->Get_InitPurchaseRequest();
        $this->nextIdxArray += 1;

        Toaster::success('Fila agregada');
        $this->dispatch('EscapeEnabled');
    }

    public function RemoveValidationDispatch($idx){
        $this->resetErrorBag();

        if($this->nextIdxArray == 2){
            $this->dispatch("confirm-validation-modal", 'No puede borrar el único registro del listado Solicitud de Compra!');
            $this->dispatch('EscapeEnabled');
            return;
        }

        $message = '¿Está seguro de eliminar el registro Nro.' . ($idx + 1) . ' del listado?';

        $sub_dict = [
            'idx' => $idx,
        ];

        $mediator_dict = [
            'message' => $message,
            'livewire_dispatch' => 'dichotomic-to-remove-input-variables-purchase-request',
            'sub_dict' =>  $sub_dict
        ];

        $this->dispatch('EscapeEnabled');
        $this->dispatch('mediator-mount-dichotomic-asking-modal', $mediator_dict);
    }

    #[On('dichotomic-to-remove-input-variables-purchase-request')]
    public function RemoveInputVariables($dict){
        $idx = $dict['idx'];

        $this->nextIdxArray -= 1;

        unset($this->variables_purchase_request[$idx]);
        $this->variables_purchase_request = array_values($this->variables_purchase_request);


        if(!$this->flag_reset_purchase_request){
            Toaster::warning('Registro eliminado');
            $this->dispatch('MediatorSetModalFalse', 'isVisibleDichotomicAskingModal');
            $this->dispatch('EscapeEnabled');
        }
    }

    public function DuplicateItem($idx){
        $this->variables_purchase_request[] = $this->variables_purchase_request[$idx];
        $this->nextIdxArray += 1;

        Toaster::info('Registro duplicado');
        $this->dispatch('MediatorSetModalFalse', 'isVisibleDichotomicAskingModal');
        $this->dispatch('EscapeEnabled');
    }

    public function ResetPurchaseRequestComponent(){
        $this->reset(['RequriedDate', 'DocNumSAP']);

        $this->variables_purchase_request[0] = $this->Get_InitPurchaseRequest();

        $idx = $this->nextIdxArray - 2;

        $this->flag_reset_purchase_request = true;

        while($idx > 0){
            $sub_dict = [
                'idx' => $idx
            ];
            $this->RemoveInputVariables($sub_dict);
            $idx = $idx - 1;
        }
        $this->reset(['flag_reset_purchase_request']);
    }


    public function ToastInfoModule()
    {
        Toaster::info('Usted se encuentra en Actualización Costo');
    }
    public function render()
    {
        return view('livewire.module.cost.update-cost.index-update-cost-component');
    }
}
