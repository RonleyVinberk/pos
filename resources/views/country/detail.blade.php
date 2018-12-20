@extends('layouts.app')
@section('title', 'POS-SMART | ' .$country->name)
@section('country_content')
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
                    <li class="breadcrumb-item"><a href="{{route('countries.index')}}">Countries</a></li>
                    <li class="breadcrumb-item">{{$country->name}}</li>
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
                
            <a href="{{route('countries.index')}}" class="btn btn-lg btn-default" role="button">Back</a>
            <a href="{{route('countries.edit', $country->id)}}" class="btn btn-lg btn-primary" role="button">Edit</a>
            {{Form::open(['route' => ['countries.destroy', $country->id], 'class' => 'form-horizontal', 'style' => 'display: -webkit-inline-box'])}}
            {{method_field('DELETE')}}
            {{Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-lg btn-danger', 'style' => 'position: relative; top: -15px;', 'onclick' => 'return confirm("You sure to delete this data?")'])}}
            {{Form::close()}}
    
            {{-- start x_panel --}}
            <div class="x_panel">
        
                {{-- start x_title --}}
                <div class="x_title">
        
                    <h4>Country Information</h4>
                            
                    <div class="clearfix"></div>
                            
                </div>
                {{-- end x_title --}}
        
                {{-- start x_content --}}
                <div class="x_content">
        
                    <table class="table table-striped table-bordered dt-responsive">
                        <tr>
                            <td style="text-align: right">Code</td>
                            <td>{{$country->code}}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right; width: 45%">Name</td>
                            <td>{{$country->name}}</td>
                        </tr>
                    </table>
        
                </div>
                {{-- end x_content --}}
        
            </div>
            {{-- end x_panel --}}

            {{-- start x_panel --}}
            <div class="x_panel">
        
                {{-- start x_title --}}
                <div class="x_title">
            
                    <h4>Country Information II</h4>
                                
                    <div class="clearfix"></div>
                                
                </div>
                {{-- end x_title --}}

                {{-- start x_content --}}
                <div class="x_content">
                
                    <table class="table table-striped table-bordered dt-responsive">
                        <tr>
                            <td style="text-align: right; width: 45%">Created at</td>
                            <td>{{$country->created_at}}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Updated at</td>
                            <td>{{$country->updated_at}}</td>
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