@extends ('layout.master')

@section ('title', 'Login Admin | Portal SMANSAKA')

@section ('container')
<div class="container">
        <div class="box shadow-lg">
        <form method="post" action="dashboard">
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
        </form>
        </div>
    </div>
@endsection
