<div class="container mx-auto">

    <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto p-4 mb-6">
        
            <div class="mb-3">
                <label for="name" class="form-label mb-2">Nombre</label>
                <input wire:model="name" type="text" name="name" placeholder="ingrese un nombre" class="form-control">
                @error('name')
                    <p class="text-xs text-red-500 italic">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="form-label mb-2">Descripcion</label>
                <textarea  wire:model="body" id="body" rows="4" class="form-control" placeholder="Ingrese la descripcion"></textarea>
                @error('body')
                    <p>{{$message}}</p>
                @enderror
            </div>
         @if ($action=="store")
            <button  wire:click="store" class="bg-blue-500 hover:bg-blue-700 mb-2 text-white font-bold px-4 py-2 rounded ">Grabar</button> 
         @else
            <button  wire:click="update" class="bg-blue-500 hover:bg-blue-700 mb-2 text-white font-bold px-4 py-2 rounded ">Actualizar</button> 
            <button  wire:click="default" class="bg-red-500 hover:bg-red-700 mb-2 text-white font-bold px-4 py-2 rounded ">Cancelar</button> 
         @endif
            
        
    </div>



<div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto">
    <table >
        <thead class="bg-gray-50 border-b border-gray-200">
            <tr class="text-xs font-medium text-gray-500 uppercase text-left tracking-wider">
                <th class="px-6 py-3">ID</th>
                <th class="px-6 py-3">Nombre</th>
                <th class="px-6 py-3">Body</th>
                <th class="px-6 py-3"></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-300">

            @foreach ($posts as $post)
                <tr class="text-sm text-gray-500">
                <td class="px-6 py-4">{{$post->id}}</td>
                <td class="px-6 py-4">{{$post->name}}</td>
                <td class="px-6 py-4">{{$post->body}}</td>
                <td class="px-6 py-4">
                    <button wire:click="edit({{$post}})" class="bg-blue-500 hover:bg-blue-700 mb-2 text-white font-bold px-4 py-2 rounded w-full">Editar</button>
                    <button wire:click="destroy({{$post}})" class="bg-red-500 hover:bg-red-700 mb-2 text-white font-bold px-4 py-2 rounded w-full">Eliminar</button>

                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="bg-gray-100 px-6 py-4 border-t border-gray-400">
        {{$posts->links()}}
    </div>
</div>
</div>