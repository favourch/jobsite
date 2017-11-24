<!DOCTYPE html>
<html lang="en">
<head>
   <?php $this->load->view('site/head'); ?>
</head>
<body>

        <!-- Header -->
        <header class="header">
        <?php $this->load->view('site/header',$this->data); ?>
        </header> <!-- end .header -->
        <!-- Responsive Menu -->
        

        <!-- Load home -->
        <?php $this->load->view($temp,$this->data); ?>

        <!-- footer -->
        <?php $this->load->view('site/footer'); ?>
        
    </body>
</html>