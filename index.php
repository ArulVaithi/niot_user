<?php include 'include/db_connection.php';



// Set Language variable

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>National Institute of Ocean Technology</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'include/sourceLink-css.php'; ?>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php

    $draftEn =
        "select  title from mst_newsannouncement_$currentLang where  status='L' order by uploaded_on desc limit 2";
    $resultannounce = pg_query($db, $draftEn);
    $announcecount = pg_num_rows($resultannounce);

    $pressrelease =
        "select  title from mst_pressrelease_$currentLang where  status='L' order by uploaded_on desc limit 3";
    // echo $pressrelease;
    $resultpressrelease = pg_query($db, $pressrelease);
    $pressreleasecount = pg_num_rows($resultpressrelease);

    // $ministervalue = base64_encode('niot_minister');
    // $secretaryvalue = base64_encode('niot_secretary');
    // $directorvalue = base64_encode('niot_director');

    $technology = "select * from niot_technology 	 
inner join niot_addtech on niot_technology.mas_id = niot_addtech.techid
where niot_addtech.status ='A' and niot_technology.status = 'A'";
    $resulttechnology = pg_query($db, $technology);

    // echo substr($content, 0, 50);

    $recruitment = "select title from mst_recruitment_$currentLang where title_id in (select title_id from 
mst_recruitment_$currentLang  group by title_id   limit 2 ) group by title";

    $resultRec = pg_query($db, $recruitment);
    $reccount = pg_num_rows($resultRec);

    $events = "select * from mst_events_$currentLang  where status= 'L' order by updated_on desc limit 2";
    $resultevent = pg_query($db, $events);
    $eventcount = pg_numrows($resultevent);

    $annualreport =
        "select title from mst_annualreports_$currentLang where status= 'L' order by announce_dt desc limit 3";
    // echo $newsletter;
    $resultannualreport = pg_query($db, $annualreport);
    $annualcount = pg_num_rows($resultannualreport);

    $pressrelease =
        "select title from mst_pressrelease_$currentLang where status= 'L' order by announce_dt desc limit 3";
    // echo $newsletter;
    $resultpressrelease = pg_query($db, $pressrelease);
    $pressreleasecount = pg_num_rows($resultpressrelease);

    $newsletter =
        "select title from mst_newsletter_$currentLang where status= 'L' order by announce_dt desc limit 3";
    // echo $newsletter;
    $resultnewsletter = pg_query($db, $newsletter);
    $newscount = pg_num_rows($resultnewsletter);

    $slider = "select * from mst_slider where status= 'L' order by position_order";

    $resultslider = pg_query($db, $slider);
    $newscount = pg_num_rows($resultnewsletter);

    $menu_query = "select menu_$currentLang as menu from mst_menu limit 1";

    $resultmenu = pg_query($db, $menu_query);
    $get_menu = pg_fetch_assoc($resultmenu);

    $get_menujson = json_encode($get_menu);



    ?>
    <!-- header-end -->
    <!-- <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div> -->

    <!-- slider_area_start -->

    <div class="slider_area">

        <div class="slider_active owl-carousel">
            <?php
            $i = 0;
            while (
                $row = pg_fetch_array($resultslider)
            ) {

                $userfile_extn = substr($row['filename'], strrpos($row['filename'], '.') + 1);
                $smallcase_extn  = strtolower($userfile_extn);

                if ($smallcase_extn == 'jpg' || $smallcase_extn == 'jpeg' || $smallcase_extn == 'png') {
            ?>
                    <div class="single_slider  d-flex align-items-center">

                        <img src="uploads/<?php echo $row['filename'] ?>" alt="<?php echo $row['alt_name'] ?>" style="object-fit:cover; background-repeat: no-repeat;
                   background-size: auto;max-width:100%;max-height:100%">
                    </div>
                <?php  } else if ($smallcase_extn == 'mp4') { ?>
                    <div class="single_slider  d-flex align-items-center">
                        <video autoplay loop muted poster="uploads/<?php echo $row['filename'] ?>" class="slideAnimationVideo" preload>
                            <source src="uploads/<?php echo $row['filename'] ?>" type="video/mp4" media="all and (min-width: 1024 px)">
                        </video>
                    </div>
            <?php  }
            } ?>
        </div>
        <!-- <video autoplay loop muted poster="img/video/slide_video9.mp4" class="slideAnimationVideo" preload>
                    <source src="img/video/slide_video9.mp4" type="video/mp4" media="all and (min-width: 1024 px)">
                </video> -->




        <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->

        <!-- <div class="single_slider  d-flex align-items-center">
                <video autoplay loop muted poster="img/video/slide_video9.mp4" class="slideAnimationVideo" preload>
                    <source src="img/video/slide_video9.mp4" type="video/mp4" media="all and (min-width: 1024 px)">
                </video> -->

        <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- </div> -->
        <!-- <div class="single_slider  d-flex align-items-center">
                <video autoplay loop muted poster="img/video/slide_video2.mp4" class="slideAnimationVideo" preload>
                    <source src="img/video/slide_video2.mp4" type="video/mp4" media="all and (min-width: 1024 px)">
                </video> -->
        <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- </div> -->
        <!--  <div class="single_slider  d-flex align-items-center">
                <video autoplay loop muted poster="img/video/slide_video9.mp4" class="slideAnimationVideo" preload autoplay>
                    <source src="img/video/slide_video9.mp4" type="video/mp4">
                </video> -->
        <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- </div>
            <div class="single_slider  d-flex align-items-center">
                <video autoplay loop muted poster="img/video/slide_video10.mp4" class="slideAnimationVideo" preload autoplay>
                    <source src="img/video/slide_video10.mp4" type="video/mp4">
                </video> -->
        <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- </div> -->
        <!-- <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    </div>
    </div>
    <!-- slider_area_end -->

    <?php if (isset($_SESSION['lang'])) {
        include "indexcontent_$currentLang.php";
    } else {
        $currentLang = 'en';
        include "indexcontent_en.php";
    }
    ?>
    <?php include 'include/footer.php'; ?>


    <!-- form itself end-->
    <!-- <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Make an Appointment</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-6">
                            <input id="datepicker" placeholder="Pick date">
                        </div>
                        <div class="col-xl-6">
                            <input id="datepicker2" placeholder="Suitable time">
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Select Department">Department</option>
                                <option value="1">Eye Care</option>
                                <option value="2">Physical Therapy</option>
                                <option value="3">Dental Care</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Doctors">Doctors</option>
                                <option value="1">Mirazul Alom</option>
                                <option value="2">Monzul Alom</option>
                                <option value="3">Azizul Isalm</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="Phone no.">
                        </div>
                        <div class="col-xl-12">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form> -->
    <!-- form itself end -->

    <!-- JS here -->
    <?php include 'include/sourceLink-js.php'; ?>


    <script type="text/javascript">
        $(document).ready(function() {
            //  load_menu();
        });

        function load_menu() {
            //alert();
            // var setmenu = $("#json-output").val();
            // var data = [{
            //     "menu": setmenu
            // }];

            var lang_value = '<?php echo $currentLang ?>';

            $.ajax({
                url: "webservice/get_menu.php",
                type: "POST",
                text: JSON,
                data: {
                    lang: lang_value,
                    operation: 'get'
                },
                // dataType: "html",
                success: function(data) {
                    // console.log(data);
                    var data = JSON.parse(data);
                    // var parsevalue = JSON.parse(data);
                    // console.log(parsevalue.getdata);
                    // var getvalue = parsevalue.getdata
                    console.log(data);
                    var menu_json = JSON.parse(data.getdata.menu);
                    var menu = JSON.parse(menu_json);
                    var menu_value = [{
                        "menu": menu
                    }];
                    var data1 = [{
                        "status": 'ok',
                        "getdata": menu_value
                    }]

                    var menu1 = $('#navigation');


                    parseMenu(menu1, JSON.stringify(data1));

                    // parseMenu(getvalue);

                    // for (var i = 0, j = getvalue.length; i < j; i++) {
                    //     var root_menu = getvalue[i];
                    //     if (root_menu.hasOwnProperty("id")) {

                    //         $("#navigation").append("<li><a  href='index.php'>" + root_menu.name + "<i class='ti-angle-down'></i></a>");

                    //         if (root_menu.hasOwnProperty("children") && root_menu.children.length > 0) {

                    //             $("#navigation").append("<ul class='submenu' id='menu_" + root_menu.id + "'  >");

                    //             for (var n = 0, m = root_menu.children.length; n < m; n++) {
                    //                 var sub_menu = root_menu.children[n];
                    //                 console.log(sub_menu);
                    //                 if (sub_menu.hasOwnProperty("id")) {
                    //                     $("#menu_" + root_menu.id).append("<li ><a href='' >" + sub_menu.name + "</a></li>");
                    //                 }
                    // $("#menu_"+ root_menu.id).append("</ul>");
                    //             }
                    //              $("#menu_").append("</ul>");
                    //             $("#navigation").append("</li>");
                    //         }

                    //     }
                    // }


                },
                error: function(xhr, ajaxOptions, thrownError) {
                    swal("Error !", "Please try again", "error");
                }
            });

        }

        function gettechnology() {

        }


        //         function parseMenu(ul, menuvalue) {
        //             // console.log(data);
        //             // return false;
        //             var data = jQuery.parseJSON(menuvalue);
        //             var getdata = data[0].getdata;
        //             console.log(data[0].getdata[0]);

        //             // var data = jQuery.parseJSON(data);
        //             // var menu = data;

        //             // var data = data[0].getdata;
        //             // console.log(data[0].getdata[0].menu.length);
        //             // for (var i = 0; i < menu_data[0].getdata[0].menu.length; i++) {
        //             //     console.log(menu_data[0].getdata[0].menu[i]);
        //             //     alert();
        //             //     var root_menu = menu_data[0].getdata[0].menu[i];
        //             //     var li = $('<li><a href="' + menu_data[0].getdata[0].menu[i].Link + '">' + menu_data[0].getdata[0].menu[i].name + '</a></li>').appendTo(ul);
        //             //     console.log(root_menu.Menus);
        //             //     // If sub menus contain something 
        //             //     if (menu_data[0].getdata[0].menu[i].Menus != null) {
        //             //         var subul = $('<ul id="submenu-' + menu_data[0].getdata[0].menu[i].Menus.Link + '" class="submenu"></ul>');
        //             //         $(li).append(subul);
        //             //         parseMenu($(subul), menu_data[0].getdata[0].menu[i].Menus);
        //             //     } else {
        //             //         $(li).removeClass('submenu');
        //             //     }

        //             // }

        //             console.log(data[0].getdata[0].menu);
        //             // for (var i = 0, j = data[0].getdata[0].menu.length; i < j; i++) {
        //             //     var root_menu = data[0].getdata[0].menu[i];

        //             //     if (root_menu.hasOwnProperty("id")) {
        //             //         var li = $('<li><a href="' + root_menu.Link + '">' + root_menu.name + '</a></li>').appendTo(ul);
        //             //         if (root_menu.hasOwnProperty("Menus") && root_menu.Menus.length > 0) {

        //             //             var subul = $('<ul id="submenu-' + root_menu.Menus.Link + '" class="submenu"></ul>');
        //             //             $(li).append(subul);
        //             //             console.log(root_menu.Menus);
        //             //             parseMenu($(subul), root_menu.Menus[i]);
        //             //         } else {
        //             //             $(li).removeClass('submenu');
        //             //         }
        //             //     }
        //             // }

        //             // for (var i = 0, j = data[0].getdata[0].menu.length; i < j; i++) {
        //             //     var root_menu = data[0].getdata[0].menu[i];
        //             //     // console.log(root_menu);
        //             //     if (root_menu.hasOwnProperty("id")) {
        //             //         // var li = $('<li><a href="' + root_menu.Link + '">' + root_menu.name + '</a></li>');  
        //             //         $("#navigation").append('<li><a href="' + root_menu.Link + '">' + root_menu.name + '</a>');
        //             //         if (root_menu.hasOwnProperty("Menus") && root_menu.Menus.length > 0) {
        //             //             $("#navigation").append("<ul class='submenu' id='menu_" + root_menu.id + "'>");
        //             //             for (var n = 0, m = root_menu.Menus[0][0].menu.length; n < m; n++) {
        //             //                 var sub_menu = root_menu.Menus[0][0].menu[n];
        //             //                 if (sub_menu.hasOwnProperty("id")) {
        //             //                     console.log('subtext '+sub_menu.name);
        //             //                     $("#menu_" + root_menu.id).append('<li><a href="' + sub_menu.Link + '">' + sub_menu.name + '</a></li>');

        //             //                     /* e.t.c but DONT REPEAT YOURSELF */
        //             //                     /* but if there is 50 levels- what a u going to do? */
        //             //                     /* look at recursive way */

        //             //                 }
        //             //                 $("#menu_" + root_menu.id).append("</ul>");
        //             //             }
        //             //             // $("#menu_"+root_menu.id).append("</li>");
        //             //             $("#navigation").append("</li>");

        //             //         }
        //             //     }
        //             // }

        //             // for (var i = 0, j = data[0].getdata[0].menu.length; i < j; i++) {
        //             //     var root_menu = data[0].getdata[0].menu[i];
        //             //     if (root_menu.hasOwnProperty("id")) {

        //             //         $("#navigation").append("<li><a  href=" + root_menu.Link + ">" + root_menu.name + " <i class='ti-angle-down'></i></a>");

        //             //         if (root_menu.hasOwnProperty("Menus") && root_menu.Menus.length > 0) {

        //             //             $("#navigation").append("<li id='menu_" + root_menu.id + "' >");

        //             //             for (var n = 0, m = root_menu.Menus[0][0].menu.length; n < m; n++) {
        //             //                 var sub_menu = root_menu.Menus[0][0].menu[n];
        //             //                 console.log(sub_menu);
        //             //                 if (sub_menu.hasOwnProperty("id")) {
        //             //                     $("#menu_" + root_menu.id).append("<ul class='submenu'><li ><a href=" + sub_menu.Link + " >" + sub_menu.name + "</a></li>");
        //             //                 }
        //             //                 // $("#menu_"+ root_menu.id).append("</ul>");
        //             //             }
        //             //             //  $("#menu_"+ root_menu.id).append("");
        //             //             $("#menu_" + root_menu.id + "").append("</ul></li>");
        //             //         }
        //             //         $("#navigation").append("</li>");
        //             //     }
        //             // }

        //             var mainMenu = "<ul>";
        //             for (var m = 0; m < data[0].getdata[0].menu.length; m++) {
        //                 var root_menu = data[0].getdata[0].menu[m];
        //                 mainMenu += "<li> ";
        //                 mainMenu += "<a href='" + root_menu.Link + "'>" + root_menu.name + "</a>";
        //                 if (root_menu.Menus.length > 0) {

        //                     mainMenu += "<ul class='submenu'>";
        //                     for (var n = 0; n < root_menu.Menus[0][0].menu.length; n++) {

        //                         var sub_menu = root_menu.Menus[0][0].menu[n];
        //                         mainMenu += "<li>";
        //                         mainMenu += "<a href='" + sub_menu.Link + "'>" + sub_menu.name + "</a>";
        //                         mainMenu += "</li>";
        //                     }
        //                     mainMenu += "</ul>";
        //                 }
        //                 mainMenu += "</li>";
        //             }
        // mainMenu += "<li><a href='#'><button class='navbar-toggler' onclick='openNav()' type='button' data-toggle='collapse' data-target='#sidebarMenu' aria-controls='sidebarMenu' aria-expanded='false' aria-label='Toggle navigation'><i class='fa fa-bars' style='color:#fff;'></i></button></a></li>"
        //             document.getElementById("navigation").innerHTML = mainMenu;
        //             //$('#navigation').append('<button class="navbar-toggler" onclick="openNav()" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" style="color:#fff;"></i></button>');
        //         }



        /*
          $('.dropdown-submenu>a').unbind('click').click(function(e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
          });
        */


        $(".btn-tgg").on("click", function() {
            $(".tgg1").toggleClass("tgg2");
        });

        function openTab(evt, cityName) {
            var i, tabcontent, tabLinks;
            tabcontent = document.getElementsByClassName("indextabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tabLinks = document.getElementsByClassName("tabLinks");
            for (i = 0; i < tabLinks.length; i++) {
                tabLinks[i].className = tabLinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
    </script>


</body>

</html>