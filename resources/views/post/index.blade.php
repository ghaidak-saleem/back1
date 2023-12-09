@extends('layout')
@section('content')

{{-- <table style="border: 2px">
    <th>id</th>
    <th>title</th>
    <th>description</th>
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->title }}</td>
        <td>{{$item->description}}</td>
    </tr>
    @endforeach

</table> --}}


    @php
        $array=[236,45,66,67,33,34,99]
    @endphp
    <h3>print array elements if item value %2=0 else add 1 to value then print the new value</h3>
    @foreach ($array as $value)
        @if($value%2==0)
            <h2 style="color: green">{{$value}}</h2>
        @else
            <h4 style="color: red">{{$value}}&nbsp.........>&nbsp{{$value+1}}</h4>
        @endif
    @endforeach


@endsection
