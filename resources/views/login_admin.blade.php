 @extends ('layout.master')

@section ('title', 'Login Admin | Portal SMANSAKA')

@section ('container')
<div class="container">
        <div class="box shadow-lg">
             <img src={{asset ('image/login_admin.svg')}} class="img-fluid" alt="image">
        <form action="" method="">
            <input type="email" class="form-control " placeholder="Email atau Nomor Telepon">
            <input type="password" class="form-control mt-2" placeholder="Kata Sandi">
        </form>
        <div class="d-grid gap-2">
        <a href="/dashboard" target="_blank" class="btn btn-outline-primary mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
        Masuk</a>
        </div>
        </div>
    </div>
@endsection

