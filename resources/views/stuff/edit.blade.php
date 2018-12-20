@extends('layouts.app')
@section('title', 'POS-SMART | ' .$stuff->name. " | Edit")
@section('stuff_content')
{{-- start right_col --}}
<div class="right_col" role="main">

    {{-- start row --}}
    <div class="row">
    
        {{-- start col --}}
        <div class="col-xs-12 col-sm-12 col-md-12">

            {{-- start breadcrumb --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background: #e9ecef !important;">
                    <li class="breadcrumb-item"><a class="white-text" href="{{route('homes.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Master Data</li>
                    <li class="breadcrumb-item"><a href="{{route('suppliers.index')}}">stuff</a></li>
                    <li class="breadcrumb-item"><a href="{{route('suppliers.show', $stuff->id)}}">{{$stuff->name}}</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
            {{-- end breadcrumb --}}
        
            {{-- Showing error when running validate process --}}
            @foreach($errors->all() as $message)
                <div class="alert alert-warning">
                    {{$message}}
                </div>
            @endforeach
    
            {{-- start x_panel --}}
            <div class="x_panel">
    
                {{-- start x_title --}}
                <div class="x_title">
    
                    <h1>{!! '<b>'.$stuff->name.'</b>' !!}</h1>
                        
                    <div class="clearfix"></div>
                        
                </div>
                {{-- end x_title --}}
    
                {{-- start x_content --}}
                <div class="x_content">

                    {{-- start div --}}
                    <div>
                        <h4>Stuff Information</h4>
                                
                        <div class="clearfix"></div>   
                    </div>
                    {{-- end div --}}
    
                    {{Form::model($stuff, ['route' => ['stuffs.update', $stuff->id], 'class' => 'form-horizontal form-label-left', 'data-parsley-validate'])}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        {{Form::label('name', 'Name', ['class' => 'control-label col-md-4 col-sm-5 col-xs-12'])}}
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            {{Form::text('name', NULL, ['id' => 'name', 'class' => 'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('price', 'Price', ['class' => 'control-label col-md-4 col-sm-3 col-xs-12'])}}
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            {{Form::number('price', NULL, ['id' => 'price', 'class' => 'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('stock', 'Stock', ['class' => 'control-label col-md-4 col-sm-3 col-xs-12'])}}
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            {{Form::number('stock', NULL, ['id' => 'stock', 'class' => 'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('type_stuff_id', 'Types Stuff', ['class' => 'control-label col-md-4 col-sm-3 col-xs-12'])}}
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <select name="type_stuff_id" id="type_stuff_id" class="form-control col-md-7 col-xs-12">
                                 <option value="">Choose...</option>
                                @foreach ($types_stuff as $item)
                                    @if ($stuff->type_stuff_id == $item->id)
                                        <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                    @else
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    {{Form::button('Submit', ['type' => 'submit', 'class' => 'btn btn-success'])}}
                    <a href="{{route('stuffs.show', $stuff->id)}}" class="btn btn-md btn-default" role="button">Back</a>
                    {{Form::close()}}
    
                </div>
                {{-- end x_content --}}
    
            </div>
            {{-- end x_panel --}}
    
        </div>
        {{-- end col --}}
    
    </div>
    {{-- end row --}}
    
</div>
{{-- end right_col --}}
@endsection