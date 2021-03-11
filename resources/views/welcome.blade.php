<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">

    @livewireStyles
</head>

@php
    $color="blue";   
    $alert='alert';
@endphp

<body>
    <div class="container mx-auto">
        <x-alert :color="$color" class="mb-4">
            <x-slot name="title">
                Titulo 1, o no
            </x-slot>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, veniam cum aspernatur et reiciendis ut voluptas voluptatem itaque, hic maxime tempora quod illo aperiam ullam cumque nulla quo, dolorum unde.
        </x-alert>

        <x-alert2 color="blue">
            <x-slot name="title">
                titulo 2
            </x-slot>
        </x-alert2>   

        <x-alert2 color="blue" class="mb-6">
            <x-slot name="title">
                titulo 3
            </x-slot>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae aut ipsam dolorum porro nisi ducimus facilis illum dignissimos vitae at hic ratione laborum voluptatem, ex voluptatibus nostrum vero tempore non.
        </x-alert2>
        <x-alert2 color="green">
            <x-slot name="title">
                titulo 4
            </x-slot>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae aut ipsam dolorum porro nisi ducimus facilis illum dignissimos vitae at hic ratione laborum voluptatem, ex voluptatibus nostrum vero tempore non.
        </x-alert2>

        <x-dynamic-component :component="$alert" color="yellow">
            <x-slot name="title">
                titulo 4
            </x-slot>
            Lorem ipsum, dolor sit amet conse
        </x-dynamic-component>
    </div>
@php
    $count=1;
    $data=['titulo'=>'laravel livewire',
    'descripcion'=>'uncurso de coderfree']
@endphp
    <livewire:counter :cont="$count" :data="$data"/>

    <livewire:paises >

    @livewireScripts
</body>
</html>
