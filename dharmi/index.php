<?php
session_start();
include_once 'include/config.php';
// $book_name = $_GET['book_name'];

if (isset($_GET['bdetails'])) {
    echo $_GET['bdetails'];
}

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.itbook.store/1.0/new',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);

$arr = json_decode($response, true);
// Show title from response
// print_r($arr);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bookify</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script data-search-pseudo-elements="" defer="" src="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    <script src="../cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>

    <script async src='cdn-cgi/bm/cv/669835187/api.js'></script>
</head>

<body>
    <div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>
                <!-- Navbar-->
                <nav class="navbar navbar-marketing navbar-expand-lg bg-white navbar-light">
                    <div class="container px-5">
                        <a class="navbar-brand text-dark" href="index.html">Bookify</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav ms-auto me-lg-5">
                                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="registration.php">Signup</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html">Login</a></li>
                            </ul>

                        </div>
                    </div>
                </nav>
                <!-- Page Header-->
                <header class="page-header-ui page-header-ui-dark bg-img-repeat bg-primary" style="background-image: url('assets/img/backgrounds/pattern-shapes.png')">
                    <div class="page-header-ui-content">
                        <div class="container px-5">
                            <div class="row gx-5 justify-content-center">
                                <div class="col-xl-8 col-lg-10 text-center">
                                    <h1 class="page-header-ui-title">Buy and sell used items</h1>
                                    <p class="page-header-ui-text mb-5">Out with the old, in with the new! Your trash is another's treasure. Start making money, or find great deals today!</p>
                                    <a class="btn btn-teal fw-500 me-2" href="#!">Start Selling</a>
                                    <a class="btn btn-link fw-500" href="#!">Browse Categories</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="svg-border-waves text-light">
                        <!-- Wave SVG Border-->
                        <svg class="wave" style="pointer-events: none" fill="currentColor" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
                            <defs>
                                <style>
                                    .a {
                                        fill: none;
                                    }

                                    .b {
                                        clip-path: url(#a);
                                    }

                                    .d {
                                        opacity: 0.5;
                                        isolation: isolate;
                                    }
                                </style>
                            </defs>
                            <clipPath id="a">
                                <rect class="a" width="1920" height="75"></rect>
                            </clipPath>
                            <g class="b">
                                <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
                            </g>
                            <g class="b">
                                <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
                            </g>
                            <g class="b">
                                <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
                            </g>
                            <g class="b">
                                <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
                            </g>
                        </svg>
                    </div>
                </header>
                <section class="bg-light py-10">
                    <div class="container px-5">
                        <h2 class="mb-4">Recent postings</h2>
                        <form action="book_details.php" method="get">
                            <div class=" row gx-5">
                                <?php
                                $sql = "select * from bookmaster";
                                $query = mysqli_query($con, $sql);
                                $row = mysqli_fetch_assoc($query);
                                ?>
                                <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                                    <a class="card lift h-100" name="booknumber" href="book_details.php?booknumber=<?php echo $row['bno']; ?>">

                                        <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg"><?php echo $row['bsellprice'] ?></div>
                                        <img class="card-img-top" src="https://rukminim1.flixcart.com/image/416/416/jkvh0nk0/book/0/0/4/python-programming-for-the-absolute-beginner-original-imaf84qnhzwqrffg.jpeg?q=70" alt="..." />
                                        <div class="card-body p-3">
                                            <div class="card-title small mb-0">Python Programming for the Absolute Beginner</div>
                                            <div class="text-xs text-gray-500">English, Paperback, Dawson Michael</div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                $cnt = 1;
                                $till = 1;
                                while ($till <= 19) {
                                ?>
                                    <div class="col-xl-3 col-lg-4 col-md-6 mb-5">
                                        <a class="card lift h-100" href="#!">
                                            <div class="card-flag card-flag-dark card-flag-top-right card-flag-lg"><?php echo $arr['books'][$cnt]['price']; ?></div>
                                            <img class="card-img-top" src="<?php echo $arr['books'][$cnt]['image']; ?>" />
                                            <div class="card-body p-3">
                                                <div class="card-title small mb-0"><?php echo $arr['books'][$cnt]['title']; ?></div>
                                                <div class="text-xs text-gray-500"></div>
                                            </div>
                                        </a>
                                    </div>
                                <?php $cnt = $cnt + 1;
                                    $till = $till + 1;
                                } ?>
                        </form>
                        <div class="mb-10">
                            <a class="text-arrow-icon" href="#!">
                                See more deals near you
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                        <h2 class="mb-4">Browse Categories</h2>
                        <div class="row gx-5">
                            <div class="col-lg-3 col-md-6 mb-5">
                                <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-red" href="#!">
                                    <div class="card-body text-center">
                                        <div class="icon-stack icon-stack-xl bg-red text-white mb-2"><i class="fas fa-car"></i></div>
                                        <div class="small text-gray-600">Programming</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5">
                                <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-orange" href="#!">
                                    <div class="card-body text-center">
                                        <div class="icon-stack icon-stack-xl bg-orange text-white mb-2"><i class="fas fa-home"></i></div>
                                        <div class="small text-gray-600">Science fiction</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5">
                                <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-yellow" href="#!">
                                    <div class="card-body text-center">
                                        <div class="icon-stack icon-stack-xl bg-yellow text-white mb-2"><i class="fas fa-gift"></i></div>
                                        <div class="small text-gray-600">Thriller</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5">
                                <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-green" href="#!">
                                    <div class="card-body text-center">
                                        <div class="icon-stack icon-stack-xl bg-green text-white mb-2"><i class="fas fa-mobile-alt"></i></div>
                                        <div class="small text-gray-600">Tech</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-cyan" href="#!">
                                    <div class="card-body text-center">
                                        <div class="icon-stack icon-stack-xl bg-cyan text-white mb-2"><i class="fas fa-couch"></i></div>
                                        <div class="small text-gray-600">Politics</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-blue" href="#!">
                                    <div class="card-body text-center">
                                        <div class="icon-stack icon-stack-xl bg-blue text-white mb-2"><i class="fas fa-briefcase"></i></div>
                                        <div class="small text-gray-600">Recipe</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-purple" href="#!">
                                    <div class="card-body text-center">
                                        <div class="icon-stack icon-stack-xl bg-purple text-white mb-2"><i class="fas fa-motorcycle"></i></div>
                                        <div class="small text-gray-600">Historical </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a class="card lift border-top-0 border-start-0 border-end-0 border-bottom-lg border-pink" href="#!">
                                    <div class="card-body text-center">
                                        <div class="icon-stack icon-stack-xl bg-pink text-white mb-2"><i class="fas fa-shopping-cart"></i></div>
                                        <div class="small text-gray-600">Other</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <hr class="my-0" />
                <section class="bg-light py-10">
                    <div class="container px-5">
                        <h2 class="mb-4">Browse by city</h2>
                        <div class="row gx-5">
                            <div class="col-lg-3 col-md-6">
                                <div class="mb-2"><a href="#!">Atlanta, GA</a></div>
                                <div class="mb-2"><a href="#!">Austin, TX</a></div>
                                <div class="mb-2"><a href="#!">Baltimore, MD</a></div>
                                <div class="mb-2"><a href="#!">Boston, MA</a></div>
                                <div class="mb-2"><a href="#!">Chicago, IL</a></div>
                                <div class="mb-2"><a href="#!">Cleveland, OH</a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="mb-2"><a href="#!">Columbus, OH</a></div>
                                <div class="mb-2"><a href="#!">Dallas, TX</a></div>
                                <div class="mb-2"><a href="#!">Denver, CO</a></div>
                                <div class="mb-2"><a href="#!">Detroit, MI</a></div>
                                <div class="mb-2"><a href="#!">Houston, TX</a></div>
                                <div class="mb-2"><a href="#!">Las Vegas, NV</a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="mb-2"><a href="#!">Los Angeles, CA</a></div>
                                <div class="mb-2"><a href="#!">Miami, FL</a></div>
                                <div class="mb-2"><a href="#!">Nashville, TN</a></div>
                                <div class="mb-2"><a href="#!">New York, NY</a></div>
                                <div class="mb-2"><a href="#!">Orlando, FL</a></div>
                                <div class="mb-2"><a href="#!">Philadelphia, PA</a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="mb-2"><a href="#!">Phoenix, AZ</a></div>
                                <div class="mb-2"><a href="#!">Portland, OR</a></div>
                                <div class="mb-2"><a href="#!">San Francisco, CA</a></div>
                                <div class="mb-2"><a href="#!">Seattle, WA</a></div>
                                <div class="mb-2"><a href="#!">Tampa, FL</a></div>
                                <div class="mb-2"><a href="#!">See more...</a></div>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
        </div>
        <div id="layoutDefault_footer">
            <footer class="footer pt-10 pb-5 mt-auto bg-light footer-light">
                <div class="container px-5">
                    <div class="row gx-5">
                        <div class="col-lg-3">
                            <div class="footer-brand">Bookify</div>
                            <div class="mb-3">Buy and Sell Books</div>
                            <div class="icon-list-social mb-5">
                                <a class="icon-list-social-link" href="#!"><i class="fab fa-instagram"></i></a>
                                <a class="icon-list-social-link" href="#!"><i class="fab fa-facebook"></i></a>
                                <a class="icon-list-social-link" href="#!"><i class="fab fa-github"></i></a>
                                <a class="icon-list-social-link" href="#!"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row gx-5">
                                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                    <div class="text-uppercase-expanded text-xs mb-4">Product</div>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><a href="#!">Landing</a></li>
                                        <li class="mb-2"><a href="#!">Pages</a></li>
                                        <li class="mb-2"><a href="#!">Sections</a></li>
                                        <li class="mb-2"><a href="#!">Documentation</a></li>
                                        <li><a href="#!">Changelog</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                    <div class="text-uppercase-expanded text-xs mb-4">Technical</div>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><a href="#!">Documentation</a></li>
                                        <li class="mb-2"><a href="#!">Changelog</a></li>
                                        <li class="mb-2"><a href="#!">Theme Customizer</a></li>
                                        <li><a href="#!">UI Kit</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                    <div class="text-uppercase-expanded text-xs mb-4">Includes</div>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><a href="#!">Utilities</a></li>
                                        <li class="mb-2"><a href="#!">Components</a></li>
                                        <li class="mb-2"><a href="#!">Layouts</a></li>
                                        <li class="mb-2"><a href="#!">Code Samples</a></li>
                                        <li class="mb-2"><a href="#!">Products</a></li>
                                        <li class="mb-2"><a href="#!">Affiliates</a></li>
                                        <li><a href="#!">Updates</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="text-uppercase-expanded text-xs mb-4">Legal</div>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><a href="#!">Privacy Policy</a></li>
                                        <li class="mb-2"><a href="#!">Terms and Conditions</a></li>
                                        <li><a href="#!">License</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-5" />
                    <div class="row gx-5 align-items-center">
                        <div class="col-md-6 small">Copyright © Your Website 2021</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            ·
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

    <script src="../assets.startbootstrap.com/js/sb-customizer.js"></script>
    <sb-customizer project="sb-ui-kit-pro"></sb-customizer>
    <script type="text/javascript">
        (function() {
            window['__CF$cv$params'] = {
                r: '6f5ec4d2281b8b09',
                m: 'fky_kVuinRM4jxrsA0ssgJ3ZPoMcNiTeF4Am_ZKZBwk-1648957079-0-AffFRxOu1tKSnXjRZtBnZap/hRssrn6ns8ifb16XoAjTLukktkJpwcdCpXp7j2wjIjXyxkb0hZYTI9xIlDSS0Ql1ml12NivFJPjt0s9sXyMYyQHKSmepTVW/JF826rJak7+BJeT0KRWseFVVfnGmTms=',
                s: [0x9742a5e65f, 0x30157ba41d],
            }
        })();
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f5ec4d2281b8b09","token":"6e2c2575ac8f44ed824cef7899ba8463","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from sb-ui-kit-pro.startbootstrap.com/landing-classifieds.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Apr 2022 03:38:37 GMT -->

</html>