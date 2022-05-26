@extends('admin.layout')
@section('content')

 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 Crud</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/admin/trucks/create') }}" class="btn btn-success btn-sm" title="Add New Category">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Capacity</th>
                                        <th>Price Hour Grain</th>
                                        <th>Price Km</th>
                                        <th>Price Hour Normal</th>
                                        <th>Price Hour Awtoban</th>
                                        <th>Price Hour Danger</th>
                                        <th>Price Customs Reys</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($trucks as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->truck_type_tk }}</td>
                                        <td>{{ $item->capacity }} kg</td>
                                        <td>{{ $item->price_hour_grain }} TMT</td>
                                        <td>{{ $item->price_km_grain }} TMT</td>
                                        <td>{{ $item->price_hour_normal }} TMT</td>
                                        <td>{{ $item->price_hour_awtoban }} TMT</td>
                                        <td>{{ $item->price_hour_danger }} TMT</td>
                                        <td>{{ $item->price_customs_reys }} TMT</td>
 
                                        <td>
                                            <a href="{{ url('/admin/trucks/' . $item->id) }}" title="View Category"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/trucks/' . $item->id . '/edit') }}" title="Edit Category"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/admin/trucks' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Category" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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

@stop