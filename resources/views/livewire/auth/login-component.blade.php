@assets
{{-- <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/@iconify/iconify@latest/dist/iconify.min.js"></script> --}}
@endassets

<div class="animate-window flex flex-col w-full overflow-hidden relative min-h-screen radial-gradient items-center justify-center g-0 px-4">
    <div class="justify-center items-center w-full card lg:flex max-w-md">
        <div class="w-full card-body">
            <!-- Logo -->
            <a href="/" class="py-4 block">
                <img src="{{ asset('/img/equisol-logo.png') }}" alt="Logo" class="mx-auto"/>
            </a>
            <p class="mb-4 text-gray-500 text-sm text-center">Bienvenido al panel de inicio de sesión</p>

            <!-- Form -->
            <form wire:submit.prevent="authenticate">
                <!-- Username -->
                <div class="mb-4">
                    <label for="username" class="block text-sm font-semibold mb-2 text-gray-600">
                        Usuario
                    </label>
                    <input 
                        type="text" 
                        id="username"
                        wire:model.live="username"
                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 
                        @error('username') border-red-500 bg-red-50 @enderror"
                    >
                    @error('username')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-semibold mb-2 text-gray-600">
                        Contraseña
                    </label>
                    <input 
                        type="password" 
                        id="password"
                        wire:model.live="password"
                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0
                        @error('password') border-red-500 bg-red-50 @enderror"
                    >
                    @error('password')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex justify-between mb-6">
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            wire:model.live="remember"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-[4px] text-blue-600 focus:ring-blue-500"
                            id="remember"
                        >
                        <label for="remember" class="text-sm text-gray-600 ms-3">
                            Recordar dispositivo
                        </label>
                    </div>
                    <a class="text-sm font-medium text-blue-600 hover:text-blue-700">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>

                <!-- Login Button -->
                <div class="grid mb-6">
                    <button 
                        type="submit" 
                        class="btn py-[10px] text-base text-white font-medium hover:bg-blue-700 disabled:opacity-50"
                        wire:loading.attr="disabled"
                        wire:target="authenticate"
                    >
                        <span wire:loading.remove wire:target="authenticate">
                            Iniciar Sesión
                        </span>
                        <span wire:loading wire:target="authenticate" class="flex items-center justify-center">
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Autenticando...
                        </span>
                    </button>
                </div>

                <!-- Error Messages -->
                @if (session()->has('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>