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

    $mas_id = $_SESSION['gallery_id'];


    $get_documents = "select *,a1.uploaded_on as uploaddate from niot_photogallery_$currentLang  as a1 	 
inner join mst_photogallery_$currentLang  as b1  on a1.mas_id = b1.doc_id
where b1.status ='A' and a1.status = 'A' and a1.mas_id = $mas_id  order by a1.doc_id desc";
    $result_documents = pg_query($db, $get_documents);

    $photo_count = pg_num_rows($result_documents);

    $get_title = "select * from mst_photogallery_$currentLang where status='A' and doc_id=$mas_id";
    $result_title = pg_query($db, $get_title);
    $rowvalue = pg_fetch_array(
        $result_title
    );
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
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Galleries / <a href="niot_photogallery.php"> Photo Gallery </a> / <?php echo $rowvalue['title']?></p>
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
    <div class="col-lg-12 main-section">
        <div class="section-title wow zoomIn" data-aos="fade-up">
            <h2 class="text-center contenttitle"><?php echo $rowvalue['title']?> </h2>
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="site-section" data-aos="fade">
            <div class="container">
                <div class="row" id="lightgallery">
                    <?php while (
                        $row = pg_fetch_array(
                            $result_documents
                        )
                    ) {

                    ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="uploads/media/<?php echo $row['file_name'] ?>" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
                            <a href="#"><img src="uploads/media/<?php echo $row['file_name'] ?>" alt="IMage" class="img-fluid"></a>
                        </div>
                    <?Php } ?>
                    <!-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="img/awards/award1.png" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis quaerat molestiae, praesentium. Ipsam, reiciendis. Aut molestiae animi earum laudantium.</p>">
                        <a href="#"><img src="img/awards/award1.png" alt="IMage" class="img-fluid"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_3.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reiciendis, dolorum illo temporibus culpa eaque dolore rerum quod voluptate doloribus.</p>">
                        <a href="#"><img src="img/awards/award1.png" alt="IMage" class="img-fluid"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="img/awards/award2.png" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim perferendis quae iusto omnis praesentium labore tempore eligendi quo corporis sapiente.</p>">
                        <a href="#"><img src="img/awards/award2.png" alt="IMage" class="img-fluid galleryimg"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="img/awards/award1.png" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
                        <a href="#"><img src="img/awards/award1.png" alt="IMage" class="img-fluid"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="img/awards/award1.png" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis quaerat molestiae, praesentium. Ipsam, reiciendis. Aut molestiae animi earum laudantium.</p>">
                        <a href="#"><img src="img/awards/award1.png" alt="IMage" class="img-fluid"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_3.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reiciendis, dolorum illo temporibus culpa eaque dolore rerum quod voluptate doloribus.</p>">
                        <a href="#"><img src="img/awards/award1.png" alt="IMage" class="img-fluid"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="img/awards/award2.png" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim perferendis quae iusto omnis praesentium labore tempore eligendi quo corporis sapiente.</p>">
                        <a href="#"><img src="img/awards/award2.png" alt="IMage" class="img-fluid galleryimg"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="img/awards/award1.png" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
                        <a href="#"><img src="img/awards/award1.png" alt="IMage" class="img-fluid"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="img/awards/award1.png" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis quaerat molestiae, praesentium. Ipsam, reiciendis. Aut molestiae animi earum laudantium.</p>">
                        <a href="#"><img src="img/awards/award1.png" alt="IMage" class="img-fluid"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_3.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reiciendis, dolorum illo temporibus culpa eaque dolore rerum quod voluptate doloribus.</p>">
                        <a href="#"><img src="img/awards/award1.png" alt="IMage" class="img-fluid"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="img/awards/award2.png" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim perferendis quae iusto omnis praesentium labore tempore eligendi quo corporis sapiente.</p>">
                        <a href="#"><img src="img/awards/award2.png" alt="IMage" class="img-fluid galleryimg"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="img/awards/award1.png" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
                        <a href="#"><img src="img/awards/award1.png" alt="IMage" class="img-fluid"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="img/awards/award1.png" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis quaerat molestiae, praesentium. Ipsam, reiciendis. Aut molestiae animi earum laudantium.</p>">
                        <a href="#"><img src="img/awards/award1.png" alt="IMage" class="img-fluid"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_3.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reiciendis, dolorum illo temporibus culpa eaque dolore rerum quod voluptate doloribus.</p>">
                        <a href="#"><img src="img/awards/award1.png" alt="IMage" class="img-fluid"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="img/awards/award2.png" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim perferendis quae iusto omnis praesentium labore tempore eligendi quo corporis sapiente.</p>">
                        <a href="#"><img src="img/awards/award2.png" alt="IMage" class="img-fluid galleryimg"></a>
                    </div>   -->

                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <?php include('include/bottomfooter.php'); ?>

    <?php include("include/sourcelink-js.php"); ?>

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
            $('#lightgallery').lightGallery();
            // var data = eval("(" + json.responseText + ")");
            // document.write(data["a"]);
            // console.log(data);



        });
    </script>
</body>

</html>