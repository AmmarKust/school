@extends('admin.layouts.app')
@section('content')
<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-header">
<div class="page-header-title">
<h4>{{ widget(1)->extra_field_1 }}</h4>
</div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="index-2.html">
<i class="icofont icofont-home"></i>
</a>
</li>
<li class="breadcrumb-item"><a href="#!">{{__('Dashboard')}}</a>
</li>
<li class="breadcrumb-item"><a href="#!">{{ widget(1)->extra_field_1 }}</a>
</li>
</ul>
</div>
</div>
<div class="page-body">
<div class="row">
<div class="col-md-12 col-xl-8">
<!-- table card start -->
<div class="card table-card">
<div class="">
<div class="row-table">
<div class="col-sm-6 card-block-big br">
<div class="row">
    <div class="col-sm-4">
        <i class="icofont icofont-eye-alt text-success"></i>
    </div>
    <div class="col-sm-8 text-center">
        <h5>{{$messages}}</h5>
        <span>{{__('Messages')}}</span>
    </div>
</div>
</div>
<div class="col-sm-6 card-block-big">
<div class="row">
    <div class="col-sm-4">
        <i class="icofont icofont-ui-music text-danger"></i>
    </div>
    <div class="col-sm-8 text-center">
        <h5>{{count(dataArray(2))}}</h5>
        <span>{{__('Classes')}}</span>
    </div>
</div>
</div>
</div>
</div>
<div class="">
<div class="row-table">
<div class="col-sm-6 card-block-big br">
<div class="row">
    <div class="col-sm-4">
        <i class="icofont icofont-files text-info"></i>
    </div>
    <div class="col-sm-8 text-center">
        <h5>{{count(dataArray(7))}}</h5>
        <span>{{__('Teachers')}}</span>
    </div>
</div>
</div>
<div class="col-sm-6 card-block-big">
<div class="row">
    <div class="col-sm-4">
        <i class="icofont icofont-envelope-open text-warning"></i>
    </div>
    <div class="col-sm-8 text-center">
        <h5>{{$students_count}}</h5>
        <span>{{__('Students')}}</span>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- table card end -->
</div>

<div class="col-md-12 col-xl-4">
<!-- widget primary card start -->
<div class="card table-card widget-primary-card">
<div class="">
<div class="row-table">
<div class="col-sm-3 card-block-big">
<i class="icofont icofont-star"></i>
</div>
<div class="col-sm-9">
<h4>{{count(dataArray(1))}}</h4>
<h6>{{__('Sliders')}}</h6>
</div>
</div>
</div>
</div>
<!-- widget primary card end -->
<!-- widget-success-card start -->
<div class="card table-card widget-success-card">
<div class="">
<div class="row-table">
<div class="col-sm-3 card-block-big">
<i class="icofont icofont-trophy-alt"></i>
</div>
<div class="col-sm-9">
<h4>{{count(dataArray(9))}}</h4>
<h6>{{__('Blogs')}}</h6>
</div>
</div>
</div>
</div>
<!-- widget-success-card end -->
</div>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="card table-1-card">
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-capitalize">
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Class</th>
                                    <th>Father Name</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(null!==($students))
                                @foreach($students as $st)
                                <tr>
                                    <td>{{$st->first_name}}</td>
                                    <td>{{$st->last_name}}</td>
                                    <td>{{$st->email}}</td>
                                    <td>{{$st->phone}}</td>
                                    <td>{{title($st->class_id)}}</td>
                                    <td>{{$st->father_name}}</td>
                                    <td>@if($st->status=='approved')<span class="btn btn-success">{{ucfirst($st->status)}}</span>@else <span class="btn btn-warning">{{ucfirst($st->status)}}</span> @endif</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
</div>
</div>
</div>
</div>
</div>
<div id="styleSelector">

</div>
</div>
</div>
</div>
@endsection
@push('js')
<script type="text/javascript" src="{{asset('admin/assets/pages/dashboard/ecommerce-dashboard.js')}}"></script>
@endpush