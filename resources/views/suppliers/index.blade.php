@extends('Shared._layout')
@section('title', 'Suppliers Index')
@section('content')
    <h2>Index</h2>
    <p>
        <a href="{{url('Suppliers/Create')}}">Create New</a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Address
            </th>
        </tr>
        </thead>
        <tbody>
        {{--Here we need a model to view data in the database--}}
         @foreach($suppliers as $supplier)
            <tr>
                <td>
                    {{ $supplier->name}}
                </td>
                <td>
                    {{ $supplier->address}}
                </td>
            </tr>
            @foreach($supplier->cars as $car)
                <tr style="color: red;">
                    <td>
                        Car name: {{ $car->name}}
                    </td>

                    <td>
                        Car price:    {{ $car->price}}
                    </td>
                </tr>
            @endforeach
         @endforeach
        </tbody>
    </table>
@endsection
