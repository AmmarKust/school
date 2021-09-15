@extends('layouts.mail')
@push('css')

<style type="text/css">
  .error{
    color: red;
  }
</style>
@endpush
@section('content')
<div class="innerContent-wrap">
  <div class="container">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <th scope="row">Name</th>
          <td>{{$data->first_name}} {{$data->last_name}}</td>
        </tr>
        <tr>
          <th scope="row">Email Address</th>
          <td>{{$data->email_address}}</td>
        </tr>

        <tr>
          <th scope="row">Phone Number</th>
          <td>{{$data->phone_number}}</td>
        </tr>

        @if(null!==($data->skype))
        <tr>
          <th scope="row">Skype</th>
          <td>{{$data->skype}}</td>
        </tr>
        @endif

        @if(null!==($data->subject))
        <tr>
          <th scope="row">Subject</th>
          <td>{{$data->subject}}</td>
        </tr>
        @endif

        @if(null!==($data->category))
        <tr>
          <th scope="row">Category</th>
          <td>{{$data->category}}</td>
        </tr>
        @endif

        <tr>
          <th scope="row">Message</th>
          <td>{!!$data->message!!}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection