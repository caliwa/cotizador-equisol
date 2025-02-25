<div class="animate-window" x-data="{ 
    isVisibleCalculateAbsoluteFrequencyModal: $wire.entangle('isVisibleCalculateAbsoluteFrequencyModal').live,
}"

@keydown.escape.window.prevent="closeTopModal()"
>
{{-- MARK: RUT 1.1--}}
<div x-show="isVisibleCalculateAbsoluteFrequencyModal" 
    x-effect="
    if (isVisibleCalculateAbsoluteFrequencyModal && !modalStack.includes('isVisibleCalculateAbsoluteFrequencyModal')) {
        modalStack.push('isVisibleCalculateAbsoluteFrequencyModal');
        escapeEnabled = true; removeTabTrapListener();
    } else if (!isVisibleCalculateAbsoluteFrequencyModal) {
        modalStack = modalStack.filter(id => id !== 'isVisibleCalculateAbsoluteFrequencyModal');
    }
    focusModal(modalStack[modalStack.length - 1]);
    "
    >
    <div class="fixed top-0 left-0 w-screen h-screen bg-gray-900 bg-opacity-50 backdrop-blur-lg z-[29]"></div>
</div>
<div x-show="isVisibleCalculateAbsoluteFrequencyModal"
x-transition:enter="transition ease-out duration-1000"
x-transition:enter-start="opacity-0 scale-90"
x-transition:enter-end="opacity-100 scale-100"
x-transition:leave="transition ease-in duration-200"
x-transition:leave-start="opacity-100 scale-100"
x-transition:leave-end="opacity-0 scale-90"
    id="isVisibleCalculateAbsoluteFrequencyModal"
    class="transform-gpu perspective-1000 fixed overflow-x-hidden overflow-y-auto inset-0 z-30 items-center justify-center top-4 md:inset-0 h-modal sm:h-full">
    @if($isVisibleCalculateAbsoluteFrequencyModal)
    <div class="relative max-[639px]:w-full w-[45%] min-[640px]:min-w-[685px] min-[640px]:px-4 mx-auto pt-2">
        <div class="relative bg-white pt-2 rounded-lg shadow dark:bg-gray-800 overflow-y-auto m-auto">
            <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                <h3 class="text-xl font-semibold dark:text-white uppercase">
                    ● Tasa de Cambio (COP) <i class="fas fa-chart-line mr-2"></i>
                </h3>
                <button 
                wire:click="CloseModalClick('isVisibleCalculateAbsoluteFrequencyModal')"
                x-on:click="isVisibleCalculateAbsoluteFrequencyModal = false"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>
            {{-- MARK: RUT 1.1.1--}}
            <div class="bg-white dark:bg-gray-800" wire:key="Rut111">
                <div class="animate-tabmodal mb-2  max-[639px]:py-3 min-[640px]:p-6 space-y-6 space-x-6 bg-gray-300 min-[639px]:dark:bg-gray-800 border-b-white border-r-white border-l-white dark:border-black rounded-b-lg min-[1139px]:dark:bg-gray-900 min-[1139px]:mx-2">

                    <div>
                        <div class="container mx-auto p-4">
                            <h1 class="text-2xl font-bold mb-6">Cotizador de Importaciones</h1>
                            
                            @if (session()->has('error'))
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                                    {{ session('error') }}
                                </div>
                            @endif
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Panel de entrada de datos -->
                                <div class="bg-white p-4 rounded shadow">
                                    <h2 class="text-lg font-semibold mb-4">Datos del Producto</h2>
                                    
                                    <!-- Dimensiones -->
                                    <div class="mb-4">
                                        <h3 class="font-medium mb-2">Dimensiones (cm)</h3>
                                        <div class="grid grid-cols-3 gap-2">
                                            <div>
                                                <label class="block text-sm">Largo</label>
                                                <input type="number" wire:model.live="l1" class="w-full border rounded px-2 py-1">
                                            </div>
                                            <div>
                                                <label class="block text-sm">Ancho</label>
                                                <input type="number" wire:model.live="l2" class="w-full border rounded px-2 py-1">
                                            </div>
                                            <div>
                                                <label class="block text-sm">Alto</label>
                                                <input type="number" wire:model.live="l3" class="w-full border rounded px-2 py-1">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Peso -->
                                    <div class="mb-4">
                                        <label class="block text-sm mb-1">Peso Real (kg)</label>
                                        <input type="number" wire:model.live="w" class="w-full border rounded px-2 py-1">
                                    </div>
                                    
                                    <!-- Precio -->
                                    <div class="mb-4">
                                        <label class="block text-sm mb-1">Precio EXW</label>
                                        <div class="flex items-center">
                                            <input type="number" wire:model.live="pt" class="w-full border rounded-l px-2 py-1">
                                            <div class="flex border-t border-r border-b rounded-r">
                                                <button wire:click="setMoneda('USD')" class="px-2 py-1 {{ $moneda == 'USD' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">USD</button>
                                                <button wire:click="setMoneda('EUR')" class="px-2 py-1 {{ $moneda == 'EUR' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">EUR</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Arancel -->
                                    <div class="mb-4">
                                        <label class="block text-sm mb-1">Arancel (%)</label>
                                        <input type="number" wire:model.live="aran" class="w-full border rounded px-2 py-1">
                                    </div>
                                    
                                    <!-- Multa -->
                                    <div class="mb-4">
                                        <label class="block text-sm mb-1">Multa (USD)</label>
                                        <input type="number" wire:model.live="multa" class="w-full border rounded px-2 py-1">
                                    </div>
                                    
                                    <!-- Tipo de Transporte -->
                                    <div class="mb-4">
                                        <h3 class="font-medium mb-2">Tipo de Transporte</h3>
                                        <div class="grid grid-cols-3 gap-2">
                                            <button wire:click="setTransporte('Marítimo')" class="py-2 px-3 border rounded {{ $transporte == 'Marítimo' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">Marítimo</button>
                                            <button wire:click="setTransporte('Aéreo')" class="py-2 px-3 border rounded {{ $transporte == 'Aéreo' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">Aéreo</button>
                                            <button wire:click="setTransporte('Courrier')" class="py-2 px-3 border rounded {{ $transporte == 'Courrier' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">Courrier</button>
                                        </div>
                                    </div>
                                    
                                    <!-- País de Origen -->
                                    <div class="mb-4">
                                        <h3 class="font-medium mb-2">País de Origen</h3>
                                        <div class="grid grid-cols-3 gap-2">
                                            <button wire:click="setOrigen('Italia')" class="py-1 px-2 border rounded text-sm {{ $origen == 'Italia' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">Italia</button>
                                            <button wire:click="setOrigen('Dinamarca')" class="py-1 px-2 border rounded text-sm {{ $origen == 'Dinamarca' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">Dinamarca</button>
                                            <button wire:click="setOrigen('Suecia')" class="py-1 px-2 border rounded text-sm {{ $origen == 'Suecia' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">Suecia</button>
                                            <button wire:click="setOrigen('Inglaterra')" class="py-1 px-2 border rounded text-sm {{ $origen == 'Inglaterra' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">Inglaterra</button>
                                            <button wire:click="setOrigen('Holanda')" class="py-1 px-2 border rounded text-sm {{ $origen == 'Holanda' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">Holanda</button>
                                            <button wire:click="setOrigen('Alemania')" class="py-1 px-2 border rounded text-sm {{ $origen == 'Alemania' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">Alemania</button>
                                            <button wire:click="setOrigen('USA')" class="py-1 px-2 border rounded text-sm {{ $origen == 'USA' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">USA</button>
                                            <button wire:click="setOrigen('China')" class="py-1 px-2 border rounded text-sm {{ $origen == 'China' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">China</button>
                                            <button wire:click="setOrigen('España')" class="py-1 px-2 border rounded text-sm {{ $origen == 'España' ? 'bg-blue-500 text-white' : 'bg-gray-100' }}">España</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Panel de Resultados -->
                                <div class="bg-white p-4 rounded shadow">
                                    <h2 class="text-lg font-semibold mb-4">Resultados de la Cotización</h2>
                                    
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="border-b pb-2">
                                            <span class="text-sm text-gray-600">Precio EXW (USD):</span>
                                            <div class="font-medium">${{ number_format($pt, 2) }}</div>
                                        </div>
                                        
                                        <div class="border-b pb-2">
                                            <span class="text-sm text-gray-600">Peso de Cobro (kg):</span>
                                            <div class="font-medium">{{ number_format($wc, 1) }}</div>
                                        </div>
                                        
                                        <div class="border-b pb-2">
                                            <span class="text-sm text-gray-600">Flete (USD):</span>
                                            <div class="font-medium">${{ number_format($ct, 2) }}</div>
                                        </div>
                                        
                                        <div class="border-b pb-2">
                                            <span class="text-sm text-gray-600">Costos Origen (USD):</span>
                                            <div class="font-medium">${{ number_format($tco, 2) }}</div>
                                        </div>
                                        
                                        <div class="border-b pb-2">
                                            <span class="text-sm text-gray-600">Seguro (USD):</span>
                                            <div class="font-medium">${{ number_format($seguro, 2) }}</div>
                                        </div>
                                        
                                        <div class="border-b pb-2">
                                            <span class="text-sm text-gray-600">Valor CIF (USD):</span>
                                            <div class="font-medium">${{ number_format($cif, 2) }}</div>
                                        </div>
                                        
                                        <div class="border-b pb-2">
                                            <span class="text-sm text-gray-600">Arancel (USD):</span>
                                            <div class="font-medium">${{ number_format($arancel, 2) }}</div>
                                        </div>
                                        
                                        <div class="border-b pb-2">
                                            <span class="text-sm text-gray-600">Costos Internos (USD):</span>
                                            <div class="font-medium">${{ number_format($tci, 2) }}</div>
                                        </div>
                                        
                                        <div class="border-b pb-2">
                                            <span class="text-sm text-gray-600">Tiempo de Entrega (días):</span>
                                            <div class="font-medium">{{ $dias }}</div>
                                        </div>
                                        
                                        <div class="border-b pb-2">
                                            <span class="text-sm text-gray-600">Tasa de Cambio USD:</span>
                                            <div class="font-medium">{{ number_format($tcus, 2) }}</div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-6">
                                        <div class="bg-gray-100 p-3 rounded">
                                            <div class="flex justify-between mb-2">
                                                <span class="font-medium">COSTO TOTAL USD:</span>
                                                <span class="font-bold">${{ number_format($total, 2) }}</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="font-medium">FACTOR DE IMPORTACIÓN:</span>
                                                <span class="font-bold text-blue-600">{{ number_format($fi, 1) }}%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- MARK:RUT1.1.2--}}
        </div>
    </div>
    @endif
</div>

</div>
