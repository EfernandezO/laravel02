<div>
   <h1>Lista de Paises</h1>

   <form action="" wire:submit.prevent="agregar">
   <input type="text" placeholder="ingresa pais" wire:model="pais">
   <p>{{$pais}}</p>
   <button type="submit">Enviar</button>
   </form>

   <ul>
       @foreach ($paises as $pais)
           <li>{{$pais}}</li>
       @endforeach
   </ul>

</div>
