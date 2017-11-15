  <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="#">Trang chủ    </a></li>
                    <li><a href="#">Electronics    </a></li>
                    <li class="active">Machine Pro</li>
                </ol><!-- Block  Breadcrumb-->

                <div class="row">
                    <!-- Main Content -->
                    <div class="col-md-9 col-md-push-3  col-main">

                        <div class="row">
                    
                            <div class="col-sm-6 col-md-6 col-lg-6">

                                <div class="product-media media-horizontal">

                                    <div class="image_preview_container images-large">

                                        <img id="img_zoom" data-zoom-image="images/thumb-lag1.jpg" src="images/thumb-img1.jpg" alt="">

                                        
                                    </div>
                                    
                                    <div class="product_preview images-small">

                                        <div class="owl-carousel thumbnails_carousel" id="thumbnails"  data-nav="true" data-dots="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":4},"600":{"items":5},"768":{"items":3}}'>
                                            
                            <a href="#" data-image="<?php echo base_url('uploads/product/'.$info->image); ?>" data-zoom-image="<?php echo base_url('uploads/product/'.$info->image); ?>">

                                                <img src="<?php echo base_url('uploads/product/'.$info->image); ?>" data-large-image="<?php echo base_url('uploads/product/'.$info->image); ?>" alt="">

                                            </a>

                                            <a href="#" data-image="images/thumb-img2.jpg" data-zoom-image="images/thumb-lag2.jpg">

                                                <img src="images/thumb2.jpg" data-large-image="images/thumb-img2.jpg" alt="">

                                            </a>
                                            <a href="#" data-image="images/thumb-img3.jpg" data-zoom-image="images/thumb-lag3.jpg">

                                                <img src="images/thumb3.jpg" data-large-image="images/thumb-img3.jpg" alt="">

                                            </a>
                                            <a href="#" data-image="images/thumb-img1.jpg" data-zoom-image="images/thumb-lag1.jpg">

                                                <img src="images/thumb1.jpg" data-large-image="images/thumb-img1.jpg" alt="">

                                            </a>

                                        </div><!--/ .owl-carousel-->

                                    </div><!--/ .product_preview-->

                                </div><!-- image product -->
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6"> 

                                <div class="product-info-main">

                                    <h1 class="page-title">
                                       <?php echo $info->name; ?>
                                    </h1>
                                    <div class="product-reviews-summary">
                                        <div class="rating-summary">
                                            <div class="rating-result" title="70%">
                                                <span style="width:70%">
                                                    <span><span>70</span>% of <span>100</span></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="reviews-actions">
                                            <a href="" class="action view">Based  on 3 ratings</a>
                                            <a href="" class="action add"><img alt="img" src="images/icon/write.png">&#160;&#160;write a review</a>
                                        </div>
                                    </div>
                                   
                                    <div class="product-info-price">
                                        <div class="price-box">
                                            <span class="price"> <?php echo number_format($info->price); ?>   </span>
                                        </div>
                                    </div>  
                                    <div class="product-code">
                                        Item Code: #453217907 :  
                                    </div> 
                                    <div class="product-overview">
                                        <div class="overview-content">
                                           <?php echo $info->intro; ?> 
                                        </div>
                                    </div>

                                    <div class="product-addto-links-second">
                                        <a href="<?php echo base_url('cart/add/'.$info->id); ?>" class="action action-print">Thêm vào giỏ hàng</a>
                                    </div>

                                </div><!-- detail- product -->

                            </div><!-- Main detail -->

                        </div>

                        <!-- product tab info -->
                    
                        <div class="product-info-detailed ">

                            <!-- Nav tabs -->
                            <ul class="nav nav-pills" role="tablist">
                                <li role="presentation" class="active"><a href="#description"  role="tab" data-toggle="tab">Chi tiết sản phẩm </a></li>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="description">
                                    <div class="block-title"></div>
                                    <div class="block-content">
                                         <?php echo $info->content; ?> 
                                     <?php if(is_array($image_list)) : ?>      
                                   <?php foreach($image_list as $img) : ?>
                                   <img src="<?php echo base_url('uploads/product/'.$img); ?>">
                                    <?php endforeach; ?>
                                     <?php endif; ?> 
                                    </div>
                                </div>
                            
                            </div>
                        </div>  
                        <!-- product tab info -->

                        <!-- block-related product -->
                        <div class="block-related ">
                            <div class="block-title">
                                <strong class="title">RELATED products</strong>
                            </div>
                            <div class="block-content ">
                                <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>
                                    
                                    
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="" class="product-item-img"><img src="images/related2-1.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                              
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Brown Short 100% Cotton</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="" class="product-item-img"><img src="images/related2-2.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Summer T-Shirt</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="" class="product-item-img"><img src="images/related2-3.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                               
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Blue Short 50% Cotton</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="" class="product-item-img"><img src="images/related2-1.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Brown Short 100% Cotton</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                </ol>
                            </div>
                        </div><!-- block-related product -->

                        <!-- block-Upsell Products -->
                        <div class="block-upsell ">
                            <div class="block-title">
                                <strong class="title">You might also like</strong>
                            </div>
                            <div class="block-content ">
                                <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>
                                    
                                    
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="" class="product-item-img"><img src="images/Upsell2-1.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Leather Swiss Watch</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="" class="product-item-img"><img src="images/Upsell2-2.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Sport T-Shirt For Men</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="" class="product-item-img"><img src="images/Upsell2-3.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                               
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Fashion Leather Handbag</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="" class="product-item-img"><img src="images/Upsell2-3.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Fashion Leather Handbag</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                </ol>
                            </div>
                        </div><!-- block-Upsell Products -->

                    </div><!-- Main Content -->
                    
                    <!-- Sidebar -->
                    <div class=" col-md-3 col-md-pull-9   col-sidebar">

                        <!-- Block  bestseller products-->
                        <div class="block-sidebar block-sidebar-categorie">
                            <div class="block-title">
                                <strong>PRODUCT TYPES</strong>
                            </div>
                            <div class="block-content">
                                <ul class="items">
                                    <li class="parent">
                                        <a href="">Dress</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory">
                                            <li >
                                                <a href="">subcategory 1</a>
                                                
                                            </li>
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="">Bags</a>
                                    </li>
                                    <li class="parent">
                                        <a href="">Cost &amp; Jackets</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory">
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="">Beauty</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory">
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="">Jewellery</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory">
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="">Nightwear</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory">
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="">Jumpers &amp; Cardigans</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory">
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                            <li><a href="">subcategory 1</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- Block  bestseller products-->

                        <!-- Block  bestseller products-->
                        <div class="block-sidebar block-sidebar-products">
                            <div class="block-title">
                                <strong>BEST SALES</strong>
                            </div>
                            <div class="block-content">
                                <div class="owl-carousel" 
                                data-nav="false" 
                                data-dots="true" 
                                data-margin="0" 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true"
                                data-responsive='{
                                "0":{"items":1},
                                "420":{"items":1},
                                "480":{"items":2},
                                "600":{"items":2},
                                "992":{"items":1}
                                }'>
                                    <div class="item">
                                        <div class="product-item product-item-opt-2">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name" src="images/best1.jpg"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Man’s Within Plus Size Flared</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="70%" class="rating-result">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item product-item-opt-2">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name" src="images/best2.jpg"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Woman Within Plus Size Flared</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="70%" class="rating-result">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item product-item-opt-2">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name" src="images/best3.jpg"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Plus Size Rock Star Skirt</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="70%" class="rating-result">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-item product-item-opt-2">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name" src="images/best1.jpg"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Man’s Within Plus Size Flared</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="70%" class="rating-result">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item product-item-opt-2">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name" src="images/best2.jpg"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Woman Within Plus Size Flared</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="70%" class="rating-result">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item product-item-opt-2">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name" src="images/best3.jpg"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Plus Size Rock Star Skirt</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="70%" class="rating-result">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Block  bestseller products-->

                        <!-- block slide top -->
                        <div class="block-sidebar block-banner-sidebar">
                            <div class="owl-carousel" 
                                data-nav="false" 
                                data-dots="true" 
                                data-margin="0" 
                                data-items='1' 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true">
                                <div class="item item1" >
                                   <img src="images/banner-slide2.jpg" alt="images">
                                </div>
                                <div class="item item2" >
                                   <img src="images/banner-slide2.jpg" alt="images">
                                </div>
                                <div class="item item3" >
                                   <img src="images/banner-slide2.jpg" alt="images">
                                </div>
                            </div>
                        </div><!-- block slide top -->

                        <!-- Block  SALE products-->
                        <div class="block-sidebar block-sidebar-products-opt2">
                            <div class="block-title">
                                <strong>SALE PRODUCTS</strong>
                            </div>
                            <div class="block-content">
                                <div class="owl-carousel" 
                                data-nav="false" 
                                data-dots="true" 
                                data-margin="0" 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true"
                                data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "480":{"items":2},
                                "600":{"items":2},
                                "992":{"items":1}
                                }'>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="" class="product-item-img"><img src="images/sale1.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Luxury Dark Blue Coast</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="" class="product-item-img"><img src="images/product1.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Asus Ispiron 20</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="" class="product-item-img"><img src="images/product1.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Asus Ispiron 20</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Block  SALE products-->

                        <!-- block slide top -->
                        <div class="block-sidebar block-sidebar-testimonials2">
                           
                            <div class="block-content">
                                <div class="owl-carousel" 
                                    data-nav="false" 
                                    data-dots="true" 
                                    data-margin="0" 
                                    data-items='1' 
                                    data-autoplayTimeout="700" 
                                    data-autoplay="true" 
                                    data-loop="true">
                                    <div class="item " >
                                        <div class="img">
                                            <img src="images/icon/icon1.png" alt="icon1">
                                       </div>
                                       <strong class="title">100% Money Back Guaranteed</strong>
                                       <div class="des">
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt .
                                       </div>
                                       <a href="" class="btn">Read more <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div><!-- block slide top -->


                    </div><!-- Sidebar -->

                </div>
            </div>