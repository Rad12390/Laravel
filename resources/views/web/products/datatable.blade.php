@extends('layouts.app')
@section('title') {{ "Product Listing" }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ "Product Listing" }}</h1>
            
        </div>
         <a href="{{url('/')}}" class="btn btn-primary pull-right">Listing 1</a>
        <a href="{{route('datatablePagination')}}" class="btn btn-primary pull-right">Listing 3 (with datatable)</a>
        <a href="{{route('numbericPagination')}}" class="btn btn-primary pull-right">Listing 3 (with numbers)</a>
       
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-body">
                   <table  class="table table-striped table-bordered" id="table">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Details</th>
                  </tr>
                  </thead>
                  <tbody></tbody>
                </table>
                 
                </div>
            </div>
        </div>
    </div>

@section('script')
<script>
  $(function () {
    $('#table').DataTable({
      processing: true,
      serverSide: true,
       // pageLength: 5,
       // iDisplayLength: 5,
      ajax:{ 
        url: "{{url('http://127.0.0.1:8000/datatablePagination')}}" 
      },
      columns:[
        {data: 'name',name: 'name'},
        {data: 'details',name: 'details'},
      ]
    });
  });
</script>
@endsection