@extends('admin.layout.tamplate')
@section('title')
    Dashboard - Admin
@endsection
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @include('admin.layout.breadcump')

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title"> <i class="fa fa-users"></i> Total Pengunjung Website</h4>
                                <div class="row mt-4 text-center">
                                    <div class="col-lg-3 col-6">
                                        <p class="text-muted font-15 mb-1 text-truncate">Hari ini</p>
                                        <h4><i class="fa fa-user mr-1"></i> </h4>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <p class="text-muted font-15 mb-1 text-truncate">Bulan Ini</p>
                                        <h4><i class="fa fa-user mr-1"></i> </h4>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <p class="text-muted font-15 mb-1 text-truncate">Tahun Ini</p>
                                        <h4><i class="fa fa-user mr-1"></i> </h4>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <p class="text-muted font-15 mb-1 text-truncate">Total Semua</p>
                                        <h4><i class="fa fa-user mr-1"></i> </h4>
                                    </div>

                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                {{-- end row --}}





            </div> <!-- container -->

        </div> <!-- content -->
    @endsection
