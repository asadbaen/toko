<!-- Page Sidebar Ends-->
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid product-wrapper">
        <div class="product-grid">
            <div class="feature-products">
                <div class="row">
                    <div class="col-md-6 products-total">
                        <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="#" data-original-title="" title=""><i data-feather="grid"></i></a></div>
                        <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view" href="#" data-original-title="" title=""><i data-feather="list"></i></a></div><span class="d-none-productlist filter-toggle">
                            Filters<span class="ml-2"><i class="toggle-data" data-feather="chevron-down"></i></span></span>
                    </div>
                    <div class="col-md-6 text-right"><span class="f-w-600 m-r-5">Showing Products 1 - 24 Of 200 Results</span>
                        <div class="select2-drpdwn-product select-options d-inline-block">
                            <select class="form-control btn-square" name="select">
                                <option value="opt1">Featured</option>
                                <option value="opt2">Lowest Prices</option>
                                <option value="opt3">Highest Prices</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-wrapper-grid">
                <div class="row">
                    <?php foreach ($product_data as $value) : ?>
                        <div class="col-lg-3 col-sm-6 lg-4">
                            <div class="card">
                                <div class="product-box">
                                    <div class="product-img"><img class="img-fluid" src="<?php echo base_url('uploads/products/' . $value['product_img']) ?>" alt="">
                                        <div class="product-hover">
                                            <ul>
                                                <li>
                                                    <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                                                </li>
                                                <li>
                                                    <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="product-box row">
                                                        <div class="product-img col-md-6"><img class="img-fluid" src="<?php echo base_url('uploads/products/' . $value['product_img']) ?>" alt="">
                                                        </div>
                                                        <div class="product-details col-md-6 text-left">
                                                            <h4><?= $value['product_name']; ?></h4>
                                                            <div class="product-price">
                                                                <del>$350.00 </del><?= "Rp. " . number_format($value['price']); ?>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0"><?= $value['long_description']; ?></p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn btn-outline-light" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-outline-light" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-outline-light" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <input class="touchspin text-center" type="text" value="5">
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn">
                                                                    <button class="btn btn-primary" type="button">Add to Cart</button>
                                                                    <a href="<?php echo base_url('detail/product/' . $value['id_product']) ?>" class="btn btn-primary" type="button">View Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <h4><?= $value['product_name']; ?></h4>
                                        <p><?= $value['short_description']; ?></p>
                                        <div class="product-price">
                                            <del>$350.00 </del><?= "Rp. " . number_format($value['price']); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>