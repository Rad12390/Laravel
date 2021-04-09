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
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        @if(!count($items))
                        <li class="item">
                            <div class="product-info" style="text-align:center;">
                                No items found
                            </div>
                        </li>
                        @endif
                        
                        <tr>
                            <th> Name </th>
                            <th> Details </th>
                       </tr>

                        </thead>
                        <tbody>
                            @foreach ($items as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->details }}</td>
                                   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                     {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
   <!-- <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>-->
@endpush