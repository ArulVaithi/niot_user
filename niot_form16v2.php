<?php include("include/db_connection.php");
$currentyear = date("Y");
// echo $currentyear;
// exit;
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

    $draftEn = "SELECT * FROM mst_pressrelease_$currentLang WHERE  status='L' and date_part('year', announce_dt) = $currentyear ORDER BY announce_dt desc";
    $resultDraftEn = pg_query($db, $draftEn); ?>
    <!-- bradcam_area_start  -->
    <!-- <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <h2 class="text-center" style="color:#041E42"><strong>Press Release</strong></h2>
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
                    <a href="#" class="active"> Press Release</a>
                </div>

            </div>
        </div>
    </div> -->


    <section>
        <div class="container formtable_container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <p><a href="index.php"><i class="fa fa-home "> </i> /</a> <a href="niot_employeescorner.php"> Employees Corner /</a> Form 16</p>
                    </div>
                </div>
            </div>
            <!-- <div class="row"> -->

            <h3 class="text-center wow zoomIn table_head"><strong>Form 16</strong></h3>
            <hr class="hr_align">
            <!-- <div class="col-lg-2"> -->
            <!-- <div class="col-lg-12"> -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="row table_row" style="background:#B4F7B0;padding-top:10px;">
                    <form  id="form16" data-parsley-validate=""> 
                        <div class="col-lg-12" style="padding-top:15px;">
                            <label for="title">Enter Pan Number<span class="mandatory"> *</span></label>
                            <span class="fa fa-id-card"></span>
                            <input type="text" class="form-control" id="editTitle" name="title" placeholder="Enter Pan Number Here" required="" data-parsley-length="[2,10]" data-parsley-group="block1" data-parsley-trigger="change"  data-parsley-pannumbers >
                        </div>
                        <div class="col-lg-12" style="padding-top:15px;">
                            <label for="title">Select DOB<span class="mandatory"> *</span></label>
                            <span class="input-group-addon"> <span class="fa fa-calendar"></span></span>
                            <input type="text" class="form-control date " style="font-size:13pt;font-weight:600;color:#111;" readonly id="endDate" data-provide="datepicker" name="date" placeholder="Enter DOB" required="" data-parsley-trigger="change" >
                        </div>
                        <div class="col-lg-12 text-center" style="padding-top:15px;">
                            <label for="title"></label>
                            <button class="btn btn-info button-info " style="margin-left:10px;color:#fff;" onclick="get_records();"> Submit </button>
                        </div>
                    </form>
                        <!-- <div class="col-lg-3">
                        </div> -->
                        <!-- </div> -->
                    </div>
                </div>
                <br>
                <!-- </div> -->
                <div class="col-lg-9">
                    <div class="form16data-tables" id="table_content">
                        <div class="table-responsive">
                            <table id="tbl-en-draft" class="table table-striped table-bordered table-hover dt-responsive" style="width:100">
                                <!-- <button class="btn btn-success notika-btn-success pull-left" data-toggle="modal" data-target="#addModal" style="margin-right:20px;" onclick="addNew('en');"><i class="fa fa-plus"> </i> Add New</button>
                   <h3 class="text-center" style="padding-right:110px;">Draft Items</h3> -->
                                <thead bgcolor="#fff">
                                    <tr>
                                        <!-- <th><input type="checkbox" class="" id='checkallusers' onclick="checkAll(id);"> All
                                                        </th> -->
                                        <th class="text-center" style="width:5%">S.No</th>
                                        <th style="width:50%" class="text-center">Year</th>

                                        <th class="text-center">File</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    while (
                                        $row = pg_fetch_array(
                                            $resultDraftEn

                                        )

                                    ) {
                                        $path = "../niotadmin/uploads/" . $row['filename'] . "";
                                        $fileSize = filesize($path);
                                        $fileSize = round($fileSize / 1024);
                                        //   var_dump($fileSize);
                                        // $file1 = basename($path);
                                        // $file2 = pathinfo($path );
                                        // pathinfo($path);
                                        // echo $path;
                                        // exit;

                                    ?>
                                        <tr>

                                            <td><?php echo
                                                ++$i ?>
                                            </td>
                                            <td><?php
                                                echo  $row['title']; ?></td>

                                            <td style=""><?php
                                                                    if ($row['filename'] != '') {
                                                                    ?>
                                                    <a href='../niotadmin/uploads/<?php echo $row['filename'] ?>' target="_blank" style="color:blue;" title="View Here"> view (<?php echo  $row['filesize'];  ?> ) &nbsp; <i class="fa fa-file-pdf-o fa-lg" style="color:#F44336;"></i></a> &nbsp;&nbsp;<a href=""> <i class="fa fa-download fa-lg " style="color:#673AB7;" title="Download Here" aria-hidden="true"></i></a>
                                                <?php
                                                                    } else {
                                                ?>
                                                    <a href='<?php echo $row['ad_link']; ?>' target="_blank" style="color:blue;"> click Here </a><?php
                                                                                                                                                }
                                                                                                                                                    ?>
                                            </td>
                                        </tr> <?php  } ?>
                                        <tr>
                                            <td>2</td>
                                            <td>test</td>
                                            <td>wer</td>
                                        </tr>

                                </tbody>
                            </table>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <?php include("include/bottomfooter.php"); ?>

    <?php include("include/sourcelink-js.php"); ?>

    <script>
        $(document).ready(function() {
          //  $('#table_content').hide();
            var date = new Date();
            var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
            currDate = $('.date').datepicker('setDate', today);
        });

        $('#tbl-en-draft').DataTable();
        // $('#tbl-en-draft').DataTable({

        // });
        function get_records() {
            if ($('#form16').parsley().validate() != true) {
                return false;

            } else {

            }
           // $('#table_content').show();
        }
    </script>
</body>

</html>