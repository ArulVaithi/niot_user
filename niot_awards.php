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
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Who's Who / <a href="#"> Awards </a> </p>
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
    <div class="col-lg-12 main-section" >
        <div class="section-title wow zoomIn" data-aos="fade-up">
            <h2 class="text-center contenttitle">Awards</h2>
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <section class="blog_area awardsection-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <div class="row" id="lightgallery" >
                                <div class="col-lg-6" data-aos="fade" data-src="img/awards/award1.png" data-sub-html=" Dr. R. Venkatesan, Scientist G-@MoesNiot received \National Award\ from MoES for his outstanding contributions in the field of \Ocean Science & Technology\/during the MoES Foundation Day on 27th July 2018 at New Delhi">
                                    <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="img/awards/award1.png" alt="">
                                            <a href="#" class="blog_item_date">
                                                <h3>27</h3>
                                                <p>June</p>
                                                <p>2018</p>
                                            </a>
                                        </div>

                                        <div class="blog_details award_blog">
                                            <a class="d-inline-block" href="#">
                                                <h2>NIOT National Awards</h2>
                                            </a>
                                            <p> Dr. R. Venkatesan, Scientist G-@MoesNiot received \"National Award\" from MoES for his outstanding contributions in the field of \"Ocean Science & Technology\" during the MoES Foundation Day on 27th July 2018 at New Delhi</p>

                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6">
                                    <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="img/awards/award2.png" alt="">
                                            <a href="#" class="blog_item_date">
                                                <h3>15</h3>
                                                <p>Jan</p>
                                                <p>2018</p>
                                            </a>
                                        </div>

                                        <div class="blog_details award_blog">
                                            <a class="d-inline-block" href="#">
                                                <h2>Presidential Award</h2>
                                            </a>
                                            <p>Dr. M.A. Atmanand, Scientist-G was awarded with IEEE-OES Presidential Award for his outstanding services to the IEEE-OES as a volunteer during the IEEE/MTS Oceans conference held at Monterey, USA.</p>

                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6">
                                    <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="img/blog/single_blog_2.png" alt="">
                                            <a href="#" class="blog_item_date">
                                                <h3>15</h3>
                                                <p>Jan</p>
                                                <p>2018</p>
                                            </a>
                                        </div>

                                        <div class="blog_details award_blog">
                                            <a class="d-inline-block" href="#">
                                                <h2>Google inks pact for new 35-storey office</h2>
                                            </a>
                                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                                he earth it first without heaven in place seed it second morning saying.</p>

                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6">
                                    <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="img/blog/single_blog_2.png" alt="">
                                            <a href="#" class="blog_item_date">
                                                <h3>15</h3>
                                                <p>Jan</p>
                                                <p>2018</p>
                                            </a>
                                        </div>

                                        <div class="blog_details award_blog">
                                            <a class="d-inline-block" href="#">
                                                <h2>Google inks pact for new 35-storey office</h2>
                                            </a>
                                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                                he earth it first without heaven in place seed it second morning saying.</p>

                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6">
                                    <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="img/blog/single_blog_2.png" alt="">
                                            <a href="#" class="blog_item_date">
                                                <h3>15</h3>
                                                <p>Jan</p>
                                                <p>2018</p>
                                            </a>
                                        </div>

                                        <div class="blog_details  award_blog">
                                            <a class="d-inline-block" href="#">
                                                <h2>Google inks pact for new 35-storey office</h2>
                                            </a>
                                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                                he earth it first without heaven in place seed it second morning saying.</p>

                                        </div>
                                    </article>
                                </div>

                            </div>
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
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
            $('#lightgallery').lightGallery();
        });

        $('#tbl-en-draft').DataTable();
        // $('#tbl-en-draft').DataTable({

        // });
    </script>

   
</body>

</html>