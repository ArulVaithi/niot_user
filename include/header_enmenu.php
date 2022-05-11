<!-- <div id="loading">
  <img id="loading-image" src="img/Logo_niot.jpg" alt="Loading..." />
</div> -->
<?php
include('db_connection.php');


// Include Language file
// if (isset($_SESSION['lang'])) {
//     include "lang_" . $_SESSION['lang'] . ".php";
// } else {
//     include "lang_en.php";
// } 
// while (
//     $row = pg_fetch_array($result)
// ) { 
//     echo $row['title'];

// }

?>
<header>
    <div class="header-area ">
        <div id="sticky-header-taskbar" class="header-top_area">
            <!-- <div class="container"> -->
            <div class="row">
                <div class="col-xl-5 col-md-6 ">
                    <div class="short_contact_listleft">
                        <ul>
                            <li><a href="#"><span class="tooltitle">National Institute of Ocean Technology | Govt of India</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="short_contact_list">
                        <ul>
                            <li><a href="#">
                                    <!-- <div class="searchBox">
                                        <input class="searchInput" type="text" name="" placeholder="Search" required>
                                        <button class="searchButton" href="#"> -->
                                    <i class="fa fa-search"></i>
                                    <!-- </button>
                                    </div> -->
                                </a></li>
                            <li><span class="toolbarline"></span></li>
                            <li><a href="#mainsection" title="Skip to main content"> <i class="fa fa-share-square"></i></a></li>
                            <!-- <li><a href="#"><i style="color:#fff" class="fa fa-search"></i>search</a></li> -->
                            <li><span class="toolbarline"></span></li>
                            <li><a href="#"><i class="fa fa-sitemap"></i></a></li>
                            <li><span class="toolbarline"></span></li>
                            <li><a href="#" id="btn-decrease">A-</a></li>
                            <li><a href="#" id="btn-orig">A</a></li>
                            <li><a href="#" id="btn-increase"></i>A+</a></li>
                            <li><span class="toolbarline"></span></li>
                            <li><a href="javascript:void(0);" style="color:#fff;background-color:#000;display: block; padding:2px;" class="dark" onclick="myFunction('dark');">A<sup>&nbsp;</sup></a></li>
                            <li> <a href="javascript:void(0);" class="light" style="color:#000;background-color:#fff;display: block;  padding: 2px;" onclick="myFunction('light');">A<sup>&nbsp;</sup></a></li>
                            <li><span class="toolbarline"></span></li>
                            <li style="margin-right:20px;">
                                <form method='get' action='' id='form_lang'><select class="select2" name='lang' onchange="changeLang();" style="width: 100%">
                                        <!-- <option value="">Language</option> -->
                                        <option value='en' <?php if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'en') {
                                                                echo "selected";
                                                            } ?>>English</option>
                                        <option value='hi' <?php if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'hi') {
                                                                echo "selected";
                                                            } ?>>Hindi</option>
                                        <option value='ta' <?php if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'ta') {
                                                                echo "selected";
                                                            } ?>>தமிழ்</option>
                                    </select>
                                </form>
                            </li>
                            <!-- <li><a href="index_hi.php">हिंदी</a></li>
                            <li><span class="toolbarline"></span></li>
                            <li><a href="#">English</a></li>
                            <li><span class="toolbarline"></span></li>
                            <li><a href="index_ta.php">தமிழ்</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
        <div id="sticky-header" class="main-header-area">
            <!-- <div class="container"> -->
            <div class="row ">
                <div class="col-xl-1 col-lg-1">
                    <div class="logo">
                        <a href="index.php">
                            <img src="img/Logo_niot.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="logotext ">
                        <a href="index.php">
                            <h5><strong>National Institute of Ocean Technology</strong>
                            </h5>
                            </br>
                            <p style="padding-top: 0px"> Ministry of Earth Sciences, Government Of India</p>
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <!-- <div class="logo" >
                        <a href="index.php">
                            <img src="img/Logo_niot.jpg" alt="">
                        </a>
                    </div> -->
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="swatcchlogo">
                        <a href="#">
                            <img src="assets/images/swacchbharat.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1">
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="main-menu  d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a class="active" href="index.php">home</a></li>
                                <li><a href="#">About Us <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="about.php">About NIOT</a></li>
                                        <li><a href="#">Administration</a></li>
                                        <li><a href="#">IPR Details</a></li>
                                        <li><a href="events_gallery.php">Events</a></li>
                                        <li><a href="#">Awards</a></li>
                                        <li><a href="#">RTI</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">WHO'S WHO <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="niot_minister.php">Union Minister, MoES</a></li>
                                        <li><a href="niot_secretary.php">Secretary, MoES</a></li>
                                        <li><a href="niot_director.php">Director, NIOT</a></li>
                                        <li><a href="#">NIOT Staffs</a></li>
                                        <li><a href="#">Former Directors of NIOT</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Technology <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <?php $i = 0;
                                        $file;
                                        while (
                                            $row = pg_fetch_array($result)
                                        ) {
                                            echo $row['title']; ?>
                                            <li><a href="niot_technology.php?link=<?php echo base64_encode($row['tech_id']) ?>">
                                                    <?php echo $row['title'] ?></a></li>

                                        <?php } ?>

                                    </ul>
                                </li>
                                <li><a href="#">PUBLICATIONS <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="pressrelease_details.php">Press Release</a></li>
                                        <li><a href="announce_details.php">News / Announcements</a></li>
                                        <li><a href="annualreports_details.php">Annual Reports</a></li>

                                        <li><a href="newsletter_details.php">Newsletter</a></li>
                                        <li><a href="#">Technology Transfer & Patents</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">RECRUITMENTS <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="recruitment_details.php">Current Vacancies</a></li>
                                        <li><a href="#">Archives</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">GALLERIES <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="#">Event Gallery</a></li>
                                        <li><a href="#">Award Gallery</a></li>
                                        <li><a href="#">Photo Gallery</a></li>
                                        <li><a href="#">NIOT User Login</a></li>
                                        <li><a href="#">Video Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">CONTACT US <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="#">NIOT, Chennai</a></li>
                                        <li><a href="#">RTI Contacts</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>

            <div class="row" style="background-color:#041e42;padding-bottom:5px;padding-top:5px;">
                <div class="col-xl-12 col-lg-12 text-center">
                    <!-- <div class="col-xl-7 col-lg-7"> -->
                    <div class="main-menu  d-none d-lg-block">

                        <nav>
                            <ul id="navigation" class="nobulletstyle">
                                <!-- <div >
