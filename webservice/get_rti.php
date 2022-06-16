<?php
include("../include/db_connection.php");
$mas_id = $_REQUEST['mas_id'];

$get_content = "select  a1.mas_id,b1.title,a1.contents from niot_rti_$currentLang  as a1 	 
                    inner join mst_rti_$currentLang as b1  on a1.mas_id = b1.doc_id
                    where a1.mas_id = $mas_id ";
$result_content = pg_query($db, $get_content);

$content = pg_fetch_array($result_content);
?>

<section class="admin_section  administration_bg ">
    <div class="row ">
        <div class="col-lg-12 ">
            <h2><?php echo $content['title']; ?></h2>
            <div class="admin_header"></div>
        </div>
    </div>
    <div class="row">
        <div class="resume-item col-md col-sm-12 col-lg-12">
            <?Php echo $content['contents'] ?>
        </div>
    </div>
</section>