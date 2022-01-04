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
    .card-horizontal {
        display: flex;
        flex: 1 1 auto;
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
            <a class="navbar-brand" href="utama.html">UAS</a>
          
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
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8"><h4>Arif Budi Setiawan <small>(19.01.53.0064)</small></h4></div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-danger d-none d-md-block float-right" data-toggle="modal" data-target="#myModal">Show Profile</button>
                                    <button type="button" class="btn btn-danger d-block d-md-none float-left" data-toggle="modal" data-target="#myModal">Show Profile</button>
                                </div>
                            </div>
                            
                        </div>
                      </div>                                                   
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card border-0 shadow-sm mb-3">
                        <img class="card-img-bottom" src="img/html.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <h4 class="card-title">Halaman Utama</h4>
                          <p class="card-text">ini isinya halaman utama ya kalau di klik sama aja OK.</p>
                          <a href="utama.blade.html" class="btn btn-danger">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card border-0 shadow-sm mb-3">
                        <img class="card-img-bottom" src="img/css.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <h4 class="card-title">PROFIL CV Arif Budi Setiawan</h4>
                          <p class="card-text">Data bersifat Privasi untuk pribadi terima kasih.</p>
                          <a href="css.html" class="btn btn-danger">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card border-0 shadow-sm mb-3">
                        <img class="card-img-bottom" src="img/js.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <h4 class="card-title">Tentang Unisbank</h4>
                          <p class="card-text">Universitas Stikubank Semarang, disingkat Unisbank, adalah Entrepreneurial University</p>
                          <a href="js.html" class="btn btn-danger">See More</a>
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
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content border-0">
  
        <!-- Modal Header -->
        <!-- <div class="modal-header">
          <h4 class="modal-title">Profile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> -->
  
        <!-- Modal body -->
        <div class="modal-body p-0">
            <div class="row">
                <div class="col-md-6" style="overflow: hidden;">
                    <img src="img/profile.jpg" style="width:100%">
                </div>
                <div class="col-md-6 p-4">
                    <h4 class="card-title">Profile <a class="float-right pr-3 close" data-dismiss="modal">x</a></h4>
                    <br>
                    <p><span class="font-weight-bold">Nama :</span> Arif Budi Setiawan</p>
                    <p><span class="font-weight-bold">Nim :</span> 19.01.53.0064</p>
                    <p><span class="font-weight-bold">Prodi :</span> Teknik Informatika</p>
                    <p><span class="font-weight-bold">Fakultas :</span> Teknologi Informasi</p>
                    <p><span class="font-weight-bold">Universitas :</span> Stikubank Semarang</p>
                    <br><br>
                    <div class="btn-group btn-group-sm">
                        <a href="https://www.facebook.com/arif200iq" target="_blank" class="btn btn-danger">Facebook</a>
                        <a href="https://wa.me/6285712713909/?text=Halo%20Arif%20Budi%20Setiawan" class="btn btn-danger">Whatsapp</a>
                        <a href="https://www.instagram.com/arif200iq/" target="_blank" class="btn btn-danger">Instagram</a>
                      </div>                      
                </div>
            </div>
        </div>
  
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->
  
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
