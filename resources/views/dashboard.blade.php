@extends ('layout.dashboard_L')

@section ('content1')
<section class="bg-dark mt-5 ">
  <ul class="nav flex-column p-4">
  <li class="nav-item p-4">
    <i data-bs-toggle="tooltip" data-bs-placement="top" title="Admin">
    <a class="nav-link active text-white" aria-current="page" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
      <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
      </svg>
    </i> 
  </li><hr class="bg-warning">

  <li class="nav-item p-4"> 
    <i data-bs-toggle="tooltip" data-bs-placement="top" title="Tabel">
    <a class="nav-link active text-white" aria-current="page" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
      </svg>
     </i> 
    </a>
  </li><hr class="bg-warning">

  <li class="nav-item p-4">
    <i data-bs-toggle="tooltip" data-bs-placement="top" title="Tentang">
      <a class="nav-link active text-white" aria-current="page" href="#"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
      <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
      </svg>
    </i>
    </a>
</li>
    

 
</section>
@endsection

@section ('content2')
<section id="tabel">
  <div class="container mt-5">
    
    <table class="table table-hover table-dark shadow-lg">
      <thead>
        <tr>
         <th>No</th>
          <th>Nama</th>
          <th>NISN/NIS</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Alamat Siswa</th>
          <th>Orang Tua/Wali</th>
          <th>Pekerjaan Ortu/Wali</th>
          <th colspan="2">Aksi</th>
        </tr>
      </thead>
    <tbody>
       
      @foreach($read as $siswa)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$siswa->nama}}</td>
        <td>{{$siswa->nis_nisn}}</td>
        <td>{{$siswa->tp}}</td>
        <td>{{$siswa->tl}}</td>
        <td>{{$siswa->alamat}}</td>
        <td>{{$siswa->ortu_w}}</td>
        <td>{{$siswa->p_ow}}</td>


        <td>
          <button class="btn btn-secondary "><a href="dashboard/{{$siswa->id}}" class="text-white" style="text-decoration: none;">Edit
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
          <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
          </svg>
          </a></button>
        </td>

        <td>
          <form action="dashboard/{{ $siswa->id }}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">Hapus
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
    </table>


    <a href="#" class="btn btn-success mr-auto" data-bs-toggle="modal" data-bs-target="#dt">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
    </svg>
     Tambah Siswa</a>

    

<!-- Modal -->
<div class="modal fade" id="dt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Mahasiswa</h5>
           </div>
    <div class="modal-body">
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
  </div>
</div>

   </div>
</section>
@endsection
