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

<body id="page-top">
    <?php

    $draftEn = "SELECT * FROM mst_newsannouncement_$currentLang WHERE  status='L' ORDER BY uploaded_on desc";
    $resultDraftEn = pg_query($db, $draftEn);
    ?>
    <!-- bradcam_area_start  -->
    <!-- <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <h2 class="text-center" style="color:#041E42"><strong>News / Announcements</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- bradcam_area_end  -->

    <div class="bradcam_area_img breadcam_bg">
        <!-- <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <h2 class="text-center" style="color:#041E42"><strong>News / Announcements</strong></h2>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3></h3>
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Who's Who / NIOT Staff</p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div class="row">
            <div class="col-xl-12" style="padding-top:5px;">
                <div class="breadcrumb flat">
                    <a href="index.php"><i class="fa fa-home fa-lg"></i> Home</a>
                    <a href="#" class="active"> News / Announcements</a>
                </div>

            </div>
        </div>
    </div> -->

    <svg display="none">
        <symbol id="close" viewBox="0 0 20 20">
            <line x1="2" y1="2" x2="18" y2="18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            <line x1="2" y1="18" x2="18" y2="2" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        </symbol>
        <symbol id="left" viewBox="0 0 20 20">
            <polyline points="11,7 8,10 11,13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        </symbol>
        <symbol id="right" viewBox="0 0 20 20">
            <polyline points="9,7 12,10 9,13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        </symbol>
    </svg>
    <!-- <div class="row">
        <div class="col-lg-12" style="padding:0px 70px 50px 70px">
            <div class="col-lg-4">
                <div class="container-block">
                    <img src="img/leaders/leader1.jpg">
                    <div class="inner-block">
                        <div class="slider-top-right"></div>
                    </div>
            \
                    <div class="content text-center" style="background-color:#fff;">
                        <span style="color:#111;text-align:center">Dr. Jitendra Singh</span>
                        <span style="color:#111;">UNION MINISTER, MOES </span>
                    </div>
                </div>
            </div>

        </div>
    </div> -->
    <!-- <div id="img_grid" class="img-grid">
        <div class="container-block"> -->
    <div id="get_records">

    </div>

    <!-- <div class="row text-center" >
            <h1 class="">NIOT Staffs</h1>
        </div> -->


  
    <!-- </div>
        </div> -->

    <!--  <li class="thumb-wrap"><a href="">
                                    <img class="thumb" src="https://images.unsplash.com/photo-1559083991-9bdef0bb5a39?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1955&q=80" alt="">
                                    <div class="thumb-info">
                                        <p class="thumb-title">Ravindran</p>
                                        <p class="thumb-user">Username</p>
                                        <p class="thumb-text">4.6K Views</p>
                                    </div>
                                </a></li>
                            <li class="thumb-wrap"><a href="">
                                    <img class="thumb" src="https://images.unsplash.com/photo-1560800589-3d88290dd749?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1955&q=80" alt="">
                                    <div class="thumb-info">
                                        <p class="thumb-title">Video Title 4</p>
                                        <p class="thumb-user">Username</p>
                                        <p class="thumb-text">3K Views</p>
                                    </div>
                                </a></li>
                            <li class="thumb-wrap"><a href="">
                                    <img class="thumb" src="https://images.unsplash.com/photo-1560716092-203a1703e06e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1955&q=80" alt="">
                                    <div class="thumb-info">
                                        <p class="thumb-title">Ravindran</p>
                                        <p class="thumb-user">Username</p>
                                        <p class="thumb-text">126K Views</p>
                                    </div>
                                </a></li>
                            <li class="thumb-wrap"><a href="">
                                    <img class="thumb" src="https://images.unsplash.com/photo-1565210227317-2a6e64e9b778?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="">
                                    <div class="thumb-info">
                                        <p class="thumb-title">Video Title 6</p>
                                        <p class="thumb-user">Username</p>
                                        <p class="thumb-text">255 Views</p>
                                    </div>
                                </a></li>
                            <li class="thumb-wrap"><a href="">
                                    <img class="thumb" src="https://images.unsplash.com/photo-1508180752316-db2148802010?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="">
                                    <div class="thumb-info">
                                        <p class="thumb-title">Ravindran</p>
                                        <p class="thumb-user">Username</p>
                                        <p class="thumb-text">100K Views</p>
                                    </div>
                                </a></li>
                            <li class="thumb-wrap"><a href="">
                                    <img class="thumb" src="https://images.unsplash.com/photo-1465287651408-7c76e5e8b191?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="">
                                    <div class="thumb-info">
                                        <p class="thumb-title">Video Title 8 - Semi Long Title</p>
                                        <p class="thumb-user">Username</p>
                                        <p class="thumb-text">1.8M Views</p>
                                    </div>
                                </a></li>
                            <li class="thumb-wrap"><a href="">
                                    <img class="thumb" src="https://images.unsplash.com/photo-1461995748424-ea60adff3fcd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="">
                                    <div class="thumb-info">
                                        <p class="thumb-title">Ravindran</p>
                                        <p class="thumb-user">Username</p>
                                        <p class="thumb-text">78 Views</p>
                                    </div>
                                </a></li>
                            <li class="thumb-wrap"><a href=""> 
                                    <img class="thumb" src="https://images.unsplash.com/photo-1551292831-023188e78222?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="">
                                    <div class="thumb-info">
                                        <p class="thumb-title">Ravindran</p>
                                        <p class="thumb-user">Username</p>
                                        <p class="thumb-text">22K Views</p>
                                    </div>
                                </a></li>-->
    </ul>
    </div>
    </div>
    <!-- <div id="img_grid" class="img-grid">
        <div class="container-block">
            <a href="niot_staffprofile1.php">
            <img src="img/leaders/leader3.jpg" style="width:300px;height:310px">
            <div class="inner-block">
                <div class="slider-top-right"></div>
            </div>

            <div class="content text-center" style="background-color:#fff;">
                <span style="color:#111;text-align:center">Dr G A RAMADASS</span>
                <span style="color:#111;">Director </span>
            </div>
            </a>
        </div>
        <div class="container-block">
        <a href="niot_staffprofile1.php">
            <img src="img/leaders/leader4.jpg"  style="width:300px;height:310px">
            <div class="inner-block">
                <div class="slider-top-right"></div>
            </div>

            <div class="content text-center" style="background-color:#fff;">
                <span style="color:#111;text-align:center">Dr PURNIMA JALIHAL</span>
                <span style="color:#111;">Group Head - EFW & CEE, SCIENTIST-G </span>
            </div>
        </a>
        </div>
        <div class="container-block">
        <a href="niot_staffprofile1.php">
            <img src="img/leaders/leader5.jpg"  style="width:300px;height:310px">
            <div class="inner-block">
                <div class="slider-top-right"></div>
            </div>

            <div class="content text-center" style="background-color:#fff;">
                <span style="color:#111;text-align:center">Dr DHILSHA RAJAPAN</span>
                <span style="color:#111;"> Group Head - MSS, SCIENTIST-G</span>
            </div>
        </a>
        </div>
        <div class="container-block">
        <a href="niot_staffprofile1.php">
            <img src="img/leaders/leader6.jpg"  style="width:300px;height:310px">
            <div class="inner-block">
                <div class="slider-top-right"></div>
            </div>

            <div class="content text-center" style="background-color:#fff;">
                <span style="color:#111;text-align:center">Dr RAJASEKHAR D</span>
                <span style="color:#111;">Group Head - VMC, SCIENTIST-G </span>
            </div>
        </a>
        </div>
              
        <a href="#" class="staffcard">
            <div class="inner-block">
                <div class="slider-top-right"></div>
            </div>
            <div class="content">
                <span class="title">Dr. Jitendra Singh</span>
                <span class="category">UNION MINISTER, MOES </span>
            </div>

            <div class="image">
                <img src="img/leaders/leader1.jpg" alt="" />
            </div>
        </a>

      
        <div class="img-grid__cell">
            <button class="img-grid__cell-img-btn" type="button" data-action="open" data-id="1">
                <img class="img-grid__cell-img" alt="Random image" src="img/leaders/leader2.jpg" width="300" height="225" data-thumb>
            </button>
            <div class="img-grid__cell-caption">
                <a class="img-grid__cell-caption-link" href="#">
                    <span class="img-grid__cell-caption-title">Random Image 2</span><br>
                    <span class="img-grid__cell-caption-subtitle">picsum.photos</span>
                </a>
            </div>
        </div>
        <div class="img-grid__cell">
            <button class="img-grid__cell-img-btn" type="button" data-action="open" data-id="2">
                <img class="img-grid__cell-img" alt="Random image" src="img/leaders/leader3.jpg" width="300" height="225" data-thumb>
            </button>
            <div class="img-grid__cell-caption">
                <a class="img-grid__cell-caption-link" href="#">
                    <span class="img-grid__cell-caption-title">Random Image 3</span><br>
                    <span class="img-grid__cell-caption-subtitle">picsum.photos</span>
                </a>
            </div>
        </div>
        <div class="img-grid__cell">
            <button class="img-grid__cell-img-btn" type="button" data-action="open" data-id="3">
                <img class="img-grid__cell-img" alt="Random image" src="img/leaders/leader4.jpg" width="100%" height="100%" data-thumb>
            </button>
            <div class="img-grid__cell-caption">
                <a class="img-grid__cell-caption-link" href="#">
                    <span class="img-grid__cell-caption-title">Random Image 4</span><br>
                    <span class="img-grid__cell-caption-subtitle">picsum.photos</span>
                </a>
            </div>
        </div>
        <div class="img-grid__cell">
            <button class="img-grid__cell-img-btn" type="button" data-action="open" data-id="4">
                <img class="img-grid__cell-img" alt="Random image" src="img/leaders/leader5.jpg" width="300" height="225" data-thumb>
            </button>
            <div class="img-grid__cell-caption">
                <a class="img-grid__cell-caption-link" href="#">
                    <span class="img-grid__cell-caption-title">Random Image 5</span><br>
                    <span class="img-grid__cell-caption-subtitle">picsum.photos</span>
                </a>
            </div>
        </div>
        <div class="img-grid__cell">
            <button class="img-grid__cell-img-btn" type="button" data-action="open" data-id="5">
                <img class="img-grid__cell-img" alt="Random image" src="https://picsum.photos/seed/_6/300/225.webp" width="300" height="225" data-thumb>
            </button>
            <div class="img-grid__cell-caption">
                <a class="img-grid__cell-caption-link" href="#">
                    <span class="img-grid__cell-caption-title">Random Image 6</span><br>
                    <span class="img-grid__cell-caption-subtitle">picsum.photos</span>
                </a>
            </div>
        </div>
        <div class="img-grid__cell">
            <button class="img-grid__cell-img-btn" type="button" data-action="open" data-id="6">
                <img class="img-grid__cell-img" alt="Random image" src="https://picsum.photos/seed/_7/300/225.webp" width="300" height="225" data-thumb>
            </button>
            <div class="img-grid__cell-caption">
                <a class="img-grid__cell-caption-link" href="#">
                    <span class="img-grid__cell-caption-title">Random Image 7</span><br>
                    <span class="img-grid__cell-caption-subtitle">picsum.photos</span>
                </a>
            </div>
        </div>
        <div class="img-grid__cell">
            <button class="img-grid__cell-img-btn" type="button" data-action="open" data-id="7">
                <img class="img-grid__cell-img" alt="Random image" src="https://picsum.photos/seed/_8/300/225.webp" width="300" height="225" data-thumb>
            </button>
            <div class="img-grid__cell-caption">
                <a class="img-grid__cell-caption-link" href="#">
                    <span class="img-grid__cell-caption-title">Random Image 8</span><br>
                    <span class="img-grid__cell-caption-subtitle">picsum.photos</span>
                </a>
            </div>
        </div>
        <div class="img-grid__cell">
            <button class="img-grid__cell-img-btn" type="button" data-action="open" data-id="8">
                <img class="img-grid__cell-img" alt="Random image" src="https://picsum.photos/seed/_9/300/225.webp" width="300" height="225" data-thumb>
            </button>
            <div class="img-grid__cell-caption">
                <a class="img-grid__cell-caption-link" href="#">
                    <span class="img-grid__cell-caption-title">Random Image 9</span><br>
                    <span class="img-grid__cell-caption-subtitle">picsum.photos</span>
                </a>
            </div>
        </div>
        <div class="img-grid__cell">
            <button class="img-grid__cell-img-btn" type="button" data-action="open" data-id="9">
                <img class="img-grid__cell-img" alt="Random image" src="https://picsum.photos/seed/_10/300/225.webp" width="300" height="225" data-thumb>
            </button>
            <div class="img-grid__cell-caption">
                <a class="img-grid__cell-caption-link" href="#">
                    <span class="img-grid__cell-caption-title">Random Image 10</span><br>
                    <span class="img-grid__cell-caption-subtitle">picsum.photos</span>
                </a>
            </div>
        </div> -->

    <?php include('include/bottomfooter.php'); ?>

    <?php include("include/sourcelink-js.php"); ?>
    <!-- <script src="js/csvjson.json"></script> -->
    <script>
        $(document).ready(function() {
            get_records();
        });

        function get_records() {

$.ajax({
    type: 'POST',
    // contentType: "application/json",
    // dataType: "html",
    url: 'webservice/get_staffs.php',
    // data: data,
    success: function(response, textStatus, xhr) {

       // console.log(response);

        $("#get_records").html(response);
        //      $('adminquick-1st li a').removeClass('active');
        // $('adminquick-1st li a .nav-click').addClass('active');
        //    table = $('.tbl-en-draft').DataTable();

        // $(".langselec").select2();

    },
    complete: function(xhr) {

    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
        var response = XMLHttpRequest;
        swal("Error :Archive!", "Please try again", "error");

    }
});
}
        // $('#tbl-en-draft').DataTable({

        // });
    </script>
    <script>
        // var json;
        // $(document).ready(function() {

        //     // var data = eval("(" + json.responseText + ")");
        //     // document.write(data["a"]);
        //     // console.log(data);
        //     $(".filter-b").click(function() {
        //         var value = $(this).attr('data-filter');
        //         if (value == "all") {
        //             $('.filter').show('1000');
        //         } else {
        //             $(".filter").not('.' + value).hide('3000');
        //             $('.filter').filter('.' + value).show('3000');
        //         }
        //     });

        //     if ($(".filter-b").removeClass("active")) {
        //         $(this).removeClass("active");
        //     }
        //     $(this).addClass("active");

        //     $.getJSON("js/csvjson.json", function(json) {
        //         console.log(json);
        //     });
        // });

        // // SKILLS
        // $(function() {
        //     $('.counter').counterUp({
        //         delay: 10,
        //         time: 2000
        //     });

        // });

        // window.addEventListener("DOMContentLoaded", () => {
        //     const ig = new ImageGrid("#img_grid");
        // });

        // class ImageGrid {
        //     constructor(selector) {
        //         this.el = document.querySelector(selector);
        //         this.detailPaneOpen = true;
        //         this.currentImage = 0;
        //         this.images = 10;

        //         this.updateView();

        //         this.el?.addEventListener("click", this.action.bind(this));
        //         document.addEventListener("keydown", this.action.bind(this));
        //     }
        //     action(e) {
        //         const {
        //             key,
        //             shiftKey,
        //             target
        //         } = e;
        //         const action = target.getAttribute("data-action");
        //         const imageID = +target.getAttribute("data-id");

        //         if (key !== "Tab" && !shiftKey) {
        //             // open the pane (or close if clicking the thumb)
        //             if (!key && action === "open") {
        //                 if (imageID === this.currentImage && this.detailPaneOpen)
        //                     this.closeDetailPane();
        //                 else
        //                     this.openDetailPane(imageID);

        //                 // close the pane
        //             } else if (key === "Escape" || action === "close") {
        //                 this.closeDetailPane();

        //                 // previous image
        //             } else if (key === "ArrowLeft" || (!key && action === "prev")) {
        //                 this.prev();

        //                 // next image
        //             } else if (key === "ArrowRight" || (!key && action === "next")) {
        //                 this.next();
        //             }

        //             this.updateView();
        //             this.moveFocus(target, action);
        //         }
        //     }
        //     closeDetailPane() {
        //         this.detailPaneOpen = false;
        //     }
        //     openDetailPane(imageID) {
        //         this.detailPaneOpen = true;
        //         this.currentImage = imageID;
        //     }
        //     prev() {
        //         --this.currentImage;

        //         if (this.currentImage < 0)
        //             this.currentImage = 0;
        //     }
        //     next() {
        //         ++this.currentImage;

        //         if (this.images < 2)
        //             this.currentImage = 0;
        //         else if (this.currentImage === this.images)
        //             this.currentImage = this.images - 1;
        //     }
        //     moveFocus(target, action) {
        //         const isPrev = action === "prev";
        //         const isNext = action === "next";

        //         if (isPrev || isNext) {
        //             if (target.disabled) {
        //                 if (isPrev)
        //                     this.el.querySelector(`[data-action="next"]`)?.focus();
        //                 else if (isNext)
        //                     this.el.querySelector(`[data-action="prev"]`)?.focus();
        //             } else {
        //                 target.focus();
        //             }
        //         }
        //     }
        //     updateView() {
        //         // open or close the pane
        //         const dataID = this.currentImage;
        //         const detailPane = document.querySelector("[data-open]");
        //         detailPane?.setAttribute("data-open", this.detailPaneOpen ? "true" : "false");

        //         // change its DOM location
        //         const minWidths = [768, 1024, 1280];
        //         const matchedWidths = minWidths.filter(width => {
        //             const mediaQuery = window.matchMedia(`(min-width: ${width}px)`);
        //             return mediaQuery.matches;
        //         });
        //         const imagesPerRow = 2 + matchedWidths.length;
        //         const moveToRow = 1 + Math.ceil((dataID + 1) / imagesPerRow);
        //         detailPane.style.gridRow = moveToRow;

        //         const firstCellInRow = this.el.querySelector(`[data-id="${dataID}"]`);
        //         this.el.insertBefore(detailPane, firstCellInRow?.parentNode.nextSibling);

        //         // scroll to it
        //         if (this.detailPaneOpen) {
        //             const firstCellBtn = this.el.querySelector(`[data-id="0"]`);
        //             const firstCell = firstCellBtn?.parentElement;
        //             const {
        //                 offsetHeight,
        //                 offsetTop
        //             } = firstCell;
        //             const scrollY = detailPane.offsetTop - (offsetHeight + offsetTop * 2);

        //             window.scrollTo({
        //                 top: scrollY,
        //                 behavior: "smooth"
        //             });
        //         }

        //         const paneImage = this.el.querySelector(`[data-image]`);
        //         const paneThumbBtns = this.el.querySelectorAll(`[data-id]`);
        //         const paneThumbBtn = this.el.querySelector(`[data-id="${dataID}"]`);
        //         const paneThumb = paneThumbBtn?.querySelector(`[data-thumb]`);

        //         // “…active” class
        //         Array.from(paneThumbBtns).forEach((btn, i) => {
        //             const activeClass = "img-grid__cell-img-btn--active";

        //             if (i === dataID && this.detailPaneOpen)
        //                 btn.classList.add(activeClass);
        //             else
        //                 btn.classList.remove(activeClass);
        //         });

        //         // update the src
        //         if (paneImage && paneThumb)
        //             paneImage.src = paneThumb.src;

        //         // update the title
        //         const paneTitle = this.el.querySelector("[data-title]");
        //         if (paneTitle)
        //             paneTitle.textContent = `Random Image ${dataID + 1}`;

        //         // disable the left arrow if on the first image
        //         const prevButton = this.el.querySelector(`[data-action="prev"]`);
        //         if (prevButton)
        //             prevButton.disabled = dataID === 0;

        //         // disable the right arrow if on the last image
        //         const nextButton = this.el.querySelector(`[data-action="next"]`);
        //         if (nextButton)
        //             nextButton.disabled = this.images < 2 || dataID === this.images - 1;
        //     }
        // }
    </script>
</body>

</html>