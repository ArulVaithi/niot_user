<?php

// include '../include/session.php';
include("../include/db_connection.php");
$select_year = $_REQUEST['select_year'];
$table = $_REQUEST['page_name'];
$get_staff  = "seletct * from mst_staff where ";

$get_designation = "select * from mst_designation where status='L' order by des_id asc";
$result_des = pg_query($db, $get_designation);
// $res_row = pg_fetch_array($result_des);

?>
<section id="work-process" class="main-section">
    <h3 class="text-center wow zoomIn table_head"><strong>NIOT Staffs</strong></h3>
    <div class="staffaccordions-wrapper">
        <?php
        while ($res_row = pg_fetch_array($result_des)) { ?>
            <div class="staffaccordion">
                <div class="staffaccordion-header">
                    <h4><?Php echo $res_row['designation'] ?></h4>
                    <i class="fa fa-angle-up staffaccordion-icon"></i>
                </div>
                <div class="staffaccordion-body">
                    <div class="row  scroll-content" style="padding-top:10px; ">
                        <div class="col-lg-12">
                            <ul class="video-sec-middle" id="vid-grid">
                                <?Php 
                                $des_id = $res_row['des_id'];
                                $get_staff = "select * from mst_staff where des_id=$des_id";
                                $result_staff  = pg_query($db, $get_staff);
                                while ($staff_row = pg_fetch_array($result_staff)) { ?>
    
                                <li class="thumb-wrap"><a href="niot_staffprofile1.php">
                                    <img class="thumb" src="uploads/media/profile/<?php echo $staff_row['emp_code'] ?>.jpg" alt="<?Php echo $row['emp_code'] ?>">
                                    <div class="row ">
                                        <div class="thumb-info ">
                                            <p class="thumb-title text-center"><?Php echo $staff_row['staff_name']?></p>
                                            <p class="thumb-user text-center"><?Php echo $staff_row['designation']?></p>
                                        </div>
                                    </div>
                                    </a>
                                </li>
                               <?Php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?Php } ?>
    </div>
</section>

<script>
    const staffaccordionHeaders = document.querySelectorAll(".staffaccordion-header");

    staffaccordionHeaders[0].parentElement.classList.add("active");
    staffaccordionHeaders[0].nextElementSibling.style.maxHeight =
        staffaccordionHeaders[0].nextElementSibling.scrollHeight + "px";

    function toggleActivestaffaccordion(e, header) {
        const activestaffaccordion = document.querySelector(".staffaccordion.active");
        const clickedstaffaccordion = header.parentElement;
        const staffaccordionBody = header.nextElementSibling;


        if (activestaffaccordion && activestaffaccordion != clickedstaffaccordion) {
            activestaffaccordion.querySelector(".staffaccordion-body").style.maxHeight = 0;
            activestaffaccordion.classList.remove("active");
        }

        clickedstaffaccordion.classList.toggle("active");

        if (clickedstaffaccordion.classList.contains("active")) {
            staffaccordionBody.style.maxHeight = staffaccordionBody.scrollHeight + "px";
        } else {
            staffaccordionBody.style.maxHeight = 0;
        }
    }

    staffaccordionHeaders.forEach(function(header) {
        header.addEventListener("click", function(event) {
            toggleActivestaffaccordion(event, header);
        });
    });

    function resizeActivestaffaccordionBody() {
        const activestaffaccordionBody = document.querySelector(
            ".staffaccordion.active .staffaccordion-body"
        );
        if (activestaffaccordionBody)
            activestaffaccordionBody.style.maxHeight =
            activestaffaccordionBody.scrollHeight + "px";
    }

    window.addEventListener("resize", function() {
        resizeActivestaffaccordionBody();
    });
</script>