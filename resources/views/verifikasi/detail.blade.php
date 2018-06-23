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
               

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">

                                        <thead>
                                            <tr>
                                                <th>Tanggal Verifikasi </th>
                                            <th>Uraian </th>
                                            <th>Hasil </th>
                                            <th>Rekomendasi </th>
                                            <th>Sasaran Mutu </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <tr>
                                                <td>{{ $Verifikasi -> tgl_verifikasi }}</td>
                                            <td>{{ $Verifikasi -> uraian }}</td>
                                            <td>{{ $Verifikasi -> hasil }}</td>
                                            <td>{{ $Verifikasi -> rekomendasi }}</td>
                                            <td>{{ $Verifikasi -> sasaran_mutu }}</td>
                                            

                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                    <button class="btn btn-success"><a href="/verifikasi">  Back </a></button>

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