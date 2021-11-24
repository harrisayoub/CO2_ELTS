@extends('layouts/layout')

@section('title')
View Dataset
@endsection

@section('content')

    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">data table</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select2" name="property">
                                    <option selected="selected">All Properties</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="time">
                                    <option selected="selected">Today</option>
                                    <option value="">3 Days</option>
                                    <option value="">1 Week</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <button class="au-btn-filter">
                                <i class="zmdi zmdi-filter-list"></i>filters</button>
                        </div>
                        <div class="table-data__tool-right">
                            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                <select class="js-select2" name="type">
                                    <option selected="selected">Export</option>
                                    <option value="">Download</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>item</th>
                                    <th>country</th>
                                    <th>production</th>
                                    <th>processing</th>
                                    <th>distribution</th>
                                    <th>retail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($items) > 0)
                                    @foreach($items as $item)
                                    <tr class="tr-shadow">
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->country}}</td>
                                        <td>{{$item->production}}</td>
                                        <td>{{$item->processing}}</td>
                                        <td>{{$item->distribution}}</td>
                                        <td>{{$item->retail}}</td>
                                    </tr>
                                    @endforeach
                                @else
                                    <td>Empty</td>
                                    <td>Empty</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END DATA TABLE-->

@endsection