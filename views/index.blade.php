<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shoptiny</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap'rel="stylesheet");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        .navbar {
            background: #131313;
            padding: 1rem 8rem;
            z-index: 1000;
        }

        .navbar .navbar-brand {
            font-size: 1.4rem;
            font-weight: 700;
        }

        #navbarSupportedContent>ul>li:nth-child(n)>a {
            color: #fff;
            font-size: 1.1rem;
            padding: 0 0.8rem;
        }

        #navbarSupportedContent>ul>li:nth-child(n)>a:hover,
        #navbarSupportedContent>ul>li:nth-child(n)>a:active {
            color: #00BF85;
        }

        #navbarSupportedContent>button {
            background: #00BF85;
            font-weight: 600;
            padding: 0.4rem 1.4rem;
            border-radius: 30px;
        }

        .mid {
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            text-align: center;
        }

        .mid video {
            width: 100%;
            height: 100%;
            pointer-events: none;
            object-fit: cover;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }

        .mid .hero {
            position: relative;

        }

        .mid .hero h2 {
            font-size: 2.5rem;
        }

        .mid .hero p {
            width: 55%;
            font-size: 1rem;
            letter-spacing: 0.2;
            padding-bottom: 1rem;
        }

        .mid .hero a {
            background: #00BF85;
            font-weight: 600;
            padding: 0.6rem 1.4rem;
            border-radius: 30px;
            text-decoration: none;
        }

        .mid .hero a:hover {
            background: #fff;
        }

        .rates {
            background: #000;
        }

        .rates .one {
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem 1.5rem;
            border-radius: 7px;
        }

        .rates img {
            border-radius: 50%;
        }


        .discovery {}

        .discovery .text {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            margin: auto;
        }

        .discovery .text h6 {
            color: #17A2B8;
            font-weight: 800;
            font-size: 1rem;
            letter-spacing: 2px;
        }

        .discovery .text h2 {
            color: #111;
            font-weight: 700;
            font-size: 2rem;
        }

        .discovery .text p {
            font-weight: 400;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }

        .discovery .text a {
            background: #111;
            font-weight: 500;
            padding: 0.6rem 1.4rem;
            border-radius: 30px;
            text-decoration: none;
            color: #fff;
        }

        body>footer {
            background: #111 !important;
        }

        body>footer>ul.list-unstyled.list-inline.text-center.py-2>li:nth-child(2)>a {
            background: #00BF85;
            font-weight: 600;
            padding: 0.4rem 1.4rem;
            border-radius: 30px;
            border: none;
        }

        @media screen and (max-width: 988px) {
            .navbar {
                padding: 1rem;
            }

            #navbarSupportedContent>ul {
                padding-left: 0.8rem;
            }

            #navbarSupportedContent>ul>li:nth-child(n)>a {
                padding: 0.8rem 0;
            }

            .mid .hero h2 {
                font-size: 2.5rem;
            }

            .mid .hero p {
                font-size: 1rem;
            }

            .mid .hero a {
                font-size: 0.9rem;
            }

        }
    </style>
</head>

