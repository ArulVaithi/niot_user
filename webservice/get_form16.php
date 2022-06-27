<?php
include("../include/db_connection.php");

$pan_number = $_REQUEST['pan_number'];
$dob = $_REQUEST['dob'];

$check_pan = "select * from mst_staff where pan_number ='$pan_number' and dob ='$dob'";
$result_pan = pg_query($db, $check_pan);
$pan_count = pg_num_rows($result_pan);
$filearray = $_REQUEST['filearray'];

$dir    = '../uploads/form16';
// Store the scandir results in a variable
$files = scandir($dir);
// Encode the array in JSON and echo it
$filename = array($files);
// print_r($filename);
$array=[];
$filearrayvalue = [];
$length = count($filename[0]);
// echo $length;

for ($i = 0; $i < $length; $i++) {
    $filearrayvalue = $filename[$i];
    //  print_r($filename[$i]);
}
// exit;
// print_r($filearrayvalue);
// echo $filename;
//  exit;

if ($pan_count == 1) {

?>
 <div class="form16data-tables" id="table_content">
        <div class="table-responsive" id="get_records">
            <table id="tbl-en-draft" class="table table-striped table-bordered table-hover dt-responsive" style="width:100">
                <thead bgcolor="#fff">
                    <tr>
                        <th class="text-center" style="width:5%">S.No</th>
                        <th style="width:20%" class="text-center">Year</th>
                        <th class="text-center">File</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sno = 0;
                    
                    for($i= $length-1  ;$i > 1 ; $i--)
                    {

                        //echo $filename[0][$i]."\n";
	
                        $path = "uploads/form16/" . $filename[0][$i] . "/".$pan_number.".pdf";
                        $fileSize = filesize($path);
                        $fileSize = round($fileSize / 1024);

                    ?>
                        <tr>
                            <td><?php echo
                                ++$sno ?>
                            </td>
                            <td><?php
                                echo  $filename[0][$i]; ?></td>

                            <td style="width:20%;">
                                    <a href='<?php echo  $path;?>' target="_blank" style="color:blue;" title="View Here"> view  &nbsp; <i class="fa fa-file-pdf-o fa-lg" style="color:#F44336;"></i></a> &nbsp;&nbsp;<a href=""> <i class="fa fa-download fa-lg " style="color:#673AB7;" title="Download Here" aria-hidden="true"></i></a>
                                
                            </td>
                        </tr> <?php   } ?>

                </tbody>
            </table>
        </div>
    </div>
<?php } else {
    echo json_encode($pan_count); 
    exit;
}?>
<script>

    $(document).ready(function() {
     
        $('#tbl-en-draft').DataTable();
    });

    // var path = "Path = " +
    //                 "";
              
    //         el_up.innerHTML = path;
          
    //         function gfg_Run() {
    //             el_down.innerHTML = path.replace(/^.*[\\\/]/, '');
    //         }         
</script>