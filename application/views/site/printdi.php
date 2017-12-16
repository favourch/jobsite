<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV Basic style 1</title>
    <!-- CSS -->
    <!-- Bootstrap -->
    <link href="<?php echo public_url(); ?>/site/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="font-family: Arial">

    <div class="container" style="font-family: Tahoma">
        <div class="row">
            <div class="col-xs-12" style="float: left; width: 60%; text-align: right;">
                <h1>Hồ sơ ứng viên</h1>
                <h3>
                    <i><?php echo $candidate_info->full_name; ?></i>
                </h3>
               
            </div>
             <div class="" style="width: 30%; float: right;">
    <img src="<?php echo base_url('uploads/candidate/'.$candidate_info->image); ?>" class="img-responsive avatar" style="width: 100px;">
            </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <h2>Thông tin cá nhân</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6" style="width: 40%; float: left;">Họ và tên</div>
                <div class="col-xs-6" style="width: 50%; float: right;"><?php echo $candidate_info->full_name; ?></div>
            </div>
            <div class="row">
                <div class="col-xs-6" style="width: 40%; float: left;">Nơi ở hiện tại </div>

                <div class="col-xs-6" style="width: 50%; float: right;"><?php echo $city->name; ?></div>
            </div>
            <div class="row">
                <div class="col-xs-6" style="width: 40%; float: left;">Ngày sinh</div>
                <div class="col-xs-6"  style="width: 50%; float: right;"><?php echo int_to_date($candidate_info->birthday); ?></div>
            </div>
            <br />

            <div class="row">
                <div class="col-xs-6">
                    <i>Thông tin liên hệ</i>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6" style="width: 40%; float: left;">Điện thoại</div>
                <div class="col-xs-6" style="width: 50%; float: right;"><?php echo $candidate_info->phone; ?></div>
            </div>
            <div class="row">
                <div class="col-xs-6" style="width: 40%; float: left;">Email</div>
                <div class="col-xs-6" style="width: 50%; float: right;"><?php echo $candidate_info->email; ?></div>
            </div>
            <div class="row">
                <div class="col-xs-6"  style="width: 40%; float: left;">Facebook</div>
                <div class="col-xs-6" style="width: 50%; float: right;"><?php echo $candidate_info->facebook; ?></div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Mô tả bản thân</h2>
                </div>
            </div>

            <div class="row">          
                <div class="col-xs-6" style="width: 100%; float: left;">
                   <?php echo $candidate_info->description; ?>
                </div>
            <br>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <h2>Trình độ học vấn</h2>
                </div>
            </div>
            <?php foreach($listcetifie as $row): ?>
            <div class="row">
                <div class="col-xs-6" style="width: 40%; float: left;">
                    <i><?php echo $row->name; ?></i> <br>
                     <?php echo int_to_date($row->from_date); ?> - <?php echo int_to_date($row->to_date); ?>
                    <br> Chuyên nghành : <?php echo $row->major; ?></div>
          
                <div class="col-xs-6" style="width: 50%; float: right;">
                   <?php echo $row->info; ?>
                </div>
            <br>
            </div>
        <?php endforeach; ?>

              <div class="row">
                <div class="col-xs-12">
                    <h2>Kinh nghiệm làm việc</h2>
                </div>
            </div>
            <?php foreach($listexperience as $row): ?>
            <div class="row">
                <div class="col-xs-6" style="width: 40%; float: left;">
                    <i><?php echo $row->position; ?></i> <br>
                     <?php echo int_to_date($row->from_date); ?></i> - <?php echo int_to_date($row->to_date); ?></i>
                    <br> <?php echo $row->company_name ?></div>
          
                <div class="col-xs-6" style="width: 50%; float: right;">
                    <?php echo $row->description; ?>
                </div>
            <br>
            </div>
           <?php endforeach; ?>
           
  
            <div class="row">
                <div class="col-xs-12">
                    <h2>Kỹ năng</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <?php foreach($skilllist as $row): ?>
                    <i>- <?php echo $row->name; ?></i> <br>
                <?php endforeach; ?>
                </div>
            </div>
            <br>
            </div>

        </div>
    </div>
    <style>
        body {
            font-size: 14px;
        }

        h3 {
            margin: 0;
        }

        h2 {
            font-weight: bold;
            margin-bottom: 30px;
            font-size: 20px;
        }

        ul.square {
            list-style: square;
        }

        ul.square li {
            margin-bottom: 10px;
        }

        ul.square li:last-child {
            margin-bottom: 30px;
        }

        .avatar {
            float: left;
            position: absolute;
            top: 20px;
            width: 180px;
            right: 0;
        }
        
    </style>
    <!-- Scripts -->
    <!-- jQuery -->
    <script src="<?php echo public_url(); ?>/site/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo public_url(); ?>/site/js/bootstrap.min.js"></script>
    <!-- Bootstrap Select -->
    <script src="<?php echo public_url(); ?>/site/js/bootstrap-select.js"></script>
    <script src="<?php echo public_url(); ?>/site/js/scripts.js"></script>
</body>

</html>