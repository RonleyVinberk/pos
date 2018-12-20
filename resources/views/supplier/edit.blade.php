@extends('layouts.app')
@section('title', 'POS-SMART | ' .$supplier->name. ' | Edit')
@section('supplier_content')
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
                    <li class="breadcrumb-item"><a href="{{route('suppliers.index')}}">Suppliers</a></li>
                    <li class="breadcrumb-item"><a href="{{route('suppliers.show', $supplier->id)}}">{{$supplier->name}}</a></li>
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
        
                    <h1>{!! '<b>'.$supplier->name.'</b>' !!}</h1>
                            
                    <div class="clearfix"></div>
                            
                </div>
                {{-- end x_title --}}
        
                {{-- start x_content --}}
                <div class="x_content">
    
                    {{-- start div --}}
                    <div>
                        <h4>Supplier Information</h4>
                                    
                        <div class="clearfix"></div>   
                    </div>
                    {{-- end div --}}
        
                    {{Form::model($supplier, ['route' => ['suppliers.update', $supplier->id], 'class' => 'form-horizontal form-label-left', 'data-parsley-validate'])}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        {{Form::label('is_active', 'Is Active?', ['class' => 'control-label col-md-4 col-sm-3 col-xs-12'])}}
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            {{Form::checkbox('is_active', $supplier->is_active, NULL, ['id' => 'is_active'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('name', 'Name', ['class' => 'control-label col-md-4 col-sm-5 col-xs-12'])}}
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            {{Form::text('name', NULL, ['id' => 'name', 'class' => 'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('address', 'Address', ['class' => 'control-label col-md-4 col-sm-5 col-xs-12'])}}
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            {{Form::textarea('address', NULL, ['id' => 'address', 'class' => 'form-control col-md-7 col-xs-12', 'rows' => 4])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('phone', 'Phone', ['class' => 'control-label col-md-4 col-sm-5 col-xs-12'])}}
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            {{Form::text('phone', NULL, ['id' => 'phone', 'class' => 'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('email', 'Email', ['class' => 'control-label col-md-4 col-sm-5 col-xs-12'])}}
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            {{Form::email('email', NULL, ['id' => 'email', 'class' => 'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('province_id', 'Province', ['class' => 'control-label col-md-4 col-sm-5 col-xs-12'])}}
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <select name="province_id" id="province_id" class="form-control col-md-7 col-xs-12">
                                <option>Choose...</option>
                                @foreach ($provinces as $item)
                                    @if ($supplier->province_id == $item->id)
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
                    <a href="{{route('suppliers.show', $supplier->id)}}" class="btn btn-md btn-default" role="button">Back</a>
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