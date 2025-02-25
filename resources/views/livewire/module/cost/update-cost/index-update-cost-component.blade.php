<div>
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

    <div class="px-4 pb-1 bg-white sm:block flex items-center justify-between border-b border-gray-200 lg:mt-1 dark:bg-gray-800 dark:border-gray-700">
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
                <div class="flex items-center mb-3 dark:divide-gray-700">
                    <div class="flex flex-wrap w-full">
                        <div class="w-[20%]">
                            <div class="block w-full">
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
                            </div>
                        </div>
                        <div class="w-[20%]">

                            <div class="block w-full">
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
