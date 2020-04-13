@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-header-content">
        <div>
            <h4 clas="">
                <i class="icon-home position-left"></i>
                <span class="text-semibold">Daftar Makanan</span></h4>
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
                <li class="active">Daftar Makanan</li>
            </ul>
        </div>
    </div>
</div>
<div class="content">
    <div class="panel panel flat border-top-lg border-top-primary">
        <div class="panel-body">
            <div class="class-lg-12">
            <div class="col-lg-6">
                <blockquote class=" col-md-12">
                            <b>Biodata</b>
                </blockquote>
                <div class="col-lg-12 form-group">
                    <div class="col-md-4 no-margin">
                        Nama
                    </div>
                    <div class="col-md-8 no-margin">
                        Wayan Agus Aditya Mahendra
                    </div>
                </div>
                <div class="col-lg-12 form-group">
                    <div class="col-md-4 no-margin">
                        NIM
                    </div>
                    <div class="col-md-8 no-margin">
                        1815051026
                    </div>
                </div>
                <div class="col-lg-12 form-group">
                    <div class="col-md-4 no-margin">
                        Program Studi
                    </div>
                    <div class="col-md-8 no-margin">
                        Pendidikan Teknik Informatika
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <blockquote class="col-md-12">
                    <b>Studi Kasus</b>
                </blockquote>
                <div class="col-lg-12 form-group">
                    <div class="col-md-2 no-margin">
                        Judul
                    </div>
                    <div class="col-md-10 no-margin">
                        Sistem Manajemen Restoran
                    </div>
                </div>
                <div class="col-lg-12 form-group">
                    <div class="col-md-2 no-margin">
                        Penjelasan
                    </div>
                    <div class="col-md-10 no-margin">
                        Sistem yang membuat manajemen restoran menjadi lebih teratur.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
        <a href="{{route('makanan.create')}}">Tambah Data</a>
            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Makanan</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($makanan as $in=>$val)
                        <tr><td>{{($in+1)}}</td>
                        <td>{{$val->nama_makanan}}</td>
                        <td>{{$val->keterangan}}</td>
                        <td>{{$val->status}}</td>
                        <td>
                            <a href="{{route('makanan.edit',$val->id_makanan)}}">update</a>
                            <form action="{{route('makanan.destroy',$val->id_makanan)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
            {{$makanan->links()}}
        </div>
        </div>
    </div>
</div>
@endsection



