@extends('admin.layout.tamplate')
@section('title')
  Mahasiswa
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
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title"> Data Mahasiswa</h4>
                                <div class="row mt-3 d-flex justify-content-between">
                                    <div class="col-6">
                                        @include('admin.layout.search')
                                    </div>

                                    <div class="">
                                            <a class="btn btn-dark" href="{{route('admin.mahasiswa.tambah')}}"> Tambah Data <i data-feather="plus"></i></a>
                                        <a class="btn btn-success" href="">Cetak Excel <i data-feather="printer"></i></a>
                                    </div>
                                </div>

                                <div class="mt-3 table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="1%">No</th>
                                            <th>Foto</th>
                                            <th>NIM</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jurusan</th>
                                            <th>Jenis Kelamin</th>
                                            <th></th>
                                        </tr>

                                            <tr>
                                                <td>{{ '1'}}</td>
                                                {{-- @include('admin.layout.index-picture') --}}
                                                <td>
                                                    <a class="text-dark"
                                                        href=""> {{"Nama"}}</a>
                                                </td>
                                                <td></td>
                                                <td>

                                                </td>
                                                <td>

                                                </td>
                                                <td>

                                                </td>
                                            </tr>
                                        {{-- @empty
                                            <tr>
                                                <td colspan="8">
                                                    No data . . .
                                                </td>
                                            </tr> --}}
                                    </table>
                                </div>
                                <!-- end .mt-4 -->



                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                {{-- end row --}}





            </div> <!-- container -->

        </div> <!-- content -->
    @endsection
