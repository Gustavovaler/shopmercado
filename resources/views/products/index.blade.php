@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <h1>Productos</h1> 

        <table>
            <tr>
                <th>Nombre</th>
                <th> Descripcion </th>
                <th> Stock </th>
                <th>Precio</th>
                <th>Comprar</th>
            </tr>
        @foreach ($products as $product)
        <div> 
                <tr>
                    <td>{{$product->name}}</td>
                    <td> {{$product->description }} </td>
                    <td>{{$product->qty}} </td>
                    <td>{{$product->price}}</td>
                    <td>
                        <form action="/checkout" method="POST">
                            @csrf
                            <input type="text" name="product_id" hidden value="{{$product->id}}">
                         <button>Comprar </button>   
                        </form>
                        
                    </td>
                </tr>       
        </div>
            
        @endforeach 

    </table>
    </div>
</div>
@endsection
