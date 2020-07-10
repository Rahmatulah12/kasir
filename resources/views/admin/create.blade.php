@extends('layouts.admin.main')
@section('title', 'Create New Customer')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                New Customer
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a new customer
            </div>
            <div class="panel-body">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <form action="{{route('customer.create')}}" method="post" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="name">
                                Nama Customer
                            </label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="please input customer name" autocomplete="off" autofocus value="{{old('name')}}">
                            @error('name')
                            <p style="color:red;font-size:12px;font-weight:600;margin-top:2px;">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="0" disabled selected>
                                    --Pilih Jenis Kelamin--
                                </option>
                                <option value="l">
                                    Laki-Laki
                                </option>
                                <option value="p">
                                    Wanita
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">
                                Alamat Customer
                            </label>
                            <textarea name="address" id="address" rows="5" class="form-control" placeholde="masukan alamat lengkap customer"></textarea>
                        </div>
                        <button class="btn btn-primary btn-md pull-right" type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection