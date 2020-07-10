@extends('layouts.admin.main')
@section('title', 'Customer')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1 class="page-header">
                Customer
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Customer
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-customer">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        Nama Customer
                                    </th>
                                    <th class="text-center">
                                        Jenis Kelamin
                                    </th>
                                    <th class="text-center">
                                        Point
                                    </th>
                                    <th class="text-center">
                                        Alamat
                                    </th>
                                    <th class="text-center">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                <tr>
                                    <td>
                                        {{ucfirst($customer['name'])}}
                                    </td>
                                    <td>
                                        @if($customer['gender'] == 'l')
                                            Laki-Laki
                                        @else
                                            Perempuan
                                        @endif
                                    </td>
                                    <td>
                                        {{ucfirst($customer['point'])}}
                                    </td>
                                    <td>
                                        {{ucfirst($customer['address'])}}
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-warning btn-sm">
                                            Update Data
                                        </a>
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{url('customer/create')}}" class="btn btn-success btn-md">
                            New Customer
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    $('#dataTables-customer').DataTable({
        data : row,
        responsive:true
    });
</script>
@endsection