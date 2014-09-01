<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Swadaya Berkarya</title>

        <!--CSS From Foundation -->
        <link rel="stylesheet" href="<?php echo base_url('media/css/normalize.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('media/css/foundation.min.css') ?>">

        <!-- Ionicon -->
        <link rel="stylesheet" href="<?php echo base_url('media/css/ionicons.min.css') ?>">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url('media/css/style.css'); ?>"> 

        <script src="<?php echo base_url('media/js/modernizr.js') ?>"></script>

    </head>
    <body>

        <div class="antialiased">
            <div class="off-canvas-wrap">
                <div class="small-11 small-centered columns">
                    <div class="row">
                        <ul class="example-orbit" data-orbit data-options="bullets:false;">
                            <li>
                                <img src="<?php echo base_url('media/img/DSCN0311.jpg'); ?>" alt="slide 1" />
                                <div class="orbit-caption">
                                    Keseruan perayaan 17 Agustus 2014.
                                </div>
                            </li>
                            <li class="active">
                                <img src="<?php echo base_url('media/img/DSCN0274.jpg'); ?>" alt="slide 2" />
                                <div class="orbit-caption">
                                    Perayaan HUT RI ke 69.
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url('media/img/DSCN0355.jpg'); ?>" alt="slide 3" />
                                <div class="orbit-caption">
                                   Persiapan perayaan HUT RI ke 69 - 17 Agustus 2014.
                                </div>
                            </li>
                        </ul>
                    </div>

                    <?php if (isset($main)): ?>
                        <?php $this->load->view($main); ?>
                    <?php endif; ?>
                    <div class="row">
                        <div class="footer-black">
                            <div class="row">
                                <div class="medium-4 medium-4 push-8 columns">
                                    <div class="socmed">
                                        <h1><a href="twitter.com" class="ion-social-twitter"></a><a href="facebook.com" class="ion-social-facebook"></a><a href="gmail.com" class="ion-ios7-email"></a></h1>
                                    </div>
                                </div>
                                <div class="medium-8 medium-8 pull-4 columns">
                                    <p><b>Powered by : Karang Taruna "Swadaya Berkarya"</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url('media/js/jquery-2.1.1.min.js') ?>"></script>
        <script src="<?php echo base_url('media/js/jquery.js') ?>"></script>
        <script src="<?php echo base_url('media/js/foundation.min.js') ?>"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>