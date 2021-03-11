<div  {{$attributes->merge(["class"=>"bg-$color-200 border-l-4 border-$color-400 text-$color-700 p-4"])}} role="alert">
    <p class="font-bold">{{$title}}</p>
    <p>{{$slot}}</p>
   
  </div>