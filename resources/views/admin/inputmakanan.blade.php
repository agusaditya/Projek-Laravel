@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-header-content">
        <div>
            <h4 clas="">
                <i class="icon-home position-left"></i>
                <span class="text-semibold">Input Makanan & Minuman</span></h4>
            <a class="heading-element-toggle"></a>
        </div>
        <div class="heading-elements">
            <ul class="breadcrumb position-right">
                <li>
                <a href="{{route('makanan.index')}}">Home</a>
                </li>
                <li>
                <a href="">makanan</a>
                </li>
                <li class="active">Input Makanan</li>
            </ul>
        </div>
    </div>
</div>
<div class="content">
    <div class="panel panel flat border-top-lg border-top-primary">
        <form action="{{(isset($makanan))?route('makanan.update', $makanan->id_makanan):route('makanan.store')}}" method="POST">
        @csrf
        @if(isset($makanan))?@method('PUT')@endif
        <div class="panel-body">
            <input class="form-control input-lg" value="{{(isset($makanan))?$makanan->nama_makanan:old('nama_makanan')}}" name="nama_makanan" placeholder="Nama Makanan/Minuman" type="text">
                @error('nama_makanan')<small style="color:red">{{$message}}</small>@enderror
            <br>
            <input class="form-control input-lg" value="{{(isset($makanan))?$makanan->keterangan:old('keterangan')}}" name="keterangan" placeholder="Keterangan" type="text">
                    @error('keterangan')<small style="color:red">{{$message}}</small>@enderror
            <br>
            <div class="form-group">
                <label class="control-label col-lg-2">Status</label>
                <div class="col-lg-10">
                    <select type="text" name="status" class="form-control">
                        <option value="Tersedia">Tersedia</option>
                        <option value="Tidak Tersedia">Tidak Tersedia</option>
                    </select>
                    @error('status')<small style="color:red">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="form-group">
                <button type="submit">SIMPAN</button>
            </div>
        </div>
        
        </form>
    </div>
    
</div>
@endsection