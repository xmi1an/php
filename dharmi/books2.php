<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <!-- CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #eeeeee
        }

        .container {
            margin-top: 50px;
            margin-bottom: 50px
        }

        a {
            text-decoration: none !important
        }

        .card-product-list,
        .card-product-grid {
            margin-bottom: 0
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.10rem;
            margin-top: 10px
        }

        .card-product-grid:hover {
            -webkit-box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
            box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
            -webkit-transition: .3s;
            transition: .3s
        }

        .card-product-grid .img-wrap {
            border-radius: 0.2rem 0.2rem 0 0;
            height: 220px
        }

        .card .img-wrap {
            overflow: hidden
        }

        .card-lg .img-wrap {
            height: 280px
        }

        .card-product-grid .img-wrap {
            border-radius: 0.2rem 0.2rem 0 0;
            height: 228px;
            padding: 16px
        }

        [class*='card-product'] .img-wrap img {
            height: 100%;
            max-width: 100%;
            width: auto;
            display: inline-block;
            -o-object-fit: cover;
            object-fit: cover
        }

        .img-wrap {
            text-align: center;
            display: block
        }

        .card-product-grid .info-wrap {
            overflow: hidden;
            padding: 18px 20px
        }

        [class*='card-product'] a.title {
            color: #212529;
            display: block
        }

        .rating-stars {
            display: inline-block;
            vertical-align: middle;
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative;
            white-space: nowrap;
            clear: both
        }

        .rating-stars li.stars-active {
            z-index: 2;
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden
        }

        .rating-stars li {
            display: block;
            text-overflow: clip;
            white-space: nowrap;
            z-index: 1
        }

        .card-product-grid .bottom-wrap {
            padding: 18px;
            border-top: 1px solid #e4e4e4
        }

        .btn {
            display: inline-block;
            font-weight: 600;
            color: #343a40;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.45rem 0.85rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.2rem
        }

        .btn-primary {
            color: #fff;
            background-color: #3167eb;
            border-color: #3167eb
        }

        .fa {
            color: #FF5722
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg"></a>
                    <figcaption class="info-wrap">
                        <div class="row">
                            <div class="col-md-8"> <a href="#" class="title" data-abc="true">ASUS Laptop - 5GB RAM</a> </div>
                            <div class="col-md-4">
                                <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            </div>
                        </div>
                    </figcaption>
                    <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                        <div class="price-wrap"> <span class="price h5">$999</span> <br> <small class="text-success">Free shipping</small> </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571751108/Ecommerce/laptop-dell-xps-15-computer-monitors-laptops.jpg"></a>
                    <figcaption class="info-wrap">
                        <div class="row">
                            <div class="col-md-8"> <a href="#" class="title" data-abc="true">Dell Laptop - 5GB RAM</a> </div>
                            <div class="col-md-4">
                                <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            </div>
                        </div>
                    </figcaption>
                    <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                        <div class="price-wrap"> <span class="price h5">$999</span> <br> <small class="text-success">Free shipping</small> </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750722/Ecommerce/acer-v-17-nitro-realsense.jpg"></a>
                    <figcaption class="info-wrap">
                        <div class="row">
                            <div class="col-md-8"> <a href="#" class="title" data-abc="true">Acer Laptop - 5GB RAM</a> </div>
                            <div class="col-md-4">
                                <div class="rating text-right"> <i class="fa fa-star"></i> </div>
                            </div>
                        </div>
                    </figcaption>
                    <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                        <div class="price-wrap"> <span class="price h5">$999</span> <br> <small class="text-success">Free shipping</small> </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750391/Ecommerce/hp-17-x061nr-white-background.jpg"></a>
                    <figcaption class="info-wrap">
                        <div class="row">
                            <div class="col-md-8"> <a href="#" class="title" data-abc="true">HP Laptop - 5GB RAM</a> </div>
                            <div class="col-md-4">
                                <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            </div>
                        </div>
                    </figcaption>
                    <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                        <div class="price-wrap"> <span class="price h5">$999</span> <br> <small class="text-success">Free shipping</small> </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750338/Ecommerce/Laptop-3.jpg"></a>
                    <figcaption class="info-wrap">
                        <div class="row">
                            <div class="col-md-8"> <a href="#" class="title" data-abc="true">Dell Laptop - 5GB RAM</a> </div>
                            <div class="col-md-4">
                                <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            </div>
                        </div>
                    </figcaption>
                    <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                        <div class="price-wrap"> <span class="price h5">$399</span> <br> <small class="text-success">Free shipping</small> </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg"></a>
                    <figcaption class="info-wrap">
                        <div class="row">
                            <div class="col-md-8"> <a href="#" class="title" data-abc="true">Dell Laptop - 5GB RAM</a> </div>
                            <div class="col-md-4">
                                <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            </div>
                        </div>
                    </figcaption>
                    <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                        <div class="price-wrap"> <span class="price h5">$599</span> <br> <small class="text-success">Free shipping</small> </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</body>

</html>