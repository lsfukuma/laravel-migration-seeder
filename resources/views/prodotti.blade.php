@extends('layouts.app');
@section('page-title' , 'table of products')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                      <thead class="thead-dark">
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Description</th>
                              <th scope="col">Price</th>
                            </tr>
                      </thead>
                      <tbody>
                          @foreach ($products as $product)
                        <tr>
                          <th scope="row"> {{ $product->id }} </th>
                          <td> {{ $product->name }} </td>
                          <td> {{ $product->description }} </td>
                          <td>{{ $product->price }} €</td>
                        </tr>
                         @endforeach
                      </tbody>
                    </table>

            </div>
        </div>
    </div>
@endsection
