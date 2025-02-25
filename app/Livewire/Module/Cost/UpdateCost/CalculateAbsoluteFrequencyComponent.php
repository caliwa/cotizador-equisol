<?php

namespace App\Livewire\Module\Cost\UpdateCost;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Livewire\Module\Traits\CloseModalClickTrait;

class CalculateAbsoluteFrequencyComponent extends Component
{
    use CloseModalClickTrait;

    public $isVisibleCalculateAbsoluteFrequencyModal = false;

    public $l1 = 0;
    public $l2 = 0; 
    public $l3 = 0;
    
    // Peso, Volumen, Peso en Volumen y Peso de Cobro
    public $w = 0;
    public $vol = 0;
    public $wv = 0;
    public $wc = 0;
    public $wt = 0;
    
    // Tasas de cambio
    public $tcus = 0;
    public $tceu = 0;
    public $tcdk = 0;
    public $tcgb = 0;
    
    // Variables de transporte
    public $transporte = "Marítimo";
    public $origen = "Italia";
    public $zona = 0;
    
    // Costos
    public $pt = 0;
    public $cif = 0;
    public $ct = 0;
    public $tco = 0;
    public $tci = 0;
    public $total = 0;
    public $fi = 0;
    public $seguro = 0;
    
    // Arancel
    public $arancel = 0;
    public $aran = 0;
    public $multa = 0;
    
    // Días de entrega
    public $dias = 42;
    
    // Moneda
    public $moneda = "USD";
    
    // Estados de cálculo
    public $volCalculado = false;
    public $wcCalculado = false;
    public $diasCalculado = false;
    public $ctCalculado = false;
    public $coCalculado = false;
    public $cifCalculado = false;
    public $ciCalculado = false;
    public $fiCalculado = false;
    
    // Data tables (simularemos las hojas de Excel aquí)
    protected $costos_origen = [];
    protected $costos_internos = [];
    protected $tasas_transporte = [];
    protected $tiempos_entrega = [];

    #[On('isVisibleCalculateAbsoluteFrequencyModal')]
    public function setModalVariable($value){
        $this->ResetModalVariables();
        $this->isVisibleCalculateAbsoluteFrequencyModal = $value;
    }

    #[On('mount-calculate-absolute-frequency-modal')]
    public function mount_artificially(){
        $this->tcus = 1;
        $this->tceu = 1.08; // Ejemplo
        $this->tcgb = 1.27; // Ejemplo
        $this->tcdk = 0.14; // Ejemplo
        
        // Cargar datos de costos y tasas
        $this->cargarDatos();
        // $this->variables_exchange_rate = $this->Get_InitVerifyExchangeValues();
        $this->isVisibleCalculateAbsoluteFrequencyModal = true;
        $this->dispatch('EscapeEnabled');
    }

    private function cargarDatos()
    {
        // Aquí cargaríamos de la base de datos los valores que estaban en las hojas de Excel
        // Para este ejemplo, utilizaremos arrays hardcoded como ejemplo
        
        // Tiempos de entrega (simulando Hoja3)
        $this->tiempos_entrega = [
            'Italia' => ['Courrier' => 7, 'Aéreo' => 14, 'Marítimo' => 42],
            'Dinamarca' => ['Courrier' => 8, 'Aéreo' => 15, 'Marítimo' => 45],
            'USA' => ['Courrier' => 5, 'Aéreo' => 10, 'Marítimo' => 30],
            // Agregar más países según sea necesario
        ];
        
        // El resto de la carga de datos se implementaría de manera similar
    }
    
    // Eventos de activación
    public function activar()
    {
        $this->volCalculado = true;
        $this->wcCalculado = true;
        $this->diasCalculado = true;
        
        if ($this->wc != 0 && $this->pt != 0) {
            $this->ctCalculado = true;
            $this->coCalculado = true;
            $this->cifCalculado = true;
            $this->ciCalculado = true;
            $this->fiCalculado = true;
        }
        
        // Ejecutar cálculos cuando corresponda
        if ($this->volCalculado) {
            $this->calcularVolumen();
        }
        
        if ($this->wcCalculado) {
            $this->calcularPesoCobro();
        }
        
        if ($this->diasCalculado) {
            $this->calcularDiasEntrega();
        }
        
        if ($this->ctCalculado) {
            $this->calcularCostoTransporte();
        }
        
        if ($this->coCalculado) {
            $this->calcularCostosOrigen();
        }
        
        if ($this->cifCalculado) {
            $this->calcularCIF();
        }
        
        if ($this->ciCalculado) {
            $this->calcularCostosInternos();
        }
        
        if ($this->fiCalculado) {
            $this->calcularFactorImportacion();
        }
    }
    
    // Cálculo del volumen
    public function calcularVolumen()
    {
        $this->vol = ($this->l1 / 100) * ($this->l2 / 100) * ($this->l3 / 100);
    }
    
