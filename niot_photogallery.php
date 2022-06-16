<?php include("include/db_connection.php");



?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>National Institute of Ocean Technology</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include("include/sourcelink-css.php") ?>
</head>

<body id="page-top" style="background:#eeeeee;">
    <?php

    $get_administration = "select a1.mas_id,b1.title, a1.contents from niot_administration_$currentLang  as a1 	 
inner join mst_administration_$currentLang as b1  on a1.mas_id = b1.admin_id
where b1.status ='L' and a1.status = 'L'  and a1.contents <>''";
    $result_administration = pg_query($db, $get_administration);
    // $rowvalue = pg_fetch_array(
    //     $result_administration
    // );
    // $techcount_en = pg_num_rows($result_administration);
    // echo $get_administration;
    // 
    // exit;
    ?>
    <!-- bradcam_area_start  -->
    <!-- <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <h2 class="text-center" style="color:#041E42"><strong>News / Announcements</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- bradcam_area_end  -->

    <div class="bradcam_area_img breadcam_bg">
        <!-- <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <h2 class="text-center" style="color:#041E42"><strong>News / Announcements</strong></h2>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <div class="container" style="background:#eeeeee;">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3></h3>
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Galleries / <a href="#"> Photo Gallery </a> </p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div class="row">
            <div class="col-xl-12" style="padding-top:5px;">
                <div class="breadcrumb flat">
                    <a href="index.php"><i class="fa fa-home fa-lg"></i> Home</a>
                    <a href="#" class="active"> News / Announcements</a>
                </div>

            </div>
        </div>
    </div> -->
    <!-- <div class="pages" style="margin:auto;"> -->
    <!-- <div class="container"> -->
    <div class="col-lg-12" style="padding-left:150px;padding-right:150px;">
        <div class="section-title wow zoomIn" data-aos="fade-up">
            <h2 class="text-center contenttitle">Photo Gallery</h2>
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <section class="blog_area awardsection-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="image-wrap-2">
                            <div class="image-info">
                                <!-- <h2 class="mb-3">Nature</h2> -->
                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                            <div class="bottomright">
                                <h2 class="mb-3 text-center" style="color:#111">General Photo</h2>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="image-wrap-2">
                            <div class="image-info">
                                <h2 class="mb-3">Portrait</h2>
                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award2.png" alt="Image" class="img-fluid">
                            <div class="bottomright">
                                <h2 class="mb-3 text-center" style="color:#111">Technology</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="image-wrap-2">
                            <div class="image-info">
                                <h2 class="mb-3">People</h2>
                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                            <div class="bottomright">
                                <h2 class="mb-3 text-center" style="color:#111">Bottom Right</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-wrap-2">
                            <div class="image-info">
                                <h2 class="mb-3">Architecture</h2>
                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-wrap-2">
                            <div class="image-info">
                                <h2 class="mb-3">Animals</h2>
                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-wrap-2">
                            <div class="image-info">
                                <h2 class="mb-3">Sports</h2>
                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-wrap-2">
                            <div class="image-info">
                                <h2 class="mb-3">Travel</h2>
                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-wrap-2">
                            <div class="image-info">
                                <h2 class="mb-3">People</h2>
                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-wrap-2">
                            <div class="image-info">
                                <h2 class="mb-3">Architecture</h2>
                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                        </div>
                    </div>

                </div>
        </section>
    </div>
    <!-- </div> -->
    <?php include('include/bottomfooter.php'); ?>

    <?php include("include/sourcelink-js.php"); ?>
    <script src="js/csvjson.json"></script>
    <script>
        $(document).ready(function() {

        });

        $('#tbl-en-draft').DataTable();
        // $('#tbl-en-draft').DataTable({

        // });
    </script>
    <script>
        var json;
        $(document).ready(function() {

            // var data = eval("(" + json.responseText + ")");
            // document.write(data["a"]);
            // console.log(data);
            $(".filter-b").click(function() {
                var value = $(this).attr('data-filter');
                if (value == "all") {
                    $('.filter').show('1000');
                } else {
                    $(".filter").not('.' + value).hide('3000');
                    $('.filter').filter('.' + value).show('3000');
                }
            });

            if ($(".filter-b").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");

            $.getJSON("js/csvjson.json", function(json) {
                console.log(json);
            });
        });

        // SKILLS
        $(function() {
            $('.counter').counterUp({
                delay: 10,
                time: 2000
            });

        });
        let processScroll = () => {
            let docElem = document.documentElement,
                docBody = document.body,
                scrollTop = docElem['scrollTop'] || docBody['scrollTop'],
                scrollBottom = (docElem['scrollHeight'] || docBody['scrollHeight']) - window.innerHeight,
                scrollPercent = scrollTop / scrollBottom * 100 + '%';
            progressPercent = $('#progress-percent');
            // console.log(scrollTop + ' / ' + scrollBottom + ' / ' + scrollPercent);

            document.getElementById("progress-bar").style.setProperty("--scrollAmount", scrollPercent);
        }

        document.addEventListener('scroll', processScroll);
    </script>
</body>

</html>