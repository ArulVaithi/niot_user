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

<body id="page-top">
    <?php

    $draftEn = "SELECT * FROM mst_newsannouncement_$currentLang WHERE  status='L' ORDER BY uploaded_on desc";
    $resultDraftEn = pg_query($db, $draftEn);
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

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3></h3>
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Who's Who / <a href="niot_staffs.php"> NIOT Staff /</a> NIOT Staff Profile</p>
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
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-3">
                <div class=" sticky_text">
                    <nav id="nav-quick" class="">
                        <div class="quick-menu bg-primary" style="border-radius:20px;">
                            <div id="navbarSupportedContent">
                                <a class="navbar js-scroll-trigger" href="#page-top">
                                    <span class="d-block d-lg-none  mx-0 px-0"><img src="img/logo-white.png" alt="" class="img-fluid"></span>
                                    <span class="d-none d-lg-block">
                                        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/leaders/leader3.jpg" alt="">
                                    </span>
                                </a>
                                <h3 class="username text-center">Dr G A RAMADASS</h3>
                                <h5 class="username text-center">Director</h5>
                                <ul class="quick-1st nobulletstyle">
                                    <li><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                                    <li><a class="nav-link js-scroll-trigger" href="#academic">Academic Background</a></li>
                                    <li><a class="nav-link js-scroll-trigger" href="#specialisation">Area of specialisation</a></li>
                                    <li><a class="nav-link js-scroll-trigger" href="#awards">Awards & Honors</a></li>
                                    <li><a class="nav-link js-scroll-trigger" href="#portfolio">Publications</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- <div class="row"> -->
            <div class="col-lg-9">
                <div id="content" >
                    <section class="page-section resume-section  p-lg-5 d-flex d-column" id="about">
                        <div class="row my-auto">
                            <div class="col-12">
                                <h2 class=" text-center">About</h2>
                                <div class=" heading-border"></div>
                            </div>
                            <div class="resume-item col-md col-sm-12 col-lg-12">
                                <!-- <img src="" class="img-fluid mb-3" alt=""> -->
                                <h1 class="mb-0 text-primary">Dr G A RAMADASS
                                    <!-- <span class="text-primary">Bonsen</span> -->
                                </h1>
                                <div class="subheading mb-3">Director of NIOT
                                </div>
                                <div class="col-lg-12">
                                    <p class="">I am experienced in leveraging agile frameworks to provide a robust
                                        synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to
                                        further the overall value proposition.</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-inline list-social-icons mb-0 ">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <span class="fa-stack fa-lg">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <span class="fa-stack fa-lg">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="list-inline list-social-icons mb-0 pull-right">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <span class="fa-stack fa-lg">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <span class="fa-stack fa-lg">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <span class="fa-stack fa-lg">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <span class="fa-stack fa-lg">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="page-section resume-section p-3 p-lg-" id="academic">
                        <div class="row my-auto">
                            <div class="col-12">
                                <h2 class="  text-center">Academic Background</h2>
                                <div class="mb-5 heading-border"></div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div id="experience" class="row mt-12">
                                    <div class="col-12">
                                        <div class="mt-1 shadow">
                                            <!-- <h5 class="bg-secondary text-white p-3">Work Experience</h5> -->
                                            <!-- <hr class="text-muted"> -->
                                            <div class="p-3">

                                                <table class="table table-responsive">
                                                    <thead class="" style="background:#eeeeee;">
                                                        <tr>
                                                            <th class="col-3">Qualification</th>
                                                            <th>Discipline</th>
                                                            <th>University</th>
                                                            <th class="col-1">Passed Year</th>
                                                            <!-- <th class="col-1">To</th> -->

                                                        </tr>
                                                    </thead>
                                                    <tbody id="workExperience">
                                                        <td>PHD</td>
                                                        <td>PHYSICS</td>
                                                        <td>IITMADRAS</td>
                                                        <td>1992</td>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="resume-item col-md-6 col-sm-12">
                        <div class="card mx-0 p-4 mb-5" style="border-color: #2196f3; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                            <div class="resume-content mr-auto">
                                <h4 class="mb-3"><i class="fa fa-area-chart mr-3 text-primary"></i> Web Design Intern</h4>
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the
                                    digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information
                                    highway will close the loop on focusing solely on the bottom line.</p>
                            </div>
                            <div class="resume-date text-md-right">
                                <span class="text-primary">September 2018 - June 2019</span>
                            </div>
                        </div>
                    </div> -->
                        </div>
                    </section>
                    <section class="page-section resume-section p-3 d-flex flex-column" id="specialisation">
                        <div class="">
                            <div class="col-12">
                                <h2 class=" text-center" style="color:#111;">Area of Specialisation</h2>
                                <div class="mb-3 heading-border"></div>
                            </div>
                            <!-- <h3 class="text-center text-white">Area of Specialisation</h3> -->
                            <div class="row text-center my-auto ">
                                <div class="resume-item col-md-6 col-sm-12 ">
                                    <div class="card mx-0 p-4 mb-5" style="border-color: #17a2b8; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                                        <div class=" resume-content mr-auto">
                                            <h4 class="mb-3"><i class="fa fa-globe mr-3 text-info"></i> Manned and Unmanned Underwater Vehicles</h4>
                                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the
                                                digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information
                                                highway will close the loop on focusing solely on the bottom line.</p>
                                        </div>
                                        <div class="resume-date text-md-right">
                                            <span class="text-primary">Passed Year: 1992</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="resume-item col-md-6 col-sm-12">
                                    <div class="card mx-0 p-4 mb-5" style="border-color: #ffc107; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                                        <div class="resume-content mr-auto">
                                            <h4 class="mb-3"><i class="fa fa-laptop mr-3 text-warning"></i> Underwater Acoustics</h4>
                                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the
                                                digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information
                                                highway will close the loop on focusing solely on the bottom line.</p>
                                        </div>
                                        <div class="resume-date text-md-right">
                                            <span class="text-primary">passed year: 1986</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="resume-item col-md-6 col-sm-12">
                                    <div class="card mx-0 p-4 mb-5" style="border-color: #28a745; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                                        <div class="resume-content mr-auto">
                                            <h4 class="mb-3"><i class="fa fa-camera mr-3 text-success"></i> Marine Instruments</h4>
                                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the
                                                digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information
                                                highway will close the loop on focusing solely on the bottom line.</p>
                                        </div>
                                        <div class="resume-date text-md-right">
                                            <span class="text-primary">Passed Year: 1984</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="page-section resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
                        <div class="    ">
                            <div class="col-12">
                                <h2 class="  text-center">Awards</h2>
                                <div class="mb-5 heading-border"></div>
                            </div>
                            <div class="main-award" id="award-box">
                                <div class="award wow bounceInLeft">
                                    <div class="award-icon"></div>
                                    <div class="award-content">
                                        <span class="date">2010</span>
                                        <h5 class="title">National Geoscience award </h5>
                                        <p class="description">
                                            Recipient of the National Geoscience award for the year 2010 under the Exploration of Oil and Natural Gas from Ministry of Mines, Govt of India
                                        </p>
                                    </div>
                                </div>
                                <div class="award wow bounceInRight">
                                    <div class="award-icon"></div>
                                    <div class="award-content">
                                        <span class="date">2018</span>
                                        <h5 class="title">National Meritorious Invention Award</h5>
                                        <p class="description">
                                            Recipient of the National Meritorious Invention Award under the category of National Societal Innovation Award – 2018 from NRDC (DSIR- Government of India)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="page-section resume-section p-3 p-lg-5 d-flex flex-column" id="portfolio">
                        <div class="row my-auto">
                            <div class="col-12">
                                <h2 class="text-center">Publications</h2>
                                <div class="mb-5 heading-border"></div>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-lg-6 wow bounceInUp">
                                <div class="resume-content mr-auto">
                                    <h4 class="mb-3"><i class="text-primary"></i> Patents and Publications </h4>
                                    <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the
                                        digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information
                                        highway will close the loop on focusing solely on the bottom line. </p>
                                </div>
                            </div>
                            <div class="col-lg-6 wow bounceInRight">
                                <div class="resume-content mr-auto">
                                    <img class="img-fluid img-profile  mx-auto " src="img/publication.png" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
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
    </script>
</body>

</html>