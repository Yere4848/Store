@extends('layout/app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Inventory</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Inventory</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Item Name</th>
                            <th>Category Name</th>
                            <th>Stock</th>
                            <th>Price Sell</th>
                            <th>Price Buy</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>RK01</td>
                            <td>Rak Gantung</td>
                            <td>Perabotan</td>
                            <td>5</td>
                            <td>120000</td>
                            <td>110000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection