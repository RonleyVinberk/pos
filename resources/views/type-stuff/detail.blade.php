@extends('layouts.app')
@section('title', 'Type Stuff | ' .$type_stuff->name)
@section('type-stuff_content')
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
                    <li class="breadcrumb-item"><a href="{{route('types_stuff.index')}}">Type Stuff</a></li>
                    <li class="breadcrumb-item">{{$type_stuff->name}}</li>
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
            
            <a href="{{route('types_stuff.index')}}" class="btn btn-lg btn-default" role="button">Back</a>
            <a href="{{route('types_stuff.edit', $type_stuff->id)}}" class="btn btn-lg btn-primary" role="button">Edit</a>
            {{Form::open(['route' => ['types_stuff.destroy', $type_stuff->id], 'class' => 'form-horizontal', 'style' => 'display: -webkit-inline-box'])}}
            {{method_field('DELETE')}}
            {{Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-lg btn-danger', 'style' => 'position: relative; top: -15px;', 'onclick' => 'return confirm("You sure to delete this data?")'])}}
            {{Form::close()}}

            {{-- start x_panel --}}
            <div class="x_panel">
    
                {{-- start x_title --}}
                <div class="x_title">
    
                    <h1>{!! '<b>'.$type_stuff->name.'</b>' !!}</h1>
                        
                    <div class="clearfix"></div>
                        
                </div>
                {{-- end x_title --}}
    
                {{-- start x_content --}}
                <div class="x_content">

                    {{-- start div --}}
                     <div>
                        <h4>Type Stuff Information</h4>
                                
                        <div class="clearfix"></div>   
                    </div>
                    {{-- end div --}}
    
                    <table class="table table-striped table-bordered dt-responsive">
                        <tr>
                            <td style="text-align: right">Code</td>
                            <td>{{$type_stuff->code}}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right; width: 45%">Name</td>
                            <td>{{$type_stuff->name}}</td>
                        </tr>
                    </table>

                    {{-- start div --}}
                     <div>
                        <h4>Type Stuff Information II</h4>
                                    
                        <div class="clearfix"></div>   
                    </div>
                    {{-- end div --}}
        
                    <table class="table table-striped table-bordered dt-responsive">
                        <tr>
                            <td style="text-align: right; width: 45%">Created at</td>
                            <td>{{$type_stuff->created_at}}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Updated at</td>
                            <td>{{$type_stuff->updated_at}}</td>
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