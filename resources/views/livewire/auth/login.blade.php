<x-layouts::auth :title="__('Ingresar')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Acceso privado')" :description="__('Ingresa tu correo y contraseña para gestionar el sistema')" />

        <x-auth-session-status class="text-center text-premium font-medium text-sm" :status="session('status')" />

        <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
            @csrf

            <flux:input
                name="email"
                :label="__('Correo electrónico')"
                :value="old('email')"
                type="email"
                required
                autofocus
                autocomplete="email"
                placeholder="admin@hatunwasi.com"
            />

            <div class="relative">
                <flux:input
                    name="password"
                    :label="__('Contraseña')"
                    type="password"
                    required
                    autocomplete="current-password"
                    :placeholder="__('Contraseña')"
                    viewable
                />

                @if (Route::has('password.request'))
                    <flux:link class="absolute top-0 text-sm end-0 text-premium hover:text-premium-light transition-colors duration-300" :href="route('password.request')" wire:navigate>
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </flux:link>
                @endif
            </div>

            <flux:checkbox name="remember" :label="__('Recordarme')" />

            <div class="flex items-center justify-end">
                <flux:button variant="primary" type="submit" class="w-full bg-premium hover:bg-premium-light text-[#111111] font-semibold shadow-sm shadow-premium/20 transition-all duration-300 cursor-pointer">
                    {{ __('Ingresar') }}
                </flux:button>
            </div>
        </form>

        @if (Route::has('register'))
            <div class="space-x-1 text-sm text-center rtl:space-x-reverse text-[#C7C7C7]">
                <span class="font-sans">{{ __('¿No tienes cuenta?') }}</span>
                <flux:link class="text-premium hover:text-premium-light font-sans font-medium" :href="route('register')" wire:navigate>{{ __('Regístrate') }}</flux:link>
            </div>
        @endif
    </div>
</x-layouts::auth>
