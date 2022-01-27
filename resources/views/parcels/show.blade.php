@extends('parcels.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">Package ID : {{ $parcels->pcl_id }}</h5>
        <p class="card-text">Name : {{ $parcels->name }}</p>
        <p class="card-text">Address : {{ $parcels->address }}</p>
        <p class="card-text">Delivery : {{ $parcels->delivery }}</p>
        <p class="card-text">Received : {{ $parcels->rcvd }}</p>
  </div>

    </hr>

  </div>
</div>
