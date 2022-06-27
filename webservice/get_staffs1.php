<?php

// include '../include/session.php';
include("../include/db_connection.php");
$select_year = $_REQUEST['select_year'];
$table = $_REQUEST['page_name'];
$des_id = $_REQUEST['des_id'];
$get_staff  = "seletct * from mst_staff where ";

$get_designation = "select * from mst_designation where status='L' and des_id order by des_id asc";
$result_des = pg_query($db, $get_designation);
// $res_row = pg_fetch_array($result_des);

?>
 
            <div class="row portfolio-container wow zoomInRight" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-6 portfolio-item filter-image">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/award1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/award1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-image">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/award2.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/award2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-video">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/award1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/award1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-image">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/award1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/award1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-video">
                    <div class="portfolio-wrap">
                        <a class="gallery-lightbox" href="img/portfolio/slide_video7.mp4"><video width="400" height="250">
                                <source src="img/portfolio/slide_video7.mp4" class="img-fluid" type="video/mp4">
                            </video></a>
                        <div class="portfolio-info">
                            <h4>Card</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/slide_video7.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card ">
                                  
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/award1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/award1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-image">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio/award2.png" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="img/portfolio/award2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="fa fa-eye"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-image">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio/award2.png" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="img/portfolio/award2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="fa fa-eye"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-image">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio/award2.png" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="img/portfolio/award2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="fa fa-eye"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-video">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-video">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> -->

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