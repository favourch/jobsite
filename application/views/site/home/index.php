        <!-- Hero Section -->
        <div class="section hero-section transparent" style="background-image: url('<?php echo public_url(); ?>/site/images/background01.jpg')/*tpa=http://jobpress.wecookcode.com/demo/<?php echo public_url(); ?>/site/images/background01.jpg*/;">
            <div class="inner">
                <div class="container">
                    <div class="job-search-form">
                        <h2>Hơn <span>100,000<sup>+</sup></span>việc làm đang chờ bạn</h2>
                        <form class="form-inline flex">
                            <div class="form-group">
                                <div class="form-group-inner">
                                    <input type="text" class="form-control" id="input-field-1" placeholder="Chức danh / Từ khóa / Tên công ty">
                                    <i class="ion-ios-briefcase-outline"></i>
                                </div>
                            </div>
                            <div class="form-group">                            
                            <input type="text" class="form-control" id="input-field-2" placeholder="Địa điểm làm việc">
                                <i class="ion-ios-location-outline"></i>
                            </div>
                            <button type="submit" class="button"><i class="ion-ios-search-strong"></i></button>
                        </form>
                        <div class="keywords flex">
                            <h4 class="self-center">Từ khóa phổ biến :</h4>
                            <a href="#0" class="button item-center">web design</a>
                            <a href="#0" class="button item-center">accountant</a>
                            <a href="#0" class="button item-center">car dealer</a>
                        </div> <!-- end .keywords -->
                    </div> <!-- end .job-search-form -->    
                </div> <!-- end .container -->
                <div class="features-bar">
                    <div class="container">
                        <div class="features-bar-inner flex space-between">
                            <div class="features-box self-center">
                                <h3>Leading the industry</h3>
                                <a href="about.html" tppabs="http://jobpress.wecookcode.com/demo/about.html">About us<i class="ion-ios-arrow-thin-right"></i></a>
                            </div> <!-- end .feature-box -->
                            <div class="features-box-icon flex no-wrap">
                                <img src="<?php echo public_url(); ?>/site/images/feature-icon01.png" tppabs="http://jobpress.wecookcode.com/demo/<?php echo public_url(); ?>/site/images/feature-icon01.png" alt="cup-icon" class="img-responsive self-center">
                                <div class="content self-center">
                                    <h3>High average salary</h3>
                                    <a href="#0">Learn more<i class="ion-ios-arrow-thin-right"></i></a>
                                </div> <!-- end .content -->                            
                            </div> <!-- end .feature-box-icon -->
                            <div class="features-box-icon flex no-wrap">
                                <img src="<?php echo public_url(); ?>/site/images/feature-icon02.png" tppabs="http://jobpress.wecookcode.com/demo/<?php echo public_url(); ?>/site/images/feature-icon02.png" alt="cup-icon" class="img-responsive self-center">
                                <div class="content self-center">
                                    <h3>2,500,000+ candidates</h3>
                                    <a href="#0">Our community<i class="ion-ios-arrow-thin-right"></i></a>
                                </div> <!-- end .content -->
                            </div> <!-- end .feature-box-icon -->
                            <div class="user-profile-icon self-center">
                                <img src="<?php echo public_url(); ?>/site/images/profile-icon01.png" tppabs="http://jobpress.wecookcode.com/demo/<?php echo public_url(); ?>/site/images/profile-icon01.png" alt="profile-icon" class="img-responsive self-center">
                            </div> <!-- end .profile-icon -->
                        </div> <!-- end .features-bar-inner -->
                    </div> <!-- end .container -->
                </div> <!-- end .features-bar -->   
            </div> <!-- end .inner -->
        </div> <!-- end .section -->

        <!-- Featured Jobs Section -->
        <div class="section featured-jobs-section">
            <div class="inner">
                <div class="container">
                    <div class="section-top-content flex items-center">
                        <h1>Việc làm nổi bật</h1>
                        <a href="#0">Tất cả việc làm<i class="ion-ios-arrow-thin-right"></i></a>
                    </div> <!-- end .section-top-content -->
                    <div class="jobs-table">
                        <div class="table-header">
                            <div class="table-cells flex">
                                <div class="job-title-cell"><h6>Việc làm / Công ty</h6></div>
                                <div class="job-type-cell"><h6>Loại việc làm</h6></div>
                                <div class="location-cell"><h6>Địa điểm làm việc</h6></div>
                                <div class="expired-date-cell"><h6>Hạn nộp hồ sơ</h6></div>
                                <div class="salary-cell"><h6>Mức lương</h6></div>                  
                            </div> <!-- end .table-cells -->
                        </div> <!-- end .table-header -->
                        <?php foreach($hotjob as $row): ?>
                        <?php $company_info = $this->member_company_model->get_info($row->company_id); ?>
                        <?php $city_info = $this->city_model->get_info($row->city_id); ?>
                        <?php $salary_info = $this->salary_model->get_info($row->salary_id); ?>
                        <div class="table-row">
                            <div class="table-cells flex no-wrap">
                                <div class="cell job-title-cell flex no-column no-wrap">
                                    <div class="cell-mobile-label">
                                        <h6>Công ty</h6>
                                    </div> <!-- end .cell-label -->
                                    <img src="<?php echo base_url('uploads/company/'.$company_info->logo_url); ?>" alt="" class="img-responsive">
                                    <div class="content">
                                        <h4><a href="<?php echo base_url($row->cat_name.'-'.$row->id.'-jv'); ?>"><?php echo $row->title; ?></a></h4>
                                        <p class="small"><?php echo $company_info->company_name; ?></p>
                                    </div> <!-- end .content -->
                                </div> <!-- end .job-title-cell -->
                                <div class="cell job-type-cell flex no-column">
                                    <div class="cell-mobile-label">
                                        <h6>Loại công việc</h6>
                                    </div> <!-- end .cell-label -->                                 
                                    <button type="button" class="button freelancer">Hot</button>
                                </div> <!-- end .job-type-cell -->
                                <div class="cell location-cell flex no-column no-wrap">
                                    <div class="cell-mobile-label">
                                        <h6>Địa điểm làm việc</h6>
                                    </div> <!-- end .cell-label -->
                                    <p><?php echo $city_info->name; ?></p>
                                </div> <!-- end .location-cell -->
                                <div class="cell expired-date-cell flex no-column no-wrap">
                                    <div class="cell-mobile-label">
                                        <h6>Hạn nộp hồ sưo</h6>
                                    </div> <!-- end .cell-label -->
                                    <p><span><?php echo int_to_date($row->end_date); ?></span></p>
                                </div> <!-- end .expire-date-cell -->
                                <div class="cell salary-cell flex no-column no-wrap">
                                    <div class="cell-mobile-label">
                                        <h6>Mức lương</h6>
                                    </div> <!-- end .cell-label -->
                                    <p><?php echo $salary_info->name; ?></p>
                                </div> <!-- end .salray-cell -->
                            </div> <!-- end .table-cells -->
                        </div> <!-- end .table-row -->
                    <?php endforeach; ?>
                        

                        <div class="table-footer flex space-between items-center">
                            <h6>Showing<span>1-5</span>of 23 jobs</h6>
                       
                        </div>
                    </div> <!-- end .jobs-table -->
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div> <!-- end .section -->

        <!-- Category Section -->
        <div class="section category-section solid-blue-bg">
            <div class="inner">
                <div class="container">
                    <h1 class="light">Việc làm theo danh mục</h1>
                    <div class="category-grid">                 
                        <div class="category-row space-between items-center">
                            <?php foreach($category_home as $row) : ?>
                            <?php $input['where'] = array('career_id'=>$row->id); ?>
                            <?php $total_career = $this->recruitment_model->get_total($input); ?>
                            <?php $catname = $row->cat_name; ?>
                            <div class="item">
                               <a href="<?php echo base_url('viec-lam/'.$catname.'-d'.$row->id); ?>"> <img src="<?php echo public_url(); ?>/site/images/category-icon09.png" alt="" class="img-responsive"></a>
                                <h4><?php echo $row->name; ?></h4>
                                <p class="light">( <?php echo $total_career; ?> ) Việc làm</p>
                            </div> <!-- end .item -->
                        <?php endforeach; ?>
                         
                        </div> <!-- end .category-row -->

                     
                    </div>  <!-- end .category-grid -->         
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
 
        </div> <!-- end .section -->

        <!-- Latest Jobs Section -->
        <div class="section Latest-jobs-section">
            <div class="inner">
                <div class="container">
                    <div class="section-top-content flex items-center">
                        <h1>Việc làm mới cập nhật</h1>
                        <a href="#0">Xem tất cả việc làm<i class="ion-ios-arrow-thin-right"></i></a>
                    </div> <!-- end .section-top-content -->
                    <div class="jobs-table">
                        <div class="table-header">
                            <div class="table-cells flex">
                                <div class="job-title-cell"><h6>Việc làm/ Doanh nghiệp</h6></div>
                                <div class="job-type-cell"><h6>Loại công việc</h6></div>
                                <div class="location-cell"><h6>Địa điểm làm việc</h6></div>
                                <div class="expired-date-cell"><h6>Hạn nộp hồ sơ</h6></div>
                                <div class="salary-cell"><h6>Mức lương</h6></div>                  
                            </div> <!-- end .table-cells -->
                        </div> <!-- end .table-header -->
                        <?php foreach($lastestjob as $row): ?>
                        <?php $company = $this->member_company_model->get_info($row->company_id); ?>
                        <?php $salary = $this->salary_model->get_info($row->salary_id); ?>
                        <?php $city = $this->city_model->get_info($row->city_id); ?>
                        <div class="table-row">
                            <div class="table-cells flex no-wrap">
                                <div class="cell job-title-cell flex no-column no-wrap">
                                    <div class="cell-mobile-label">
                                        <h6>Công ty</h6>
                                    </div> <!-- end .cell-label -->
                                    <img src="<?php echo base_url('uploads/company/'.$company->logo_url); ?>" alt="" class="img-responsive" width="50">
                                    <div class="content">
                                        <h4><a href="<?php echo base_url($row->cat_name.'-'.$row->id.'-jv'); ?>"><?php echo $row->title; ?></a></h4>
                                        <p class="small"><?php echo $company->company_name; ?></p>
                                    </div> <!-- end .content -->
                                </div> <!-- end .job-title-cell -->
                                <div class="cell job-type-cell flex no-column no-wrap">
                                    <div class="cell-mobile-label">
                                        <h6>Loại công việc</h6>
                                    </div> <!-- end .cell-label -->
                                    <button type="button" class="button full-time">Full time</button>
                                </div>
                                <div class="cell location-cell flex no-column no-wrap">
                                    <div class="cell-mobile-label">
                                        <h6>Địa điểm làm việc</h6>
                                    </div> <!-- end .cell-label -->
                                    <p><?php echo $city->name; ?></p>
                                </div>
                                <div class="cell expired-date-cell flex no-column no-wrap">
                                    <div class="cell-mobile-label">
                                        <h6>Hạn nộp hồ sơ</h6>
                                    </div> <!-- end .cell-label -->
                                    <p><span><?php echo int_to_date($row->end_date); ?></span></p>
                                </div>
                                <div class="cell salary-cell flex no-column no-wrap">
                                    <div class="cell-mobile-label">
                                        <h6>Salary</h6>
                                    </div> <!-- end .cell-label -->
                                    <p><?php echo $salary->name; ?></p>
                                </div>
                            </div> <!-- end .table-cells -->
                        </div> <!-- end .table-row -->      
                    <?php endforeach; ?>

                        <div class="table-footer flex space-between items-center">
                            <h6>Showing<span>1-5</span>of 23 jobs</h6>
                  
                        </div>
                    </div> <!-- end .jobs-table -->
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div> <!-- end .section -->

        <div class="section cta-section parallax text-center" style="background-image: url('<?php echo public_url(); ?>/site/images/background02.jpg')/*tpa=http://jobpress.wecookcode.com/demo/<?php echo public_url(); ?>/site/images/background02.jpg*/;">
            <div class="inner">
                <div class="container">
                    <h2>Bạn đang tìm kiếm việc làm</h2>
                    <p class="large light">Tham gia ứng tuyển với hàng ngàn doanh nghiệp và kiếm được việc làm tốt nhất dành cho bạn</p>
                    <div class="cta-button">
                        <a href="<?php echo base_url('member_register/register'); ?>" class="button">Đăng ký ngay</a>
                    </div> <!-- end .cta-button -->
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div> <!-- end .section -->

        <!-- Latest News Section -->
        <div class="section Latest-news-section">
            <div class="inner">
                <div class="container">
                    <div class="section-top-content flex items-center">
                        <h1>Tin tức nổi bật</h1>
                        <a href="blog-list.html">Xem tất cả<i class="ion-ios-arrow-thin-right"></i></a>
                    </div> <!-- end .section-top-content -->
                    <div class="news-grid">
                        <div class="news-grid-row flex space-between">
                            
                        <?php foreach($newshome_list as $row): ?>
                            <?php $newsname = $row->news_name; ?>
                            <div class="news-item">
                                <img src="<?php echo base_url('uploads/news/'.$row->image); ?>" alt="" class="img-responsive">
                                <div class="news-content">
                                    <div class="news-meta flex no-column">
                                        <h6 class="publish-date"><?php echo int_to_date($row->created); ?></h6>
                                        <h6><a href="#0" class="comment-count"><?php echo $row->view; ?> Lượt xem</a></h6>
                                    </div> <!-- end .news-meta -->
                                    <h3 class="news-title"><?php echo $row->title; ?></h3>
                                    <p class="news-excerpt"><?php echo $row->description; ?></p>
                                    <a href="<?php echo base_url($newsname.'-'.$row->id.'.html'); ?>" class="button">Đọc tiếp</a>
                                </div> <!-- end .news-content -->
                            </div> <!-- end .news-item -->
                        <?php endforeach; ?>

                        </div>  <!-- end .news-grid-row -->                     
                    </div> <!-- end .news-grid -->
                </div> <!-- end .container -->  
            </div> <!-- end .inner -->
        </div> <!-- end .section -->

        <!-- Clients Section -->
        <div class="section clients-section solid-grey-bg">
            <div class="inner">
                <div class="container">
                    <h1 class="section-title">Đối tác & Khách hàng</h1>
                    <div class="logo-grid">
                        <div class="logo-grid-row flex space-between">
                           <?php foreach($partners as $row): ?>
                            <div class="logo-item">
                               <a href="<?php echo $row->link; ?>" target="_blank"> <img src="<?php echo base_url('uploads/partner/'.$row->image); ?>"  alt="" class="img-responsive self-center">
                            </div> <!-- end .logo-item -->
                        <?php endforeach; ?>
                           
                        </div> <!-- end .logo-grid-row -->
                    </div> <!-- end .logo-grid -->
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div> <!-- end .section -->

        <!-- CTA App Section -->
        <div class="section cta-app-section solid-blue-bg">
            <div class="inner">
                <div class="container">
                    <div class="cta-app-section-inner flex space-between items-center">
                        <div class="left">
                            <h2 class="light">Don't want to miss a thing?</h2>
                            <p class="large">Just go to<span>AppStore</span>&<span>Google Play</span>to download<span>JobPress Mini</span></p>      
                        </div> <!-- end .left -->
                        <div class="button-group flex no-column">
                            <a href="#0" class="button white">Google Play</a>
                            <a href="#0" class="button white">Apple Store</a>
                        </div> <!-- end .button-group -->
                    </div> <!-- end .cta-app-section-inner -->
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div> <!-- end .section -->