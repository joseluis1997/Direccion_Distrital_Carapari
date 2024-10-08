<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('DIRECCION DISTRITAL CARAPARI') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <div class="mb-4">
                        <a href="{{ route('profesores.create') }}" class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">Nuevo Profesor</a>
                    </div>
                    <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">N. Carnet</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">RDA</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombre</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Apellidos</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Celular</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Correo Electronico</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!--<script>
    function confirmDelete(id){
        alertify.confirm("Esta Seguro de Eliminar el Profesor Seleccionado", 
        function(e){
            if(e){
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = '/profesores/'+id;
                form.innerHTML = '@csrf @method("DELETE")';
                document.body.appendChild(form);
                form.submit();
                alertify.success('Ok');
            }else{
                return false;
            }
        })
       
    }
</script>-->