    // Cálculo del peso de cobro
    public function calcularPesoCobro()
    {
        // Cálculo del peso Volumétrico según tipo de transporte
        if ($this->transporte == "Marítimo") {
            $this->wv = $this->vol * 1000;
        } elseif ($this->transporte == "Aéreo") {
            $this->wv = $this->vol * 166.6666;
        } elseif ($this->transporte == "Courrier") {
            $this->wv = $this->vol * 200;
        }
        
        // Comparación entre peso Volumétrico y peso real
        if ($this->wv > $this->w) {
            $this->wc = $this->wv;
        } else {
            $this->wc = $this->w;
        }
        
        // Peso para transporte terrestre
        $this->wt = $this->vol * 400;
        if ($this->wt < $this->w) {
            $this->wt = $this->w;
        }
    }
    
    // Cálculo de días de entrega
    public function calcularDiasEntrega()
    {
        if (isset($this->tiempos_entrega[$this->origen][$this->transporte])) {
            $this->dias = $this->tiempos_entrega[$this->origen][$this->transporte];
        }
    }
    
    // Cálculo del costo de transporte
    public function calcularCostoTransporte()
    {
        $this->zona = 0;
        
        // Aquí iría la lógica para calcular CT según el transporte
        // Simularemos una fórmula simplificada basada en el tipo de transporte y el peso
        if ($this->transporte == "Courrier") {
            $this->ct = $this->wc * 10; // Simplificación
        } elseif ($this->transporte == "Aéreo") {
            $this->ct = $this->wc * 8; // Simplificación
        } elseif ($this->transporte == "Marítimo") {
            $this->ct = $this->wc * 5; // Simplificación
        }
        
        // Conversión de moneda si es necesario
        // Aquí irían las conversiones según el país de origen
    }
    
    // Cálculo de costos de origen
    public function calcularCostosOrigen()
    {
        $this->tco = 0 + $this->multa;
        
        // Aquí iría la lógica para calcular TCO
        // Simularemos un valor basado en el origen y el peso
        $this->tco += $this->wc * 2; // Simplificación
    }
    
    // Cálculo del CIF
    public function calcularCIF()
    {
        $this->seguro = 0.004 * ($this->pt + $this->tco + $this->ct);
        $this->cif = $this->pt + $this->tco + $this->ct + $this->seguro;
    }
    
    // Cálculo de costos internos
    public function calcularCostosInternos()
    {
        $this->tci = 0;
        
        // Aplicación de arancel
        if ($this->transporte == "Courrier") {
            if ($this->pt <= 2000 && $this->wc <= 70 && $this->l1 <= 120 && $this->l2 <= 120 && $this->l3 <= 120) {
                $this->aran = 10;
                $this->arancel = $this->aran * $this->cif / 100;
                
                // Aquí iría la lógica para calcular TCI para Courrier
                // Simularemos un valor
                $this->tci = $this->cif * 0.05; // Simplificación
            } else {
                session()->flash('error', 'Transporte courrier solo abarca mercancía de valor menor a 2000 USD, peso menor a 70 kg y ninguna dimensión puede exceder 120 cm. El resultado no es válido');
            }
        } else {
            if (empty($this->aran)) {
                $this->aran = 5; // Valor por defecto
            }
            
            $this->arancel = $this->aran * $this->cif / 100;
            
            // Aquí iría la lógica para calcular TCI para Aéreo o Marítimo
            // Simularemos un valor
            if ($this->transporte == "Aéreo") {
                $this->tci = $this->cif * 0.08; // Simplificación
            } else { // Marítimo
                $this->tci = $this->cif * 0.12; // Simplificación
            }
        }
    }
    
    // Cálculo del factor de importación
    public function calcularFactorImportacion()
    {
        $this->total = $this->cif + $this->tci + $this->arancel;
        $this->fi = ($this->total / $this->pt - 1) * 100;
    }
    
    // Selección de transporte
    public function setTransporte($tipo)
    {
        $this->transporte = $tipo;
        $this->activar();
    }
    
    // Selección de origen
    public function setOrigen($pais)
    {
        $this->origen = $pais;
        $this->activar();
    }
    
    // Selección de moneda
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;
        
        if ($moneda == "EUR" && !empty($this->pt)) {
            $this->pt = $this->pt * $this->tceu / $this->tcus;
        }
        
        $this->activar();
    }
    
    // Actualización de dimensiones
    public function updatedL1()
    {
        $this->activar();
    }
    
    public function updatedL2()
    {
        $this->activar();
    }
    
    public function updatedL3()
    {
        $this->activar();
    }
    
    // Actualización de peso
    public function updatedW()
    {
        $this->activar();
    }
    
    // Actualización del precio
    public function updatedPt()
    {
        if ($this->moneda == "EUR") {
            $this->pt = $this->pt * $this->tceu / $this->tcus;
        }
        
        $this->activar();
    }
    
    // Actualización de arancel
    public function updatedAran()
    {
        $this->activar();
    }
    
    // Actualización de multa
    public function updatedMulta()
    {
        $this->activar();
    }

    public function ResetModalVariables(){
        $this->resetErrorBag();
        $this->reset(array_keys($this->all()));
    }

    public function render()
    {
        return view('livewire.module.cost.update-cost.calculate-absolute-frequency-component');
    }
}
