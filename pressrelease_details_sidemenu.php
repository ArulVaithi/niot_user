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

<body>
    <?php include("include/header.php");

    $draftEn = "SELECT * FROM mst_pressrelease_$currentLang WHERE  status='L' ORDER BY uploaded_on desc";
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

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3></h3>
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Publications / Press Release</p>
                </div>
            </div>
        </div>
    </div>
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
        <!-- <div class="container"> -->
        <!-- <div class="row"> -->
        <div class="data-tables " style="padding-left:50px;padding-right:50px">
            <h3 class="text-center wow zoomIn"><strong>Press Release</strong></h3>
            <div class="row">
                <div class="col-lg-10">

                    <div class="table-responsive">
                        <table id="tbl-en-draft" class="table  table-bordered dt-responsive wow zoomInUp" style="width:100">
                            <!-- <button class="btn btn-success notika-btn-success pull-left" data-toggle="modal" data-target="#addModal" style="margin-right:20px;" onclick="addNew('en');"><i class="fa fa-plus"> </i> Add New</button>
                    <h3 class="text-center" style="padding-right:110px;">Draft Items</h3> -->
                            <thead bgcolor="#D3D3D3">
                                <tr>
                                    <!-- <th><input type="checkbox" class="" id='checkallusers' onclick="checkAll(id);"> All
                                                        </th> -->
                                    <th class="text-center">S.No</th>
                                    <th style="width:100%" class="text-center">Title</th>
                                    <th class="text-center">Announce Date</th>
                                    <th class="text-center">File</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">S.No</td>
                                    <td style="width:100%" class="text-center">Title</td>
                                    <td class="text-center">Announce Date</td>
                                    <td class="text-center">File</td>
                                </tr>
                                <tr>
                                    <td class="text-center">S.No</td>
                                    <td style="width:100%" class="text-center">Title</td>
                                    <td class="text-center">Announce Date</td>
                                    <td class="text-center">File</td>
                                </tr>
                                <tr>
                                    <td class="text-center">S.No</td>
                                    <td style="width:100%" class="text-center">Title</td>
                                    <td class="text-center">Announce Date</td>
                                    <td class="text-center">File</td>
                                </tr>
                                <tr>
                                    <td class="text-center">S.No</td>
                                    <td style="width:100%" class="text-center">Title</td>
                                    <td class="text-center">Announce Date</td>
                                    <td class="text-center">File</td>
                                </tr>
                                <tr>
                                    <td class="text-center">S.No</td>
                                    <td style="width:100%" class="text-center">Title</td>
                                    <td class="text-center">Announce Date</td>
                                    <td class="text-center">File</td>
                                </tr>
                                <tr>
                                    <td class="text-center">S.No</td>
                                    <td style="width:100%" class="text-center">Title</td>
                                    <td class="text-center">Announce Date</td>
                                    <td class="text-center">File</td>
                                </tr>
                                <tr>
                                    <td class="text-center">S.No</td>
                                    <td style="width:100%" class="text-center">Title</td>
                                    <td class="text-center">Announce Date</td>
                                    <td class="text-center">File</td>
                                </tr>
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
                                        <td><?php
                                            echo  date(
                                                'd-m-Y ',
                                                strtotime(
                                                    $row['announce_dt']
                                                )
                                            );
                                            ?></td>

                                        <td style="width:20%;"><?php
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

                            </tbody>
                        </table>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="col-lg-2 pressticky_text" style="background:#cfecf7;height:100% ;position: -webkit-sticky;
                  position: sticky;">
                    <div class="sub-content " style="background:#fff">
                        <h3 class="text-center">Press Release Year</h3>
                        <ul class="bulletstyle">
                            <li><a href="" class="link-02"> 2022</a></li>
                            <li><a href=""> 2021</a></li>
                            <!-- <li>Sed ut perspiciatis unde omnis iste natus error sit</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- </div> -->

    </section>

    <?php include("include/bottomfooter.php"); ?>

    <?php include("include/sourcelink-js.php"); ?>

    <script>
        $(document).ready(function() {

        });

        $('#tbl-en-draft').DataTable();
        // $('#tbl-en-draft').DataTable({

        // });
    </script>
</body>

</html>