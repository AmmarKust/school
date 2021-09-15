@extends('admin.layouts.app')
@section('content')
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <!-- Main body start -->
      <div class="main-body user-profile">
<div class="page-wrapper">
<!-- Page-header start -->
<div class="page-header">
<div class="page-header-title">
<h4>User Profile</h4>
</div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="index.html">
<i class="icofont icofont-home"></i>
</a>
</li>
<li class="breadcrumb-item"><a href="#!">User Profile</a>
</li>
<li class="breadcrumb-item"><a href="#!">User Profile</a>
</li>
</ul>
</div>
</div>
<!-- Page-header end -->
<!-- Page-body start -->
<div class="page-body">
<!--profile cover start-->
<div class="row">
<div class="col-lg-12">
<div class="cover-profile">
<div class="profile-bg-img">
<img class="profile-bg-img img-fluid" src="{{asset('images/bg-img1.jpg')}}" alt="bg-img">
<div class="card-block user-info">
<div class="col-md-12">
<div class="media-left">
<a href="#" class="profile-image">
<img width="20%" class="user-img img-circle" src="{{asset('images/'.$applicant->attached_file)}}" alt="user-img">
</a>
</div>
<div class="media-body row">
<div class="col-lg-12">
<div class="user-title">
<h2>{{$applicant->name}}</h2>
<span class="text-white">{{title($applicant->seeker->sub_category)}}</span>
</div>
</div>
<div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--profile cover end-->
<div class="row">
<div class="col-lg-12">
<!-- tab header start -->
<div class="tab-header">
<ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
<div class="slide"></div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Work Experience</a>
<div class="slide"></div>
</li>

<li class="nav-item">
<a class="nav-link" target="_blank" href="{{asset('images/'.$applicant->seeker->attached_file)}}" role="tab">Download CV</a>
<div class="slide"></div>
</li>


</ul>
</div>
<!-- tab header end -->
<!-- tab content start -->
<div class="tab-content">
<!-- tab panel personal start -->
<div class="tab-pane active" id="personal" role="tabpanel">
<!-- personal card start -->
<div class="card">
<div class="card-header">
<h5 class="card-header-text">About Me</h5>
<button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
<i class="icofont icofont-edit"></i>
</button>
</div>
<div class="card-block">
<div class="view-info">
<div class="row">
<div class="col-lg-12">
<div class="general-info">
<div class="row">
<div class="col-lg-12 col-xl-6">
<table class="table m-0">
<tbody>
<tr>
<th scope="row">Full Name</th>
<td>{{$applicant->name}}</td>
</tr>
<tr>
<th scope="row">Gender</th>
<td>{{title($applicant->seeker->gender)}}</td>
</tr>
<tr>
<th scope="row">Looking For</th>
<td>{{$applicant->seeker->looking_for}}</td>
</tr>

<tr>
<th scope="row">Category</th>
<td>{{title($applicant->seeker->sub_category)}}</td>
</tr>
<tr>
<th scope="row">Location</th>
<td>{{title($applicant->seeker->city)}}, {{title($applicant->seeker->state)}}, {{title($applicant->seeker->country)}}</td>
</tr>
</tbody>
</table>
</div>
<!-- end of table col-lg-6 -->
<div class="col-lg-12 col-xl-6">
<table class="table">
<tbody>
<tr>
<th scope="row">Email</th>
<td><a href="#!">{{$applicant->email}}</a></td>
</tr>
<tr>
<th scope="row">Mobile Number</th>
<td>{{$applicant->seeker->contact}}</td>
</tr>
<tr>
<th scope="row">Qualification</th>
<td>{{title($applicant->seeker->education_level)}}</td>
</tr>
<tr>
<th scope="row">Skills</th>
<td>{!!$applicant->seeker->skills!!}</td>
</tr>
<tr>
<th scope="row">Desired Salary</th>
<td>{!!$applicant->seeker->desired_salary!!}</td>
</tr>
</tbody>
</table>
</div>
<!-- end of table col-lg-6 -->
</div>
<!-- end of row -->
</div>
<!-- end of general info -->
</div>
<!-- end of col-lg-12 -->
</div>
<!-- end of row -->
</div>
<!-- end of view-info -->

<!-- end of edit-info -->
</div>
<!-- end of card-block -->
</div>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h5 class="card-header-text">Description About Me</h5>
<button id="edit-info-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
<i class="icofont icofont-edit"></i>
</button>
</div>
<div class="card-block user-desc">
<div class="view-desc">
<p>{{$applicant->seeker->description}}</p>
</div>
<div class="edit-desc" style="display: none;">
<div class="col-md-12">


</div>
<div class="text-center">
<a href="#!" class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Save</a>
<a href="#!" id="edit-cancel-btn" class="btn btn-default waves-effect m-t-20">Cancel</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- personal card end-->
</div>
<!-- tab pane personal end -->
<!-- tab pane info start -->
<div class="tab-pane" id="binfo" role="tabpanel">
<!-- info card start -->
<div class="card">
<div class="card-header">
<h5 class="card-header-text">Work Experience</h5>
</div>
<div class="card-block">
<?php 
$experience = json_decode($applicant->seeker->work_experience);
 ?>   
 @if(null!==($experience))