</div> -->


                                <!-- <li><a href="recruitment_details.php">Recruitment</a></li>
                                <li><a href="#">Contact Us</a></li> -->
                                <!-- <li>
                                    <a href="#">
                                        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
                                        <label for="openSidebarMenu" class="sidebarIconToggle">
                                            <div class="spinner diagonal part-1"></div>
                                            <div class="spinner horizontal"></div>
                                            <div class="spinner diagonal part-2"></div>
                                        </label>
                                     
                                    </a>
                                </li> -->
                                <li>
                                    <a href="#">
                                        <button class="navbar-toggler" onclick="openNav()" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" style='color:#fff;'></i></button>
                                    </a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>

    <nav id="sidebarMenu" class="collapse sidebar collapse">
        <!-- Menu Close Button -->
        <div class="position-sticky">

            <div class="list-group list-group-flush mx-3 mt-4">
                <a title="Close" href="javascript:void(0);" onclick="closeNav()" class="sidebarMenu" style="color:#fff"><span class="icon-close" aria-hidden="true"></span>X</a>
                <ul class="sidebartitle">
                    <li><i class="fa fa-newspaper-o"></i><a href="#">Tenders</a></li>

                    <li><i class="fa fa-newspaper-o"></i><a href="#"> Feedback</a></li>
                </ul>
                <!-- <a href="#" class="list-group-item list-group-item-action py-2 ripple"><span></span></a>

                <a href="#" class="list-group-item list-group-item-action py-2 ripple"><span></span></a> -->
            </div>
        </div>
    </nav>
