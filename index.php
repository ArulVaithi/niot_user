<?php include 'include/db_connection.php';



// Set Language variable

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>National Institute of Ocean Technology</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'include/sourcelink-css.php'; ?>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php

    $draftEn =
        "select  title from mst_newsannouncement_$currentLang where  status='L' order by uploaded_on desc ";
    $resultannounce = pg_query($db, $draftEn);
    $announcecount = pg_num_rows($resultannounce);

    $pressrelease =
        "select  title from mst_pressrelease_$currentLang where  status='L' order by uploaded_on desc ";
    // echo $pressrelease;
    $resultpressrelease = pg_query($db, $pressrelease);
    $pressreleasecount = pg_num_rows($resultpressrelease);

    // $ministervalue = base64_encode('niot_minister');
    // $secretaryvalue = base64_encode('niot_secretary');
    // $directorvalue = base64_encode('niot_director');

    $technology = "select * from niot_technology 	 
inner join niot_addtech on niot_technology.mas_id = niot_addtech.techid
where niot_addtech.status ='A' and niot_technology.status = 'A'";
    $resulttechnology = pg_query($db, $technology);

    // echo substr($content, 0, 50);

    $recruitment = "select title from mst_recruitment_$currentLang where title_id in (select title_id from 
mst_recruitment_$currentLang  group by title_id   limit 2 ) group by title";

    $resultRec = pg_query($db, $recruitment);
    $reccount = pg_num_rows($resultRec);

    $events = "select * from mst_events_$currentLang  where status= 'L' and event_dt >= now()-INTERVAL '1 DAY' order by updated_on desc limit 2";
    $resultevent = pg_query($db, $events);
    $eventcount = pg_numrows($resultevent);

    $annualreport =
        "select title from mst_annualreports_$currentLang where status= 'L' order by announce_dt desc limit 3";
    // echo $newsletter;
    $resultannualreport = pg_query($db, $annualreport);
    $annualcount = pg_num_rows($resultannualreport);

    $newsletter =
        "select title from mst_newsletter_$currentLang where status= 'L' order by announce_dt desc limit 3";
    // echo $newsletter;
    $resultnewsletter = pg_query($db, $newsletter);
    $newscount = pg_num_rows($resultnewsletter);

    $slider = "select * from mst_slider where status= 'L' order by position_order";

    $resultslider = pg_query($db, $slider);
    $newscount = pg_num_rows($resultnewsletter);


    ?>
    <!-- header-end -->
    <!-- <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div> -->

    <!-- slider_area_start -->

    <div class="slider_area">

        <div class="slider_active owl-carousel">
            <?php
            $i = 0;
            while (
                $row = pg_fetch_array($resultslider)
            ) {

                $userfile_extn = substr($row['filename'], strrpos($row['filename'], '.') + 1);
                $smallcase_extn  = strtolower($userfile_extn);

                if ($smallcase_extn == 'jpg' || $smallcase_extn == 'jpeg' || $smallcase_extn == 'png') {
            ?>
                    <div class="single_slider  d-flex align-items-center">

                        <img src="uploads/<?php echo $row['filename'] ?>" alt="<?php echo $row['alt_name'] ?>" style="object-fit:cover; background-repeat: no-repeat;
                   background-size: auto;max-width:100%;max-height:100%">
                    </div>
                <?php  } else if ($smallcase_extn == 'mp4') { ?>
                    <div class="single_slider  d-flex align-items-center">
                        <video autoplay loop muted poster="uploads/<?php echo $row['filename'] ?>" class="slideAnimationVideo" preload>
                            <source src="uploads/<?php echo $row['filename'] ?>" type="video/mp4" media="all and (min-width: 1024 px)">
                        </video>
                    </div>
            <?php  }
            } ?>
        </div>
        <!-- <video autoplay loop muted poster="img/video/slide_video9.mp4" class="slideAnimationVideo" preload>
                    <source src="img/video/slide_video9.mp4" type="video/mp4" media="all and (min-width: 1024 px)">
                </video> -->




        <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->

        <!-- <div class="single_slider  d-flex align-items-center">
                <video autoplay loop muted poster="img/video/slide_video9.mp4" class="slideAnimationVideo" preload>
                    <source src="img/video/slide_video9.mp4" type="video/mp4" media="all and (min-width: 1024 px)">
                </video> -->

        <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- </div> -->
        <!-- <div class="single_slider  d-flex align-items-center">
                <video autoplay loop muted poster="img/video/slide_video2.mp4" class="slideAnimationVideo" preload>
                    <source src="img/video/slide_video2.mp4" type="video/mp4" media="all and (min-width: 1024 px)">
                </video> -->
        <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- </div> -->
        <!--  <div class="single_slider  d-flex align-items-center">
                <video autoplay loop muted poster="img/video/slide_video9.mp4" class="slideAnimationVideo" preload autoplay>
                    <source src="img/video/slide_video9.mp4" type="video/mp4">
                </video> -->
        <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- </div>
            <div class="single_slider  d-flex align-items-center">
                <video autoplay loop muted poster="img/video/slide_video10.mp4" class="slideAnimationVideo" preload autoplay>
                    <source src="img/video/slide_video10.mp4" type="video/mp4">
                </video> -->
        <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- </div> -->
        <!-- <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    </div>
    </div>
    <!-- slider_area_end -->

    <?php if (isset($_SESSION['lang'])) {
        include "indexcontent_$currentLang.php";
    } else {
        $currentLang = 'en';
        include "indexcontent_en.php";
    }
    ?>
    <?php include 'include/footer.php'; ?>


    <!-- form itself end-->
    <!-- <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Make an Appointment</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-6">
                            <input id="datepicker" placeholder="Pick date">
                        </div>
                        <div class="col-xl-6">
                            <input id="datepicker2" placeholder="Suitable time">
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Select Department">Department</option>
                                <option value="1">Eye Care</option>
                                <option value="2">Physical Therapy</option>
                                <option value="3">Dental Care</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Doctors">Doctors</option>
                                <option value="1">Mirazul Alom</option>
                                <option value="2">Monzul Alom</option>
                                <option value="3">Azizul Isalm</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="Phone no.">
                        </div>
                        <div class="col-xl-12">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form> -->
    <!-- form itself end -->

    <!-- JS here -->
    <?php include 'include/sourcelink-js.php'; ?>


    <script type="text/javascript">
        $(document).ready(function() {});

        function gettechnology() {

        }
        $(".btn-tgg").on("click", function() {
            $(".tgg1").toggleClass("tgg2");
        });

        function openTab(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("indextabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
    </script>
</body>

</html>