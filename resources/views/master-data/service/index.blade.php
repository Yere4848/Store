@extends('layout/app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Service</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Service</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Service Name</th>
                            <th>Category Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>KEB01</td>
                            <td>Kebutuhan Pribadi / Keperluan Pribadi</td>
                            <td>Kebutuhan</td>
                        </tr>
                        <tr>
                            <td>LIS01</td>
                            <td>Pembayaran Listrik</td>
                            <td>Pendukung</td>
                        </tr>
                        <tr>
                            <td>TEL01</td>
                            <td>Pembayaran Telp / Internet</td>
                            <td>Pendukung</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection