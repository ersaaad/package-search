@extends('parcels.layout')
@section('content')
<div class="card">
  <div class="card-header">Add New Package</div>
  <div class="card-body">

      <form action="{{ url('parcel') }}" method="post">
        {!! csrf_field() !!}
        <label>Package ID</label></br>
        <input type="text" name="pcl_id" id="pcl_id" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Delivery</label></br>
        <input type="text" name="delivery" id="delivery" class="form-control"></br>
        <label>Received</label></br>
        <input type="date" name="rcvd" id="rcvd" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
