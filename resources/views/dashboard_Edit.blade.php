@extends ('layout.dashboard_L')


@section ('content')

<div class="container mt-5">
<!-- <form  action="/edit-data/{{ $siswa->id }}" method="POST">
        @csrf
        @method('PUT')  
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama" autocomplete="off" value="{{$siswa->nama}}">
        </div>
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NIK" name="nik" autocomplete="off" value="{{$siswa->nik}}">
        </div>
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Wali" name="wali" autocomplete="off" value="{{$siswa->wali}}">
        </div>
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan Wali" name="pwali" autocomplete="off"  value="{{$siswa->pwali}}">
        </div>
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    </form> -->
 

<form method="post" action="/edit-data/{{ $siswa->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama" autocomplete="off" value="{{$siswa->nama}}">
        </div>
        <div class="mb-3">
        <input type="text" maxlength="10" class="form-control" id="exampleFormControlInput1" placeholder="NISN/NIS" name="nis_nisn" autocomplete="off" value="{{$siswa->nis_nisn}}">
        </div>
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat Lahir" name="tp" autocomplete="off" value="{{$siswa->tp}}">
        </div>
        <div class="mb-3">
          <i data-bs-toggle="tooltip" data-bs-placement="top" title="yy/mm/dd">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir" name="tl" autocomplete="off" value="{{$siswa->tl}}">
        </div>
          </i>
         <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alamat Siswa" name="alamat" autocomplete="off" value="{{$siswa->alamat}}">
        </div>
         <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Orang Tua/Wali" name="ortu_w" autocomplete="off" value="{{$siswa->ortu_w}}">
        </div>
         <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan Ortu/Wali" name="p_ow" autocomplete="off" value="{{$siswa->p_ow}}">
        </div>
      <button type="submit" class="btn btn-success">Simpan Perubahan</button>
      </form>
  </div>
@endsection