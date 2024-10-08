<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('DDC-MODIFICAR USUARIO') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                <form  action="{{ route('usuarios.update',$usuario->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-label for="nombre" value="{{ __('Nombre')}}" />
                        <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre',$usuario->nombre)" required autofocus autocomplete="nombre" />
                    </div>
                    <div class="mt-4">
                        <x-label for="apellidos" value="{{ __('apellidos') }}" />
                        <x-input id="apellidos" class="block mt-1 w-full" type="apellidos" name="apellidos" :value="old('apellidos',$usuario->apellidos)" required autocomplete="apellidos" />
                    </div>
                    <div class="mt-4">
                        <x-label for="direccion" value="{{ __('direccion') }}" />
                        <x-input id="direccion" class="block mt-1 w-full" type="direccion" name="direccion" :value="old('direccion',$usuario->direccion)" required autocomplete="direccion" />
                    </div>
                    <div class="mt-4">
                        <x-label for="telefono" value="{{ __('telefono') }}" />
                        <x-input id="telefono" class="block mt-1 w-full" type="telefono" name="telefono" :value="old('telefono',$usuario->telefono)" required autocomplete="telefono" />
                    </div>
                    <div class="mt-4">
                        <x-label for="email" value="{{ __('Correo Electronico') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email',$usuario->email)" required autocomplete="username" />
                    </div>
                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
                    <div class="mt-4">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                     @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ms-4">
                            {{ __('Modificar Usuario') }}
                        </x-button>
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
