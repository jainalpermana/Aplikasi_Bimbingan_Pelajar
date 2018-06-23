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
                        <li class="breadcrumb-item active">Identitas</li>
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
                                <h4 class="m-b-0 text-white">Identitas</h4>
                            </div>
                            <div class="card-body">
                                <form role="form" action="/identifikasi/{{$Identifikasi->id}}" method="post">
                                    <div class="form-body">
                                        <h3 class="box-title m-t-15">Input Tabel Identitas</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Hari Tanggal</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control" type="date" name="a" value="{{$Identifikasi->hari_tanggal}}" placeholder="Enter text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Nama</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control" type="text" name="b" value="{{$Identifikasi->nama}}" placeholder="Enter text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Kelas</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control" type="text" name="c" value="{{$Identifikasi->kelas}}" placeholder="Enter text">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Jenis Masalah</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control custom-select" name="d">
                                                            <option value="Pribadi" <?php if($Identifikasi->jenis_masalah == 'Pribadi'){echo "selected";} ?> >Pribadi</option>
                                                            <option value="Umum" <?php if($Identifikasi->jenis_masalah == 'Umum'){echo "selected";} ?>>Umum</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                

                                            </div>
                                        </div>
                                       
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">                                                       
                                                        <input type="hidden" name="_method" value="put">
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