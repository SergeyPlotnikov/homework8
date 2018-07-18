@extends('layout')

@section('title',$title)

@section('content')
    <table class="table table-bordered" style="margin-top: 25px">
        <thead>
        <tr class="text-center">
            @foreach($currency[0] as $key=>$item)
                    @if($key==='logo_url')
                        <th scope="col">Logo</th>
                    @else
                        <th scope="col">{{ucfirst($key)}}</th>
                    @endif
            @endforeach
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($currency[0] as $key=>$item)
                    @if($key==='logo_url')
                        <td class="text-center"><img src="{{$item}}" alt=""></td>
                    @else
                        <td class="text-center">{{$item}}</td>
                    @endif
            @endforeach
            {{-- edit and delete buttons --}}
            @component('edit_delete_buttons',['currencyId'=>$id])
            @endcomponent
        </tr>
        </tbody>
    </table>
@endsection