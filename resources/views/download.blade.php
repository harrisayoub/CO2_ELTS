@extends('layouts/layout')

@section('title')
Download Dataset
@endsection

@section('content')

    <!-- STATISTIC-->
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <a href = "{{route('view')}}">
                    <div class="statistic__item statistic__item--purple">
                        <h2 class="number">View Data</h2>
                        <span class="desc">Click to view the data in the database</span>
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                    </div></a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--red">
                        <h2 class="number">Bulk Data</h2>
                        <span class="desc">Click to download the bulk dataset in the database</span>
                        <div class="icon">
                            <i class="zmdi zmdi-money"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC THIS IS WHERE I STOPPEDD-->

@endsection