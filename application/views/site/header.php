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
                                    <?php $catname = $this->catnews_model->get_info($row->cat_id); ?>
                                    <?php if(!empty($row->subs)) : ?>
                                    <li class="menu-item-has-children">
                                        <?php if($catname!=''): ?>
                                        <a href="<?php echo base_url($catname->cat_name.'-c'.$row->cat_id); ?>">
                                        <?php else: ?>
                                        <a href="#">
                                        <?php endif; ?>
                                        <?php echo $row->name; ?></a>
                                        <ul>
                                        <?php foreach($row->subs as $sub) : ?>
                                        <?php $catsub = $this->catnews_model->get_info($sub->cat_id); ?>
                                        <li>
                                        <?php if($catsub!=''): ?>
                                        <a href="<?php echo base_url($catsub->cat_name.'-c'.$sub->cat_id); ?>">
                                        <?php echo $sub->name; ?>
                                        <?php else: ?>
                                        <a href="#">
                                        <?php echo $sub->name; ?>
                                    <?php endif; ?>
                                        </a>

                                        </li>
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
                        <?php if(!isset($user_info) && !isset($company_info)): ?>
                        <div class="button-group-merged flex no-column">
                                <div class="r-dropdown first">
                                        <a href="#" class="button">Nhà tuyển dụng</a>
                                        <div class="dropdown-content">
                                        <a href="<?php echo base_url('nha-tuyen-dung/dang-nhap'); ?>">Đăng nhập</a>
                                        <a href="<?php echo base_url('nha-tuyen-dung/dang-ky'); ?>">Đăng ký</a>
                                        </div>
                                      </div>
                                      <div class="r-dropdown last">
                                            <a href="#" class="button">Ứng viên</a>
                                            <div class="dropdown-content">
                                            <a href="<?php echo base_url('ung-vien/dang-nhap'); ?>">Đăng nhập</a>
                                             <a href="<?php echo base_url('ung-vien/dang-ky'); ?>">Đăng ký</a>
                                            </div>
                                          </div>    
                           
                        </div> <!-- end .button-group-merged -->
                        <?php endif; ?>
                    <?php if(isset($user_info)): ?>
                        <div class="account-info-top flex items-center no-column">
                            <a href="#0" class="notification-icon"><i class="ion-android-notifications"></i></a>
                            <a href="<?php echo base_url('ung-vien'); ?>" class="profile-button flex space-between items-center no-column no-wrap"><span>Xin chào!</span><?php echo $user_info->full_name; ?> <img src="<?php echo base_url('uploads/candidate/'.$user_info->image) ?>" alt="avatar" class="img-responsive"></a>
                        </div>
                 <?php endif; ?>
                 <?php if(isset($company_info)): ?>
                        <div class="account-info-top flex items-center no-column">
                            <a href="#0" class="notification-icon"><i class="ion-android-notifications"></i></a>
                            <a href="<?php echo base_url('nha-tuyen-dung'); ?>" class="profile-button flex space-between items-center no-column no-wrap"><span>Xin chào!</span><?php echo $company_info->company_contact; ?> 

                            <img src="<?php echo base_url('uploads/company/'.$company_info->logo_url) ?>" alt="avatar" class="img-responsive"></a>
                        </div>
                 <?php endif; ?>
                    
                    </div> <!-- end .right -->
                </div> <!-- end .header-inner -->
            </div> <!-- end .container -->

            <div class="responsive-menu">
            <a href="" class="responsive-menu-close"><i class="ion-android-close"></i></a>
            <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
        </div> <!-- end .responsive-menu -->
