<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('DIRECCION DISTRITAL CARAPARI') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                <form  action="{{ route('nucleos.store') }}" method="post">
                    @csrf
                    <div>
                        <x-label for="nivel" value="{{ __('nivel') }}" />
                        <x-input id="nivel" class="block mt-1 w-full" type="text" name="nivel" :value="old('nivel')" required autofocus autocomplete="nivel" />

                        <x-label for="cantidadNivel" value="{{ __('Cantidad Nivel') }}" />
                        <x-input id="cantidadNivel" class="block mt-1 w-full" type="text" name="cantidadNivel" :value="old('cantidadNivel')" required autofocus autocomplete="cantidadNivel" />
                    </div>
                    <div class="mt-4">
                        <x-label for="CantidadV" value="{{ __('Cantidad Varones') }}" />
                        <x-input id="CantidadV" class="block mt-1 w-full" type="CantidadV" name="CantidadV" :value="old('CantidadV')" required autocomplete="CantidadV" />
                    </div>
                    <div class="mt-4">
                        <x-label for="CantidadM" value="{{ __('Cantidad Mujeres') }}" />
                        <x-input id="CantidadM" class="block mt-1 w-full" type="CantidadM" name="CantidadM" :value="old('CantidadM')" required autocomplete="CantidadM" />
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
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('estadisticasEst.index') }}">
                            {{ __('Cancelar') }}
                        </a>

                        <x-button class="ms-4">
                            {{ __('Registrar Actividad') }}
                        </x-button>
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>