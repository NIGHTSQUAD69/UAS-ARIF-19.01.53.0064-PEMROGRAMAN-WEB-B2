<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ujian Akhir Semester</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
.sticky{
        position: -webkit-sticky;
        position: sticky;
        top: 20px;
      }
      .footer{
        height:50px;
        margin-top: 64px;
    }
    .content-wrapper{
        display: none;
    }
   
    </style>
</head>
<body class="bg-light">
    <div class="content-wrapper">
        <nav class="navbar navbar-expand-md bg-danger navbar-dark">
            <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="utama.blade.php">UAS</a>
          
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
          
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="utama.blade.php">HALAMAN UTAMA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.blade.php">PROFIL CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang.blade.php">Tentang Unisbank</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <br>
        <div class="container mb-5">
            <div class="row">
                <!-- <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <nav id="myScrollspy">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#introduction">Introduction</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#element">Elements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#attribute">Attributes</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-4">
                    <div class="card border-0 d-none d-md-block shadow-sm sticky">
                        <img class="card-img-bottom" src="img/js.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <h4 class="card-title">Javascript</h4>
                          <p class="card-text">Javascript (JS) adalah bahasa pemrograman yang digunakan untuk membuat sebuah halaman web yang dinamis dan interaktif.</p>
                          <a href="js.html" class="btn btn-danger">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm" id="introduction">
                        <div class="card-body">
                            <h4 class="card-title">CV<small>PROFIL Arif Budi Setiawan</small></h4>
                            <div class="text-center mb-3">
                                <img class="img" src="img/css.jpg" style="width:100%"/>
                            </div>
                            <p class="card-text">
                                Halo Nama Saya Arif Budi Setiawan, Lahir di Demak 15 Juni 1999
                            </p>
                        </div>
                    </div>
                    <div class="card border-0 shadow-sm" id="elemet">
                        <div class="card-body">
                            <h4 class="card-title">Pendidikan</h4>
                            <p class="card-text">
                                Saya masih akatif menjadi Mahasiswa Unisbank Kelas Karyawan Kejuruan Teknik Informatika
                                <ul>
                                    <li>SD Negri Teluk 2</li>
                                    <li>MTS Negri Karangawen</li>
                                    <li>SMK Negri 7 Semarang</li>
                                </ul>                            
                            </p>
                            <h5>Pengalaman Kerja</h5>
                            <p class="card-text">
                                
                                Saya lulus pendidikan SMK langsung bekerja di SIMBIKA bertempat kerja di Lingkungan PT. Indonesia Comnets Plus SBU Semarang
                            </p>
                            <textarea disabled="true" rows=3 class="form-control">
h1 {
    color: red;
}</textarea>
                            <p class="card-text">
                                                                    
                            </p>     
                            <textarea disabled="true" rows=19 class="form-control">
/* Selektor dengan nama tag */
h2 {
    color: blue
}
                                
/* Selektor degnan class */
.bg-yellow {
    backgound-color: yellow;
}
                                
/* selektor dengan ID elemen */
#header {
    background: grey;
}
                                
/* Selektor dengan Atribut */
input[type=text]{
    background: yellow;
}</textarea>                       
                                                                

                        </div>
                    </div>
                    <div class="card border-0 shadow-sm" id="attribute">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">
                                
                            </p>
                            <textarea disabled="true" rows=3 class="form-control">
p {
    font-size: 18px;
}</textarea>
                            <p class="card-text">
                                </p>
                            <h5 class="card-title"></h5>
                            <p class="card-text">
                                
Contoh:</p>
                            <textarea disabled="true" rows=3 class="form-control">
blockquote {
    background: pink;
}</textarea>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer bg-white text-muted">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center p-2">Copyright 2021 &copy; All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- The Modal -->
    <div class="modal fade" id="splashscreen">
        <div class="modal-dialog" style="width: 100%;
        max-width: none;
        height: 100%;
        margin: 0;">
          <div class="modal-content" style="height: 100%;
          border: 0;
          border-radius: 0;">
          
    
            
            <!-- Modal body -->
            <div class="modal-body">
                <img src="img/loading.gif" style="position:absolute;
                top:0;
                left:0;
                right:0;
                bottom:0;
                margin:auto;"/>
            </div>
            
        
            
          </div>
        </div>
      </div>
    <script type="text/javascript">
        $(function(){
            $("#splashscreen").modal('show');
            setTimeout(
            function() 
            {
                $("#splashscreen").modal('hide');
                $(".content-wrapper").show();
    
            }, 1300);
    
        });
    
    </script>
</body>
</html>
