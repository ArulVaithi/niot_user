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


    $get_year = "select date_part('year', announce_dt) from mst_annualreport_$currentLang where date_part('year', announce_dt) <> $currentyear group by announce_dt";
    //    echo $get_year;
    //    exit;
    $resultget_year = pg_query($db, $get_year);


    ?>

    <!-- bradcam_area_start  -->
    <!-- <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <h2 class="text-center" style="color:#041E42"><strong>Annual Report</strong></h2>
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
                    <a href="#" class="active"> Annual Report</a>
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
                        <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Publications <a href="annualreports_details.php"> / Annual Report </a> / Annual Report (Archive)</p>
                    </div>
                </div>
                <!-- </div> -->

            </div>
            <!-- <div class="row"> -->
            <div class="data-tables ">
                <h3 class="text-center wow zoomIn table_head"><strong>Annual Reports (Archive)</strong></h3>

                <!-- <br> -->
                <div class="row table_row">
                    <div class="col-lg-2 table_align">
                        <!-- <a href="annualreport_details_sidemenu.php" class="" style="color:blue;font-size:12pt">Another Sample</a> -->
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
            var previousyear = <?php echo $previousyear ?>;
            get_records(previousyear);
            $('#tbl-en-draft').DataTable();
        });


        // $('#tbl-en-draft').DataTable({

        // });


        function get_records(select_year) {
            var data = {
                select_year: select_year,
                page_name:'annualreports'
            }

            $.ajax({
                type: "POST",
                dataType: 'text',
                url: "webservice/get_records.php",
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