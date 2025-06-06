<!DOCTYPE html>
<html lang="en">

<head>
    <title>UKUEM Zanzibar</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/x-icon" href="/images_ukuem/ukuem_logo.jpg" />

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet" />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />

    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/newstyle.css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <img src="./images_ukuem/ukuem_logo.jpg" alt="Ikhla Logo" width="90" height="50" alt="Bootstrappin'" />
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">Nyumbani</a>
                    </li>
                    <li class="nav-item"><a class="nav-link">Changia</a></li>
                    <li class="nav-item">
                        <a href="#kuhusu" class="nav-link">Kuhusu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#sehemu" class="nav-link">Sehemu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-wrap" style="background-image: url('images_ukuem/coverpic1.jpg')"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        Ibn Khaldun Learning Academy
                    </h1>

                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <a href="#" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span
                                class="icon-play mr-2"></span>Watch Video</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container" id="kuhusu">
            <div class="text">
                <h3 class="mb-4">Kuhusu IKHLA</h3>
            </div>

            <section class="about">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Karibu kwenye kitovu cha elimu yenye mabadiliko, mahali ambapo
                            maarifa yanakutana na maadili! IKHLA imejitolea kujenga
                            mustakabali bora kwa kulea wanafikra makini, kuzalisha viongozi
                            waadilifu, na wanafunzi wa maisha yote. Ingia katika mazingira
                            ya kujifunza yenye uhai yanayochochea hamu ya kujua, ubunifu, na
                            maendeleo ya tabia.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3>Misingi Yetu ya Msingi</h3>

                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Kujifunza ni safari ya maisha yote.
                                <span class="badge badge-success badge-pill">.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dumisha uwiano wa akili,mwili, na roho.
                                <span class="badge badge-success badge-pill">.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Ushirikishwaji ndio nguvu yetu. Daima jitahidi kuwa bora
                                zaidi.
                                <span class="badge badge-success badge-pill">.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Fanya dunia iwe mahali bora pa kuishi.
                                <span class="badge badge-success badge-pill">.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <div id="sehemu">
                <section class="map" id="sehemu">
                    <div class="container">
                        <section class="map">
                            <h2>Our Location</h2>
                            <div class="card">
                                <div class="card-body">
                                    <div id="map" style="height: 400px"></div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Kuhusu UKUEM</h2>
                        <p>
                            IKHLA ni taasisi isiyo ya kiserikali, imedhamiria kukutanisha
                            maarifa yanakutana na maadili kwa mustakbali mwema wa jamii..
                        </p>
                        <ul class="ftco-footer-social list-unstyled mt-4">
                            <li class="ftco-animate">
                                <a href="#"><span class="icon-youtube"></span></a>
                            </li>
                            <li class="ftco-animate">
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Viambatanishi vya Ziada</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Nyumbani</a></li>
                            <li><a href="#" class="py-2 d-block">Changia</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Tufikie kupitia</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li>
                                    <span class="icon icon-map-marker"></span><span class="text">Kipangani Street, Wete
                                        – Pemba, Zanzibar</span>
                                </li>
                                <li>
                                    <a href="#"><span class="icon icon-phone"></span><span class="text">+255 773 180
                                            921/ +255 777 135 847</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">ikhla.info@gmail.com</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | IKHLA
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>

    <script src="js/main.js"></script>

    <script>
        // Initialize the map
        var map = L.map("map").setView([-5.1667, 39.7833], 9);

        // Add a marker for the UKUEM headquarters
        var marker = L.marker([-5.1667, 39.7833]).addTo(map);
        marker.bindPopup(
            "<strong>IKHLA Headquarters</strong><br>Kipangani Street, Wete – Pemba,, Zanzibar, Tanzania"
        );

        // Add a tile layer to the map
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "© OpenStreetMap contributors",
        }).addTo(map);
    </script>
</body>

</html>