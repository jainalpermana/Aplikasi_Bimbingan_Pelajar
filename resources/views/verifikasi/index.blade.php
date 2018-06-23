@extends('layouts.kabeh')

@section('content')

      <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"></li>
                        <li class="breadcrumb-item active">Verifikasi</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Verifikasi</h4>
                            </div>
                            <div class="card-body">
                                <form role="form" method="POST" action="/verifikasi">
                                    <div class="form-body">
                                        <h3 class="box-title m-t-15">Input Tabel Verifikasi</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Tgl Verifikasi</label>
                                                    <div class="col-md-9">
                                                        <input type="date" name="a" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Uraian</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="b" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Hasil</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control custom-select" name="c">
                                                            <option value="Ya">Ya</option>
                                                            <option value="Tidak">Tidak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Rekomend</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="d" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Sasaran Utama</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="e" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">                                                       
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit" class="btn btn-success">Submit Button</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Tgl Verifikasi</th>
                                            <th>Uraian</th>
                                            <th>Hasil</th>
                                            <th>Rekomendasi</th>
                                            <th>Sasaran Mutu</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Verifikasi as $i)
                                            <tr>
                                                <td>{{ $i -> tgl_verifikasi }}</td>
                                            <td>{{ $i -> uraian }}</td>
                                            <td>{{ $i -> hasil }}</td>
                                            <td>{{ $i -> rekomendasi }}</td>
                                            <td>{{ $i -> sasaran_mutu }}</td>
                                                <td>
                                                <a type="button" class="btn btn-primary" href="/verifikasi/{{$i->id}}/edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true">EDIT</span></a>
                                                
                                                <a type="button" class="btn btn-primary" href="/verifikasi/{{$i->id}}/"><span class="glyphicon glyphicon-cog" aria-hidden="true">DETAIL</span></a>
                                                

                                                <form action="/verifikasi/{{$i->id}}" method="post">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" name="name" value="delete" class="btn btn-danger">
                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true">DELETE</span>
                                                    </button>
                                                </form>
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
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Created by Gekikara404</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->


@endsection