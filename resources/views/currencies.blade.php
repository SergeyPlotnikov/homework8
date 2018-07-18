<!-- Write your code here -->
@extends('layout')
@section('title',$title)
@section('content')
    @if(!empty($currencies))
        <table class="table table-bordered" style="margin-top: 25px">
            <thead>
            <tr class="text-center">
                @foreach($currencies[0] as $key=>$item)
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
            @foreach($currencies as $currency)
                <tr>
                    @foreach($currency as $key=>$item)
                        @if($key==='logo_url')
                            <td class="text-center"><img src="{{$item}}" alt=""></td>
                        @elseif($key ==='title')
                            <td class="text-center">
                                <a href="{{route('show-currency',['id'=>$currency['id']])}}">{{$item}}</a>
                            </td>
                        @else
                            <td class="text-center">{{$item}}</td>
                        @endif
                    @endforeach
                    {{-- edit and delete buttons --}}
                    @component('edit_delete_buttons',['currencyId'=>$currency['id']])
                    @endcomponent
                </tr>
            @endforeach

            </tbody>
        </table>
    @else
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-3">
                <div class="alert alert-warning" role="alert">No currencies</div>
            </div>
        </div>
    @endif
@endsection