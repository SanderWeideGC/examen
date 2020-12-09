@extends('frontend.layout')
@section('content')
@section('header-title')
    Kantine
@endsection
koude dranken:
<br>
//foreach loop om alle producten te laden
@foreach($products as $product)
    @if($product->ProductCategory == '1')
//if statement om category te controleren op keuze
        <tr>
            <td>{{ $product->ProductName }}</td>
            <td>€ {{ $product->ProductPrice }}</td>
        </tr>
        <br>
    @endif
@endforeach
<br>
warme dranken:
<br>
@foreach($products as $product)
    @if($product->ProductCategory == '2')
        <tr>
            <td>{{ $product->ProductName }}</td>
            <td>€ {{ $product->ProductPrice }}</td>
        </tr>
        <br>
    @endif
@endforeach
<br>
snacks:
<br>
@foreach($products as $product)
    @if($product->ProductCategory == '3')
        <tr>
            <td>{{ $product->ProductName }}</td>
            <td>€ {{ $product->ProductPrice }}</td>
        </tr>
        <br>
    @endif
@endforeach

@endsection
