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
                        <a href="{{ route('centros.create') }}" class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">Nuevo Centro Educativo</a>
                    </div>
                    <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ID</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombre U.E.</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombre D.</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombre Junta E.</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Codigo Sie</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nivel Educativo</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Cantidad Est.</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Cantidad M.</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Descripcion Geo.</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($centros as $centro)
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $centro->id }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $centro->nombreUE }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $centro->nombreDir }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $centro->nombreJE }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $centro->codigosie }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $centro->nivelEd }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $centro->cantidadE }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $centro->cantidadM }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $centro->descripcionG }}</td>
                                    <td class="border px-4 py-2 text-center">
                                        <div class="flex justify-center">
                                            <a href="{{ route('centros.edit', $centro->id) }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">Editar</a>
                                            <button type="button" class="bg-pink-400 dark:bg-pink-600 hover:bg-pink-500 dark:hover:bg-pink-700 text-white font-bold py-2 px-4 rounded" onclick="confirmDelete('{{ $centro->id }}')">Eliminar</button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<script>
    function confirmDelete(id){
        alertify.confirm("Esta Seguro de Eliminar el Centro Educativo", 
        function(e){
            if(e){
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = '/centros/'+id;
                form.innerHTML = '@csrf @method("DELETE")';
                document.body.appendChild(form);
                form.submit();
                alertify.success('Ok');
            }else{
                return false;
            }
        })
       
    }
</script>