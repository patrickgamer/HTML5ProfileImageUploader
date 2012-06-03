<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>

    <title>HTML5 Image Uploader</title>

    <link href="css/bootstrap-2.0.3.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>

</head>
<body>

<div class="container">
    <section id="global">
        <div class="page-header">
            <h1>HTML5 image uploader
                <small>scale image client side</small>
            </h1>
        </div>
        <div class="row">
            <div class="span12">
                <h2>Online Demo</h2>

                <!-- Drop media. -->
                <div class="media-drop thumbnail pull-left">
                    <button class="close delete" data-dismiss="alert">×</button>
                    <div class="media-drop-placeholder">
                        <span class="media-drop-placeholder-title">Drop image here</span>
                        <span class="media-drop-placeholder-or">or</span>
                        <button class="btn btn-primary">Browse files...
                            <!-- Verstop input[type=file] in een "gewone" button. -->
                            <input name="media-drop-placeholder-file" type="file"/>
                        </button>
                    </div>
                </div>

                <!-- Slider -->
                <?php
                /*
                <div class="clearfix"></div>
                <div class="sliderblock">
                    <input class="sliderblock-slider" name="slider" id="slider" type="range" min="0" max="100" value="0"/>
                    <img class="sliderblock-icon-small" src="img/slider-small.png" width="9" height="7" alt=""/>
                    <img class="sliderblock-icon-big" src="img/slider-big.png" width="16" height="12" alt=""/>
                </div>
                */
                ?>

            </div>
        </div>
        <!-- /.row -->
    </section>
</div>

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.html5uploader-1.0.js"></script>
<script src="js/main.js"></script>

</body>
</html>
