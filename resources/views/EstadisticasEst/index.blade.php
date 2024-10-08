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
                        <a href="{{ route('estadisticasEst.create') }}" class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">Nuevo Nivel</a>
                    </div>
                    <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ID</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nivel Educativo</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Total Cantidad</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Cantidad Varones</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Cantidad Mujeres</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Acciones</th>
                                </tr>
                            </thead>
                           
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!--<script>
    function confirmDelete(id){
        alertify.confirm("Esta Seguro de Eliminar la Actividad Seleccionada", 
        function(e){
            if(e){
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = '/nucleos/'+id;
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