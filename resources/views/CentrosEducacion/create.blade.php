<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('DIRECCION DISTRITAL CARAPARI') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <form  action="{{ route('centros.store') }}" method="post">
                    @csrf
                    <div>
                        <x-label for="nombreUE" value="{{ __('Nombre Unidad Educativa') }}" />
                        <x-input id="nombreUE" class="block mt-1 w-full" type="text" name="nombreUE" :value="old('nombreUE')" required autofocus autocomplete="nombreUE" />
                    </div>
                    <div class="mt-4">
                        <x-label for="nombreDir" value="{{ __('Nombre Director') }}" />
                        <x-input id="nombreDir" class="block mt-1 w-full" type="nombreDir" name="nombreDir" :value="old('nombreDir')" required autocomplete="nombreDir" />
                    </div>
                    <div class="mt-4">
                        <x-label for="nombreJE" value="{{ __('Nombre Junta Escolar') }}" />
                        <x-input id="nombreJE" class="block mt-1 w-full" type="nombreJE" name="nombreJE" :value="old('nombreJE')" required autocomplete="nombreJE" />
                    </div>
                    <div class="mt-4">
                        <x-label for="codigosie" value="{{ __('Codigo Sie') }}" />
                        <x-input id="codigosie" class="block mt-1 w-full" type="codigosie" name="codigosie" :value="old('codigosie')" required autocomplete="codigosie" />
                    </div>
                    <div class="mt-4">
                        <x-label for="nivelEd" value="{{ __('Nivel Educativo') }}" />
                        <x-input id="nivelEd" class="block mt-1 w-full" type="nivelEd" name="nivelEd" :value="old('nivelEd')" required autocomplete="nivelEd" />
                    </div>
                    <div class="mt-4">
                        <x-label for="cantidadE" value="{{ __('Cantidad Estudiantes') }}" />
                        <x-input id="cantidadE" class="block mt-1 w-full" type="cantidadE" name="cantidadE" :value="old('cantidadE')" required autocomplete="cantidadE" />
                    </div>
                    <div class="mt-4">
                        <x-label for="cantidadM" value="{{ __('Cantidad Maestros') }}" />
                        <x-input id="cantidadM" class="block mt-1 w-full" type="cantidadM" name="cantidadM" :value="old('cantidadM')" required autocomplete="cantidadM" />
                    </div>
                    <div class="mt-4">
                        <x-label for="descripcionG" value="{{ __('Descripcion Geografica') }}" />
                        <x-input id="descripcionG" class="block mt-1 w-full" type="descripcionG" name="descripcionG" :value="old('descripcionG')" required autocomplete="descripcionG" />
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
                            {{ __('Registrar Centro Educativo') }}
                        </x-button>
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>