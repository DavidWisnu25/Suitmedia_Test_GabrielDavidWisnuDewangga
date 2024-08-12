<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">

    <style>
        .custom-navbar {
            background-color: #ff8200 !important;
        }

        .nav-link{
            color: white !important;
        }

        .active{
            font-weight: bold;
        }

        .banner-image {
            width: 100%;
            height: 60vh; 
            object-fit: cover; 
            display: block;
            clip-path: polygon(0 0, 100% 0, 100% 75%, 0% 100%);
            margin-bottom: 50px;
        }

        .gambar {
            height: 100px;
            border-radius: 10px;
            background-image: none;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
            <div class="text-center">
                <h4><b class="nav-item">Suitmedia</b></h4>
                <!-- <h6>{{ date('Y-m-d') }}</h6> -->
                <h6>Gabriel David Wisnu Dewangga</h6>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul></ul>
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/">Work</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Ideas <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Careers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            
        </nav>

        <img src="{{ asset('img/hotel3.jpg') }}" alt="Banner Image" class="banner-image">

        <div class="row align-items-center mt-3">
            <!-- Column 1 -->
            <div class="col-md-3 col-sm-6">
                <div class="card p-0 mx-3">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <img class="gambar p-1 mb-3" src="{{ asset('img/placeholder.jpg') }}" alt="">
                            <div class="text-center">
                                <p class="m-0">Berita 1</p>
                                <h4>xxxxxx</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column 2 -->
            <div class="col-md-3 col-sm-6">
                <div class="card p-0 mx-3">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <img class="gambar p-1 me-2" src="{{ asset('img/placeholder.jpg') }}" alt="">
                            <div class="text-start mt-3">
                                <p class="m-0">Berita 2</p>
                                <h4>xxxxxx</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column 3 -->
            <div class="col-md-3 col-sm-6">
                <div class="card p-0 mx-3">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <img class="gambar p-1 me-2" src="{{ asset('img/placeholder.jpg') }}" alt="">
                            <div class="text-start mt-3">
                                <p class="m-0">Berita 3</p>
                                <h4>xxxxxx</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column 4 -->
            <div class="col-md-3 col-sm-6">
                <div class="card p-0 mx-3">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <img class="gambar p-1 me-2" src="{{ asset('img/placeholder.jpg') }}" alt="">
                            <div class="text-start mt-3">
                                <p class="m-0">Berita 4</p>
                                <h4>xxxxxx</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
        </div>


    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            let lastScrollTop = 0;
            const header = document.getElementById("main-header");

            window.addEventListener("scroll", function () {
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    // Scroll ke bawah
                    header.classList.remove("show");
                    header.classList.add("hide");
                } else {
                    // Scroll ke atas
                    header.classList.remove("hide");
                    header.classList.add("show");
                }

                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Agar tidak ada nilai negatif
            });
        });
    </script> -->
</body>

</html>

<script>


