@extends('admin.layout')
@section('content')
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>{{__('Orders')}}</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('Role')}}</th>
                                        <th>{{__('name')}}</th>
                                        <th>{{__('Phone number')}}</th>
                                        <th>{{__('Email')}}</th>
                                        <th>{{__('ý/a/g')}}</th>
                                        <th>{{__('Cargo type')}}</th>
                                        <th>{{__('Cargo volume')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        @if ($item->role == 'fiziki')
                                        <td>{{ __('Individual') }}</td>
                                        <td>{{ $item->name }}</td>
                                        @else
                                        <td>{{ __('Entity') }}</td>
                                        <td>{{ $item->enterprise }}</td>
                                        @endif
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->cargo_type }}</td>
                                        <td>{{ $item->cargo_volume }} </td>
                                        <td>
                                            <a href="{{ url('/admin/orders/' . $item->id) }}" title="View Order"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/orders/' . $item->id . '/edit') }}" title="Edit Order"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/admin/orders' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Order" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$orders->links()}}
 
                    </div>
                </div>
            </div>

@stop