</header>

<script>
    //   $(window).load(function() {
    //     $('#loading').hide();
    //   });
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Select Language",
            allowClear: true
        });
        //load_menu();
        changeLang();
    });

    function changeLang() {
        document.getElementById('form_lang').submit();
    }

    function openNav() {

        document.getElementById("sidebarMenu").style.width = "300px";
    }

    function closeNav() {
        document.getElementById("sidebarMenu").style.width = "0";
    }
    const tlmx = new TimelineMax();
    //tlmx.set(".searchBox", { y: 0, opacity: 0 });
    tlmx.set(".text", {
        y: 0,
        opacity: 0
    });

    /*tlmx.to(".searchBox", 0.6, {
      y: -24,
      opacity: 1,
      ease: Power4.easeOut,
      delay: 0.4
    });*/

    tlmx.to(".text", 0.6, {
        y: 40,
        opacity: 1,
        ease: Power4.easeOut,
        delay: 0.4
    });

    function topFunction() {
        // document.body.scrollTop = 0;
        // document.documentElement.scrollTop = 0;
        // new WOW().init();
        var body = $("html, body");
        body.stop().animate({
            scrollTop: 0
        }, 500, 'swing', function() {
            // alert("Finished animating");
        });

    }


    $(window).scroll(function() {

        if ($(this).scrollTop() > 50) {
            alert();
            $('.scrolltop:hidden').stop(true, true).fadeIn();
        } else {
            $('.scrolltop').stop(true, true).fadeOut();
        }
    });
    $(function() {
        $(".scroll").click(function() {
            $("html,body").animate({
                scrollTop: $(".top").offset().top
            }, "1000");
            return false
        })
    });

    function load_menu() {
        // alert();
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


    function parseMenu(ul, menuvalue) {
        // console.log(data);
        // return false;
        var data = jQuery.parseJSON(menuvalue);
        var getdata = data[0].getdata;
        console.log(data[0].getdata[0]);

        // var data = jQuery.parseJSON(data);
        // var menu = data;

        // var data = data[0].getdata;
        // console.log(data[0].getdata[0].menu.length);
        // for (var i = 0; i < menu_data[0].getdata[0].menu.length; i++) {
        //     console.log(menu_data[0].getdata[0].menu[i]);
        //     alert();
        //     var root_menu = menu_data[0].getdata[0].menu[i];
        //     var li = $('<li><a href="' + menu_data[0].getdata[0].menu[i].Link + '">' + menu_data[0].getdata[0].menu[i].name + '</a></li>').appendTo(ul);
        //     console.log(root_menu.Menus);
        //     // If sub menus contain something 
        //     if (menu_data[0].getdata[0].menu[i].Menus != null) {
        //         var subul = $('<ul id="submenu-' + menu_data[0].getdata[0].menu[i].Menus.Link + '" class="submenu"></ul>');
        //         $(li).append(subul);
        //         parseMenu($(subul), menu_data[0].getdata[0].menu[i].Menus);
        //     } else {
        //         $(li).removeClass('submenu');
        //     }

        // }

        console.log(data[0].getdata[0].menu);
        // for (var i = 0, j = data[0].getdata[0].menu.length; i < j; i++) {
        //     var root_menu = data[0].getdata[0].menu[i];

        //     if (root_menu.hasOwnProperty("id")) {
        //         var li = $('<li><a href="' + root_menu.Link + '">' + root_menu.name + '</a></li>').appendTo(ul);
        //         if (root_menu.hasOwnProperty("Menus") && root_menu.Menus.length > 0) {

        //             var subul = $('<ul id="submenu-' + root_menu.Menus.Link + '" class="submenu"></ul>');
        //             $(li).append(subul);
        //             console.log(root_menu.Menus);
        //             parseMenu($(subul), root_menu.Menus[i]);
        //         } else {
        //             $(li).removeClass('submenu');
        //         }
        //     }
        // }

        // for (var i = 0, j = data[0].getdata[0].menu.length; i < j; i++) {
        //     var root_menu = data[0].getdata[0].menu[i];
        //     // console.log(root_menu);
        //     if (root_menu.hasOwnProperty("id")) {
        //         // var li = $('<li><a href="' + root_menu.Link + '">' + root_menu.name + '</a></li>');  
        //         $("#navigation").append('<li><a href="' + root_menu.Link + '">' + root_menu.name + '</a>');
        //         if (root_menu.hasOwnProperty("Menus") && root_menu.Menus.length > 0) {
        //             $("#navigation").append("<ul class='submenu' id='menu_" + root_menu.id + "'>");
        //             for (var n = 0, m = root_menu.Menus[0][0].menu.length; n < m; n++) {
        //                 var sub_menu = root_menu.Menus[0][0].menu[n];
        //                 if (sub_menu.hasOwnProperty("id")) {
        //                     console.log('subtext '+sub_menu.name);
        //                     $("#menu_" + root_menu.id).append('<li><a href="' + sub_menu.Link + '">' + sub_menu.name + '</a></li>');

        //                     /* e.t.c but DONT REPEAT YOURSELF */
        //                     /* but if there is 50 levels- what a u going to do? */
        //                     /* look at recursive way */

        //                 }
        //                 $("#menu_" + root_menu.id).append("</ul>");
        //             }
        //             // $("#menu_"+root_menu.id).append("</li>");
        //             $("#navigation").append("</li>");

        //         }
        //     }
        // }

        // for (var i = 0, j = data[0].getdata[0].menu.length; i < j; i++) {
        //     var root_menu = data[0].getdata[0].menu[i];
        //     if (root_menu.hasOwnProperty("id")) {

        //         $("#navigation").append("<li><a  href=" + root_menu.Link + ">" + root_menu.name + " <i class='ti-angle-down'></i></a>");

        //         if (root_menu.hasOwnProperty("Menus") && root_menu.Menus.length > 0) {

        //             $("#navigation").append("<li id='menu_" + root_menu.id + "' >");

        //             for (var n = 0, m = root_menu.Menus[0][0].menu.length; n < m; n++) {
        //                 var sub_menu = root_menu.Menus[0][0].menu[n];
        //                 console.log(sub_menu);
        //                 if (sub_menu.hasOwnProperty("id")) {
        //                     $("#menu_" + root_menu.id).append("<ul class='submenu'><li ><a href=" + sub_menu.Link + " >" + sub_menu.name + "</a></li>");
        //                 }
        //                 // $("#menu_"+ root_menu.id).append("</ul>");
        //             }
        //             //  $("#menu_"+ root_menu.id).append("");
        //             $("#menu_" + root_menu.id + "").append("</ul></li>");
        //         }
        //         $("#navigation").append("</li>");
        //     }
        // }

        var mainMenu = "<ul>";
        for (var m = 0; m < data[0].getdata[0].menu.length; m++) {
            var root_menu = data[0].getdata[0].menu[m];
            mainMenu += "<li> ";
            mainMenu += "<a href='" + root_menu.Link + "'>" + root_menu.name + "</a>";
            if (root_menu.Menus.length > 0) {

                mainMenu += "<ul class='submenu'>";
                for (var n = 0; n < root_menu.Menus[0][0].menu.length; n++) {

                    var sub_menu = root_menu.Menus[0][0].menu[n];
                    mainMenu += "<li>";
                    mainMenu += "<a href='" + sub_menu.Link + "'>" + sub_menu.name + "</a>";
                    mainMenu += "</li>";
                }
                mainMenu += "</ul>";
            }
            mainMenu += "</li>";
        }
        mainMenu += "<li><a href='#'><button class='navbar-toggler' onclick='openNav()' type='button' data-toggle='collapse' data-target='#sidebarMenu' aria-controls='sidebarMenu' aria-expanded='false' aria-label='Toggle navigation'><i class='fa fa-bars' style='color:#fff;'></i></button></a></li>"
        document.getElementById("navigation").innerHTML = mainMenu;
        //$('#navigation').append('<button class="navbar-toggler" onclick="openNav()" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" style="color:#fff;"></i></button>');
    }
</script>