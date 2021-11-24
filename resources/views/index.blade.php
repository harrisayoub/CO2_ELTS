@extends('layouts/layout')

@section('title')
Home
@endsection

@section('content')

    <!-- WELCOME-->
    <section class="welcome p-t-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-4">Welcome back
                        <span>Admin!</span>
                    </h1>
                    <hr class="line-seprate">
                </div>
            </div>
        </div>
    </section>
    <!-- END WELCOME-->


    <!-- STATISTIC-->
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--green">
                        <h2 class="number">Template</h2>
                        <span class="desc">Download the blank template to input data in the correct format </span>
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--orange">
                        <h2 class="number">Usage Report</h2>
                        <span class="desc">Download usage reports collected from the mobile application</span>
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number">Upload Data</h2>
                        <span class="desc">Empty the database and upload new data in the template provided</span>
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href = "{{route('download')}}">
                        <div class="statistic__item statistic__item--red">
                        <h2 class="number">Bulk Data</h2>
                        <span class="desc">
                            Download the bulk dataset in the database</span>
                        <div class="icon">
                            <i class="zmdi zmdi-money"></i>
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC THIS IS WHERE I STOPPEDD-->


@endsection