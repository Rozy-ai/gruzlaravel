@extends('admin.layout')
@section('content')
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>{{__('Contact Us')}}</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('name')}}</th>
                                        <th>{{__('Email')}}</th>
                                        <th>{{__('Subject')}}</th>
                                        <th>{{__('Note')}}</th>
                                        <th>{{__('Date added')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->subject }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td>{{ $item->date_added }}</td>
                                        <td>
                                            <form method="POST" action="{{ url('/admin/contacts' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$contacts->links()}}
 
                    </div>
                </div>
            </div>

@stop