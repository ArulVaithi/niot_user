<?php

// include '../include/session.php';
include("../include/db_connection.php");
$select_year = $_REQUEST['select_year'];
$table = $_REQUEST['page_name'];
$draftEn = "SELECT * FROM mst_". $table . "_" . $currentLang ." WHERE  (status='L' or  status='A') and date_part('year', announce_dt) = $select_year ORDER BY announce_dt desc";

$resultDraftEn = pg_query($db, $draftEn);

?>
<table id="tbl-en-draft" class="table  table-striped table-bordered table-hover dt-responsive " style="width:100">
    <!-- <button class="btn btn-success notika-btn-success pull-left" data-toggle="modal" data-target="#addModal" style="margin-right:20px;" onclick="addNew('en');"><i class="fa fa-plus"> </i> Add New</button>
<h3 class="text-center" style="padding-right:110px;">Draft Items</h3> -->
    <thead bgcolor="#DCDCDC">
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

<script>
     $(document).ready(function() {
        $('#tbl-en-draft').DataTable();
});
    </script>