<div x-data="{
        isVisibleDichotomicAskingModal: $wire.entangle('isVisibleDichotomicAskingModal').live,
    }"
    @keydown.escape.window.prevent="closeTopModal()"
>
    {{-- MARK: DichoAsk 1.1--}}
    <div x-show="isVisibleDichotomicAskingModal"
        x-effect="
            applyFormatToAllInputs();
            if (isVisibleDichotomicAskingModal && !modalStack.includes('isVisibleDichotomicAskingModal')) {
                modalStack.push('isVisibleDichotomicAskingModal');
                escapeEnabled = true; removeTabTrapListener();
            } else if (!isVisibleDichotomicAskingModal) {
                modalStack = modalStack.filter(id => id !== 'isVisibleDichotomicAskingModal');
            }
            focusModal(modalStack[modalStack.length - 1]);
        "
        >
        <div class="fixed top-0 left-0 w-screen h-screen bg-gray-900 bg-opacity-20 backdrop-blur-sm z-[49]"></div>
    </div>
    <div class="bg-white dark:bg-gray-800">
        <div x-show="isVisibleDichotomicAskingModal" id="isVisibleDichotomicAskingModal" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="transform-gpu fixed w-full h-full flex items-center justify-center h-modal top-0 md:inset-0 sm:h-full z-50">
            <div class="relative w-full h-full flex justify-center items-center">
                <div class="absolute inset-0 flex justify-center items-center pointer-events-none">
                    <div class="animate-ping w-32 h-32 flex justify-center items-center">
                        <i class="text-yellow-500 fa-solid fa-circle-question text-5xl"></i>
                    </div>
                </div>
                @if($isVisibleDichotomicAskingModal)
                <div  class="relative inline-block px-4 pt-10">
                    <div class="bg-white rounded-lg shadow dark:bg-gray-800 overflow-y-auto m-auto">
                        <div class="flex items-start justify-between border-b rounded-t dark:border-gray-700">
                            <div class="ml-[45%] flex items-center justify-center mx-auto w-16 h-16">
                                <i class="text-yellow-500 fa-solid fa-circle-question text-5xl"></i>
                            </div>
                            <button
                            {{-- @click="openModal($event)" --}}
                            {{-- wire:click="CloseModalClick('isVisibleDichotomicAskingModal')"  --}}
                            x-on:click="isVisibleDichotomicAskingModal = false"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white">
                                <i class="fa-solid fa-xmark text-xl"></i>
                            </button>
                        </div>
                        <div class="shadow-xl border-b-white border-r-white border-l-white dark:border-black px-6 py-4 space-y-4 space-x-6 rounded-b-lg min-[1139px]:mx-2 min-[1139px]:mb-2">
                            <div class="mb-4 mt-3">
                                <p class="font-bold dark:text-white">• ATENCIÓN</p>
                            </div>
                            <p class="dark:text-white">{{$message}}</p>
                            <div class="flex justify-center gap-2">
                                <button @click="openModal($event)" 
                                        wire:click="DoDispatch()" 
                                        wire:loading.attr="disabled" 
                                        wire:loading.class.remove="bg-blue-900" 
                                        class="mb-2 inline-flex w-1/2 px-3.5 py-2 text-sm font-medium text-center text-white bg-blue-900 border border-gray-300 rounded-lg hover:bg-black focus:ring-4 focus:ring-primary-300 sm:w-auto dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700 justify-center">
                                    Sí
                                </button>
                                <button
                                        {{-- wire:click="CloseModalClick('isVisibleDichotomicAskingModal')"  --}}
                                        x-on:click="isVisibleDichotomicAskingModal = false"
                                        class="mb-2 inline-flex w-1/2 px-3 py-2 text-sm font-medium text-center text-white bg-gray-500 border border-gray-300 rounded-lg hover:bg-black focus:ring-4 focus:ring-primary-300 sm:w-auto dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700 justify-center">
                                    No
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
