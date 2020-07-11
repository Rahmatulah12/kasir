@extends('layouts.admin.main')
@section('title', "Data Customer");
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <h1 class="page-header">
            Data Customer
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Customer
            </div>
            <div class="panel-body">
                <h4>
                    Nama Customer <b>:</b> {{ucwords($result->name)}}
                </h4>
                <h4>
                    Jenis Kelamin <b>:</b>@if($result->gender == 'l') Laki-Laki @else Perempuan @endif
                </h4>
                <h4>
                    Alamat <b>:</b> {{ucfirst($result->address)}}
                </h4>
                <h4>
                    Jumlah Point <b>:</b> {{$result->point}}
                </h4>
                <a href="{{url('/')}}" class="pull-left">
                    &laquoKembali
                </a>
                <a href="{{base64_encode($result->id)}}/edit" class="btn btn-primary pull-left" style="margin:0 10px;">
                    Ubah Data
                </a>
                <form action="{{url('/customer')}}/{{base64_encode($result->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger pull-left">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection