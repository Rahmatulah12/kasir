@extends('layouts.admin.main')
@section('title', 'Ubah Data')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Ubah Data
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Perubahan Data Customer
            </div>
            <div class="panel-body">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <form action="{{url('/customer/edit')}}" method="post" role="form">
                        @csrf
                        @method('patch')
                        <input type="hidden" name="id" value="{{$customer['id']}}">
                        <div class="form-group">
                            <label for="name">
                                Nama Customer
                            </label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="please input customer name" autocomplete="off" autofocus value="{{ucwords($customer['name'])}}">
                            @error('name')
                            <label style="color:red;font-size:12px;font-weight:600;margin-top:2px;">
                                {{$message}}
                            </label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="0" selected disabled>
                                    --Pilih Jenis Kelamin--
                                </option>
                                @if($customer['gender'] == 'l')
                                <option value="l" selected>
                                @else
                                <option value="l">
                                @endif
                                    Laki-Laki
                                </option>
                                @if($customer['gender'] == 'p')
                                <option value="p" selected>
                                @else
                                <option value="p">
                                @endif
                                    Wanita
                                </option>
                            </select>
                            @if(session('error'))
                            <label style="color:red;font-size:12px;font-weight:600;margin-top:2px;">
                                {{session('error')}}
                            </label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="address">
                                Alamat Customer
                            </label>
                            <textarea name="address" id="address" rows="5" class="form-control" placeholde="masukan alamat lengkap customer">{{ucfirst($customer['address'])}}
                            </textarea>
                            @error('address')
                            <label style="color:red;font-size:12px;font-weight:600;margin-top:2px;">
                                {{$message}}
                            </label>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-md pull-right" type="submit">
                            Simpan Perubahan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection