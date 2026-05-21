@extends('layouts.app')

@section('content')

<section class="p-10 bg-pergamino">

<h1 class="font-playfair text-4xl mb-6">Trivia</h1>

<div class="grid grid-cols-2 gap-6">

<div class="bg-crema p-6 rounded-xl">
    <h2 class="font-playfair">Pregunta</h2>

    <button class="block w-full mt-3 p-2 border">A</button>
    <button class="block w-full mt-2 p-2 border">B</button>
</div>

<div class="bg-crema p-6 rounded-xl">
    <h2 class="font-playfair">Ranking</h2>
</div>

</div>

</section>

@endsection