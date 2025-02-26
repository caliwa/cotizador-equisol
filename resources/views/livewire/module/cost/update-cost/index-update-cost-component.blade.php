<div class="h-screen">
    <div wire:loading
        wire:target="OpenMainModal"
        class="fixed inset-0 flex items-center justify-center z-50 bg-white dark:bg-black bg-opacity-60">
        <div class="absolute top-0 bottom-0 left-0 right-0 flex items-center justify-center">
            <div class="text-black text-4xl font-bold text-center ">
                <div class="flex items-center">
                    <svg aria-hidden="true" class="inline w-10 h-10 text-blue-300 animate-spin dark:text-blue-300 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                    <span class="ml-2 select-none">Iniciando</span>
                </div>
            </div>
        </div>
    </div>

    <div
    class="px-4 pb-1 bg-white sm:block flex items-center justify-between border-b border-gray-200 lg:mt-1 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full">
            <div class="mb-4">
                <nav class="flex mt-3" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <div class="inline-flex gap-2 items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <i class="fa-solid fa-house"></i>
                                PARAMETRIZACIÓN
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fa-solid fa-arrow-right text-gray-400"></i>
                                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Actualizar Costo</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="flex items-center gap-2">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Actualizar Costo</h1>
                    <a wire:click.prevent="ToastInfoModule" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <i class="fa-solid fa-circle-exclamation text-lg mt-0.5"></i>
                    </a>
                </div>
            </div>
            <div class="block">
                <div class="flex flex-wrap w-full gap-6 p-4 bg-gray-50 dark:bg-gray-800 rounded-lg">
                    <!-- Indicador de Tasa de Cambio -->
                    <div class="w-[20%] bg-white dark:bg-gray-700 rounded-xl shadow-lg overflow-hidden">
                        <div class="p-4 bg-blue-500 text-white">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-lg">Tasa de Cambio</h3>
                                <i class="fas fa-chart-line text-2xl"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-500 dark:text-gray-300">USD/COP</span>
                                <span class="text-green-500 font-medium flex items-center"><i class="fas fa-caret-up mr-1"></i>1.2%</span>
                            </div>
                            <div class="text-3xl font-bold text-gray-800 dark:text-white mb-2">$3,856.45</div>
                            <div class="h-16 w-full bg-gray-100 dark:bg-gray-600 rounded overflow-hidden">
                                <!-- Gráfico simulado -->
                                <div class="relative h-full w-full">
                                    <div class="absolute bottom-0 left-0 h-8 w-3 bg-blue-400" style="left: 0%"></div>
                                    <div class="absolute bottom-0 left-0 h-11 w-3 bg-blue-400" style="left: 10%"></div>
                                    <div class="absolute bottom-0 left-0 h-9 w-3 bg-blue-400" style="left: 20%"></div>
                                    <div class="absolute bottom-0 left-0 h-7 w-3 bg-blue-400" style="left: 30%"></div>
                                    <div class="absolute bottom-0 left-0 h-10 w-3 bg-blue-400" style="left: 40%"></div>
                                    <div class="absolute bottom-0 left-0 h-12 w-3 bg-blue-400" style="left: 50%"></div>
                                    <div class="absolute bottom-0 left-0 h-14 w-3 bg-blue-400" style="left: 60%"></div>
                                    <div class="absolute bottom-0 left-0 h-9 w-3 bg-blue-400" style="left: 70%"></div>
                                    <div class="absolute bottom-0 left-0 h-11 w-3 bg-blue-400" style="left: 80%"></div>
                                    <div class="absolute bottom-0 left-0 h-16 w-3 bg-blue-400" style="left: 90%"></div>
                                </div>
                            </div>
                            <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mt-1">
                                <span>30 Ene</span>
                                <span>26 Feb</span>
                            </div>
                        </div>
                    </div>
                
                    <!-- Indicador de ROI por Mercado -->
                    <div class="w-[20%] bg-white dark:bg-gray-700 rounded-xl shadow-lg overflow-hidden">
                        <div class="p-4 bg-purple-600 text-white">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-lg">ROI por Mercado</h3>
                                <i class="fas fa-globe-americas text-2xl"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex flex-col mb-4">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-sm text-gray-600 dark:text-gray-300">EEUU</span>
                                    <span class="text-sm font-medium">24.8%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-purple-500 h-2 rounded-full" style="width: 78%"></div>
                                </div>
                            </div>
                            <div class="flex flex-col mb-4">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-sm text-gray-600 dark:text-gray-300">UE</span>
                                    <span class="text-sm font-medium">18.3%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-purple-500 h-2 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-sm text-gray-600 dark:text-gray-300">Asia</span>
                                    <span class="text-sm font-medium">32.1%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-purple-500 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                <span class="text-xs text-gray-500 dark:text-gray-400">Actualizado: 25 Feb, 2025</span>
                            </div>
                        </div>
                    </div>
                
                    <!-- Análisis de Exportaciones -->
                    <div class="w-[20%] bg-white dark:bg-gray-700 rounded-xl shadow-lg overflow-hidden">
                        <div class="p-4 bg-green-600 text-white">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-lg">Exportaciones</h3>
                                <i class="fas fa-ship text-2xl"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-500 dark:text-gray-300">Vol. Total</span>
                                <span class="text-green-500 font-medium flex items-center"><i class="fas fa-caret-up mr-1"></i>8.7%</span>
                            </div>
                            <div class="text-2xl font-bold text-gray-800 dark:text-white mb-3">1,856.4 Ton</div>
                            <div class="grid grid-cols-3 gap-2 mb-3">
                                <div class="bg-green-100 dark:bg-green-900 p-2 rounded-lg text-center">
                                    <div class="text-green-600 dark:text-green-400 text-xs">Agrícola</div>
                                    <div class="font-bold text-sm mt-1">42%</div>
                                </div>
                                <div class="bg-blue-100 dark:bg-blue-900 p-2 rounded-lg text-center">
                                    <div class="text-blue-600 dark:text-blue-400 text-xs">Industrial</div>
                                    <div class="font-bold text-sm mt-1">35%</div>
                                </div>
                                <div class="bg-amber-100 dark:bg-amber-900 p-2 rounded-lg text-center">
                                    <div class="text-amber-600 dark:text-amber-400 text-xs">Minero</div>
                                    <div class="font-bold text-sm mt-1">23%</div>
                                </div>
                            </div>
                            <div class="text-xs text-center text-gray-500 dark:text-gray-400">
                                +23.5% vs mismo periodo 2024
                            </div>
                        </div>
                    </div>
                
                    <!-- Fletes Internacionales -->
                    <div class="w-[20%] bg-white dark:bg-gray-700 rounded-xl shadow-lg overflow-hidden">
                        <div class="p-4 bg-amber-600 text-white">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-lg">Fletes Internac.</h3>
                                <i class="fas fa-truck-container text-2xl"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-center mb-1">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-amber-100 dark:bg-amber-900 flex items-center justify-center mr-2">
                                        <i class="fas fa-ship text-amber-500"></i>
                                    </div>
                                    <span class="text-sm font-medium">Marítimo</span>
                                </div>
                                <span class="text-sm font-bold text-red-500 flex items-center"><i class="fas fa-caret-up mr-1"></i>4.2%</span>
                            </div>
                            <div class="text-xl font-bold text-gray-800 dark:text-white mb-2">$1,452/TEU</div>
                            
                            <div class="flex justify-between items-center mb-1 mt-3">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-amber-100 dark:bg-amber-900 flex items-center justify-center mr-2">
                                        <i class="fas fa-plane text-amber-500"></i>
                                    </div>
                                    <span class="text-sm font-medium">Aéreo</span>
                                </div>
                                <span class="text-sm font-bold text-green-500 flex items-center"><i class="fas fa-caret-down mr-1"></i>1.8%</span>
                            </div>
                            <div class="text-xl font-bold text-gray-800 dark:text-white">$3.72/kg</div>
                            
                            <div class="mt-3 text-xs text-center text-gray-500 dark:text-gray-400">
                                Ruta principal: Asia-LATAM
                            </div>
                        </div>
                    </div>

                    <div class="w-[20%] block">
                        <div class="flex w-full">
                            <div class="flex relative w-full mt-5">
                                <button @click="openModal($event)" 
                                        type="button" 
                                        wire:click="OpenVerifyExchangeRateModal" 
                                        wire:loading.attr="disabled"
                                        wire:loading.class.remove="bg-blue-500"
                                        class="w-full shadow-sm bg-blue-500 border border-gray-300 text-white sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 hover:bg-black">
                                        <i class="fas fa-chart-line mr-2"></i> Tasa de cambio
                                    <div wire:loading 
                                         wire:target="OpenVerifyExchangeRateModal" 
                                         class="absolute inset-0 flex items-center justify-center rounded bg-white dark:bg-black bg-opacity-40 z-10">
                                        <svg aria-hidden="true" class="inline w-10 h-10 text-gray-300 animate-spin dark:text-gray-300 fill-green-500" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div class="flex relative w-full mt-5">
                                <button @click="openModal($event)" 
                                        type="button" 
                                        wire:click="GenerateRequestPurchaseRequest" 
                                        wire:loading.attr="disabled"
                                        wire:loading.class.remove="bg-blue-900"
                                        class="w-full shadow-sm bg-blue-500 border border-gray-300 text-white sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 hover:bg-black">
                                        <i class="fas fa-square-root-variable mr-2"></i> Calcular FI
                                    <div wire:loading 
                                            wire:target="GenerateRequestPurchaseRequest" 
                                            class="absolute inset-0 flex items-center justify-center rounded bg-white dark:bg-black bg-opacity-40 z-10">
                                        <svg aria-hidden="true" class="inline w-10 h-10 text-gray-300 animate-spin dark:text-gray-300 fill-green-500" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex gap-2 justify-end items-center w-full px-2 mb-2">
                    <button 
                        @click="openModal($event)"
                        wire:click="AddValueInputVariables()"
                        class="flex items-center justify-center bg-green-500 text-white px-2.5 py-1.5 rounded hover:bg-green-600 transition duration-300">
                        <i class="fas fa-plus"></i>
                    </button>
                    <p class="px-2 py-1 bg-white rounded font-semibold border border-gray-300">Añadir fila</p>
                </div>
                <div class="flex animate-tabmodal border-b-white border-r-white border-l-white dark:border-black space-y-6 rounded-b-lg bg-gray-300 min-[639px]:dark:bg-gray-800 min-[1139px]:dark:bg-gray-900 min-[1139px]:mx-2">
                    <div class="w-full border border-gray-400 rounded max-h-[510px] h-[510px] overflow-y-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="z-[4] text-xs text-gray-900 uppercase dark:text-gray-400 sticky top-0 bg-gray-200 dark:bg-gray-800">
                                <tr>
                                    <th scope="col" class="text-center border-r border-zinc-200 py-1">
                                        Tiempo
                                    </th>
                                    <th scope="col" class="text-center py-1">
                                        Courier
                                    </th>
                                    <th scope="col" class="text-center">
                                        Áereo
                                    </th>
                                    <th scope="col" class="text-center">
                                        Marítimo
                                    </th>
                                    <th scope="col" class="text-xs text-white uppercase dark:text-gray-400 bg-gray-400 sticky right-0 text-center">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(is_iterable($variables_purchase_request))
                                    @foreach(range(0, count($variables_purchase_request) - 1) as $idx)
                                        {{-- <tr wire:init="InitCleaveZenFormatNumeral()" class="animate-tabmodal bg-white dark:bg-gray-800"> --}}
                                        <tr class="animate-tabmodal bg-white dark:bg-gray-800">
                                            <td class="border-b py-1 px-2 min-w-[300px]">
                                                <input
                                                    id="TimeName_{{$idx}}"
                                                    wire:model.change="variables_purchase_request.{{$idx}}.TimeName"
                                                    value="{{$variables_purchase_request[$idx]['TimeName']}}"
                                                    {{-- wire:keydown="AdapterVariablesValidationLivewire({{$idx}}, 'IGNORE')" --}}
                                                    type="text"
                                                    {{-- oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)(\..*)/, '$1').replace(/(\.\d{4})\d*/, '$1')" --}}
                                                    class="text-center border text-gray-900 bg-gray-50 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                                    {{ $errors->has('variables_purchase_request.' . $idx . '.TimeName') ? ' bg-red-100 border-red-500' : '' }}"
                                                >
                                            </td>
                                            <td class="text-center border-b py-1 px-2 min-w-[300px]">
                                                <input
                                                    id="Courier_{{$idx}}"
                                                    wire:model.change="variables_purchase_request.{{$idx}}.Courier"
                                                    value="{{$variables_purchase_request[$idx]['Courier']}}"
                                                    wire:keydown="AdapterVariablesValidationLivewire({{$idx}}, 'IGNORE')"
                                                    wire:keydown.enter="GenerateRequestPurchaseRequest" @keydown.enter="handleEnter" @keydown.enter="openModal($event)"
                                                    type="text"
                                                    {{-- oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)(\..*)/, '$1').replace(/(\.\d{4})\d*/, '$1')" --}}
                                                    class="text-center border text-gray-900 bg-gray-50 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                                    {{ $errors->has('variables_purchase_request.' . $idx . '.Courier') ? ' bg-red-100 border-red-500' : '' }}"

                                                >
                                            </td>
                                            <td class="text-center border-b py-1 px-2 min-w-[300px]">
                                                <input
                                                    id="AirType_{{$idx}}"
                                                    wire:model.change="variables_purchase_request.{{$idx}}.AirType"
                                                    value="{{$variables_purchase_request[$idx]['AirType']}}"
                                                    {{-- wire:keydown="AdapterVariablesValidationLivewire({{$idx}}, 'IGNORE')" --}}
                                                    wire:keydown.enter="GenerateRequestPurchaseRequest" @keydown.enter="handleEnter" @keydown.enter="openModal($event)"
                                                    type="number"
                                                    {{-- oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)(\..*)/, '$1').replace(/(\.\d{4})\d*/, '$1')" --}}
                                                    class="text-center border text-gray-900 bg-gray-50 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                                    {{ $errors->has('variables_purchase_request.' . $idx . '.AirType') ? ' bg-red-100 border-red-500' : '' }}"
                                                >
                                            </td>
                                            <td class="text-center border-b py-1 px-2 min-w-[300px]">
                                                <input
                                                    id="MaritimeType_{{$idx}}"
                                                    wire:model.change="variables_purchase_request.{{$idx}}.MaritimeType"
                                                    value="{{$variables_purchase_request[$idx]['MaritimeType']}}"
                                                    {{-- wire:keydown="AdapterVariablesValidationLivewire({{$idx}}, 'IGNORE')" --}}
                                                    wire:keydown.enter="GenerateRequestPurchaseRequest" @keydown.enter="handleEnter" @keydown.enter="openModal($event)"
                                                    type="number"
                                                    {{-- oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)(\..*)/, '$1').replace(/(\.\d{4})\d*/, '$1')" --}}
                                                    class="text-center border text-gray-900 bg-gray-50 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                                    {{ $errors->has('variables_purchase_request.' . $idx . '.MaritimeType') ? ' bg-red-100 border-red-500' : '' }}"
                                                >
                                            </td>
                                            <td class="animate-tabmodal bg-gray-300 border-b py-1 px-2 min-w-[50px] z-[3] sticky right-0 ">
                                                <div class="flex justify-center items-center space-x-2">
                                                    <!-- Botón Eliminar -->
                                                    <button 
                                                        @click="openModal($event)" 
                                                        wire:click="RemoveValidationDispatch({{$idx}})"
                                                        class="flex items-center justify-center bg-red-500 text-white px-2.5 py-1.5 rounded hover:bg-red-600 transition duration-300">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                    
                                                    <!-- Botón Duplicar -->
                                                    <button 
                                                        @click="openModal($event)"
                                                        wire:click="DuplicateItem({{$idx}})"
                                                        class="flex items-center justify-center bg-blue-500 text-white px-2.5 py-1.5 rounded hover:bg-blue-600 transition duration-300">
                                                        <i class="fas fa-clone"></i>
                                                    </button>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
