@extends('parcels.layout')
@section('content')
<div class="card">
  <div class="card-header">Update Package</div>
  <div class="card-body">

      <form action="{{ url('parcel/' .$parcels->pcl_id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Package ID</label></br>
        <input type="text" name="pcl_id" id="pcl_id" value="{{$parcels->pcl_id}}" class="form-control"/></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$parcels->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$parcels->address}}" class="form-control"></br>
        <label>Delivery</label></br>
        <input type="text" name="delivery" id="delivery" value="{{$parcels->delivery}}" class="form-control"></br>
        <label>Received</label></br>
        <input type="date" name="rcvd" id="rcvd" value="{{$parcels->rcvd}}" class="form-control"></br>
        <label>Collect</label></br>
        <input type="date" name="colct" id="colct" value="{{$parcels->colct}}" class="form-control"></br>
        <input type="submit" value="Edit" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
