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

                <form  action="{{ route('nucleos.update',$nucleo->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-label for="nombreNu" value="{{ __('Nombre Nucleo')}}" />
                        <x-input id="nombreNu" class="block mt-1 w-full" type="text" name="nombreNu" :value="old('nombreNu',$nucleo->nombreNu)" required autofocus autocomplete="nombreNu" />
                    </div>
                    <div class="mt-4">
                        <x-label for="codigo" value="{{ __('Codigo Nucleo') }}" />
                        <x-input id="codigo" class="block mt-1 w-full" type="codigo" name="codigo" :value="old('codigo',$nucleo->codigo)" required autocomplete="apellidos" />
                    </div>
                    <div class="mt-4">
                        <x-label for="descripcionG" value="{{ __('Descripcion Geografica') }}" />
                        <textarea
                            
                            name="descripcionG"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                         >{{old('descripcion',$nucleo->descripcionG)}}</textarea>
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
                            {{ __('Modificar Nucleo') }}
                        </x-button>
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>