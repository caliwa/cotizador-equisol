<div class="animate-window" x-data="{ 
    isVisibleVerifyExchangeRateModal: $wire.entangle('isVisibleVerifyExchangeRateModal').live,
}"

@keydown.escape.window.prevent="closeTopModal()"
>
{{-- MARK: RUT 1.1--}}
<div x-show="isVisibleVerifyExchangeRateModal" 
    x-effect="
    if (isVisibleVerifyExchangeRateModal && !modalStack.includes('isVisibleVerifyExchangeRateModal')) {
        modalStack.push('isVisibleVerifyExchangeRateModal');
        escapeEnabled = true; removeTabTrapListener();
    } else if (!isVisibleVerifyExchangeRateModal) {
        modalStack = modalStack.filter(id => id !== 'isVisibleVerifyExchangeRateModal');
    }
    focusModal(modalStack[modalStack.length - 1]);
    "
    >
    <div class="fixed top-0 left-0 w-screen h-screen bg-gray-900 bg-opacity-50 backdrop-blur-lg z-[29]"></div>
</div>
<div x-show="isVisibleVerifyExchangeRateModal"
x-transition:enter="transition ease-out duration-1000"
x-transition:enter-start="opacity-0 scale-90"
x-transition:enter-end="opacity-100 scale-100"
x-transition:leave="transition ease-in duration-200"
x-transition:leave-start="opacity-100 scale-100"
x-transition:leave-end="opacity-0 scale-90"
    id="isVisibleVerifyExchangeRateModal"
    class="transform-gpu perspective-1000 fixed overflow-x-hidden overflow-y-auto inset-0 z-30 items-center justify-center top-4 md:inset-0 h-modal sm:h-full">
    @if($isVisibleVerifyExchangeRateModal)
    <div class="relative max-[639px]:w-full w-[45%] min-[640px]:min-w-[685px] min-[640px]:px-4 mx-auto pt-2">
        <div class="relative bg-white pt-2 rounded-lg shadow dark:bg-gray-800 overflow-y-auto m-auto">
            <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                <h3 class="text-xl font-semibold dark:text-white uppercase">
                    ● Tasa de Cambio (COP) <i class="fas fa-chart-line mr-2"></i>
                </h3>
                <button 
                wire:click="CloseModalClick('isVisibleVerifyExchangeRateModal')"
                x-on:click="isVisibleVerifyExchangeRateModal = false"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>
            {{-- MARK: RUT 1.1.1--}}
            <div class="bg-white dark:bg-gray-800" wire:key="Rut111">
                <div class="animate-tabmodal mb-2  max-[639px]:py-3 min-[640px]:p-6 space-y-6 space-x-6 bg-gray-300 min-[639px]:dark:bg-gray-800 border-b-white border-r-white border-l-white dark:border-black rounded-b-lg min-[1139px]:dark:bg-gray-900 min-[1139px]:mx-2">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden">
                                    <div class="max-h-80 overflow-y-auto">
                                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                            <thead class="sticky top-0 bg-gray-100 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="text-center border-r border-zinc-200 py-1">
                                                        Divisa
                                                    </th>
                                                    <th scope="col" class="text-center border-r border-zinc-200 py-1">
                                                        Valor
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                                @if(is_iterable($variables_exchange_rate))
                                                    @foreach(range(0, count($variables_exchange_rate) - 1) as $idx)
                                                        {{-- <tr wire:init="InitCleaveZenFormatNumeral()" class="animate-tabmodal bg-white dark:bg-gray-800"> --}}
                                                        <tr class="animate-tabmodal bg-white dark:bg-gray-800">
                                                            <td class="border-b py-1 px-2 min-w-[300px]">
                                                                <input
                                                                    id="Currency_{{$idx}}"
                                                                    wire:model.change="variables_exchange_rate.{{$idx}}.Currency"
                                                                    disabled
                                                                    value="{{$variables_exchange_rate[$idx]['Currency']}}"
                                                                    {{-- wire:keydown="AdapterVariablesValidationLivewire({{$idx}}, 'IGNORE')" --}}
                                                                    type="text"
                                                                    {{-- oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)(\..*)/, '$1').replace(/(\.\d{4})\d*/, '$1')" --}}
                                                                    class="text-center text-gray-900 bg-gray-50 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                                                    {{ $errors->has('variables_exchange_rate.' . $idx . '.Currency') ? ' bg-red-100 border-red-500' : '' }}"
                                                                >
                                                            </td>
                                                            <td class="text-center border-b py-1 px-2 min-w-[300px]">
                                                                <input
                                                                    id="CurrencyValue_{{$idx}}"
                                                                    wire:model.change="variables_exchange_rate.{{$idx}}.CurrencyValue"
                                                                    value="{{$variables_exchange_rate[$idx]['CurrencyValue']}}"
                                                                    wire:keydown="AdapterVariablesValidationLivewire({{$idx}}, 'IGNORE')"
                                                                    wire:keydown.enter="GenerateRequestPurchaseRequest" @keydown.enter="handleEnter" @keydown.enter="openModal($event)"
                                                                    type="text"
                                                                    {{-- oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)(\..*)/, '$1').replace(/(\.\d{4})\d*/, '$1')" --}}
                                                                    class="text-center border text-gray-900 bg-gray-50 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                                                    {{ $errors->has('variables_exchange_rate.' . $idx . '.CurrencyValue') ? ' bg-red-100 border-red-500' : '' }}"
                
                                                                >
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <div class="flex-1"></div>
                                        <div class="relative flex items-center mt-2 mr-3">
                                            <button @click="openModal($event)"
                                                wire:click="SyncTerritoriesButton"
                                                class="flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 relative">
                                                <i class="fas fa-sync-alt mr-1"></i>
                                                Actualizar
                                                <div wire:loading wire:target="SyncTerritoriesButton" class="absolute inset-0 flex items-center justify-center bg-white dark:bg-black bg-opacity-60 z-50">
                                                    <svg aria-hidden="true" class="inline w-10 h-10 text-gray-300 animate-spin dark:text-gray-300 fill-green-500" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm mt-1 text-center text-gray-600 font-semibold">
                                    Última Actualización: {{ now()->format('d/m/Y') }}
                                </p>
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