<body data-spy="scroll" data-target="#navbarSupportedContent">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Tinyshop</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="#exchange">Quy ?????i</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#rates">T??? Gi??</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">S???n ph???m</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#signup">L???ch s???</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#discover">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#discover">Chi nh??nh</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactus">Li??n h???</a>
                        </li>
                    </ul>


                    @if (!Auth::user())
                        <button class="btn btn-success" type="submit" onclick="location.href = '/admin/login'">????ng nh???p</button>
                        <button class="btn btn-success" type="submit" onclick="location.href = '/admin/register'">????ng k??</button>
                    @else
                        <span class="text-white p-1"><strong>{{Auth::user()->name}}</strong></span>
                        <button class="btn btn-info" type="submit" onclick="location.href = 'admin/main'">Admin</button>
                        <button class="btn btn-danger" style="background: #dc3545" type="submit" onclick="location.href = '/admin/logout'">????ng xu???t</button>
                    @endif
                </div>
            </div>
        </nav>
        <div class="mid">
            <video autoplay muted loop>
                <source class="embed-responsive" src="1.mp4" type="video/mp4">
            </video>
            <div class="hero text-center">
                <h2 class="text-light display-4 font-weight-bold">Tinyshop l?? m???t website chuy??n cung c???p d???ch v??? mua
                    b??n ngo???i t???</h2>
                <p class="text-light mx-auto">Ch??ng t??i c?? th??? gi??p b???n G???i, Nh???n, Trao ?????i, Thanh to??n mua s???m ho???c
                    ch???p nh???n thanh to??n tr???c tuy???n m???t c??ch d??? d??ng tr??n t??i kho???n c?? nh??n c???a b???n.</p>
                <a class="text-dark" href="#">B???t ?????u</a>
            </div>
        </div>
    </header>


    <section class="bg-info" id="exchange">
        <div class="row align-items-center container pt-5 mx-auto" >
            <div class="text col-lg-12 col-md-12 col-12  pb-5">
                <h2 style="text-align: center;">Quy ?????i ti???n t???</h2>
                <h6 style="text-align: center;">Kh??ng gi???i h???n quy ?????i</h6>
                <form class="align-items-center container my-5 mx-auto w-50" action="index.php" method="get">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">L?????ng VN?? mu???n quy ?????i:</label>
                        <input type="number" class="form-control" name="input" id="input" require>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Quy ?????i sang ti???n t???:</label>
                        <select class="form-control" name="currency" id="currency">
                            @foreach ($currencies as $item)
                            <option value="{{$item->code}}">{{$item->description}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="alert alert-success">
                        K???t qu???: <strong id="result"></strong>
                    </div>

                    <div class="form-group">
                        <input style="padding: 5px; border-radius: 5px;" class="btn btn-success" type="submit"
                            name="sbmt" value="Convert" id="submit">
                    </div>
                </form>
            </div>
        </div>

    </section>

    <section id="rates" class="rates py-5">
        <div class="col mx-auto align-items-center my-5">
            <div class="heading text-center pt-5">
                <h2 class="font-weight-bold pb-5 text-light">T??? gi?? c???a tinyshop
                </h2>
            </div>
            <div class="row mx-auto justify-content-center align-items-center text-center container">
                <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
                    <img class="img-fluid w-75" src="5.jpg">
                    <h5 class="font-weight-bold pt-4">USD</h5>
                    <p>0.000041</p>
                </div>
                <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
                    <img class="img-fluid w-75" src="6.jpg">
                    <h5 class="font-weight-bold pt-4">Euro</h5>
                    <p>0.000039</p>
                </div>
                <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
                    <img class="img-fluid w-75" src="7.jpg">
                    <h5 class="font-weight-bold pt-4">RMB</h5>
                    <p>0.00029</p>
                </div>
            </div>
        </div>
    </section>

    <section id="discover" class="discovery py-5">
        <div class="row align-items-center container my-5 mx-auto">
            <div class="img col-lg-6 col-md-6 col-12 w-50 pt-2 pb-5">
                <img class="img-fluid" src="FAQ.svg">
            </div>
            <div class="text col-lg-6 col-md-6 col-12 w-50 pt-2 pb-5">
                <h2>C??u h???i cho ch??ng t??i</h2>
                <h6>Trong ph???n n??y, b???n c?? th??? bi???t th??ng tin chi ti???t v??? h??? th???ng Tinyshop, n???u sau khi ?????c t??i li???u
                    n??y, b???n v???n c??n b???t k??? v???n ????? ho???c c??u h???i n??o v??? h??? th???ng, vui l??ng li??n h??? v???i ch??ng t??i.</h6>

                <h5 onclick="myFunction1()" class="bg-info">Tinyshop l?? g??? </h5>


                <p id="myfirstDIV" style="display: none;" class="bg-warning">Tinyshop l?? m???t d???ch v??? trao ?????i ti???n
                    ??i???n t??? ????n gi???n v?? nhanh ch??ng d??nh cho d???ch v??? t??? do. B???n ch??? c???n ????ng k?? v?? x??c minh. Ch??ng t??i
                    s??? nhanh ch??ng chuy???n ?????i giao d???ch cho b???n m?? kh??ng t??nh th??m b???t k??? kho???n ph?? ???n ho???c ph?? n??o.</p>

                <h5 onclick="myFunction2()" class="bg-info">S??? m???t bao l??u ????? x??? l?? ????n ?????t? </h5>

                <p id="mysecondDIV" style="display: none;" class="bg-warning">Th??ng th?????ng, ch??ng t??i m???t 5 ph??t v??
                    t???i ??a l?? 20 ph??t ????? ho??n th??nh ????n ?????t h??ng. N???u c?? b???t k??? tr?????ng h???p kh???n c???p n??o, b???n c?? th??? li??n
                    h??? v???i ch??ng t??i qua tr?? chuy???n tr???c ti???p, email, h???p th?? ?????n trang ng?????i h??m m??? FB, WhatsApp, Skype
                    v?? imo, b???n c?? th??? t??m th???y chi ti???t li??n h??? c???a ch??ng t??i t???i ????y.</p>

                <h5 onclick="myFunction3()" class="bg-info">C??c t??i li???u c???n thi???t ????? x??c minh l?? g??? </h5>

                <p id="mythirdDIV" style="display: none;" class="bg-warning">H??? chi???u qu???c t???, Gi???y ph??p l??i xe ho???c
                    Ch???ng minh nh??n d??n (ch??ng t??i ch??? ch???p nh???n th??? c??n c?????c ?????a ph????ng t??? c??c qu???c gia thu???c khu v???c)
                </p>

            </div>
        </div>
    </section>




    <footer class="page-footer font-small-stylish-color-dark pt-4 text-light" id="contactus">
        <!-- Grid container -->
        <div class="container text-center text-md-left">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-4 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Shingu</h5>
                    <p>+676767676767 (Whatsapp)</p>
                    <p>Shitiny (Skype)</p>
                    <p>support@tinyshop.com</p>

                </div>
                <hr class="clearfix w-100 d-md-none">
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Link h???u ??ch</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Gi???i thi???u</a>
                        </li>
                        <li>
                            <a href="#!">Blog</a>
                        </li>
                        <li>
                            <a href="#!">Chi nh??nh</a>
                        </li>
                        <li>
                            <a href="#!">L???i ch???ng th???c</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <hr class="clearfix w-100 d-md-none">
                <!--Grid column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">H??? tr???</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">H??? tr??? ng?????i d??ng</a>
                        </li>
                        <li>
                            <a href="#!">Tin t???c</a>
                        </li>
                        <li>
                            <a href="#!">??i???u kho???n v?? ??i???u ki???n</a>
                        </li>
                        <li>
                            <a href="#!">Ch??nh s??ch b???o m???t</a>
                        </li>
                    </ul>
                </div>

                <hr class="clearfix w-100 d-md-none">
                <!--Grid column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Follow Us</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Tinyshop</a>
                        </li>
                        <li>
                            <a href="#!">Tinyshop</a>
                        </li>
                        <li>
                            <a href="#!">Tinyshop</a>
                        </li>
                        <li>
                            <a href="#!">Tinyshop</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <hr>
        <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
                <h5 class="mb-1">????ng k?? mi???n ph??</h5>
            </li>
            <li class="list-inline-item">
                <a href="/admin/register" class="btn btn-danger btn-rounded">????ng k??</a>
            </li>
        </ul>
        <hr>
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-dribbble"> </i>
                </a>
            </li>
        </ul>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3"> &copy; 2022 Copyright:
            <a href="#">tinyshop@gmail.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script>
        function myFunction1() {
            var x = document.getElementById("myfirstDIV");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
    <script>
        function myFunction2() {
            var x = document.getElementById("mysecondDIV");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
    <script>
        function myFunction3() {
            var x = document.getElementById("mythirdDIV");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script>
        const currencies = {!!json_encode($currencies)!!}
        console.log(currencies)

        const input = document.getElementById('input')
        const curInput = document.getElementById('currency')
        const submit = document.getElementById('submit')
        const result = document.getElementById('result')

        submit.addEventListener('click', (e) => {
            e.preventDefault()

            let currency = currencies.find((value) =>  value.code === curInput.value)

            result.innerText = input.value / currency.price + ' ' + currency.code.toUpperCase()
        })
    </script>

</body>

</html>
