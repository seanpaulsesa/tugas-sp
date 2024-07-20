@extends('admin.layout.tamplate')
@section('title')
   Tambah Mahasiswa
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
                                <h4 class="header-title"> Tambah Data Mahasiswa</h4>


                     <form action="{{url('admin/mahasiswa/storage')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="nim"> NIM <span class="text-danger">*</span> </label>
                                                <input type="number" id="nim" value="{{old('nim')}}" name="nim" placeholder="" class="form-control">
                                                @if($errors->has('nim'))
                                                    <label class="text-danger"> {{ $errors->first('nim') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="nama_lengkap"> Nama Lengkap <span class="text-danger">*</span> </label>
                                                <input type="text" id="nama_lengkap" value="{{old('nama_lengkap')}}" name="nama_lengkap" placeholder="" class="form-control">
                                                @if($errors->has('nama_lengkap'))
                                                    <label class="text-danger"> {{ $errors->first('nama_lengkap') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="tempat_lahir"> Tempat Lahir <span class="text-danger">*</span> </label>
                                                <input type="text" id="tempat_lahir" value="{{old('tempat_lahir')}}" name="tempat_lahir" placeholder="" class="form-control">
                                                @if($errors->has('tempat_lahir'))
                                                    <label class="text-danger"> {{ $errors->first('tempat_lahir') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="tanggal_lahir"> Tanggal Lahir <span class="text-danger">*</span> </label>
                                                <input type="date" id="tanggal_lahir" value="{{old('tanggal_lahir')}}" name="tanggal_lahir" placeholder="" class="form-control">
                                                @if($errors->has('tanggal_lahir'))
                                                    <label class="text-danger"> {{ $errors->first('tanggal_lahir') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label for="jenis_kelamin"> Jenis Kelamin <span class="text-danger">*</span> </label>
                                                <select name="jenis_kelamin" id="" class="form-control" >
                                                    <option value="" hidden> Pilih Jenis Kelamin</option>
                                                    <option value="Pria" @if(old('jenis_kelamin') == 'Pria') {{'selected'}} @endif >Pria</option>
                                                    <option value="Wanita" @if(old('jenis_kelamin') == 'Wanita') {{'selected'}} @endif>Wanita</option>
                                                </select>
                                                @if($errors->has('jenis_kelamin'))
                                                 <label class="text-danger"> {{ $errors->first('jenis_kelamin') }} </label>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label for="jurusan"> Jurusan  <span class="text-danger">*</span> </label>
                                                <select name="jurusan" id="" class="form-control" >
                                                    <option value="" hidden> Pilih Jurusan</option>
                                                    <option value="Pria" @if(old('jurusan') == 'Pria') {{'selected'}} @endif >Pria</option>
                                                    <option value="Wanita" @if(old('jurusan') == 'Wanita') {{'selected'}} @endif>Wanita</option>
                                                </select>
                                                @if($errors->has('jurusan'))
                                                 <label class="text-danger"> {{ $errors->first('jurusan') }} </label>
                                            @endif
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="no_hp"> No. HP/WA <span class="text-danger">*</span> </label>
                                                <input type="number" id="no_hp" value="{{old('no_hp')}}" name="no_hp" placeholder="" class="form-control">
                                                @if($errors->has('no_hp'))
                                                    <label class="text-danger"> {{ $errors->first('no_hp') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="foto"> Foto <span class="text-danger">*</span> </label>
                                                <input type="file" id="foto" value="{{old('foto')}}" name="foto" placeholder="" class="form-control">
                                                @if($errors->has('foto'))
                                                    <label class="text-danger"> {{ $errors->first('foto') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="alamat"> Alamat </label>
                                                <textarea id="alamat" name="alamat" placeholder="Masukan alamat" rows="5" class="form-control">{{old('alamat')}} </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="keterangan"> Keterangan </label>
                                                <textarea id="keterangan" name="keterangan" placeholder="Masukan keterangan" rows="5" class="form-control">{{old('keterangan')}} </textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">Simpan  <i data-feather="save"></i></button>
                                        </div>
                                    </div>

                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                     </form>




                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                {{-- end row --}}





            </div> <!-- container -->

        </div> <!-- content -->
    @endsection
