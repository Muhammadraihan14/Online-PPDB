@extends ('layout.master')

@section ('title', 'Portal Smansaka')

@section ('container')
<div class="container">
       <div class="box shadow-lg ">

      <div class="justify-content-center">
        <div class="card-body">
          
             <img src={{asset ('image/portal.svg')}} class="img-fluid" alt="image">

          <hr>
          <div class="row">
            <div class="col-6 offset-4" >
              <a href="/login_user" ><button type="button" class="btn btn-outline-primary btn-lg p-2" >
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
               Siswa
              </button></a>

              <a href="/login_admin"><button type="button" class="btn btn-outline-secondary btn-lg p-2" >
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
              </svg>
               Admin
              </button></a>
              </div>

            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

