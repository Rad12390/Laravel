@extends('layouts.app')
@section('title') {{ "Product Listing" }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ "Product Listing" }}</h1>
            
        </div>
        <a href="{{url('/')}}" class="btn btn-primary pull-right">Listing 1</a>
        <a href="{{route('datatablePagination')}}" class="btn btn-primary pull-right">Listing 2 (with datatable)</a>
        <a href="{{route('numbericPagination')}}" class="btn btn-primary pull-right">Listing 3 (with numbers)</a>
        <!-- <a href="{{route('datatablePagination')}}" class="btn btn-primary pull-right">Listing 3 (with datatable)</a> -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th width="300px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count())
                @foreach($data as $key => $value)
                    <tr>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->details }}</td>
                       
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
        </tbody>
    </table>
    {!! $data->appends(['sort' => 'products'])->links() !!}

                </div>
            </div>
        </div>
    </div>
@endsection