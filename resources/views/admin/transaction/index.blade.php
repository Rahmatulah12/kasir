@extends('layouts.admin.main')
@section('title', 'Transaksi Penjualan')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1 class="page-header">
                Laporan Transaksi Penjualan
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Transaksi
                </div>
                <div class="panel-body">
                    @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    <div class="dataTable_wrapper">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-transaksi">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            Nama Customer
                                        </th>
                                        <th class="text-center">
                                            Barcode
                                        </th>
                                        <th class="text-center">
                                            Produk
                                        </th>
                                        <th class="text-center">
                                            Tanggal Transaksi
                                        </th>
                                        <th class="text-center">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result as $row)
                                    <tr>
                                        <td>
                                            {{ucfirst($row['customer_name'])}}
                                        </td>
                                        <td>
                                            {{$row['product_barcode']}}
                                        </td>
                                        <td>
                                            {{ucfirst($row['product_name'])}}
                                        </td>
                                        <td>
                                            {{date('d-m-Y',strtotime($row['created_at']))}}
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-info btn-sm">
                                                Details
                                            </a>
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
@section('script')
<script>
    $('#dataTables-transaksi').DataTable({
        responsive:true
    });
</script>
@endsection