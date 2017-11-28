            <div class="container clearfix">
                <div class="header-inner flex space-between items-center">
                    <div class="left">
                        <div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo public_url(); ?>/site/images/logo.png" alt="" class="img-responsive"></a></div> 
                    </div> <!-- end .left -->               
                    <div class="right flex space-between no-column items-center">
                        <div class="navigation">
                            <nav class="main-nav">
                                <ul class="list-unstyled">
                                    <li class="active"><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
                                    <?php foreach($menu_list as $row): ?>
                                    <?php if(!empty($row->subs)) : ?>
                                    <li class="menu-item-has-children">
                                        <a href="<?php echo base_url('news/catnews/'.$row->cat_id); ?>">
                                        <?php echo $row->name; ?></a>
                                        <ul>
                                        <?php foreach($row->subs as $sub) : ?>
                                        <li><a href="<?php echo base_url('news/catnews/'.$sub->cat_id); ?>">
                                        <?php echo $sub->name; ?></a></li>
                                        <?php endforeach; ?>
                                        </ul>                                   
                                    </li>
                                <?php else: ?>
                            <li><a href="<?php echo base_url('news/catnews/'.$row->cat_id); ?>" >
                            <?php echo $row->name; ?></a></li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                              
                                  
                                </ul>
                            </nav> <!-- end .main-nav -->
                            <a href="" class="responsive-menu-open"><i class="ion-navicon"></i></a>
                        </div> <!-- end .navigation -->
                        <?php if(!isset($user_info)): ?>
                        <div class="button-group-merged flex no-column">
                                <div class="r-dropdown first">
                                        <a href="post-job-form.html" class="button">Nhà tuyển dụng</a>
                                        <div class="dropdown-content">
                                        <a href="#" data-toggle="modal" data-target="#login-signup-popup-2">Đăng nhập</a>
                                        <a href="#">Đăng ký</a>
                                        </div>
                                      </div>
                                      <div class="r-dropdown last">
                                            <a href="#" class="button">Ứng viên</a>
                                            <div class="dropdown-content">
                                            <a href="<?php echo base_url('candidate/login'); ?>">Đăng nhập</a>
                                             <a href="<?php echo base_url('member_register/register'); ?>">Đăng ký</a>
                                            </div>
                                          </div>    
                           
                        </div> <!-- end .button-group-merged -->
                    <?php else: ?>
                        <div class="button-group-merged flex no-column">
                            <a href="<?php echo base_url('candidate/view'); ?>" class="button"><?php echo $user_info->full_name; ?></a>
                            <a href="<?php echo base_url('candidate/logout'); ?>" class="button">Đăng xuất</a>
                        </div> <!-- end .button-group-merged -->
                    <?php endif; ?>
                    </div> <!-- end .right -->
                </div> <!-- end .header-inner -->
            </div> <!-- end .container -->

            <div class="responsive-menu">
            <a href="" class="responsive-menu-close"><i class="ion-android-close"></i></a>
            <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
        </div> <!-- end .responsive-menu -->


    <!-- Login/Signup Popup -->
        <div class="modal fade bs-modal-sm" aria-hidden="true" aria-labelledby="myTabContent"  id="login-signup-popup" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-sm login-signup-modal">
                <div class="modal-content">
                        <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Ứng viên</h4>
                              </div>
                    <div class="modal-body">
                        <form class="login-form" name="logincandidate" method="post" action="<?php echo base_url('candidate/login'); ?>">
                                    <div class="form-group">
                                        <label for="InputEmail1">Email *</label>
                                        <input type="email" class="form-control" id="InputEmail1" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group">
                                        <label for="InputPassword1">Mật khẩu *</label>
                                        <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                                    </div>

                                    <div class="checkbox flex space-between">
                                        <div>
                                            <input id="sigin-checkbox" type="checkbox">
                                            <label for="sigin-checkbox">Remember me</label>
                                        </div>
                                        <a href="#0">Quên mật khẩu ?</a>
                                    </div> <!-- end .checkbox -->

                                    <button type="button" class="button" data-dismiss="modal">Đăng nhập</button>
                                    
                                    <p class="text-center divider-text small"><span>or login using</span></p>
                                    
                                    <div class="social-buttons">
                                        <ul class="list-unstyled flex space-between">
                                            <li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                                            <li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                                            <li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
                                        </ul>
                                    </div> <!-- end .social-buttons -->

                                </form> <!-- end .login-form -->    
                    </div> <!-- end .modal-body -->
                </div> <!-- end .modal-content -->
            </div> <!-- end .modal-dialog -->
        </div> <!-- end .modal -->

<!-- Login/Signup Popup -->
<div class="modal fade bs-modal-sm" aria-hidden="true" aria-labelledby="myTabContent"  id="login-signup-popup-2" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-sm login-signup-modal">
            <div class="modal-content">
                    <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Nhà tuyển dụng</h4>
                          </div>
                <div class="modal-body">
                    <form class="login-form">
                                <div class="form-group">
                                    <label for="InputEmail1">Your Email *</label>
                                    <input type="email" class="form-control" id="InputEmail1" placeholder="Enter your email">
                                </div>

                                <div class="form-group">
                                    <label for="InputPassword1">Password *</label>
                                    <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                                </div>

                                <div class="checkbox flex space-between">
                                    <div>
                                        <input id="sigin-checkbox" type="checkbox">
                                        <label for="sigin-checkbox">Remember me</label>
                                    </div>
                                    <a href="#0">Lost password?</a>
                                </div> <!-- end .checkbox -->

                                <button type="button" class="button" data-dismiss="modal">Login</button>
                            </form> <!-- end .login-form -->    
                </div> <!-- end .modal-body -->
            </div> <!-- end .modal-content -->
        </div> <!-- end .modal-dialog -->
    </div> <!-- end .modal -->