<?php include("include/db_connection.php");

// echo $currentyear;
// exit;


$dir    = 'uploads/form16';
// Store the scandir results in a variable
$files = scandir($dir);
// Encode the array in JSON and echo it
$filename =  json_encode($files);
// echo $pan_count;
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

    ?>
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
            <div class="section-title wow zoomIn" data-aos="fade-up">
                <h3 class="text-center wow zoomIn "><strong>Download Form 16</strong></h3>
            </div>
            <hr class="hr_align">
            <!-- <div class="col-lg-2"> -->
            <!-- <div class="col-lg-12"> -->

            <form id="form16" data-parsley-validate="">
                <div class="text-center">
                    <span id="nodata_error"> </span>
                </div>
                <div class="row table_row" style="background:#B0F7F1">
                <div class="col-lg-2" >


</div>
                    <div class="col-lg-3">
                        <label for="title">Enter Pan Number<span class="mandatory"> *</span></label>
                        <span class="fa fa-id-card"></span>
                        <input type="text" class="form-control" id="pan_number" name="title" placeholder="Enter Pan Number Here" required="" data-parsley-length="[2,10]" data-parsley-group="block1" data-parsley-trigger="change" data-parsley-pannumbers>
                    </div>
                    <div class="col-lg-3 ">
                        <label for="title">Select DOB<span class="mandatory"> *</span></label>
                        <span class="input-group-addon"> <span class="fa fa-calendar"></span></span>
                        <input type="text" class="form-control date " style="font-size:13pt;font-weight:600;color:#111;" readonly id="dob" data-provide="datepicker" name="date" placeholder="Select DOB" required="" data-parsley-trigger="change keyup ">
                    </div>
                    <div class="col-lg-1" style="padding-top:15px;">
                        <label for="title"></label>
                        <button class="btn btn-info button-info " type="button" style="margin-left:10px;color:#fff;" onclick="get_records();"> Submit </button>
                    </div>
                    <div class="col-lg-3" >


                    </div>

                    <!-- </div> -->
                </div>
            </form>
            <br>
            <!-- </div> -->

            <div id="get_records">
            </div>
            <!-- </div> -->


    </section>

    <?php include("include/bottomfooter.php"); ?>

    <?php include("include/sourcelink-js.php"); ?>

    <script>
        var table;
        $(document).ready(function() {

            var date = new Date();
            var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
            currDate = $('.date').datepicker('setDate', today);
            // $('#tbl-en-draft').DataTable();

        });


        // var filenames = <?php echo $filename ?>;

        // var filearray = [];
        // // $('#tbl-en-draft').DataTable({
        // for (i = 2; i < filenames.length; i++) {
        //     filearray.push(filenames[i]);
        // }

        // console.log(filearray);
        // });

        function get_records() {

            if ($('#form16').parsley().validate() != true) {
                return false;

            } else {
                var pan_number = $('#pan_number').val();
                var dob = $('#dob').val();

                var data = {
                    pan_number: pan_number,
                    dob: dob,

                }
                $.ajax({
                    type: 'POST',
                    // contentType: "application/json",
                    // dataType: "json",
                    url: 'webservice/get_form16.php',
                    data: data,
                    success: function(response, textStatus, xhr) {
                        console.log(response);
                        if (response == 0) {
                            $('#nodata_error').text('Invalid PAN / DOB! Please Try again');
                            $("#get_records").html('');
                        } else {
                            //  console.log(response);
                            $('#nodata_error').text('');
                            $("#get_records").html(response);
                            table = $('#tbl-en-draft').DataTable();
                            // $('#tbl-en-draft').DataTable();
                            $(".select2").select2();
                        }
                    },
                    complete: function(xhr) {

                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        var response = XMLHttpRequest;
                        swal("Error :Archive!", "Please try again", "error");

                    }
                });
            }

        }
    </script>
</body>

</html>