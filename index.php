<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!-- Font Awesome Icon Library(this is for the star rating) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>programmingWorld</title>
    <!-- just bootstrap thing -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- below links is for page 13 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
    /* -------------------------------------page 1------------------------------------- */
    .navbar {
        /* border: 1px solid black; */
    }

    .nav-item {
        padding: 0rem 1.5rem;
    }

    .btn {
        margin: 0rem 1rem 0rem 0rem;
    }

    .page-1 {
        /* border: 1px solid red; */
        height: 100vh;
        background-image: url('comp5.jpg');
        background-repeat: no-repeat;
        background-size: 100vw 100vh;
        /* background-attachment: fixed; */
        /* background-size: cover; */
    }

    .page-1 .context {
        bottom: 80px;
        /* font-size: 50px; */
    }

    .page-1 .hcont2 {
        font-size: 1.05rem;
    }

    .page-1 .navb img {
        width: 90px;
        height: 40px;
    }

    .hover-underline-animation {
        display: inline-block;
        position: relative;
        color: #0087ca;
    }

    .hover-underline-animation::after {
        content: '';
        position: absolute;
        width: 100%;
        transform: scaleX(0);
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #0087ca;
        transform-origin: bottom right;
        transition: transform 0.25s ease-out;
    }

    .hover-underline-animation:hover::after {
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    /* --------------------------loging and signup button----------------- */
    .navb .cont {
        /* position: absolute; */
        /* transform: translate(-50%, -50%); */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navb .center {}

    .navb .btn {
        width: 130px;
        height: 45px;
        cursor: pointer;
        border-radius: 10px;
        background: transparent;
        outline: none;
        transition: 1s ease-in-out;
    }

    .navb svg {
        position: relative;
        left: -13px;
        top: -7px;
        border: 2px solid rgb(106, 9, 197);
        border-radius: 10px;
        fill: none;
        stroke: #fff;
        stroke-dasharray: 200 480;
        stroke-dashoffset: 150;
        transition: 1s ease-in-out;
    }

    .navb .btn:hover {
        color: white;
        transition: 1s ease-in-out;
        /* background: #4F95DA; */
        background: rgb(106, 9, 197);
    }

    .navb .btn:hover svg {
        stroke-dashoffset: -480;
    }

    /* --------------------------loging and signup button when menu bar show----------------- */
    .modal-footer .cont {
        /* position: absolute; */
        /* transform: translate(-50%, -50%); */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .modal-footer .center {}

    .modal-footer .btn {
        width: 130px;
        height: 45px;
        cursor: pointer;
        border-radius: 10px;
        background: transparent;
        outline: none;
        transition: 1s ease-in-out;
    }

    .modal-footer svg {
        position: relative;
        left: -13px;
        top: -7px;
        border: 2px solid rgb(106, 9, 197);
        border-radius: 10px;
        fill: none;
        stroke: #fff;
        stroke-dasharray: 200 480;
        stroke-dashoffset: 150;
        transition: 1s ease-in-out;
    }

    .modal-footer .btn:hover {
        color: white;
        transition: 1s ease-in-out;
        /* background: #4F95DA; */
        background: rgb(106, 9, 197);
    }

    .modal-footer .btn:hover svg {
        stroke-dashoffset: -480;
    }

    /* ---------------- making responsive between 576-992 ------------------ */
    @media (width>=576px) and (width<992px) {
        .page-1 {
            /* border: 1px solid red; */
            width: 167vw;
            height: 170vh;
            background-image: url('comp5.jpg');
            background-repeat: no-repeat;
            background-size: 167vw 170vh;
            /* background-attachment: fixed; */
            /* background-size: cover; */
        }

        .page-1 .navb_2 img {
            width: 100px;
            height: 50px;
        }

        .page-1 .context {
            bottom: -180px;
            font-size: 50px;
        }

        .page-2 {
            width: 167vw;
        }

        .page-2 .p2 .card {
            height: 23rem
        }

        .page-2 .p2 .card img {
            height: 23rem
        }

        .page-3,
        .page-5,
        .page-6,
        .page-7,
        .page-8,
        .page-9,
        .page-10,
        .page-11,
        .page-12,
        .page-14,
        .page-15,
        .page-16,
        .page-17 {
            width: 167vw;
        }

        .page-4 {
            width: 160vw;
        }

        .page-13 {
            width: 164vw;
        }

        .page-9 .cardDis {
            display: none;
        }
    }

    @media (min-width:992px) {
        .navb_2 {
            display: none;
        }
    }

    @media (max-width:991px) {
        .navb {
            display: none;
        }
    }

    @media (min-width:992px) and (max-width:1035px) {
        .nav-item {
            padding: 0rem 0.5rem;
        }
    }

    @media (min-width:992px) and (max-width:1008px) {
        .page-1 .header {
            font-size: 2.5rem;
        }
    }

    @media (min-width:1009px) {
        .page-1 .header {
            font-size: 3.5rem;
        }
    }

    /* ------------------------------------------------------ */
    /* --------------------------Page 7---------------------------- */
    .Stars {
        --star-size: 25px;
        --star-color: #838383;
        --star-background: #fc0;
        --percent: calc(var(--rating) / 5 * 100%);

        /* display: inline-block; */
        font-size: var(--star-size);
        font-family: Times; // make sure ★ appears correctly
        line-height: 1;

        &::before {
            content: '★★★★★';
            /* letter-spacing: 1px; */
            background: linear-gradient(90deg, var(--star-background) var(--percent), var(--star-color) var(--percent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            padding: 0px 5px
        }
    }

    /* ------------------------page 5------------------------------ */

    .card-title {
        margin-bottom: 0rem;
    }

    .card-body {
        text-align: center;
    }

    .category {
        border-radius: 5rem;
        cursor: pointer;
        padding: 0px;
        margin: 0rem 0.5rem 0rem 0.5rem;
    }

    .category a {
        text-decoration: none;
        color: black;
    }

    .category .active p {
        color: white;
        background-color: rgb(106, 9, 198);
        border-radius: 5rem;
    }

    .category a:hover {
        color: white;
    }

    .category:hover {
        color: white;
        background-color: rgb(106, 9, 198);
    }

    .page-5,
    .p2,
    .card-body {
        padding: 0rem;
        text-align: left;
    }

    /* below chacked class is for to colour the star rating  */
    .checked {
        color: orange;
    }

    .button {
        font-size: larger;
        font-weight: 500;
        color: rgb(96, 59, 198);
        border: 3px solid rgb(43, 239, 164);
        border-radius: 25px;
    }

    .button:hover {
        color: rgb(96, 59, 198);
        font-size: larger;
        font-weight: 500;
        background-color: rgb(43, 239, 164);
        border: 3px solid rgb(43, 239, 164);
        border-radius: 25px;
    }

    /* below css is for page13 testimonials */
    .testimonal {
        font-family: "Open Sans", sans-serif;
    }

    .testimonal .h2 {
        color: #333;
        text-align: center;
        text-transform: uppercase;
        font-family: "Roboto", sans-serif;
        font-weight: bold;
        position: relative;
        margin: 30px 0 60px;
    }

    .testimonal .h2::after {
        content: "";
        width: 100px;
        position: absolute;
        margin: 0 auto;
        height: 3px;
        background: #8fbc54;
        left: 0;
        right: 0;
        bottom: -10px;
    }

    .testimonal .col-center {
        margin: 0 auto;
        float: none !important;
    }

    .testimonal .carousel {
        padding: 0 70px;
    }

    .testimonal .carousel .carousel-item {
        color: #999;
        font-size: 14px;
        text-align: center;
        overflow: hidden;
        min-height: 290px;
    }

    .testimonal .carousel .carousel-item .img-box {
        width: 135px;
        height: 135px;
        margin: 0 auto;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 50%;
    }

    .testimonal .carousel .img-box img {
        width: 100%;
        height: 100%;
        display: block;
        border-radius: 50%;
    }

    .testimonal .carousel .testimonial {
        padding: 30px 0 10px;
    }

    .testimonal .carousel .overview {
        font-style: italic;
    }

    .testimonal .carousel .overview b {
        text-transform: uppercase;
        color: #7AA641;
    }

    .testimonal .carousel-control-prev,
    .testimonal .carousel-control-next {
        width: 40px;
        height: 40px;
        margin-top: -20px;
        top: 50%;
        background: none;
    }

    .testimonal .carousel-control-prev i,
    .testimonal .carousel-control-next i {
        font-size: 68px;
        line-height: 42px;
        position: absolute;
        display: inline-block;
        color: rgba(0, 0, 0, 0.8);
        text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
    }

    .testimonal .carousel-indicators {
        bottom: -40px;
    }

    .testimonal .carousel-indicators li,
    .testimonal .carousel-indicators li.active {
        width: 12px;
        height: 12px;
        margin: 1px 3px;
        border-radius: 50%;
        border: none;
    }

    .testimonal .carousel-indicators li {
        background: #999;
        border-color: transparent;
        box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
    }

    .testimonal .carousel-indicators li.active {
        background: #555;
        box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
    }

    /* below css is for pricing template on page 16 */
    .pricetemp {
        margin-top: 20px;
        background: rgb(219, 255, 223);
    }

    .pricetemp .pricing-content {
        position: relative;
    }

    .pricetemp .pricing_design {
        position: relative;
        margin: 0px 15px;
        z-index: 0;
    }

    .pricetemp .pricing_design .single-pricing {
        background: #554c86;
        padding: 15px 40px;
        border-radius: 30px;
        box-shadow: 0 10px 40px -10px rgba(0, 64, 128, .2);
        position: relative;
        z-index: 1;
    }

    .pricetemp .pricing_design .single-pricing:before {
        content: "";
        background-color: #fff;
        width: 100%;
        height: 100%;
        border-radius: 18px 18px 190px 18px;
        border: 1px solid #eee;
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: -1;
    }

    .pricetemp .price-head h2 {
        margin-bottom: 10px;
        font-size: 26px;
        font-weight: 600;
    }

    .pricetemp .price-head h1 {
        font-weight: 600;
        margin-top: 10px;
        margin-bottom: 5px;
    }

    .pricetemp .single-pricing ul {
        list-style: none;
        margin-top: 5px;
        padding: 0px 0px;
    }

    .pricetemp .single-pricing ul li {
        line-height: 36px;
    }

    .pricetemp .single-pricing ul li i {
        background: #554c86;
        color: #fff;
        width: 20px;
        height: 20px;
        border-radius: 30px;
        font-size: 11px;
        text-align: center;
        line-height: 20px;
        margin-right: 6px;
    }

    .pricetemp .price_btn {
        background: #554c86;
        padding: 10px 30px;
        color: #fff;
        display: inline-block;
        margin-bottom: 30px;
        border-radius: 2px;
        -webkit-transition: 0.3s;
        transition: 0.3s;
    }

    @media (min-width:992px) and (max-width:1199px) {
        .pricetemp .price_btn {
            background: #554c86;
            padding: 10px 20px;
            color: #fff;
            display: inline-block;
            margin-bottom: 30px;
            border-radius: 2px;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }
    }


    .pricetemp .price_btn:hover {
        background: #0aa1d6;
    }

    .pricetemp a {
        text-decoration: none;
    }

    .pricetemp .section-title {
        margin-bottom: 15px;
    }

    .pricetemp .text-center {
        text-align: center !important;
        margin-left: 0px;
        width: 98vw;
    }

    @media (width>=576px) and (width<992px) {
        .pricetemp .text-center {
            width: 167vw;
        }

        .pricetemp .text-center .wow {
            padding: 0px;
        }
    }

    .pricetemp .section-title h2 {
        font-size: 45px;
        font-weight: 600;
        margin-top: 0;
        position: relative;
        text-transform: capitalize;
    }

    /* below css is for page 18 */
    .page-18 .list-group-item {
        color: #ffffff;
        border: 1px solid rgb(85, 12, 181);
        background-color: transparent;
        padding: 0.2rem 1.25rem;
    }

    .page-18 .list-group-item.active {
        z-index: 0;
        color: #ffffff;
        background-color: rgb(85, 12, 181);
        border-color: rgb(85, 12, 181);
    }

    /* ------------------------making responsive------------------------ */


    /* page 10 */
    @media (min-width:992px) and (max-width:1100px) {
        .page-10 .card {
            width: 20rem;
        }
    }

    @media (min-width:1100px) {
        .page-10 .card {
            width: 22rem;
        }
    }

    /* page11 */
    @media (min-width:992px) and (max-width:1200px) {
        .page-11 .card {
            width: 15rem;
        }
    }

    @media (min-width:1200px) {
        .page-11 .card {
            width: 18rem;
        }
    }

    @media (min-width:1235px) {
        .page-12 .p2 .card {
            width: 20rem;
        }
    }

    @media (max-width:1235px) {
        .page-12 .p2 .card {
            width: 15rem;
        }
    }

    /* -------------------------this is for menu bar for width less then 992px-------------------------- */
    label {
        display: flex;
        flex-direction: column;
        width: 35px;
        cursor: pointer;
    }

    label span {
        background: #aa46e7;
        border-radius: 10px;
        height: 2px;
        margin: 7px 0;
        transition: 0.4s cubic-bezier(0.68, -0.6, 0.32, 1.6);
    }

    span:nth-of-type(1) {
        width: 50%;
    }

    span:nth-of-type(2) {
        width: 100%;
    }

    span:nth-of-type(3) {
        width: 75%;
    }

    input[type="checkbox"] {
        display: none;
    }

    input[type="checkbox"]:checked~span:nth-of-type(1) {
        transform-origin: bottom;
        transform: rotatez(45deg) translate(3px, 0px);
    }

    input[type="checkbox"]:checked~span:nth-of-type(2) {
        transform-origin: top;
        transform: rotatez(-45deg);
    }

    input[type="checkbox"]:checked~span:nth-of-type(3) {
        transform-origin: bottom;
        width: 50%;
        transform: translate(15px, -3px) rotatez(45deg);
    }

    /* --------------------page 18------------------------ */
    .page-18 {
        width: -webkit-fill-available;
    }

    .page-18 .conmid {
        width: 90vw;
        margin: auto;
    }

    @media (width>=576px) and (width<992px) {
        .page-18 {
            width: 167vw;
        }

        .page-18 .conmid {
            width: 150vw;
            margin: auto;
        }
    }

    /* ----------------making responsive width less than 576px-------------------- */
    /* @media (width<576px) {
        .page-1 {
            width: 350vw;
            height: 350vh;
            background-image: url('comp5.jpg');
            background-repeat: no-repeat;
            background-size: 350vw 350vh;
        }

        .page-1 .context {
            width: 310vw;
            bottom: -220vh;
            font-size: 75px;
        }

        .page-1 .hcont2 {
            font-size: 40px;
        }

        .page-1 .hcont3 button {
            width: 230px;
            height: 80px;
            font-size: 30px;
        }
    } */
    </style>
</head>

<body>
    <!-- page 1 -->
    <div class="page-1">
        <div class="navb shadow-sm"
            style="position:fixed; top:0px; width: -webkit-fill-available; z-index:1; background-color:white">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 0rem 0rem; ">
                <div class="container-fluid" style="padding: 0px 0px; justify-content:flex-start;">
                    <a class="navbar-brand image"
                        style="padding-top: 1rem; padding-bottom: 1rem; margin-left: 1.5rem"><img src="logo.png"
                            alt="Error in loading image"></a>
                    <div style="display:flex; justify-content:space-between;width: -webkit-fill-available;">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:auto; margin-right:auto;">
                            <li class="nav-item">
                                <a class="nav-link active hover-underline-animation" href="#" aria-current="page"
                                    style="color: rgb(153, 153, 153);">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active hover-underline-animation" href="#" aria-current="page"
                                    style="color: rgb(153, 153, 153);">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active hover-underline-animation" href="#" aria-current="page"
                                    style="color: rgb(153, 153, 153);">Pages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active hover-underline-animation" href="#" aria-current="page"
                                    style="color: rgb(153, 153, 153);">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active hover-underline-animation" href="#" aria-current="page"
                                    style="color: rgb(153, 153, 153);">Event</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active hover-underline-animation" href="#" aria-current="page"
                                    style="color: rgb(153, 153, 153);">Contact</a>
                            </li>
                        </ul>
                        <div style="display: flex">
                            <div>
                                <div class="cont">
                                    <div class="center">
                                        <button class="btn">
                                            <svg width="130px" height="45px" viewBox="0 0 180 60">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span style="position: relative; top: -43px;">LogIn</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="cont">
                                    <div class="center">
                                        <button class="btn">
                                            <svg width="130px" height="45px" viewBox="0 0 180 60">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span style="position: relative; top: -43px;">SignUp</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- -------------------------------------------------------------------------- -->
        <div class="navb_2 shadow-sm"
            style="position:fixed;left:-1px; top:-1px; width: -webkit-fill-available; z-index:1; background-color:white">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 0rem 0rem; ">
                <div class="container-fluid" style="padding: 0px 0px; justify-content:space-between;">
                    <a class="navbar-brand" style="padding-top: 1rem; padding-bottom: 1rem; margin-left: 1.5rem"><img
                            class="imag" src="logo.png" alt="Error in loading image"></a>
                    <div style="margin-right: 1.5rem;">
                        <label for="check" id="lab">
                            <input type="checkbox" id="check" />
                            <span></span>
                            <span style="margin: 0px"></span>
                            <span></span>
                        </label>
                        <div id="inmenu"></div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Modal -->
        <div id="menuMod" style="display:none; position:relative; top:72px; float:right">
            <div class="modal-dialog" style="margin: 0rem 0rem 0rem 0rem;">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                    </div> -->
                    <div class="modal-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Home</li>
                            <li class="list-group-item">Courses</li>
                            <li class="list-group-item">Pages</li>
                            <li class="list-group-item">Blogs</li>
                            <li class="list-group-item">Events</li>
                            <li class="list-group-item">Contect</li>
                        </ul>
                    </div>
                    <div class="modal-footer" style="padding: 0.5rem 0rem 0.5rem 1rem;">
                        <div style="display: flex">
                            <div>
                                <div class="cont">
                                    <div class="center">
                                        <button class="btn">
                                            <svg width="130px" height="45px" viewBox="0 0 180 60">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span style="position: relative; top: -43px;">LogIn</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="cont">
                                    <div class="center">
                                        <button class="btn">
                                            <svg width="130px" height="45px" viewBox="0 0 180 60">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span style="position: relative; top: -43px;">SignUp</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------------------------------------------------------------------------- -->
        <div class="container-fluid context" style="position:absolute;">
            <div class="row">
                <div class="col-12 header" style="">
                    Learn From <strong style="color:orange">Anywhere</strong>
                </div>
                <div class="col-lg-8 col-sm-10 hcont2" style="">
                    <strong style="color:grey">
                        Technology Is Bringing A Massive Wave Of Evolution On Learning <br>Things In Different Ways.
                    </strong>
                </div>
                <div class="col-10 mt-3 hcont3">
                    <form class="d-flex" role="search">
                        <button class="btn btn-outline-primary" type="submit">Get Started</button>
                        <button class="btn btn-outline-success" type="submit">View Courses</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- page 2 -->
    <div class="page-2 mt-5" style="display:flex; flex-direction:column">
        <div class="p1">
            <div style="text-align:center">
                <h2><strong>How it works?</strong></h2>
            </div>
            <div style="text-align:center">
                <strong>10,000+ unique online courses list designs</strong>
            </div>
        </div>
        <div class="p2" style="display:flex; flex-direction:column;">
            <div style="display:flex; justify-content:space-evenly;">
                <!-- Card 1 -->
                <div class="card" style="width: 18rem; border-radius: 0.5rem; height:20rem; border:none">
                    <img src="page2_img/take_4.png" class="card-img-top" alt="error in loading image..">

                </div>
                <!-- Card 2 -->
                <div class="card" style="width: 18rem; border-radius: 0.5rem; height:20rem; border:none">
                    <img src="page2_img/take_4d.png" class="card-img-top" alt="error in loading image..">

                </div>
                <!-- Card 3 -->
                <div class="card" style="width: 18rem; border-radius: 0.5rem; height:20rem; border:none">
                    <img src="page2_img/take_4b.png" class="card-img-top" alt="error in loading image..">

                </div>
                <!-- Card 4 -->
                <div class="card" style="width: 18rem; border-radius: 0.5rem; height:20rem; border:none">
                    <img src="page2_img/take_4e.png" class="card-img-top" alt="error in loading image..">

                </div>
                <!-- Card 5 -->
                <div class="card" style="width: 18rem; border-radius: 0.5rem; height:20rem; border:none">
                    <img src="page2_img/take_4c.png" class="card-img-top" alt="error in loading image..">

                </div>
            </div>
        </div>
    </div>
    <!-- Page 3 -->
    <div class="page-3" style="display:flex; flex-direction:column;">
        <div class="p1" style="z-index:0">
            <div style="text-align:center;">
                <h2><strong>Start your Learning Journey Today!</strong></h2>
            </div>
            <div style="text-align:center;">
                <strong>Lorem ipsum dolor sit amet consectetur.</strong>
            </div>
        </div>
        <div class="p2" style="display:flex; flex-direction:column;">
            <div style="display:flex; justify-content:space-evenly;">
                <!-- Card 2 -->
                <div class="card" style="width: 18rem; border-radius: 0.5rem; height:25rem; border:none">
                    <img src="page3_img/take_5a.png" class="card-img-top" alt="error in loading image.."
                        style="height:25rem">
                    <div class="card-body">
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card" style="width: 18rem; border-radius: 0.5rem; height:25rem; border:none">
                    <img src="page3_img/take_5b.png" class="card-img-top" alt="error in loading image.."
                        style="height:25rem">
                    <div class="card-body">
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="card" style="width: 18rem; border-radius: 0.5rem; height:25rem; border:none">
                    <img src="page3_img/take_5c.png" class="card-img-top" alt="error in loading image.."
                        style="height:25rem">
                    <div class="card-body">
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="card" style="width: 18rem; border-radius: 0.5rem; height:25rem; border:none">
                    <img src="page3_img/take_5d.png" class="card-img-top" alt="error in loading image.."
                        style="height:25rem">
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page 4 -->
    <div class="page-4 mx-4" style="display:flex; flex-direction:column;">
        <div class="p1" style="margin: 0rem 0rem 0rem 0rem;">
            <div class="">
                <h2><strong>TREANDING CATEGORIES</strong></h2>
            </div>
            <div class="" style="display:flex; justify-content:space-between;">
                <div>
                    <p><strong>Lorem ipsum dolor sit amet consectetur.</strong></p>
                </div>
                <div>
                    <a href="/"><strong>Browse All...</strong></a>
                </div>
            </div>
        </div>
        <div class="p2" style="display: flex; flex-direction: column">
            <div style="display:flex; justify-content: space-between;">
                <!-- card 1 -->
                <div class="card cd1" style="width: 16rem;">
                    <img src="icons/design.png" class="card-img-top mx-auto mt-4" alt="error loading image"
                        style="width:6rem">
                    <div class="card-body">
                        <h5 class="card-title">Design</h5>
                        <p class="card-text">Over 960 Courses</p>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="card cd2" style="width: 16rem;">
                    <img src="icons/business.png" class="card-img-top mx-auto mt-4" alt="error loading image"
                        style="width:6rem">
                    <div class="card-body">
                        <h5 class="card-title">Business</h5>
                        <p class="card-text">Over 43 Courses</p>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="card cd3" style="width: 16rem;">
                    <img src="icons/soft_dev.png" class="card-img-top mx-auto mt-4" alt="error loading image"
                        style="width:6rem">
                    <div class="card-body">
                        <h5 class="card-title">Softwer Development</h5>
                        <p class="card-text">Over 1209 Courses</p>
                    </div>
                </div>
                <!-- card 4 -->
                <div class="card cd4" style="width: 16rem;">
                    <img src="icons/personal_dev.png" class="card-img-top mx-auto mt-4" alt="error loading image"
                        style="width:6rem">
                    <div class="card-body">
                        <h5 class="card-title">Personal Development</h5>
                        <p class="card-text">Over 921 Courses</p>
                    </div>
                </div>
            </div>
            <div class="mt-2" style="display:flex; justify-content: space-between;">
                <!-- card 5 -->
                <div class="card cd5" style="width: 16rem;">
                    <img src="icons/photography.png" class="card-img-top mx-auto mt-4" alt="error loading image"
                        style="width:6rem">
                    <div class="card-body">
                        <h5 class="card-title">Photography</h5>
                        <p class="card-text">Over 693 Courses</p>
                    </div>
                </div>
                <!-- card 6 -->
                <div class="card cd6" style="width: 16rem;">
                    <img src="icons/music.png" class="card-img-top mx-auto mt-4" alt="error loading image"
                        style="width:6rem">
                    <div class="card-body">
                        <h5 class="card-title">Audio & Music</h5>
                        <p class="card-text">Over 53 Courses</p>
                    </div>
                </div>
                <!-- card 7 -->
                <div class="card cd7" style="width: 16rem;">
                    <img src="icons/web_marketing.png" class="card-img-top mx-auto mt-4" alt="error loading image"
                        style="width:6rem">
                    <div class="card-body">
                        <h5 class="card-title">Marketing</h5>
                        <p class="card-text">Over 12 Courses</p>
                    </div>
                </div>
                <!-- card 8 -->
                <div class="card cd8" style="width: 16rem;">
                    <img src="icons/finance.png" class="card-img-top mx-auto mt-4" alt="error loading image"
                        style="width:6rem">
                    <div class="card-body">
                        <h5 class="card-title">Finance & Accounting</h5>
                        <p class="card-text">Over 322 Courses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page 5 -->
    <div class="page-5 mt-5" style="display:flex; flex-direction:column;">
        <div class="p1">
            <div style="text-align:center;">
                <h2><strong>Our Most Popular Courses</strong></h2>
            </div>
            <div style="text-align:center;">
                <strong>10,000+ unique online courses list designs</strong>
            </div>
            <div class="row mt-4"
                style="font-weight: 500; margin: 0rem 1rem 0rem 1rem; justify-content: center; text-align: center;">
                <div class="col-2 category cat-1">
                    <a href="" class="active">
                        <p style="padding: 0.5rem 0rem 0.5rem 0rem; margin-top: 0; margin-bottom: 0rem;">All categories
                        </p>
                    </a>
                </div>
                <div class="col-2 category cat-2">
                    <a href="">
                        <p style="padding: 0.5rem 0rem 0.5rem 0rem; margin-top: 0; margin-bottom: 0rem;">Design</p>
                    </a>
                </div>
                <div class="col-2 category cat-3">
                    <a href="">
                        <p style="padding: 0.5rem 0rem 0.5rem 0rem; margin-top: 0; margin-bottom: 0rem;">Software
                            Dev...</p>
                    </a>
                </div>
                <div class="col-2 category cat-4">
                    <a href="">
                        <p style="padding: 0.5rem 0rem 0.5rem 0rem; margin-top: 0; margin-bottom: 0rem;">Personal
                            Dev...</p>
                    </a>
                </div>
                <div class="col-2 category cat-5">
                    <a href="">
                        <p style="padding: 0.5rem 0rem 0.5rem 0rem; margin-top: 0; margin-bottom: 0rem;">Photography</p>
                    </a>
                </div>
                <div class="col-2 category cat-6">
                    <a href="">
                        <p style="padding: 0.5rem 0rem 0.5rem 0rem; margin-top: 0; margin-bottom: 0rem;">Audio & Film
                        </p>
                    </a>
                </div>
                <div class="col-2 category cat-7">
                    <a href="">
                        <p style="padding: 0.5rem 0rem 0.5rem 0rem; margin-top: 0; margin-bottom: 0rem;">Marketing</p>
                    </a>
                </div>
                <div class="col-2 category cat-8">
                    <a href="">
                        <p style="padding: 0.5rem 0rem 0.5rem 0rem; margin-top: 0; margin-bottom: 0rem;">Finance</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="p2" style="display:flex; flex-direction:column;">
            <div class="mt-3" style="display:flex; justify-content:space-evenly;">
                <!-- Card 1 -->
                <div class="card" style="width: 18rem;">
                    <img src="page5_img/ui_ux.png" class="card-img-top" alt="error in loading image.."
                        style="height: 12rem;">
                    <div class="card-body">
                        <div class="card-rating"
                            style="display:flex; height:25px;width: 185px;justify-content: space-between; padding:0rem 0.25rem">
                            <div style="padding:9px 0px">
                                <h6>4.3</h6>
                            </div>
                            <div>
                                <div class="Stars" style="--rating: 4.3
                            ;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            </div>
                            <div style="padding:6px 0px">
                                <p>(1996)</p>
                            </div>
                        </div>
                        <h5 class="card-text" style="padding:0.2rem 0.25rem">Learn Figma - UI/UX Design Essential
                            Training
                        </h5>
                        <div class="shadow-sm"
                            style="display:flex; justify-content:space-between; padding:0rem 0.25rem">
                            <div style="display:flex">
                                <div>
                                    <img src="icons/lessons.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">6 Lessons</p>
                                </div>
                            </div>
                            <div style="display:flex">
                                <div>
                                    <img src="icons/clock.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">3h 56min</p>
                                </div>
                            </div>
                            <div style="display:flex">
                                <div>
                                    <img src="icons/beginner.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">Beginner</p>
                                </div>
                            </div>
                        </div>
                        <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                            <div style="display:flex;">
                                <div>
                                    <img src="I.jpg" alt="error in loading image.."
                                        style="width: 45px; height: 45px; border-radius: 35px;">
                                </div>
                                <div>
                                    <h6 style="padding:12px 2px">Ashish Sharma</h6>
                                </div>
                            </div>
                            <div>
                                <h6 style="padding:12px 2px"><strike>Rs15000</strike>|Rs499</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card" style="width: 18rem;">
                    <img src="page5_img/python.jpg" class="card-img-top" alt="error in loading image.."
                        style="height: 12rem;">
                    <div class="card-body">
                        <div class="card-rating"
                            style="display:flex; height:25px;width: 185px;justify-content: space-between; padding:0rem 0.25rem">
                            <div style="padding:9px 0px">
                                <h6>4.3</h6>
                            </div>
                            <div>
                                <div class="Stars" style="--rating: 4.3
                            ;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            </div>
                            <div style="padding:6px 0px">
                                <p>(1996)</p>
                            </div>
                        </div>
                        <h5 class="card-text" style="padding:0.2rem 0.25rem">Complete Python Bootcamp From Zero to Hero
                            in
                            Python</h5>
                        <div class="shadow-sm"
                            style="display:flex; justify-content:space-between; padding:0rem 0.25rem">
                            <div style="display:flex">
                                <div>
                                    <img src="icons/lessons.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">6 Lessons</p>
                                </div>
                            </div>
                            <div style="display:flex">
                                <div>
                                    <img src="icons/clock.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">3h 56min</p>
                                </div>
                            </div>
                            <div style="display:flex">
                                <div>
                                    <img src="icons/beginner.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">Beginner</p>
                                </div>
                            </div>
                        </div>
                        <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                            <div style="display:flex;">
                                <div>
                                    <img src="I.jpg" alt="error in loading image.."
                                        style="width: 45px; height: 45px; border-radius: 35px;">
                                </div>
                                <div>
                                    <h6 style="padding:12px 2px">Ashish Sharma</h6>
                                </div>
                            </div>
                            <div>
                                <h6 style="padding:12px 2px"><strike>Rs15000</strike>|Rs499</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card" style="width: 18rem;">
                    <img src="page5_img/angular.jpg" class="card-img-top" alt="error in loading image.."
                        style="height: 12rem;">
                    <div class="card-body">
                        <div class="card-rating"
                            style="display:flex; height:25px;width: 185px;justify-content: space-between; padding:0rem 0.25rem">
                            <div style="padding:9px 0px">
                                <h6>4.3</h6>
                            </div>
                            <div>
                                <div class="Stars" style="--rating: 4.3
                            ;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            </div>
                            <div style="padding:6px 0px">
                                <p>(1996)</p>
                            </div>
                        </div>
                        <h5 class="card-text" style="padding:0.2rem 0.25rem">Angular - The Complete Guide (2022 Edition)
                        </h5>
                        <div class="shadow-sm"
                            style="display:flex; justify-content:space-between; padding:0rem 0.25rem">
                            <div style="display:flex">
                                <div>
                                    <img src="icons/lessons.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">6 Lessons</p>
                                </div>
                            </div>
                            <div style="display:flex">
                                <div>
                                    <img src="icons/clock.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">3h 56min</p>
                                </div>
                            </div>
                            <div style="display:flex">
                                <div>
                                    <img src="icons/beginner.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">Beginner</p>
                                </div>
                            </div>
                        </div>
                        <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                            <div style="display:flex;">
                                <div>
                                    <img src="I.jpg" alt="error in loading image.."
                                        style="width: 45px; height: 45px; border-radius: 35px;">
                                </div>
                                <div>
                                    <h6 style="padding:12px 2px">Ashish Sharma</h6>
                                </div>
                            </div>
                            <div>
                                <h6 style="padding:12px 2px"><strike>Rs15000</strike>|Rs499</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3" style="display:flex; justify-content:space-evenly">
                <!-- Card 4 -->
                <div class="card" style="width: 18rem;">
                    <img src="page5_img/finance.jpg" class="card-img-top" alt="error in loading image.."
                        style="height: 12rem;">
                    <div class="card-body">
                        <div class="card-rating"
                            style="display:flex; height:25px;width: 185px;justify-content: space-between; padding:0rem 0.25rem">
                            <div style="padding:9px 0px">
                                <h6>4.3</h6>
                            </div>
                            <div>
                                <div class="Stars" style="--rating: 4.3
                            ;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            </div>
                            <div style="padding:6px 0px">
                                <p>(1996)</p>
                            </div>
                        </div>
                        <h5 class="card-text" style="padding:0.2rem 0.25rem">The Complete Financial Analyst Training &
                            Investing Course
                        </h5>
                        <div class="shadow-sm"
                            style="display:flex; justify-content:space-between; padding:0rem 0.25rem">
                            <div style="display:flex">
                                <div>
                                    <img src="icons/lessons.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">6 Lessons</p>
                                </div>
                            </div>
                            <div style="display:flex">
                                <div>
                                    <img src="icons/clock.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">3h 56min</p>
                                </div>
                            </div>
                            <div style="display:flex">
                                <div>
                                    <img src="icons/beginner.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">Beginner</p>
                                </div>
                            </div>
                        </div>
                        <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                            <div style="display:flex;">
                                <div>
                                    <img src="I.jpg" alt="error in loading image.."
                                        style="width: 45px; height: 45px; border-radius: 35px;">
                                </div>
                                <div>
                                    <h6 style="padding:12px 2px">Ashish Sharma</h6>
                                </div>
                            </div>
                            <div>
                                <h6 style="padding:12px 2px"><strike>Rs15000</strike>|Rs499</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="card" style="width: 18rem;">
                    <img src="page5_img/drawing.jpg" class="card-img-top" alt="error in loading image.."
                        style="height: 12rem;">
                    <div class="card-body">
                        <div class="card-rating"
                            style="display:flex; height:25px;width: 185px;justify-content: space-between; padding:0rem 0.25rem">
                            <div style="padding:9px 0px">
                                <h6>4.3</h6>
                            </div>
                            <div>
                                <div class="Stars" style="--rating: 4.3
                            ;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            </div>
                            <div style="padding:6px 0px">
                                <p>(1996)</p>
                            </div>
                        </div>
                        <h5 class="card-text" style="padding:0.2rem 0.25rem">The Ultimate Drawing Course Beginner to
                            Advanced
                        </h5>
                        <div class="shadow-sm"
                            style="display:flex; justify-content:space-between; padding:0rem 0.25rem">
                            <div style="display:flex">
                                <div>
                                    <img src="icons/lessons.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">6 Lessons</p>
                                </div>
                            </div>
                            <div style="display:flex">
                                <div>
                                    <img src="icons/clock.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">3h 56min</p>
                                </div>
                            </div>
                            <div style="display:flex">
                                <div>
                                    <img src="icons/beginner.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">Beginner</p>
                                </div>
                            </div>
                        </div>
                        <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                            <div style="display:flex;">
                                <div>
                                    <img src="I.jpg" alt="error in loading image.."
                                        style="width: 45px; height: 45px; border-radius: 35px;">
                                </div>
                                <div>
                                    <h6 style="padding:12px 2px">Ashish Sharma</h6>
                                </div>
                            </div>
                            <div>
                                <h6 style="padding:12px 2px"><strike>Rs15000</strike>|Rs499</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 6  -->
                <div class="card" style="width: 18rem;">
                    <img src="page5_img/photography.jpg" class="card-img-top" alt="error in loading image.."
                        style="height: 12rem;">
                    <div class="card-body">
                        <div class="card-rating"
                            style="display:flex; height:25px;width: 185px;justify-content: space-between; padding:0rem 0.25rem">
                            <div style="padding:9px 0px">
                                <h6>4.3</h6>
                            </div>
                            <div>
                                <div class="Stars" style="--rating: 4.3
                            ;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            </div>
                            <div style="padding:6px 0px">
                                <p>(1996)</p>
                            </div>
                        </div>
                        <h5 class="card-text" style="padding:0.2rem 0.25rem">Photography Masterclass: A Complete Guide
                            to
                            Photography
                        </h5>
                        <div class="shadow-sm"
                            style="display:flex; justify-content:space-between; padding:0rem 0.25rem">
                            <div style="display:flex">
                                <div>
                                    <img src="icons/lessons.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">6 Lessons</p>
                                </div>
                            </div>
                            <div style="display:flex">
                                <div>
                                    <img src="icons/clock.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">3h 56min</p>
                                </div>
                            </div>
                            <div style="display:flex">
                                <div>
                                    <img src="icons/beginner.png" alt="error in loading image.." width="22px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">Beginner</p>
                                </div>
                            </div>
                        </div>
                        <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                            <div style="display:flex;">
                                <div>
                                    <img src="I.jpg" alt="error in loading image.."
                                        style="width: 45px; height: 45px; border-radius: 35px;">
                                </div>
                                <div>
                                    <h6 style="padding:12px 2px">Ashish Sharma</h6>
                                </div>
                            </div>
                            <div>
                                <h6 style="padding:12px 2px"><strike>Rs15000</strike>|Rs499</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page 6 -->
    <div class="page-6 mt-5" style="display:flex; flex-direction:column">
        <div class="p1" style="background-color: rgb(26,6,79); color: white;">
            <div style="text-align:center; padding-top:20px">
                <h2><strong>Why learn with our courses?</strong></h2>
            </div>
            <div style="text-align:center">
                <strong>Lorem, ipsum dolor sit amet consectetur</strong>
            </div>
        </div>
        <div class="p2" style="display:flex; flex-direction:column; background-color: rgb(26,6,79);">
            <div class="mt-3" style="display:flex; justify-content:space-evenly;">
                <!-- Card 1 -->
                <div class="card" style="width: 23rem; border-radius: 0.5rem; height:25rem; border:none">
                    <img src="page6_img/take 7a.png" class="card-img-top" alt="error in loading image.."
                        style="height:25rem">
                    <div class="card-body">
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card" style="width: 23rem; border-radius: 0.5rem; height:25rem; border:none">
                    <img src="page6_img/take 7b.png" class="card-img-top" alt="error in loading image.."
                        style="height:25rem">
                    <div class="card-body">
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card" style="width: 23rem; border-radius: 0.5rem; height:25rem; border:none">
                    <img src="page6_img/take 7c.png" class="card-img-top" alt="error in loading image.."
                        style="height:25rem">
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page 7 -->
    <div class="page-7"
        style="display:flex; border:1px solid black; padding:5rem 4rem; background-color:rgb(96,59,198)">
        <div style="display:flex; flex-direction:column; justify-content:center; width: 23rem; color:white">
            <div>
                <h3>Featured<br>Course</h3>
            </div>
            <div>
                <p>Hand-picked Instructor<br>and expertly crafted courses,<br>designed for the modern<br>students
                    and
                    enterpreneur.</p>
            </div>
            <div>
                <button class="button" type="button" style="">Browse All Courses...</button>
            </div>
        </div>
        <div style="margin-left:2rem">
            <!-- Card 1 -->
            <div class="card" style="width: 23rem;">
                <img src="page7_img/instaMark.jpg" class="card-img-top" alt="error in loading image.."
                    style="height: 12rem;">
                <div class="card-body">
                    <div class="card-rating"
                        style="display:flex; height:25px;width: 185px;justify-content: space-between; padding:0rem 0.25rem">
                        <div style="padding:9px 0px">
                            <h6>4.3</h6>
                        </div>
                        <div>
                            <div class="Stars" style="--rating: 4.3
                            ;" aria-label="Rating of this product is 2.3 out of 5."></div>
                        </div>
                        <div style="padding:6px 0px">
                            <p>(1996)</p>
                        </div>
                    </div>
                    <h5 class="card-text" style="padding:0.2rem 0.25rem">Instagram Marketing 2021: Complete Guide To
                        Instagram Growth</h5>
                    <div class="shadow-sm" style="display:flex; justify-content:space-between; padding:0rem 0.25rem">
                        <div style="display:flex">
                            <div>
                                <img src="icons/lessons.png" alt="error in loading image.." width="22px">
                            </div>
                            <div>
                                <p style="padding-top:2px">6 Lessons</p>
                            </div>
                        </div>
                        <div style="display:flex">
                            <div>
                                <img src="icons/clock.png" alt="error in loading image.." width="22px">
                            </div>
                            <div>
                                <p style="padding-top:2px">3h 56min</p>
                            </div>
                        </div>
                        <div style="display:flex">
                            <div>
                                <img src="icons/beginner.png" alt="error in loading image.." width="22px">
                            </div>
                            <div>
                                <p style="padding-top:2px">Beginner</p>
                            </div>
                        </div>
                    </div>
                    <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                        <div style="display:flex;">
                            <div>
                                <img src="I.jpg" alt="error in loading image.."
                                    style="width: 45px; height: 45px; border-radius: 35px;">
                            </div>
                            <div>
                                <h6 style="padding:12px 2px">Ashish Sharma</h6>
                            </div>
                        </div>
                        <div>
                            <h6 style="padding:12px 2px"><strike>Rs15000</strike>|Rs499</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin:0rem 2rem 0rem 0rem">
            <!-- Card 2 -->
            <div class="card" style="width: 23rem;">
                <img src="page7_img/blander.jpg" class="card-img-top" alt="error in loading image.."
                    style="height: 12rem;">
                <div class="card-body">
                    <div class="card-rating"
                        style="display:flex; height:25px;width: 185px;justify-content: space-between; padding:0rem 0.25rem">
                        <div style="padding:9px 0px">
                            <h6>3.3</h6>
                        </div>
                        <div>
                            <div class="Stars" style="--rating: 3.3;"
                                aria-label="Rating of this product is 2.3 out of 5."></div>
                        </div>
                        <div style="padding:6px 0px">
                            <p>(1996)</p>
                        </div>
                    </div>
                    <h5 class="card-text" style="padding:0.2rem 0.25rem">Complete Blender Creator: Learn 3D Modelling
                        for
                        Beginners</h5>
                    <div class="shadow-sm" style="display:flex; justify-content:space-between; padding:0rem 0.25rem">
                        <div style="display:flex">
                            <div>
                                <img src="icons/lessons.png" alt="error in loading image.." width="22px">
                            </div>
                            <div>
                                <p style="padding-top:2px">6 Lessons</p>
                            </div>
                        </div>
                        <div style="display:flex">
                            <div>
                                <img src="icons/clock.png" alt="error in loading image.." width="22px">
                            </div>
                            <div>
                                <p style="padding-top:2px">3h 56min</p>
                            </div>
                        </div>
                        <div style="display:flex">
                            <div>
                                <img src="icons/beginner.png" alt="error in loading image.." width="22px">
                            </div>
                            <div>
                                <p style="padding-top:2px">Beginner</p>
                            </div>
                        </div>
                    </div>
                    <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                        <div style="display:flex;">
                            <div>
                                <img src="I.jpg" alt="error in loading image.."
                                    style="width: 45px; height: 45px; border-radius: 35px;">
                            </div>
                            <div>
                                <h6 style="padding:12px 2px">Ashish Sharma</h6>
                            </div>
                        </div>
                        <div>
                            <h6 style="padding:12px 2px"><strike>Rs15000</strike>|Rs499</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page 8 -->
    <div class="page-8" style="display:flex; flex-direction:column">
        <div class="p1" style="background-color: rgb(240, 253, 248); color: black;">
            <div style="text-align:center; padding-top:20px">
                <h2><strong>Why Study With ProgrammingWorld?</strong></h2>
            </div>
            <div style="text-align:center">
                <strong>Discover Your Perfect Program In Our Courses</strong>
            </div>
        </div>
        <div class="p2" style="display:flex; flex-direction:column; background-color: #F0FDF8;">
            <div class="mt-3" style="display:flex; justify-content:space-evenly;">
                <!-- Card 1 -->
                <div class="card" style="width: 23rem; border-radius: 0.5rem; height:25rem; border:none">
                    <img src="page8_img/take 9a.png" class="card-img-top" alt="error in loading image.."
                        style="height:25rem">
                    <div class="card-body">
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card" style="width: 23rem; border-radius: 0.5rem; height:25rem; border:none">
                    <img src="page8_img/take 9b.png" class="card-img-top" alt="error in loading image.."
                        style="height:25rem">
                    <div class="card-body">
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card" style="width: 23rem; border-radius: 0.5rem; height:25rem; border:none">
                    <img src="page8_img/take 9c.png" class="card-img-top" alt="error in loading image.."
                        style="height:25rem">
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page 9 -->
    <div class="page-9 mt-5" style="display:flex; flex-direction:column;">
        <div class="p1">
            <div class="" style="margin-left:2.5rem">
                <h2><strong>Learn from the best instructors</strong></h2>
            </div>
            <div class="" style="display:flex; justify-content:space-between; margin-left:2.5rem; margin-right:1.5rem">
                <div>
                    <p><strong>Lorem ipsum dolor sit amet consectetur.</strong></p>
                </div>
                <div>
                    <button class="btn"
                        style="background-color: rgb(238, 234, 255); color:rgb(46, 0, 255); padding: 6px 20px; border-radius: 7px;">
                        View All instructors
                    </button>
                </div>
            </div>
        </div>
        <div class="p2 mt-3" style="display:flex; flex-direction:column;">
            <div class="mt-3" style="display:flex; justify-content:space-evenly;">
                <!-- Card 1 -->
                <div class="card cardDis" style="width: 18rem; border-radius: 0.5rem;">
                    <img src="page9_img/tut3.png" class="card-img-top" alt="error in loading image..">
                    <div class="card-body">
                        <h5 class="card-text mt-1" style="padding:0rem 0.25rem; margin:0px">Anna Richard</h5>
                        <p class="card-text" style="padding:0rem 0.25rem; margin:0px">UI Designer</p>
                        <div class="row" style="justify-content:center; padding:0rem 0.25rem">
                            <div class="col-xl-2 col-lg-6" style="display:flex">
                                <div>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div style="padding:2px 5px">
                                    <h6 style="margin:0px">4.5</h6>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 px-2" style="display:flex; padding: 0rem 0rem 0rem 0rem;">
                                <div>
                                    <img src="icons/boy.png" alt="error in loading image.." width="17px"
                                        style="margin:0px 5px">
                                </div>
                                <div>
                                    <p style="padding-top:2px; margin:0px">692 Student</p>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6" style="display:flex;">
                                <div>
                                    <img src="icons/play.png" alt="error in loading image.." width="18px">
                                </div>
                                <div>
                                    <p style="padding-top:2px; margin:0px 0px 0px 0px">15 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card" style="width: 18rem; border-radius: 0.5rem;">
                    <img src="page9_img/tut1.png" class="card-img-top" alt="error in loading image..">
                    <div class="card-body">
                        <h5 class="card-text mt-1" style="padding:0rem 0.25rem; margin:0px">Anna Richard</h5>
                        <p class="card-text" style="padding:0rem 0.25rem; margin:0px">UI Designer</p>
                        <div class="row" style="justify-content:center; padding:0rem 0.25rem">
                            <div class="col-xl-2 col-lg-6" style="display:flex">
                                <div>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div style="padding:2px 5px">
                                    <h6 style="margin:0px">4.5</h6>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 px-2" style="display:flex; padding: 0rem 0rem 0rem 0rem;">
                                <div>
                                    <img src="icons/boy.png" alt="error in loading image.." width="17px"
                                        style="margin:0px 5px">
                                </div>
                                <div>
                                    <p style="padding-top:2px; margin:0px">692 Student</p>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6" style="display:flex;">
                                <div>
                                    <img src="icons/play.png" alt="error in loading image.." width="18px">
                                </div>
                                <div>
                                    <p style="padding-top:2px; margin:0px 0px 0px 0px">15 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card" style="width: 18rem; border-radius: 0.5rem;">
                    <img src="page9_img/tut2.png" class="card-img-top" alt="error in loading image..">
                    <div class="card-body">
                        <h5 class="card-text mt-1" style="padding:0rem 0.25rem; margin:0px">Anna Richard</h5>
                        <p class="card-text" style="padding:0rem 0.25rem; margin:0px">UI Designer</p>
                        <div class="row" style="justify-content:center; padding:0rem 0.25rem">
                            <div class="col-xl-2 col-lg-6" style="display:flex">
                                <div>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div style="padding:2px 5px">
                                    <h6 style="margin:0px">4.5</h6>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 px-2" style="display:flex; padding: 0rem 0rem 0rem 0rem;">
                                <div>
                                    <img src="icons/boy.png" alt="error in loading image.." width="17px"
                                        style="margin:0px 5px">
                                </div>
                                <div>
                                    <p style="padding-top:2px; margin:0px">692 Student</p>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6" style="display:flex;">
                                <div>
                                    <img src="icons/play.png" alt="error in loading image.." width="18px">
                                </div>
                                <div>
                                    <p style="padding-top:2px; margin:0px 0px 0px 0px">15 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="card" style="width: 18rem; border-radius: 0.5rem;">
                    <img src="page9_img/tut4.png" class="card-img-top" alt="error in loading image..">
                    <div class="card-body">
                        <h5 class="card-text mt-1" style="padding:0rem 0.25rem; margin:0px">Anna Richard</h5>
                        <p class="card-text" style="padding:0rem 0.25rem; margin:0px">UI Designer</p>
                        <div class="row" style="justify-content:center; padding:0rem 0.25rem">
                            <div class="col-xl-2 col-lg-6" style="display:flex">
                                <div>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div style="padding:2px 5px">
                                    <h6 style="margin:0px">4.5</h6>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 px-2" style="display:flex; padding: 0rem 0rem 0rem 0rem;">
                                <div>
                                    <img src="icons/boy.png" alt="error in loading image.." width="17px"
                                        style="margin:0px 5px">
                                </div>
                                <div>
                                    <p style="padding-top:2px; margin:0px">692 Student</p>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6" style="display:flex;">
                                <div>
                                    <img src="icons/play.png" alt="error in loading image.." width="18px">
                                </div>
                                <div>
                                    <p style="padding-top:2px; margin:0px 0px 0px 0px">15 Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5" style="text-align:center">
                <p>Want to help people learn, grow and achieve more in life? <a href="#"
                        style="text-decoration:underline">Become and instructor...</a></p>
            </div>
        </div>
    </div>
    <!-- Page 10 -->
    <div class="page-10 mt-5" style="display:flex; flex-direction:column; background-color: rgb(238, 242, 246);">
        <div class="p1 mt-5" style="margin-left:3rem; margin-right:3rem;">
            <div class="mx-4">
                <h2><strong>Latest News</strong></h2>
            </div>
            <div class="mx-4" style="display:flex; justify-content:space-between;">
                <div>
                    <p><strong>Discover Your Perfect Program In Our Courses...</strong></p>
                </div>
                <div>
                    <a href="/"><strong>Browse All...</strong></a>
                </div>
            </div>
        </div>
        <div class="p2 mt-3" style="display:flex; flex-direction:column; margin-bottom: 5rem;">
            <div class="mt-3" style="display:flex; justify-content:space-evenly;">
                <!-- Card 1 -->
                <div class="card" style="">
                    <img src="com.jpg" class="card-img-top" alt="error in loading image..">
                    <div class="card-body">
                        <div class="mt-1" style=" display:flex; padding:0rem 0.25rem">
                            <div style="display:flex; height: 28px;">
                                <div>
                                    <img src="icons/person.png" alt="error in loading image.." width="17px"
                                        style="margin:0px 5px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">Ashish sharma</p>
                                </div>
                            </div>
                            <div style="display:flex; height: 28px; padding-left: 1rem;">
                                <div>
                                    <img src="icons/clndr.png" alt="error in loading image.." width="18px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">06 April, 2023</p>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-text" style="padding:0rem 0.7rem 0.7rem 0.7rem; margin:0px">The Best
                            Destinations to Begin Your Round The World Trip</h5>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card" style="">
                    <img src="com.jpg" class="card-img-top" alt="error in loading image..">
                    <div class="card-body">
                        <div class="mt-1" style=" display:flex; padding:0rem 0.25rem">
                            <div style="display:flex; height: 28px;">
                                <div>
                                    <img src="icons/person.png" alt="error in loading image.." width="17px"
                                        style="margin:0px 5px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">Ashish sharma</p>
                                </div>
                            </div>
                            <div style="display:flex; height: 28px; padding-left: 1rem;">
                                <div>
                                    <img src="icons/clndr.png" alt="error in loading image.." width="18px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">06 April, 2023</p>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-text" style="padding:0rem 0.7rem 0.7rem 0.7rem; margin:0px">The Best
                            Destinations to Begin Your Round The World Trip</h5>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card" style="">
                    <img src="com.jpg" class="card-img-top" alt="error in loading image..">
                    <div class="card-body">
                        <div class="mt-1" style=" display:flex; padding:0rem 0.25rem">
                            <div style="display:flex; height: 28px;">
                                <div>
                                    <img src="icons/person.png" alt="error in loading image.." width="17px"
                                        style="margin:0px 5px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">Ashish sharma</p>
                                </div>
                            </div>
                            <div style="display:flex; height: 28px; padding-left: 1rem;">
                                <div>
                                    <img src="icons/clndr.png" alt="error in loading image.." width="18px">
                                </div>
                                <div>
                                    <p style="padding-top:2px">06 April, 2023</p>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-text" style="padding:0rem 0.7rem 0.7rem 0.7rem; margin:0px">The Best
                            Destinations to Begin Your Round The World Trip</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page 11 -->
    <div class="page-11 my-5 pb-5" style="display:flex; flex-direction:column;">
        <div class="p1">
            <div class="" style="margin-left:2.5rem">
                <h2><strong>Blog</strong></h2>
            </div>
            <div class="" style="display:flex; justify-content:space-between; margin-left:2.5rem; margin-right:1.5rem">
                <div>
                    <p><strong>10000+ unique online course list designs</strong></p>
                </div>
                <div>
                    <button class="btn"
                        style="background-color: rgb(238, 234, 255); color:rgb(46, 0, 255); padding: 6px 20px; border-radius: 7px;">
                        Browse Blog
                    </button>
                </div>
            </div>
        </div>
        <div class="p2 mt-4" style="display:flex; flex-direction:column;">
            <div class="mt-3" style="display:flex; justify-content:space-evenly;">
                <!-- Card 1 -->
                <div class="card" style="">
                    <img src="comp3.jpg" class="card-img-top" alt="error in loading image..">
                    <div class="card-body">
                        <p class="card-text mt-1" style="padding:0rem 0.25rem; margin:0px">EDUCATION</p>
                        <h5 class="card-text mt-1" style="padding:0rem 0.25rem; margin:0px">Eco-Education in Our Lives:
                            We Can Change the Future</h5>
                        <p class="card-text my-1" style="padding:0rem 0.25rem; margin:0px">December 16, 2022</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card" style="">
                    <img src="comp3.jpg" class="card-img-top" alt="error in loading image..">
                    <div class="card-body">
                        <p class="card-text mt-1" style="padding:0rem 0.25rem; margin:0px">EDUCATION</p>
                        <h5 class="card-text mt-1" style="padding:0rem 0.25rem; margin:0px">Eco-Education in Our Lives:
                            We Can Change the Future</h5>
                        <p class="card-text my-1" style="padding:0rem 0.25rem; margin:0px">December 16, 2022</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card" style="">
                    <img src="comp3.jpg" class="card-img-top" alt="error in loading image..">
                    <div class="card-body">
                        <p class="card-text mt-1" style="padding:0rem 0.25rem; margin:0px">EDUCATION</p>
                        <h5 class="card-text mt-1" style="padding:0rem 0.25rem; margin:0px">Eco-Education in Our Lives:
                            We Can Change the Future</h5>
                        <p class="card-text my-1" style="padding:0rem 0.25rem; margin:0px">December 16, 2022</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="card" style="">
                    <img src="comp3.jpg" class="card-img-top" alt="error in loading image..">
                    <div class="card-body">
                        <p class="card-text mt-1" style="padding:0rem 0.25rem; margin:0px">EDUCATION</p>
                        <h5 class="card-text mt-1" style="padding:0rem 0.25rem; margin:0px">Eco-Education in Our Lives:
                            We Can Change the Future</h5>
                        <p class="card-text my-1" style="padding:0rem 0.25rem; margin:0px">December 16, 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page 12 -->
    <div class="page-12 pt-5"
        style="display:flex; flex-direction:column; background: rgb(17,3,245); background: linear-gradient(180deg, rgba(17,3,245,1) 0%, rgba(9,21,121,1) 0%, rgba(179,0,255,1) 100%);">
        <div class="p1 mb-3">
            <div style="text-align:center; color:rgb(74, 249, 214)">
                <h2><strong>What People Say</strong></h2>
            </div>
            <div style="text-align:center; color:rgb(237, 237, 237)">
                <strong>10,000+ unique online courses list designs</strong>
            </div>
        </div>
        <div class="p2 my-5" style="display:flex; flex-direction:column;">
            <!-- carousal here -->
            <div id="carouselExampleIndicators" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="mt-3 mb-5" style="display:flex; justify-content:center;">
                            <!-- Card 1 -->
                            <div class="card" style="">
                                <div class="card-body">
                                    <div class="shadow-sm" style="padding: 1rem 1.5rem 0.1rem 1.5rem;">
                                        <h5 class="card-text" style="padding:0.5rem 0.25rem; color:rgb(76, 12, 173)">
                                            Great Work</h5>
                                        <p>"I think ProgrammingWorls is the best theme I ever seen this year. Amazing
                                            design, easy to customize and a design quality superlative account on its
                                            cloud platform for the optimized performance"</p>
                                    </div>
                                    <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                                        <div style="display:flex; margin:0.5rem 1rem">
                                            <div>
                                                <img src="I.jpg" alt="error in loading image.."
                                                    style="width: 70px; height: 70px; border-radius: 40px;">
                                            </div>
                                            <div style="margin-left:0.5rem; padding-top: 0.7rem;">
                                                <h6 style="padding:0px 2px; margin:0px">Ashish Sharma</h6>
                                                <p style="padding:0px 2px; margin:0px">Web Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="card" style="margin:0rem 1.5rem">
                                <div class="card-body">
                                    <div class="shadow-sm" style="padding: 1rem 1.5rem 0.1rem 1.5rem;">
                                        <h5 class="card-text" style="padding:0.5rem 0.25rem; color:rgb(76, 12, 173)">
                                            Great Work</h5>
                                        <p>"I think ProgrammingWorls is the best theme I ever seen this year. Amazing
                                            design, easy to customize and a design quality superlative account on its
                                            cloud platform for the optimized performance"</p>
                                    </div>
                                    <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                                        <div style="display:flex; margin:0.5rem 1rem">
                                            <div>
                                                <img src="I.jpg" alt="error in loading image.."
                                                    style="width: 70px; height: 70px; border-radius: 40px;">
                                            </div>
                                            <div style="margin-left:0.5rem; padding-top: 0.7rem;">
                                                <h6 style="padding:0px 2px; margin:0px">Ashish Sharma</h6>
                                                <p style="padding:0px 2px; margin:0px">Web Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="card" style="">
                                <div class="card-body">
                                    <div class="shadow-sm" style="padding: 1rem 1.5rem 0.1rem 1.5rem;">
                                        <h5 class="card-text" style="padding:0.5rem 0.25rem; color:rgb(76, 12, 173)">
                                            Great Work</h5>
                                        <p>"I think ProgrammingWorls is the best theme I ever seen this year. Amazing
                                            design, easy to customize and a design quality superlative account on its
                                            cloud platform for the optimized performance"</p>
                                    </div>
                                    <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                                        <div style="display:flex; margin:0.5rem 1rem">
                                            <div>
                                                <img src="I.jpg" alt="error in loading image.."
                                                    style="width: 70px; height: 70px; border-radius: 40px;">
                                            </div>
                                            <div style="margin-left:0.5rem; padding-top: 0.7rem;">
                                                <h6 style="padding:0px 2px; margin:0px">Ashish Sharma</h6>
                                                <p style="padding:0px 2px; margin:0px">Web Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="mt-3 mb-5" style="display:flex; justify-content:center;">
                            <!-- Card 1 -->
                            <div class="card" style="">
                                <div class="card-body">
                                    <div class="shadow-sm" style="padding: 1rem 1.5rem 0.1rem 1.5rem;">
                                        <h5 class="card-text" style="padding:0.5rem 0.25rem; color:rgb(76, 12, 173)">
                                            Great Work</h5>
                                        <p>"I think ProgrammingWorls is the best theme I ever seen this year. Amazing
                                            design, easy to customize and a design quality superlative account on its
                                            cloud platform for the optimized performance"</p>
                                    </div>
                                    <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                                        <div style="display:flex; margin:0.5rem 1rem">
                                            <div>
                                                <img src="I.jpg" alt="error in loading image.."
                                                    style="width: 70px; height: 70px; border-radius: 40px;">
                                            </div>
                                            <div style="margin-left:0.5rem; padding-top: 0.7rem;">
                                                <h6 style="padding:0px 2px; margin:0px">Ashish Sharma</h6>
                                                <p style="padding:0px 2px; margin:0px">Web Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="card" style="margin:0rem 1.5rem">
                                <div class="card-body">
                                    <div class="shadow-sm" style="padding: 1rem 1.5rem 0.1rem 1.5rem;">
                                        <h5 class="card-text" style="padding:0.5rem 0.25rem; color:rgb(76, 12, 173)">
                                            Great Work</h5>
                                        <p>"I think ProgrammingWorls is the best theme I ever seen this year. Amazing
                                            design, easy to customize and a design quality superlative account on its
                                            cloud platform for the optimized performance"</p>
                                    </div>
                                    <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                                        <div style="display:flex; margin:0.5rem 1rem">
                                            <div>
                                                <img src="I.jpg" alt="error in loading image.."
                                                    style="width: 70px; height: 70px; border-radius: 40px;">
                                            </div>
                                            <div style="margin-left:0.5rem; padding-top: 0.7rem;">
                                                <h6 style="padding:0px 2px; margin:0px">Ashish Sharma</h6>
                                                <p style="padding:0px 2px; margin:0px">Web Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="card" style="">
                                <div class="card-body">
                                    <div class="shadow-sm" style="padding: 1rem 1.5rem 0.1rem 1.5rem;">
                                        <h5 class="card-text" style="padding:0.5rem 0.25rem; color:rgb(76, 12, 173)">
                                            Great Work</h5>
                                        <p>"I think ProgrammingWorls is the best theme I ever seen this year. Amazing
                                            design, easy to customize and a design quality superlative account on its
                                            cloud platform for the optimized performance"</p>
                                    </div>
                                    <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                                        <div style="display:flex; margin:0.5rem 1rem">
                                            <div>
                                                <img src="I.jpg" alt="error in loading image.."
                                                    style="width: 70px; height: 70px; border-radius: 40px;">
                                            </div>
                                            <div style="margin-left:0.5rem; padding-top: 0.7rem;">
                                                <h6 style="padding:0px 2px; margin:0px">Ashish Sharma</h6>
                                                <p style="padding:0px 2px; margin:0px">Web Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="mt-3 mb-5" style="display:flex; justify-content:center;">
                            <!-- Card 1 -->
                            <div class="card" style="">
                                <div class="card-body">
                                    <div class="shadow-sm" style="padding: 1rem 1.5rem 0.1rem 1.5rem;">
                                        <h5 class="card-text" style="padding:0.5rem 0.25rem; color:rgb(76, 12, 173)">
                                            Great Work</h5>
                                        <p>"I think ProgrammingWorls is the best theme I ever seen this year. Amazing
                                            design, easy to customize and a design quality superlative account on its
                                            cloud platform for the optimized performance"</p>
                                    </div>
                                    <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                                        <div style="display:flex; margin:0.5rem 1rem">
                                            <div>
                                                <img src="I.jpg" alt="error in loading image.."
                                                    style="width: 70px; height: 70px; border-radius: 40px;">
                                            </div>
                                            <div style="margin-left:0.5rem; padding-top: 0.7rem;">
                                                <h6 style="padding:0px 2px; margin:0px">Ashish Sharma</h6>
                                                <p style="padding:0px 2px; margin:0px">Web Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="card" style="margin:0rem 1.5rem">
                                <div class="card-body">
                                    <div class="shadow-sm" style="padding: 1rem 1.5rem 0.1rem 1.5rem;">
                                        <h5 class="card-text" style="padding:0.5rem 0.25rem; color:rgb(76, 12, 173)">
                                            Great Work</h5>
                                        <p>"I think ProgrammingWorls is the best theme I ever seen this year. Amazing
                                            design, easy to customize and a design quality superlative account on its
                                            cloud platform for the optimized performance"</p>
                                    </div>
                                    <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                                        <div style="display:flex; margin:0.5rem 1rem">
                                            <div>
                                                <img src="I.jpg" alt="error in loading image.."
                                                    style="width: 70px; height: 70px; border-radius: 40px;">
                                            </div>
                                            <div style="margin-left:0.5rem; padding-top: 0.7rem;">
                                                <h6 style="padding:0px 2px; margin:0px">Ashish Sharma</h6>
                                                <p style="padding:0px 2px; margin:0px">Web Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="card" style="">
                                <div class="card-body">
                                    <div class="shadow-sm" style="padding: 1rem 1.5rem 0.1rem 1.5rem;">
                                        <h5 class="card-text" style="padding:0.5rem 0.25rem; color:rgb(76, 12, 173)">
                                            Great Work</h5>
                                        <p>"I think ProgrammingWorls is the best theme I ever seen this year. Amazing
                                            design, easy to customize and a design quality superlative account on its
                                            cloud platform for the optimized performance"</p>
                                    </div>
                                    <div style="display:flex; justify-content:space-between; padding:0.5rem 0.25rem">
                                        <div style="display:flex; margin:0.5rem 1rem">
                                            <div>
                                                <img src="I.jpg" alt="error in loading image.."
                                                    style="width: 70px; height: 70px; border-radius: 40px;">
                                            </div>
                                            <div style="margin-left:0.5rem; padding-top: 0.7rem;">
                                                <h6 style="padding:0px 2px; margin:0px">Ashish Sharma</h6>
                                                <p style="padding:0px 2px; margin:0px">Web Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Page 13 -->
    <div class="page-13 container-xl testimonal" style="padding:3rem 0rem 5rem 0rem">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="h2">Testimonials</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="img-box"><img src="I.jpg" alt=""></div>
                            <p class="testimonial">The customer is very important, the customer will be followed by the
                                customer. For I was at the time, more varied than at, the grief of God. The great fear
                                of the great man, the devil, nor the ugly man, is always expected before. So drink
                                chocolate not pure.</p>
                            <p class="overview"><b>Ashish Sharma</b>, Media Analyst</p>
                        </div>
                        <div class="carousel-item">
                            <div class="img-box"><img src="I.jpg" alt=""></div>
                            <p class="testimonial">Who knows how to get a great result. The children need only the
                                tincidunt from me. At the same time the smile was said. Children cartoon with arrows
                                than at mattis. Smartphones It's important to be pregnant, but to be pregnant is easy.
                            </p>
                            <p class="overview"><b>AnAshish Sharma</b>, Web Developer</p>
                        </div>
                        <div class="carousel-item">
                            <div class="img-box"><img src="I.jpg" alt=""></div>
                            <p class="testimonial">He just takes up the stage of life. Mauris pharetra feugiat before
                                that lacinia. It also needs a good taste at that time. Duis lustus turpis at accumsan
                                tincidunt. The level of laughter, the life or the land, and the mass of tincidunt
                                fringilla. Hendrerit also needs a pain report.</p>
                            <p class="overview"><b>Ashish Sharma</b>, Seo Analyst</p>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page 14 -->
    <div class="page-14 mt-5" style="display:flex; flex-direction:column">
        <div class="p1" style="background-color: rgb(232, 255, 248);">
            <div style="text-align:center; padding-top:20px">
                <h2><strong>Know Why We are Best</strong></h2>
            </div>
            <div style="text-align:center">
                <strong>Discover Your Perfect Program In Our Courses</strong>
            </div>
            <div class="my-3 mb-4" style="display:flex; justify-content: center; font-weight: 500;">
                <div class="category cat-6">
                    <p><strong style="font-size: 1.5rem;">01</strong> Creating A Better Future For You</p>
                </div>
                <div class="category cat-7">
                    <p><strong style="font-size: 1.5rem;">02</strong> Learn Why Elearny Is Best</p>
                </div>
                <div class="category cat-8">
                    <p><strong style="font-size: 1.5rem;">03</strong> Our simple & Effective Process</p>
                </div>
            </div>
        </div>
        <div class="page-7" style="display:flex; padding:1rem 4rem; background-color:rgb(232, 255, 248);">
            <div style="display:flex; flex-direction:column; justify-content:center; width: 35rem;">
                <div>
                    <h3>The Prodigious eLearning Course for you</h3>
                </div>
                <div>
                    <p class="my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur libero adipisci
                        tempora quasi
                        repellat commodi nisi, ipsa perspiciatis voluptatibus nostrum.</p>
                </div>
                <div>
                    <ul>
                        <li>Creative Study Pattern</li>
                        <li class="my-2">Quick Crash Courses</li>
                        <li>Certification Awarded</li>
                        <li class="my-2">Provided With Experimental Example</li>
                    </ul>
                </div>
                <div>
                    <button type="button" class="btn"
                        style="background-color: rgb(153, 107, 255); color: white; padding: 1rem 2.5rem;">NEW
                        COURSES</button>
                </div>
            </div>
            <div style="margin-left:3rem;">
                <img src="comp4.jpg" alt="error in loading image.." style="width:35rem; border-radius:15px">
            </div>
        </div>
    </div>
    <!-- Page 15 -->
    <div class="page-15" style="display:flex; flex-direction:column">
        <div class="p1" style="background-color: rgb(255, 255, 255); color: black;">
            <div style="text-align:center; padding-top:20px">
                <h2><strong>New App Features</strong></h2>
            </div>
            <div style="text-align:center">
                <strong>Discover Your Perfect Program In Our Courses</strong>
            </div>
        </div>
        <div class="p2" style="display:flex; flex-direction:column;">
            <div class="mt-3" style="display:flex; justify-content:space-evenly;">
                <!-- Card 1 -->
                <div class="card" style="width: 23rem; border-radius: 0.5rem; height:29rem; border:none">
                    <img src="page15_img/take_16a.png" class="card-img-top" alt="error in loading image.."
                        style="height:29rem">
                    <div class="card-body">
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card" style="width: 23rem; border-radius: 0.5rem; height:29rem; border:none">
                    <img src="page15_img/take_16b.png" class="card-img-top" alt="error in loading image.."
                        style="height:29rem">
                    <div class="card-body">
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card" style="width: 23rem; border-radius: 0.5rem; height:29rem; border:none">
                    <img src="page15_img/take_16c.png" class="card-img-top" alt="error in loading image.."
                        style="height:29rem">
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page 16 -->
    <div class="page-16">
        <div class="pricetemp pb-5" id="pricing" class="pricing-content section-padding">
            <div class="">
                <div class="section-title text-center">
                    <h3 style="font-size: x-large; padding-top: 0.5rem;">OUR STUDY PRICES</h3>
                    <p><strong>Discover Your Perfect Program In Our Courses.</strong></p>
                </div>
                <div class="row text-center">
                    <div class="col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                        data-wow-offset="0"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="pricing_design">
                            <div class="single-pricing">
                                <div class="price-head">
                                    <h2>Basic</h2>
                                    <h1>$0</h1>
                                    <span>/Monthly</span>
                                </div>
                                <ul>
                                    <li>All Operating Supported</li>
                                    <li>Great Interface</li>
                                    <li>Allow encription</li>
                                    <li>Face recognized system</li>
                                    <li>24/7 Full support</li>
                                </ul>
                                <div class="pricing-price">

                                </div>
                                <a href="#" class="price_btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <!--- END COL -->
                    <div class="col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                        data-wow-offset="0"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="pricing_design">
                            <div class="single-pricing">
                                <div class="price-head">
                                    <h2>Professional</h2>
                                    <h1 class="price">$499</h1>
                                    <span>/Monthly</span>
                                </div>
                                <ul>
                                    <li>All Operating Supported</li>
                                    <li>Great Interface</li>
                                    <li>Allow encription</li>
                                    <li>Face recognized system</li>
                                    <li>24/7 Full support</li>
                                </ul>
                                <div class="pricing-price">

                                </div>
                                <a href="#" class="price_btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <!--- END COL -->
                    <div class="col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                        data-wow-offset="0"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="pricing_design">
                            <div class="single-pricing">
                                <div class="price-head">
                                    <h2>Business</h2>
                                    <h1 class="price">$999</h1>
                                    <span>/Monthly</span>
                                </div>
                                <ul>
                                    <li>All Operating Supported</li>
                                    <li>Great Interface</li>
                                    <li>Allow encription</li>
                                    <li>Face recognized system</li>
                                    <li>24/7 Full support</li>
                                </ul>
                                <div class="pricing-price">

                                </div>
                                <a href="#" class="price_btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <!--- END COL -->
                </div>
                <!--- END ROW -->
            </div>
            <!--- END CONTAINER -->
        </div>
    </div>
    <!-- Page 17 -->
    <div class="page-17 mt-5" style="display:flex; flex-direction:column;">
        <div class="p1">
            <div style="text-align:center;">
                <h2><strong>Get personal learning recommendations</strong></h2>
            </div>
            <div class="my-3" style="text-align:center;">
                <strong>Enhance your skills with best Online courses</strong>
            </div>
            <div class="mt-4" style="display:flex; justify-content: center; font-weight: 500; margin-bottom:8rem">
                <div>
                    <select class="form-select" aria-label="Default select example"
                        style="height: 52px; width: 215px; background-color: rgb(237 234 255); border: none; border-radius: 8px; padding: 10px; color: rgb(100 93 93); font-weight: 500;">
                        <option selected="">Category</option>
                        <option value="1">Design</option>
                        <option value="2">Business</option>
                        <option value="3">Software Development</option>
                        <option value="4">Personal Development</option>
                        <option value="5">Photography</option>
                        <option value="6">Web Development</option>
                    </select>
                </div>
                <div class="mx-2">
                    <select class="form-select" aria-label="Default select example"
                        style="height: 52px; width: 215px; background-color: rgb(237 234 255); border: none; border-radius: 8px; padding: 10px; color: rgb(100 93 93); font-weight: 500;">
                        <option selected="">Difficulty</option>
                        <option value="1">Easy</option>
                        <option value="2">Medium</option>
                        <option value="3">Hard</option>
                    </select>
                </div>
                <div>
                    <button type="button" class="btn"
                        style="background-color: rgb(153, 107, 255); color: white; padding: .8rem 2.5rem;">Get Started
                        Now</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Page 18 -->
    <div class="page-18" style="background-color: rgb(85, 12, 181);margin-top:5rem;">
        <div class="conmid"
            style="display:flex; justify-content:center; color:white; background-color: rgb(141 137 143); border-radius: 20px; height: 12rem; position:relative; bottom:6rem">
            <div style="display:flex; flex-direction:column; text-align:center; width:20rem; margin-top: 0.7rem;">
                <div>
                    <img src="icons/location.png" alt="error in loading image.."
                        style="width: 75px; height: 75px; margin:1rem 0.8rem">
                </div>
                <div>
                    <p>329 Queensberry Street, North Melbourne<br>VIC 3051, Australia.</p>
                </div>
            </div>
            <div style="display:flex; flex-direction:column; text-align:center; width:20rem; margin-top: 0.7rem;">
                <div>
                    <img src="icons/phoneCall.png" alt="error in loading image.."
                        style="width: 75px; height: 75px; margin:1rem 0.8rem">
                </div>
                <div>
                    <p>Mobile: (+096) 468 235<br>Fax: (+096) 468 235</p>
                </div>
            </div>
            <div style="display:flex; flex-direction:column; text-align:center; width:20rem; margin-top: 0.7rem;">
                <div>
                    <img src="icons/mail.png" alt="error in loading image.."
                        style="width: 75px; height: 75px; margin:1rem 0.8rem">
                </div>
                <div>
                    <p>support@programmingworld.com</p>
                </div>
            </div>
        </div>
        <div class="conmid2" style="display:flex; justify-content: space-evenly;">
            <div class="blocl1">
                <div class="list-group">

                    <a class="list-group-item list-group-item-action active" aria-current="true">
                        <h5>Our Company</h5>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">About Us</a>
                    <a href="#" class="list-group-item list-group-item-action">Contect Us</a>
                    <a href="#" class="list-group-item list-group-item-action">Community</a>
                    <a href="#" class="list-group-item list-group-item-action">Student Perks</a>
                    <a href="#" class="list-group-item list-group-item-action">Blog</a>
                    <a href="#" class="list-group-item list-group-item-action">Affiliate Program</a>
                    <a href="#" class="list-group-item list-group-item-action">Careers</a>
                </div>
            </div>
            <div class="blocl2">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action active" aria-current="true">
                        <h5>Topic</h5>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">HTML</a>
                    <a href="#" class="list-group-item list-group-item-action">CSS</a>
                    <a href="#" class="list-group-item list-group-item-action">Design</a>
                    <a href="#" class="list-group-item list-group-item-action">JavaScript</a>
                    <a href="#" class="list-group-item list-group-item-action">Ruby</a>
                    <a href="#" class="list-group-item list-group-item-action">PHP</a>
                    <a href="#" class="list-group-item list-group-item-action">Android</a>
                </div>
            </div>
            <div class="blocl3">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action active" style="color: rgb(85, 12, 181)"
                        aria-current="true">
                        <h5>Topic</h5>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Development</a>
                    <a href="#" class="list-group-item list-group-item-action">Business</a>
                    <a href="#" class="list-group-item list-group-item-action">Painting</a>
                    <a href="#" class="list-group-item list-group-item-action">Sketch</a>
                    <a href="#" class="list-group-item list-group-item-action">Drawing</a>
                    <a href="#" class="list-group-item list-group-item-action">Sculpture</a>
                    <a href="#" class="list-group-item list-group-item-action">Digital</a>

                </div>
            </div>
            <div class="blocl4">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action active" aria-current="true">
                        <h5>Track</h5>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Web Design</a>
                    <a href="#" class="list-group-item list-group-item-action">Web Development</a>
                    <a href="#" class="list-group-item list-group-item-action">Rails Development</a>
                    <a href="#" class="list-group-item list-group-item-action">PHP Development</a>
                    <a href="#" class="list-group-item list-group-item-action">Android Development</a>
                    <a href="#" class="list-group-item list-group-item-action">Starting a Business</a>
                </div>
            </div>
            <div class="blocl5">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <h5>Our Latest Tweets</h5>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                </div>
            </div>
        </div>
        <div class="conmid3 mt-5"
            style="display:flex; justify-content:space-between; padding: 0rem 5rem 0rem 4rem; box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 0.75)">
            <div>
                <h6 style="color:white; margin:2.35rem">Copyright © 2021 CreativeLayers. All Right Reserved.</h6>
            </div>
            <div style="display:flex">
                <div>
                    <img src="icons/fbook.png" alt="error in loading image.."
                        style="width: 30px; height: 30px; margin:2rem 0.8rem">
                </div>
                <div>
                    <img src="icons/twitt.png" alt="error in loading image.."
                        style="width: 30px; height: 30px; margin:2rem 0.8rem">
                </div>
                <div>
                    <img src="icons/igram.png" alt="error in loading image.."
                        style="width: 30px; height: 30px; margin:2rem 0.8rem">
                </div>
                <div>
                    <img src="icons/linkedin.png" alt="error in loading image.."
                        style="width: 30px; height: 30px; margin:2rem 0.8rem">
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- yeh js navbar ke menu bar ko trigger krne ke liye hain -->
    <script>
    var validation = document.getElementById("check");
    validation.addEventListener("click", myFunc);

    function myFunc(event) {
        if (validation.checked) {
            let showmenu = document.getElementById("menuMod").style.display = "block";
        } else {
            let showmenu = document.getElementById("menuMod").style.display = "none";
        }
    }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>