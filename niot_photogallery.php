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
    $get_category = "select * FROM mst_photogallery_$currentLang WHERE  status='A'";
    $result_category = pg_query($db, $get_category);

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
    <div class="col-lg-12 col-md-12 col-sm-12 main-section">
        <div class="section-title wow zoomIn" data-aos="fade-up">
            <h2 class="text-center contenttitle">Photo Gallery</h2>
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <section class=" awardsection-padding">
            <div class="container">
                <div class="row">
                    <?php
                    while (
                        $row = pg_fetch_array(
                            $result_category
                        )
                    ) {
                        $mas_id = $row['doc_id'];

                        $get_image = "select file_name from niot_photogallery_$currentLang where status='A' and mas_id =$mas_id  order by doc_id desc";
                        $result_image = pg_query($db, $get_image);
                        $img_row = pg_fetch_array($result_image);
                        $img_name = $img_row['file_name'];
                        $documents_count = pg_num_rows($result_image);
                        //echo $documents_count;
                        if ($documents_count == 0) {
                            $file = 'img/no_image.png';
                        } else {
                            $file = "uploads/media/$img_name";
                        }
                    ?>
                        <div class="col-lg-4 ">
                            <div class="image-wrap-2">
                                <a href="niot_photogallerydetails.php" onclick="redirect_url('<?php echo $row['doc_id']; ?>')">
                                    <div class="image-info">
                                        <!-- <h2 class="mb-3">Nature</h2> -->
                                        <a href="niot_photogallerydetails.php" class="btn btn-info btn-outline-white py-2 px-4 " onclick="redirect_url('<?php echo $row['doc_id']; ?>')">More Photos</a>
                                    </div>
                                    <img src="<?Php echo $file ?>" alt="Image" class="img-fluid">
                                </a>
                                <div class="bottomright">
                                    <h3 class="mb-3 text-center" style="color:#111"><?Php echo $row['title'] ?></h3>
                                </div>
                            </div>

                        </div>
                    <?Php } ?>
                    <!-- <div class="col-lg-4  ">
                        <div class="image-wrap-2">
                            <div class="image-info">
                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award2.png" alt="Image" class="img-fluid">
                            <div class="bottomright">
                                <h3 class="mb-3 text-center">Technology</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="image-wrap-2">
                            <div class="image-info">
                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                            <div class="bottomright">
                                <h3 class="mb-3 text-center">Events</h3>
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg-4 ">
                        <div class="image-wrap-2">
                            <div class="image-info">

                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-4 ">
                        <div class="image-wrap-2">
                            <div class="image-info">
                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-4 ">
                        <div class="image-wrap-2">
                            <div class="image-info">

                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-4 ">
                        <div class="image-wrap-2">
                            <div class="image-info">

                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-4 ">
                        <div class="image-wrap-2">
                            <div class="image-info">

                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-4 ">
                        <div class="image-wrap-2">
                            <div class="image-info">

                                <a href="niot_photogallerydetails.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>
                            <img src="img/awards/award1.png" alt="Image" class="img-fluid">
                        </div>
                    </div>-->

                </div>
        </section>
    </div>
    <!-- </div> -->
    <?php include('include/bottomfooter.php'); ?>

    <?php include("include/sourcelink-js.php"); ?>
    <!-- <script src="js/csvjson.json"></script> -->
    <script>
        $(document).ready(function() {

        });

        function redirect_url(id) {
            var current_lang = $('#current_lang').text();
            var data = {
                id: id,
                lang: current_lang
            }
            console.log(data);
            // return false;
            $.ajax({
                url: "webservice/gallery_session.php",
                type: 'POST',
                dataType: 'json',
                data: data
            }).done(function(res) {
                //  console.log(res);
                //  return false;
                // if (res.valid) {
                //     document.location.href = 'niot_photogallerydetails.php';
                // }
            });
        }
    </script>
</body>

</html>