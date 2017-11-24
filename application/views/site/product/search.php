    <div class="columns container">
                <div class="row">

                    <!-- Sidebar -->
                    <div class="col-lg-3 col-md-3 col-sidebar">

                        <!-- Block  Breadcrumb-->
                        
                        <ol class="breadcrumb no-hide">
                            <li><a href="#">Trang chủ    </a></li>
                            <li class="active">Thông tin tìm kiếm</li>
                        </ol>
                       <!-- Block  Breadcrumb-->

            

                        <!-- Block  Compare-->
                        <div class="block-sidebar block-sidebar-compare">
                            <div class="block-title">
                                <strong>compare products</strong>
                            </div>
                            <div class="block-content">
                                You have no product to compare
                            </div>
                        </div><!-- Block  Compare-->

                        <!-- Block  bestseller products-->
                        <div class="block-sidebar block-sidebar-products">
                            <div class="block-title">
                                <strong>bestseller products</strong>
                            </div>
                            <div class="block-content">
                                <div class="product-item">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="" class="product-item-img"><img src="images/sidebar-bestseller1.jpg" alt="product name"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Washing Machine Pro</a></strong>
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="" class="product-item-img"><img src="images/sidebar-bestseller2.jpg" alt="product name"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Washing Machine Pro</a></strong>
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="" class="product-item-img"><img src="images/sidebar-bestseller3.jpg" alt="product name"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Washing Machine Pro </a></strong>
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Block  bestseller products-->

                        <!-- Block  tags-->
                        <div class="block-sidebar block-sidebar-tags">
                            <div class="block-title">
                                <strong>product tags</strong>
                            </div>
                            <div class="block-content">
                                <ul>
                                    <li><a href="">Top</a></li>
                                    <li><a href="">Fashion</a></li>
                                    <li><a href="">Collection Men</a></li>
                                    <li><a href="">Collection Women</a></li>
                                    <li><a href="">Gallery</a></li>
                                    <li><a href="">New</a></li>
                                    <li><a href="">Top</a></li>
                                    <li><a href="">Fashion</a></li>
                                    <li></li>
                                </ul>
                                <a href="" class="view-all">View all tags <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div><!-- Block  tags-->

                    </div><!-- Sidebar -->

                    <!-- Main Content -->
                    <div class="col-lg-9 col-md-9  col-main">

                        <!-- Toolbar -->
                        <div class=" toolbar-products toolbar-top">

                 
                 <span>Kết quả tìm kiếm với từ khóa : '<?php echo $key; ?>'</span>

                       

                        </div><!-- Toolbar -->

                        <!-- List Products -->
                        <div class="products  products-grid">
                            <ol class="product-items row">
                                <?php foreach($list as $row) : ?>
                                <li class="col-sm-4 product-item product-item-opt-0">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="<?php echo base_url('product/detail/'.$row->id); ?>" class="product-item-img">
                            <img src="<?php echo base_url('uploads/product/'.$row->image)?>" alt="product name"></a>
                                        </div>
                                        <div class="product-item-detail">
                                    <strong class="product-item-name"><a href=""><?php echo $row->name ?> </a></strong>
                                            <div class="product-item-price">
                                                <span class="price"><?php echo number_format($row->price); ?></span>
                                            </div>
                                            <div class="product-item-actions">
                                        <button class="btn btn-cart" type="button"><span>Thêm vào giỏ</span></button>
                                                <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                   
                            </ol><!-- list product -->
                        </div> <!-- List Products -->

                        <!-- Toolbar -->
                        <div class=" toolbar-products toolbar-bottom">

                            <ul class="pagination">
                                <?php echo $this->pagination->create_links(); ?>
                            </ul>

                        </div><!-- Toolbar -->

                    </div><!-- Main Content -->
                    
                </div>
            </div>

