@extends('layouts.app')

@section('content')

<section class="p-10">

<h1 class="font-playfair text-4xl mb-6">Países</h1>

<div class="grid grid-cols-3 gap-4">

@for($i=0;$i<12;$i++)
<div class="border p-4 rounded-xl">
    🌍 País {{ $i }}
</div>
@endfor

</div>

</section>

@endsection