<div class="row">
@foreach($experience as $exp)
<div class="col-md-6">
<div class="card b-l-success business-info services m-b-20">
<div class="card-header">
<div class="service-header">
<a href="#">
<h5 class="card-header-text">Company Name: {{$exp->company}}</h5>
</a>
</div>


</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12">
   <ul>
      <li><strong>Position:</strong> {{$exp->position}}</li>
      <li><strong>Experience:</strong> {{title($exp->work_experience)}} ({{$exp->from_year}} - {{$exp->to_year}})</li>
      <li><strong>Career Level:</strong> {{title($exp->career_level)}}</li>
      
   </ul>

</div>
<!-- end of col-sm-8 -->
</div>
<!-- end of row -->
</div>
<!-- end of card-block -->
</div>
</div>
@endforeach
</div>
@endif
</div>
</div>

<!-- info card end -->
</div>
<!-- tab pane info end -->
<!-- tab pane contact start -->

<!-- tab pane contact end -->

</div>
<!-- tab content end -->
</div>
</div>
</div>
<!-- Page-body end -->
</div>
      </div>
      <!-- Main body end -->
<div id="styleSelector">
<div class="selector-toggle"><a href="javascript:void(0)"></a></div>
<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
<div class="style-cont" style="overflow: hidden; width: auto; height: 100%;">
<ul>
<li>
<p class="selector-title main-title">FLAT ABLE CUSTOMIZER</p>
</li>
</ul>
<ul class="nav nav-tabs  tabs" role="tablist">
<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#sel-pos" role="tab">Position</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sel-lay" role="tab">Layout</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sel-sid" role="tab">Sidebar</a></li>
</ul>
<div class="tab-content tabs">
<div class="tab-pane active" id="sel-pos" role="tabpanel">
<ul>
   <li class="theme-option">
      <div class="checkbox-fade fade-in-success"><label><input type="checkbox" value="false" id="sidebar-position" name="sidebar-position"><span class="cr"><i class="cr-icon icofont icofont-ui-check txt-success"></i></span><span>Fixed Sidebar Position</span></label></div>
   </li>
   <li class="theme-option">
      <div class="checkbox-fade fade-in-success"><label><input type="checkbox" value="false" id="header-position" name="header-position"><span class="cr"><i class="cr-icon icofont icofont-ui-check txt-success"></i></span><span>Fixed Header Position</span></label></div>
   </li>
   <li class="theme-option">
      <div class="checkbox-fade fade-in-success"><label><input type="checkbox" value="false" id="vertical-item-border" name="vertical-item-border"><span class="cr"><i class="cr-icon icofont icofont-ui-check txt-success"></i></span><span>Hide Item Border</span></label></div>
   </li>
   <li class="theme-option">
      <div class="checkbox-fade fade-in-success"><label><input type="checkbox" value="false" id="vertical-subitem-border" name="vertical-item-border"><span class="cr"><i class="cr-icon icofont icofont-ui-check txt-success"></i></span><span>Hide SubItem Border</span></label></div>
   </li>
</ul>
</div>
<div class="tab-pane" id="sel-lay" role="tabpanel">
<ul>
   <li class="theme-option">
      <p class="sub-title">Page Layout</p>
      <select id="theme-layout" class="form-control minimal input-sm">
         <option name="vertical-layout" value="wide">Wide layout</option>
         <option name="vertical-layout" value="box">Boxed layout</option>
      </select>
   </li>
   <li class="theme-option">
      <p class="sub-title">Navbar Placement</p>
      <select id="vertical-navbar-placement" class="form-control minimal input-sm">
         <option name="navigation-side" value="left">Left</option>
         <option name="navigation-side" value="right">Right</option>
      </select>
   </li>
