@extends('layouts.app')
@section('title', 'POS-SMART | ' .$supplier->name)
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
                </ol>
            </nav>
            {{-- end breadcrumb --}}

            <!-- Notification -->
            @if (session('notification_error'))
                <div class="alert alert-danger">
                    {!! session('notification_error') !!}
                </div>
            @endif
            @if (session('notification_success'))
                <div class="alert alert-success">
                    {!! session('notification_success') !!}
                </div>
            @endif
                
            <a href="{{route('suppliers.index')}}" class="btn btn-lg btn-default" role="button">Back</a>
            <a href="{{route('suppliers.edit', $supplier->id)}}" class="btn btn-lg btn-primary" role="button">Edit</a>
            {{Form::open(['route' => ['stuffs.destroy', $supplier->id], 'class' => 'form-horizontal', 'style' => 'display: -webkit-inline-box'])}}
            {{method_field('DELETE')}}
            {{Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-lg btn-danger', 'style' => 'position: relative; top: -15px;', 'onclick' => 'return confirm("You sure to delete this data?")'])}}
            {{Form::close()}}
    
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
        
                    <table class="table table-striped table-bordered dt-responsive">
                        <tr>
                            <td style="text-align: right; width: 45%">Is Active?</td>
                            <td>
                                @if ($supplier->is_active == 1)
                                    <span class="btn btn-xs btn-success">Active</span>
                                @else
                                    <span class="btn btn-xs btn-danger">No Active</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">Name</td>
                            <td>{{$supplier->name}}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Address</td>
                            <td>{{$supplier->address}}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Province</td>
                            <td>{{$supplier->province->name}}, {{$supplier->province->country->name}}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Phone</td>
                            <td>{{$supplier->phone}}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Email</td>
                            <td>{{$supplier->email}}</td>
                        </tr>
                    </table>
    
                    {{-- start div --}}
                    <div>
                
                        <h4>Supplier Information II</h4>
                                                
                        <div class="clearfix"></div>   
                    
                    </div>
                    {{-- end div --}}
            
                    <table class="table table-striped table-bordered dt-responsive">
                        <tr>
                            <td style="text-align: right; width: 45%">Created at</td>
                            <td>{{$supplier->created_at}}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Updated at</td>
                            <td>{{$supplier->updated_at}}</td>
                        </tr>
                    </table>
        
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