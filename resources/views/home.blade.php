@extends('layouts.app')
@section('title', 'SMART-POS | Home')
@section('home_content')
{{-- start right_col --}}
<div class="right_col" role="main">
    
    {{-- start row title_count --}}
    <div class="row tile_count">

        {{-- start col --}}
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Buyer</span>
            <div class="count">2500</div>
            <span class="count_bottom"><i class="green">4% </i> From last Week</span>
        </div>
        {{-- end col --}}

        {{-- start col --}}
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Stock Stuffs</span>
            <div class="count">2,315</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
        {{-- end col --}}

        {{-- start col --}}
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> Total Stuffs Out </span>
            <div class="count">123.50</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
        </div>
        {{-- end col --}}

        {{-- start col --}}
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Income</span>
            <div class="count green">Rp. 10,000.000</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
        {{-- end col --}}

    </div>
    {{-- end row title_count --}}

</div>
{{-- end right_col --}}
@endsection