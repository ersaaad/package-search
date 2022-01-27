@extends('parcels.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Packages</div>
                    <div class="card-body">
                        <a href="{{ url('/parcel/create') }}" class="btn btn-success btn-sm" title="Add New Package">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Package ID</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Delivery</th>
                                        <th>Received</th>
                                        <th>Collected</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($parcels as $item)
                                    <tr>
                                        <td>{{ $item->pcl_id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->delivery }}</td>
                                        <td>{{ $item->rcvd }}</td>
                                        <td>{{ $item->colct }}</td>
                                        <td>
                                            <a href="{{ url('/parcel/' . $item->pcl_id) }}" title="View Package"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/parcel/' . $item->pcl_id . '/edit') }}" title="Update Package"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button></a>
                                            <form method="POST" action="{{ url('/parcel' . '/' . $item->pcl_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Package" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
