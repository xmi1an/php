<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin-top: 20px;
            background: #edf0f5;
        }

        .product-list .product-item {
            margin-bottom: 20px
        }

        .product-list .product-item .image {
            float: left;
            padding-right: 30px;
            margin-bottom: 20px
        }

        .product-list .product-item .image img {
            max-width: 263px
        }

        .product-list .product-item .name a {
            text-transform: uppercase
        }

        .product-list .product-item .description {
            margin: 10px 0 20px
        }

        .product-list .product-item .description p {
            line-height: 21px
        }

        .product-list .product-item .rating {
            padding: 0 0 11px
        }

        .product-list .product-item .price {
            margin-bottom: 10px
        }

        .product-list .product-item .clickable a,
        .product-list .product-item .sale-tag {
            display: none
        }

        .product-list .product-item .btn-primary {
            margin: 0 0 20px
        }

        .product-sidebar {
            width: 100%;
            overflow: auto
        }

        .product-sidebar .product-item {
            position: relative;
            display: block;
            width: 100%;
            margin: 0 0 10px;
            padding: 10px;
            background: #fff;
            border-radius: 3px;
            box-shadow: 0 1px 2px 0 #ccd1d9;
            float: left
        }

        .product-sidebar .product-item .image {
            display: block;
            width: 90px;
            height: 90px;
            float: left;
            margin: 0 10px 0 0;
            padding-bottom: 0
        }

        .product-sidebar .product-item .image img,
        .thumbnails img {
            width: 100%
        }

        .product-sidebar .product-item .name {
            display: block;
            margin: 9px 0 2px;
            line-height: 1pc;
            float: none
        }

        .product-sidebar .product-item .price {
            display: block;
            color: #aab2bd;
            font-weight: 700;
            float: none
        }

        .showcase {
            margin-bottom: 30px;
            -webkit-transition: opacity 1s ease-in-out;
            -o-transition: opacity 1s ease-in-out;
            transition: opacity 1s ease-in-out
        }

        .showcase:hover {
            zoom: 1;
            filter: alpha(opacity=75);
            opacity: .75
        }

        .fa-stack {
            font-size: 6px;
        }

        .fa-star,
        .fa-star-o {
            color: #ffce54;
            font-size: 14px;
        }

        .product-item a {
            display: block;
            color: #434a54;
            font-weight: 700;
        }

        .product-list .product-item .description p {
            line-height: 21px;
        }

        .filter .panel-heading {
            font-weight: 700;
            background: #fff;
            border-color: #e4e7ec;
        }

        .filter .panel-footer,
        .filter .panel-heading {
            font-weight: 700;
            background: #fff;
            border-color: #e4e7ec;
        }

        .list-group a.list-group-item.active,
        .list-group a.list-group-item.active:hover {
            color: #434a54;
            background-color: #f5f7fa;
            border-color: #f5f7fa;
            border-top: 1px solid #d6dadf;
            border-bottom: 1px solid #d6dadf;
        }

        .product-list .image img {
            width: 250px;
            height: 250px
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 hidden-xs">
                <div class="list-group">
                    <a href="#" class="list-group-item">Shoes</a>
                    <a href="#" class="list-group-item">- Satchel</a>
                    <a href="#" class="list-group-item">- Tote</a>
                    <a href="#" class="list-group-item">- Shoulder</a>
                    <a href="#" class="list-group-item">- Clutch &amp; Mini</a>
                </div>

                <div class="product-sidebar">
                    <h5 class="text-center">Featured</h5>
                    <!-- Featured Product Item -->
                    <div class="product-item">
                        <div class="image">
                            <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Product 4"></a>
                        </div>
                        <div class="name">
                            <a href="#">Leather laptop bag</a>
                        </div>
                        <div class="price">
                            <span>$722.00</span>
                        </div>
                    </div>
                    <!--/ Featured Product Item -->

                    <!-- Featured Product Item -->
                    <div class="product-item">
                        <div class="image">
                            <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Product 2"></a>
                        </div>
                        <div class="name">
                            <a href="#">Leather laptop bag navy</a>
                        </div>
                        <div class="price">
                            <span class="price-new">$866.00</span>
                        </div>
                    </div>
                    <!--/ Featured Product Item -->

                    <!-- Featured Product Item -->
                    <div class="product-item">
                        <div class="image">
                            <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Product 3"></a>
                        </div>
                        <div class="name">
                            <a href="#">Soft leather laptop bag</a>
                        </div>
                        <div class="price">
                            <span>$962.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="btn-group hidden-xs">
                            <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" data-container="body" title="List View"><i class="fa fa-th-list"></i></button>
                            <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" data-container="body" title="Grid View"><i class="fa fa-th"></i></button>
                        </div>
                    </div>
                    <div class="col-sm-2 text-right">
                        <label class="control-label" for="input-sort">Sort By:</label>
                    </div>
                    <div class="col-sm-3 text-right">
                        <select id="input-sort" class="form-control">
                            <option value="" selected="selected">Default</option>
                            <option value="">Name</option>
                            <option value="">Date</option>
                        </select>
                    </div>
                    <div class="col-sm-1 text-right">
                        <label class="control-label" for="input-limit">Show:</label>
                    </div>
                    <div class="col-sm-2 text-right">
                        <select id="input-limit" class="form-control">
                            <option value="" selected="selected">9</option>
                            <option value="">15</option>
                            <option value="">25</option>
                            <option value="">50</option>
                            <option value="">100</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <!-- Product Item -->
                    <div class="product-list col-xs-12">
                        <div class="product-item">
                            <div class="item-overlay">
                                <div class="clickable">
                                    <a href="#">Leather laptop bag navy</a>
                                </div>
                            </div>
                            <div class="image">
                                <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Product 1"></a>
                            </div>
                            <div class="caption">
                                <div class="name">
                                    <a href="#">Leather laptop bag navy</a>
                                </div>
                                <div class="description">
                                    <p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel..</p>
                                </div>
                                <div class="rating">
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="price">
                                    <span>$866.00</span>
                                </div>
                                <div class="cart">
                                    <button type="button" class="btn btn-primary">Add to Cart</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-default wishlist" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fa fa-heart"></i></button>
                            <button type="button" class="btn btn-default compare" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-circle-o"></i></button>
                        </div>
                    </div>
                    <!--/ Product Item -->

                    <!-- Product Item -->
                    <div class="product-list col-xs-12">
                        <div class="product-item">
                            <div class="item-overlay">
                                <div class="clickable">
                                    <a href="#">Waxed canvas laptop bag olive</a>
                                </div>
                            </div>
                            <div class="sale-tag">
                                <span>SALE</span>
                            </div>
                            <div class="image">
                                <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Product 2"></a>
                            </div>
                            <div class="caption">
                                <div class="name">
                                    <a href="#">Waxed canvas laptop bag olive</a>
                                </div>
                                <div class="description">
                                    <p>Intel Core 2 Duo processor Powered by an Intel Core 2 Duo processor at speeds up to 2.1..</p>
                                </div>
                                <div class="price">
                                    <span class="price-new">$830.00</span>
                                </div>
                                <div class="cart">
                                    <button type="button" class="btn btn-primary">Add to Cart</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-default wishlist" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fa fa-heart"></i></button>
                            <button type="button" class="btn btn-default compare" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-circle-o"></i></button>
                        </div>
                    </div>
                    <!--/ Product Item -->

                    <!-- Product Item -->
                    <div class="product-list col-xs-12">
                        <div class="product-item">
                            <div class="item-overlay">
                                <div class="clickable">
                                    <a href="#">Leather laptop bag orange</a>
                                </div>
                            </div>
                            <div class="image">
                                <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Product 3"></a>
                            </div>
                            <div class="caption">
                                <div class="name">
                                    <a href="#">Leather laptop bag orange</a>
                                </div>
                                <div class="description">
                                    <p>MacBook Air is ultrathin, ultraportsble, and ultra unlike anything else. But you don't lose inche..</p>
                                </div>
                                <div class="rating">
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="price">
                                    <span>$866.00</span>
                                </div>
                                <div class="cart">
                                    <button type="button" class="btn btn-primary">Add to Cart</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-default wishlist" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fa fa-heart"></i></button>
                            <button type="button" class="btn btn-default compare" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-circle-o"></i></button>
                        </div>
                    </div>
                    <!--/ Product Item -->

                    <!-- Product Item -->
                    <div class="product-list col-xs-12">
                        <div class="product-item">
                            <div class="item-overlay">
                                <div class="clickable">
                                    <a href="#">Waxed canvas laptop bag navy</a>
                                </div>
                            </div>
                            <div class="sale-tag">
                                <span>SALE</span>
                            </div>
                            <div class="image">
                                <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Product 4"></a>
                            </div>
                            <div class="caption">
                                <div class="name">
                                    <a href="#">Waxed canvas laptop bag navy</a>
                                </div>
                                <div class="description">
                                    <p>Latest Intel mobile architecture Powered by the most advanced mobile processors..</p>
                                </div>
                                <div class="price">
                                    <span class="price-new">$1178.00</span>
                                </div>
                                <div class="cart">
                                    <button type="button" class="btn btn-primary">Add to Cart</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-default wishlist" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fa fa-heart"></i></button>
                            <button type="button" class="btn btn-default compare" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-circle-o"></i></button>
                        </div>
                    </div>
                    <!--/ Product Item -->

                    <!-- Product Item -->
                    <div class="product-list col-xs-12">
                        <div class="product-item">
                            <div class="item-overlay">
                                <div class="clickable">
                                    <a href="#">Leather laptop bag navy</a>
                                </div>
                            </div>
                            <div class="image">
                                <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Product 1"></a>
                            </div>
                            <div class="caption">
                                <div class="name">
                                    <a href="#">Leather laptop bag navy</a>
                                </div>
                                <div class="description">
                                    <p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel..</p>
                                </div>
                                <div class="rating">
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="price">
                                    <span>$866.00</span>
                                </div>
                                <div class="cart">
                                    <button type="button" class="btn btn-primary">Add to Cart</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-default wishlist" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fa fa-heart"></i></button>
                            <button type="button" class="btn btn-default compare" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-circle-o"></i></button>
                        </div>
                    </div>
                    <!--/ Product Item -->

                    <!-- Product Item -->
                    <div class="product-list col-xs-12">
                        <div class="product-item">
                            <div class="item-overlay">
                                <div class="clickable">
                                    <a href="#">Waxed canvas laptop bag olive</a>
                                </div>
                            </div>
                            <div class="sale-tag">
                                <span>SALE</span>
                            </div>
                            <div class="image">
                                <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Product 2"></a>
                            </div>
                            <div class="caption">
                                <div class="name">
                                    <a href="#">Waxed canvas laptop bag olive</a>
                                </div>
                                <div class="description">
                                    <p>Intel Core 2 Duo processor Powered by an Intel Core 2 Duo processor at speeds up to 2.1..</p>
                                </div>
                                <div class="price">
                                    <span class="price-new">$830.00</span>
                                </div>
                                <div class="cart">
                                    <button type="button" class="btn btn-primary">Add to Cart</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-default wishlist" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fa fa-heart"></i></button>
                            <button type="button" class="btn btn-default compare" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-circle-o"></i></button>
                        </div>
                    </div>
                    <!--/ Product Item -->

                    <!-- Product Item -->
                    <div class="product-list col-xs-12">
                        <div class="product-item">
                            <div class="item-overlay">
                                <div class="clickable">
                                    <a href="#">Leather laptop bag orange</a>
                                </div>
                            </div>
                            <div class="image">
                                <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Product 3"></a>
                            </div>
                            <div class="caption">
                                <div class="name">
                                    <a href="#">Leather laptop bag orange</a>
                                </div>
                                <div class="description">
                                    <p>MacBook Air is ultrathin, ultraportsble, and ultra unlike anything else. But you don't lose inche..</p>
                                </div>
                                <div class="rating">
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="price">
                                    <span>$866.00</span>
                                </div>
                                <div class="cart">
                                    <button type="button" class="btn btn-primary">Add to Cart</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-default wishlist" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fa fa-heart"></i></button>
                            <button type="button" class="btn btn-default compare" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-circle-o"></i></button>
                        </div>
                    </div>
                    <!--/ Product Item -->

                    <!-- Product Item -->
                    <div class="product-list col-xs-12">
                        <div class="product-item">
                            <div class="item-overlay">
                                <div class="clickable">
                                    <a href="#">Waxed canvas laptop bag navy</a>
                                </div>
                            </div>
                            <div class="sale-tag">
                                <span>SALE</span>
                            </div>
                            <div class="image">
                                <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Product 4"></a>
                            </div>
                            <div class="caption">
                                <div class="name">
                                    <a href="#">Waxed canvas laptop bag navy</a>
                                </div>
                                <div class="description">
                                    <p>Latest Intel mobile architecture Powered by the most advanced mobile processors..</p>
                                </div>
                                <div class="price">
                                    <span class="price-new">$1178.00</span>
                                </div>
                                <div class="cart">
                                    <button type="button" class="btn btn-primary">Add to Cart</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-default wishlist" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fa fa-heart"></i></button>
                            <button type="button" class="btn btn-default compare" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-circle-o"></i></button>
                        </div>
                    </div>
                    <!--/ Product Item -->

                    <!-- Product Item -->
                    <div class="product-list col-xs-12">
                        <div class="product-item">
                            <div class="item-overlay">
                                <div class="clickable">
                                    <a href="#">Leather laptop bag navy</a>
                                </div>
                            </div>
                            <div class="image">
                                <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Product 1"></a>
                            </div>
                            <div class="caption">
                                <div class="name">
                                    <a href="#">Leather laptop bag navy</a>
                                </div>
                                <div class="description">
                                    <p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel..</p>
                                </div>
                                <div class="rating">
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="price">
                                    <span>$866.00</span>
                                </div>
                                <div class="cart">
                                    <button type="button" class="btn btn-primary">Add to Cart</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-default wishlist" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fa fa-heart"></i></button>
                            <button type="button" class="btn btn-default compare" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-circle-o"></i></button>
                        </div>
                    </div>
                    <!--/ Product Item -->

                </div>
            </div>
        </div>
    </div>
</body>

</html>