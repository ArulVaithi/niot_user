<?php include("include/db_connection.php");
$currentyear = date("Y");
$previousyear = $currentyear - 1;

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

<body>
    <?php include("include/header.php");


    $get_year = "select * from (select date_part('year', event_dt) as years from mst_events_en  )  as a1   group by a1.years order by a1.years desc";
    // select date_part('year', event_dt) from mst_events_$currentLang where   event_dt >= now()-INTERVAL '1 DAY' group by event_dt";
    //     echo $get_year;
    //  exit;
    $resultget_year = pg_query($db, $get_year);

    ?>

    <!-- bradcam_area_start  -->
    <!-- <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <h2 class="text-center" style="color:#041E42"><strong>News Letter</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- bradcam_area_end  -->
    <div class="bradcam_area_img breadcam_bg"></div>

    <!-- 
    <div class="container">
        <div class="row">
            <div class="col-xl-12" style="padding-top:5px;">
                <div class="breadcrumb flat">
                    <a href="index.php"><i class="fa fa-home fa-lg"></i> Home</a>
                    <a href="#" class="active"> News Letter</a>
                </div>

            </div>
        </div>
    </div> -->


    <section>
        <div class="container table_container">
            <!-- <div class="container"> -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <p><a href="index.php"><i class="fa fa-home "> </i> /</a> About Us <a href="niot_events.php"> / Events </a> / Archive</p>
                    </div>
                </div>
                <!-- </div> -->

            </div>
            <!-- <div class="row"> -->
            <div class="data-tables ">
                <h3 class="text-center wow zoomIn table_head"><strong>Events (Archive)</strong></h3>

                <!-- <br> -->
                <div class="row table_row">
                    <div class="col-lg-2 table_align">
                        <!-- <a href="pressrelease_details_sidemenu.php" class="" style="color:blue;font-size:12pt">Another Sample</a> -->
                        <label style="font-size:15pt"><b>Choose Year :</b></label>
                    </div>

                    <div class="col-lg-3">
                        <select class="js-example-responsive select2" style="width: 100%;" id="getyear" onchange="get_records(this.value)">
                            <?php while ($r = pg_fetch_array($resultget_year)) {
                                echo "<option value='$r[0]'> $r[0] </option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-7">
                    </div>
                </div>
                <hr class="hr_align">
                <!-- <br> -->
                <div class="table-responsive">
                    <div id="getrecords">
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>

    <?php include("include/bottomfooter.php"); ?>

    <?php include("include/sourcelink-js.php"); ?>

    <script>
        $(document).ready(function() {
            $(".select2").select2();
            var currentyear = <?php echo $currentyear ?>;
            get_records(currentyear);
            $('#tbl-en-draft').DataTable();
        });


        // $('#tbl-en-draft').DataTable({

        // });


        function get_records(select_year) {
            var data = {
                select_year: select_year,
                page_name:'newsletter'
            }

            $.ajax({
                type: "POST",
                dataType: 'text',
                url: "webservice/get_eventarchive.php",
                data: data,
                success: function(response, textStatus, xhr) {

                    console.log(response);

                    $("#getrecords").html(response);
                    table = $('.tbl-en-draft').DataTable();

                    // $(".select2").select2();
                    //  statusAppend();
                },
                complete: function(xhr) {

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    var response = XMLHttpRequest;
                    swal("Error :Archive!", "Please try again", "error");

                }

            });
        }
    </script>
</body>

</html>