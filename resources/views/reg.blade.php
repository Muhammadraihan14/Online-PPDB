@extends ('layout.master')

@section ('title', 'Login Admin | Portal SMANSAKA')

@section ('container')
<div class="container">
        <div class="box shadow-lg">
        <!-- <form method="post" action="dashboard">
        @csrf
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama" autocomplete="off">
        </div>
        <div class="mb-3">
        <input type="text" maxlength="16" class="form-control" id="exampleFormControlInput1" placeholder="NIK" name="nik" autocomplete="off">
        </div>
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Wali" name="wali" autocomplete="off">
        </div>
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan Wali" name="pwali" autocomplete="off">
        </div>
        
        <div class="modal-footer">
        <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </form> -->

        <form method="post" action="dashboard">
        @csrf
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama" autocomplete="off">
        </div>
        <div class="mb-3">
        <input type="text" maxlength="10" class="form-control" id="exampleFormControlInput1" placeholder="NISN/NIS" name="nis_nisn" autocomplete="off">
        </div>
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat Lahir" name="tp" autocomplete="off">
        </div>
        <div class="mb-3">
          <i data-bs-toggle="tooltip" data-bs-placement="top" title="yy/mm/dd">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir" name="tl" autocomplete="off">
        </div>
          </i>
         <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alamat Siswa" name="alamat" autocomplete="off">
        </div>
         <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Orang Tua/Wali" name="ortu_w" autocomplete="off">
        </div>
         <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan Ortu/Wali" name="p_ow" autocomplete="off">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>

        <button type="submit" class="btn btn-success">Tambah data</button>
        
        </div>
        </form>
        </div>
    </div>
@endsection