</ul>
</div>
<div class="tab-pane" id="sel-sid" role="tabpanel">
<ul>
   <li class="theme-option">
      <p class="sub-title drp-title">SideBar Effect</p>
      <select id="vertical-menu-effect" class="form-control minimal">
         <option name="vertical-menu-effect" value="shrink">shrink</option>
         <option name="vertical-menu-effect" value="overlay">overlay</option>
         <option name="vertical-menu-effect" value="push">Push</option>
      </select>
   </li>
   <li class="theme-option">
      <p class="sub-title drp-title">Border Style</p>
      <select id="vertical-border-style" class="form-control minimal">
         <option name="vertical-border-style" value="solid">Style 1</option>
         <option name="vertical-border-style" value="dotted">Style 2</option>
         <option name="vertical-border-style" value="dashed">Style 3</option>
         <option name="vertical-border-style" value="none">No Border</option>
      </select>
   </li>
   <li class="theme-option">
      <p class="sub-title drp-title">DropDown Icon</p>
      <select id="vertical-dropdown-icon" class="form-control minimal">
         <option name="vertical-dropdown-icon" value="style1">Style 1</option>
         <option name="vertical-dropdown-icon" value="style2">style 2</option>
         <option name="vertical-dropdown-icon" value="style3">style 3</option>
      </select>
   </li>
   <li class="theme-option">
      <p class="sub-title drp-title">Submenu Item Icon</p>
      <select id="vertical-subitem-icon" class="form-control minimal">
         <option name="vertical-subitem-icon" value="style1">Style 1</option>
         <option name="vertical-subitem-icon" value="style2">style 2</option>
         <option name="vertical-subitem-icon" value="style3">style 3</option>
         <option name="vertical-subitem-icon" value="style4">style 4</option>
         <option name="vertical-subitem-icon" value="style5">style 5</option>
         <option name="vertical-subitem-icon" value="style6">style 6</option>
      </select>
   </li>
</ul>
</div>
<ul>
<li>
   <p class="selector-title">Navigator Option</p>
</li>
<li class="theme-option">
   <span class="selector-title">Menu Caption Color</span>
   <div class="theme-color"><a href="#" class="leftheader-theme" lheader-theme="theme1">&nbsp;</a><a href="#" class="leftheader-theme" lheader-theme="theme2">&nbsp;</a><a href="#" class="leftheader-theme" lheader-theme="theme3">&nbsp;</a><a href="#" class="leftheader-theme" lheader-theme="theme4">&nbsp;</a><a href="#" class="leftheader-theme" lheader-theme="theme5">&nbsp;</a><a href="#" class="leftheader-theme" lheader-theme="theme6">&nbsp;</a></div>
</li>
<li class="theme-option">
   <span class="selector-title">Header Theme</span>
   <div class="theme-color"><a href="#" class="header-theme" header-theme="theme1">&nbsp;</a><a href="#" class="header-theme" header-theme="theme2">&nbsp;</a><a href="#" class="header-theme" header-theme="theme3">&nbsp;</a><a href="#" class="header-theme" header-theme="theme4">&nbsp;</a><a href="#" class="header-theme" header-theme="theme5">&nbsp;</a><a href="#" class="header-theme" header-theme="theme6">&nbsp;</a></div>
</li>
<li class="theme-option">
   <span class="selector-title">left NavBar Theme</span>
   <div class="theme-color"><a href="#" class="navbar-theme" navbar-theme="theme1">&nbsp;</a><a href="#" class="navbar-theme" navbar-theme="theme2">&nbsp;</a><a href="#" class="navbar-theme" navbar-theme="theme3">&nbsp;</a><a href="#" class="navbar-theme" navbar-theme="theme4">&nbsp;</a><a href="#" class="navbar-theme" navbar-theme="theme5">&nbsp;</a><a href="#" class="navbar-theme" navbar-theme="theme6">&nbsp;</a></div>
</li>
<li class="theme-option">
   <span class="selector-title">Active item Theme</span>
   <div class="theme-color"><a href="#" class="active-item-theme" active-item-theme="theme1">&nbsp;</a><a href="#" class="active-item-theme" active-item-theme="theme2">&nbsp;</a><a href="#" class="active-item-theme" active-item-theme="theme3">&nbsp;</a><a href="#" class="active-item-theme" active-item-theme="theme4">&nbsp;</a><a href="#" class="active-item-theme" active-item-theme="theme5">&nbsp;</a><a href="#" class="active-item-theme" active-item-theme="theme6">&nbsp;</a></div>
</li>
<li class="theme-option">
   <span class="selector-title">Background Patterns</span>
   <div class="theme-color"><a href="#" class="themebg-pattern" themebg-pattern="pattern1">&nbsp;</a><a href="#" class="themebg-pattern" themebg-pattern="pattern2">&nbsp;</a><a href="#" class="themebg-pattern" themebg-pattern="pattern3">&nbsp;</a><a href="#" class="themebg-pattern" themebg-pattern="pattern4">&nbsp;</a><a href="#" class="themebg-pattern" themebg-pattern="pattern5">&nbsp;</a><a href="#" class="themebg-pattern" themebg-pattern="pattern6">&nbsp;</a></div>
</li>
<li>
   <p class="selector-title">Preset Color</p>
</li>
<li class="theme-option">
   <span class="selector-title"></span>
   <div class="theme-color"><a href="#" class="color-1">&nbsp;</a><a href="#" class="color-2">&nbsp;</a><a href="#" class="color-3">&nbsp;</a><a href="#" class="color-4">&nbsp;</a><a href="#" class="color-5">&nbsp;</a><a href="#" class="color-6">&nbsp;</a></div>
</li>
</ul>
</div>
</div>
<div class="slimScrollBar" style="background: rgb(153, 153, 153); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 353.802px;"></div>
<div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
</div>
</div>
   </div>
</div>
@endsection