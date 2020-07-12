@extends('layouts.admin.main')
@section('title', 'Transaksi Penjualan')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <h1 class="page-header">
            Transaksi Penjualan
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h5 class="pull-left" style="font-weight:bold;color:rgba(3, 3, 3, 0.685);">
                    Transaksi Penjualan Baru
                </h5>
                <h5 class="pull-right" style="font-weight:bold;color:rgba(3, 3, 3, 0.685);">
                    Tanggal : {{date('d-m-Y')}}
                </h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form action="{{url('/transaction/sales')}}" method="post" role="form">
                        @csrf
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="customerName">Nama Pelanggan</label>
                                <select class="form-control" id="customerName" name="customer_id">
                                    <option value="0" disabled selected>
                                        --Pilih Pelanggan--
                                    </option>
                                    @foreach($data['customer'] as $cust)
                                    <option value="{{$cust['id']}}">
                                        {{ucwords($cust['name'])}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="productName">Nama Produk</label>
                                <select class="form-control" id="productName" name="product_id">
                                    <option value="0" disabled selected>
                                        --Pilih Produk--
                                    </option>
                                    @foreach($data['product'] as $product)
                                    <option value="{{$product['id']}}">
                                        {{ucwords($product['name'])}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="qty">
                                    Jumlah Produk
                                </label>
                                <input type="text" class="form-control" name='qty' id="qty">
                            </div>
                            <button type="submit" class="btn btn-primary btn-md">
                                Simpan Transaksi
                            </button>
                        </div>
                    </form>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-lg-12 col-md-12 col-sm-12">
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