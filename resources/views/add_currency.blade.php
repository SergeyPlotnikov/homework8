@extends('layout')

@section('title','Add currency')

@section('content')

    <div class="row">
        <div class="col-md-5">
            <form role="form" method="post" action="{{route('store')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="titleCurrency">Title currency</label>
                    <input type="text" class="form-control" name="title" id="titleCurrency"
                           value="{{old('title')}}" placeholder="Enter title">
                    @if($errors->has('title'))
                        <div style="margin-top: 10px" class="alert alert-danger" role="alert">
                            {{$errors->first('title')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="short_name">Short name</label>
                    <input type="text" class="form-control" name="short_name" id="short_name"
                           value="{{old('short_name')}}" placeholder="Enter short name">
                    @if($errors->has('short_name'))
                        <div style="margin-top: 10px" class="alert alert-danger" role="alert">
                            {{$errors->first('short_name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="logo_url">URL</label>
                    <input type="text" class="form-control" name="logo_url" id="logo_url"
                           value="{{old('logo_url')}}" placeholder="Enter url">
                    @if($errors->has('logo_url'))
                        <div style="margin-top: 10px" class="alert alert-danger" role="alert">
                            {{$errors->first('logo_url')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{old('price')}}"
                           placeholder="Enter price">
                    @if($errors->has('price'))
                        <div style="margin-top: 10px" class="alert alert-danger" role="alert">
                            {{$errors->first('price')}}
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection