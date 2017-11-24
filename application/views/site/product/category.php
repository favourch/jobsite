    <div class="columns container">
                <div class="row">

                    <!-- Sidebar -->
                    <div class="col-lg-3 col-md-3 col-sidebar">

                        <!-- Block  Breadcrumb-->
                        
                        <ol class="breadcrumb no-hide">
                            <li><a href="#">Trang chủ    </a></li>
                            <li class="active"><?php echo $category->name; ?></li>
                        </ol>
                       <!-- Block  Breadcrumb-->

                        <!-- block filter products -->
                        <div id="layered-filter-block" class="block-sidebar block-filter no-hide">
                            <div class="close-filter-products"><i class="fa fa-times" aria-hidden="true"></i></div>
  
                            <div class="block-content">

                                <!-- Filter Item  categori-->
                                <div class="filter-options-item filter-options-categori">
                                    <div class="filter-options-title">Categories</div>
                                    <div class="filter-options-content">
                                        <ol class="items">
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Smartphone &amp; Mp3 Player  </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Network &amp; Computer</span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Batteries &amp; Chargers</span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Headphone &amp; Headset</span>
                                                </label>
                                            </li>
                                        </ol>
                                    </div>
                                </div><!-- Filter Item  categori-->

                                <!-- filter price -->
                                <div class="filter-options-item filter-options-price">
                                    <div class="filter-options-title">Price</div>
                                    <div class="filter-options-content">
                                        <div class="slider-range">
                                            <div class="action">
                                                <span class="price">
                                                    <span id="amount-left">0</span>
                                                    <span id="amount-right">300</span>
                                                </span>

                                                <button type="button" class="btn default"><span>Search</span></button>
                                            </div>
                                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 60%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 60%;"></a></div>
                                            <span class="amount-min">$3</span>
                                            <span class="amount-max">$6789</span>
                                        </div>
                                    </div>
                                </div><!-- filter price -->

                                <!-- filter Manufacture-->
                                <div class="filter-options-item filter-options-manufacture">
                                    <div class="filter-options-title">Manufacture</div>
                                    <div class="filter-options-content">
                                        <ol class="items">
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Ercol  </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Duresta</span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>G Plan</span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Parker Knoll</span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Collins &amp; Hayes</span>
                                                </label>
                                            </li>

                                        </ol>
                                    </div>
                                </div><!-- Filter Item -->

                                <!-- filter color-->
                                <div class="filter-options-item filter-options-color">
                                    <div class="filter-options-title">COLOR</div>
                                    <div class="filter-options-content">
                                        <ol class="items">
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #fca53c;"></span>          
                                                        <span class="count">(30)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #6b5a5c;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #000000;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #3063f2;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="text">CYal</span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #f9334a;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                           
                                           
                                        </ol>
                                    </div>
                                </div><!-- Filter Item -->

                            </div>
                        </div><!-- Filter -->

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

                            <div class="btn-filter-products">
                                <span>Filter</span>
                            </div>
                            <div class="modes">
                                <strong class="label">View as:</strong>
                                <strong class="modes-mode active mode-grid" title="Grid">
                                    <span>grid</span>
                                </strong>
                                <a href="List_Products.html" title="List" class="modes-mode mode-list">
                                    <span>list</span>
                                </a>
                            </div><!-- View as -->
                           
                            <div class="toolbar-option">

                                <div class="toolbar-sorter ">
                                    <label class="label">Short by:</label>
                                    <select class="sorter-options form-control">
                                        <option selected="selected" value="position">Position</option>
                                        <option value="name">Name</option>
                                        <option value="price">Price</option>
                                    </select>
                                </div><!-- Short by -->

                                <div class="toolbar-limiter">
                                    <label class="label">
                                        <span>Show:</span>
                                    </label>
                                   
                                    <select class="limiter-options form-control">
                                        <option selected="selected" value="9">9</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                    </select>
                                    
                                </div><!-- Show per page -->

                            </div>

                            <ul class="pagination">
                                <li class="action">
                                    <a href="#">
                                        <span><i aria-hidden="true" class="fa fa-angle-left"></i></span>
                                    </a>
                                </li>
                                
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li class="action">
                                    <a href="#">
                                        <span><i aria-hidden="true" class="fa fa-angle-right"></i></span>
                                    </a>
                                </li>
                            </ul>

                        </div><!-- Toolbar -->

                        <!-- List Products -->
                        <div class="products  products-grid">
                            <ol class="product-items row">
                                <?php foreach($list as $row) : ?>
                                <?php $catname = $row->cat_name; ?>
                                <li class="col-sm-4 product-item product-item-opt-0">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="<?php echo base_url($catname.'-p'.$row->id); ?>" class="product-item-img">
                            <img src="<?php echo base_url('uploads/product/'.$row->image)?>" alt="product name"></a>
                                        </div>
                                        <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="<?php echo base_url($catname.'-p'.$row->id); ?>"><?php echo $row->name; ?> </a></strong>
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

                            <div class="modes">
                                <strong class="label">View as:</strong>
                                <strong class="modes-mode active mode-grid" title="Grid">
                                    <span>grid</span>
                                </strong>
                                <a href="List_Products.html" title="List" class="modes-mode mode-list">
                                    <span>list</span>
                                </a>
                            </div><!-- View as -->
                           
                            <div class="toolbar-option">

                                <div class="toolbar-sorter ">
                                    <label class="label">Short by:</label>
                                    <select class="sorter-options form-control">
                                        <option selected="selected" value="position">Position</option>
                                        <option value="name">Name</option>
                                        <option value="price">Price</option>
                                    </select>
                                </div><!-- Short by -->

                                <div class="toolbar-limiter">
                                    <label class="label">
                                        <span>Show:</span>
                                    </label>
                                   
                                    <select class="limiter-options form-control">
                                        <option selected="selected" value="9">9</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                    </select>
                                    
                                </div><!-- Show per page -->

                            </div>

                            <ul class="pagination">
                                <?php echo $this->pagination->create_links(); ?>
                            </ul>

                        </div><!-- Toolbar -->

                    </div><!-- Main Content -->
                    
                </div>
            </div>

