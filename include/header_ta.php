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
        <div class="header-top_area">
            <!-- <div class="container"> -->
            <div class="row">
                <div class="col-xl-5 col-md-6 ">
                    <div class="short_contact_listleft">
                        <ul>
                            <li><a href="#"><span class="tooltitle">தேசியப் பெருங்கடல் தொழில்நுட்பக் கழகம் | இந்திய அரசு</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="short_contact_list">
                        <ul>
                            <!--<li><a href="#">
                                     <div class="searchBox">
                                        <input class="searchInput" type="text" name="" placeholder="Search" required>
                                        <button class="searchButton" href="#"> 
                                    <i class="fa fa-search"></i>
                                    </button>
                                    </div> 
                                </a></li>-->
                               
                           
                            <li><a href="#" title="Skip to main content"> <i class="fa fa-share-square"></i></a></li>
                            <!-- <li><a href="#"><i style="color:#fff" class="fa fa-search"></i>search</a></li> -->
                            <li><span class="toolbarline"></span></li>
                            <li><a href="#"><i class="fa fa-sitemap"></i></a></li>
                            <li><span class="toolbarline"></span></li>
                            <li><a href="#" id="btn-decrease">A-</a></li>
                            <li><a href="#" id="">A</a></li>
                            <li><a href="#" id="btn-increase"></i>A+</a></li>
                            <li><span class="toolbarline"></span></li>
                            <li><a href="javascript:void(0);" style="color:#fff;background-color:#000;display: block; padding:2px;" class="dark" onclick="myFunction('dark');">A<sup>&nbsp;</sup></a></li>
                            <li> <a href="javascript:void(0);" class="light" style="color:#000;background-color:#fff;display: block;  padding: 2px;" onclick="myFunction('light');">A<sup>&nbsp;</sup></a></li>
                            <li><span class="toolbarline"></span></li>
                            <li style="margin-right:20px;">
                                <form method='get' action='' id='form_lang'><select class="langselect" name='lang' onchange="changeLang();" style="width: 100%">
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
                            <li><span class="toolbarline"></span></li>
                            <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title="linkedIn"><i class="fa fa-linkedin"></i></a></li>
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
            <div class="row mainheader-border">
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
                            <h5><strong>தேசியப் பெருங்கடல் தொழில்நுட்பக் கழகம் </strong>
                            </h5>
                            </br>
                            <p style="padding-top: 0px"> புவி அறிவியல் அமைச்சகம் , இந்திய அரசு</p>
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
                <!-- <div class="col-xl-7 col-lg-7">
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
                </div> -->

                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
            <div class="row mainmenu_style"  >
                <div class="col-xl-12 col-lg-12 text-center">
                    <!-- <div class="col-xl-7 col-lg-7"> -->
                    <div class="main-menu  d-none d-lg-block">
                        <nav>
                            <ul id="navigation" class="nobulletstyle">
                                <li><a class="active" href="index.php"><i class="fa fa-home" style="font-size:17pt;"></i></a></li>
                                <li><a href="#">தே.பெ.தொ.க பற்றி <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="about.php">தே.பெ.தொ.க பற்றி</a></li>
                                        <li><a href="niot_administration.php">நிர்வாகம்</a></li>
                                        <li><a href="niot_events.php">நிகழ்வுகள்</a></li>
                                        <li><a href="niot_employeescorner.php">பணியாளர் கார்னர்</a></li>
                                        <!-- <li><a href="#">IPR Details</a></li>
                                        <li><a href="#">Employee's Corner</a></li>
                                        <li><a href="#">Administration</a></li>
                                        <li><a href="#">Silver Jubilee Celebration</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="#">பதவியும் பெயரும் <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="niot_minister.php">மத்திய அமைச்சர், புவி அறிவியல் அமைச்சகம்</a></li>
                                        <li><a href="niot_secretary.php">செயலாளர், புவி அறிவியல் அமைச்சகம்</a></li>
                                        <li><a href="niot_director.php">இயக்குநர், தேசியப் பெருங்கடல் தொழில்நுட்பக் கழகம்</a></li>
                                        <li><a href="#">அலுவலக ஊழியர்கள்</a></li>
                                        <li><a href="#">முன்னாள் இயக்குனர்கள், தேசியப் பெருங்கடல் தொழில்நுட்பக் கழகம் </a></li>
                                        <li><a href="niot_awards.php">விருதுகள்</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">தொழில்நுட்பம் <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <!-- <li><a href="#">Ocean Observations</a></li> -->
                                        <?php
                                        // $sql  = "select b1.title as technology, b1.tech_id  as tech_id from niot_technology_en  as a1 	 
                                        // inner join mst_technology_en as b1  on a1.mas_id = b1.tech_id
                                        // where b1.status ='A' and a1.status = 'A' group by b1.tech_id  order by b1.tech_id asc";
                                        $sql  = "select tech_id , title from mst_technology_$currentLang where status='A' ";
                                        $result =  pg_query($db, $sql);
                                        while (
                                            $row = pg_fetch_array($result)
                                        ) {
                                        ?>
                                            <li><a href="niot_technology.php?link=<?php echo base64_encode($row['tech_id']) ?>"><?php echo $row['title']; ?></a></li>

                                        <?php } ?>
                                        <!-- <li><a href="niot_technology.php?link= '<?php echo base64_encode(6) ?>'">Energy and Fresh Water</a></li>
                                        <li><a href="#">Ocean Observations</a></li>
                                        <li><a href="#">Vessel Management Cell</a></li>
                                        <li><a href="#">Ocean Acoustics</a></li>
                                        <li><a href="#">Ocean Structures</a></li>
                                        <li><a href="#">Ocean Electronics</a></li>
                                        <li><a href="#">Costal Environmental Engineering</a></li>
                                        <li><a href="#">Marine Sensors</a></li>
                                        <li><a href="#">Marine BioTechnology </a></li> -->
                                    </ul>
                                </li>
                                <li><a href="#">வெளியீடுகள் <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="pressrelease_details.php">செய்தி குறிப்பு</a></li>
                                        <li><a href="announce_details.php">செய்திமடல்</a></li>
                                        <li><a href="annualreports_details.php">ஆண்டு அறிக்கைகள்</a></li>

                                        <li><a href="newsletter_details.php">செய்திமடல்</a></li>
                                        <li><a href="#">தொழில்நுட்ப பரிமாற்றம் மற்றும் காப்புரிமைகள்</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="#">ஒப்பந்தப்புள்ளிகள்</a></li> -->
                                <li><a href="#">வேலைவாய்ப்பு <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="recruitment_details.php">எதிர்வரும் நிகழ்வுகள்</a></li>
                                        <li><a href="#">நிறைவுற்ற நிகழ்வுகள்
                                            </a></li>

                                    </ul>
                                </li>
                                <li><a href="#">தொகுப்புகள் <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="events_gallery.php">நிகழ்வுகள் தொகுப்பு</a></li>
                                        <li><a href="#">விருதுகள் தொகுப்பு</a></li>
                                        <li><a href="#">புகைப்பட தொகுப்பு</a></li>
                                        <li><a href="#">காணொளி தொகுப்பு</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">தொடர்புக்கு <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="contactus.php">தே.பெ.தொ.க , சென்னை </a></li>
                                        <!-- <li><a href="#">தகவல் அறியும் உரிமை தொடர்பு</a></li> -->
                                    </ul>
                                </li>
                                <!-- <li><a href="#">தகவல் அறியும் உரிமை <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="#">தகவல் அறியும் உரிமை தொடர்பு</a></li>
                                        <li><a href="#">RTI Documents</a></li>
                                    </ul>
                                </li> -->
                                <button class="navbar-toggler" onclick="openNav()" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" style='color:#fff;'></i></button>
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
                <!-- <ul class="sidebartitle">
                    <li><i class="fa fa-newspaper-o"></i><a href="#"> </a></li>
                    <li><i class="fa fa-newspaper-o"></i><a href="niot_employeescorner.php"> பணியாளர் கார்னர்</a></li>
                    <li><i class="fa fa-newspaper-o"></i><a href="#"> கருத்துகளை தெரிவிக்க</a></li>
                </ul> -->

                <ul class="nav flex-column flex-nowrap">
                    <li class="nav-item sidemenu ">
                        <a class="sidelink collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1"> தகவல் அறியும் உரிமை</a>
                        <div class="collapse" id="submenu1sub1" aria-expanded="false">
                            <ul class="flex-column nav pl-4">
                                <li class="nav-item sidemenu">
                                    <a class="sidelink p-1" href="#">
                                        <i class="fa fa-fw fa-clock-o"></i> தகவல் அறியும் உரிமை தொடர்பு
                                    </a>
                                </li>
                                <li class="nav-item sidemenu">
                                    <a class="sidelink p-1" href="niot_rti.php">
                                        <i class="fa fa-fw fa-dashboard"></i> RTI Documents
                                    </a>
                                </li>
                                <li class="nav-item sidemenu">
                                    <a class="sidelink p-1" href="#">
                                        <i class="fa fa-fw fa-dashboard"></i> அசையா சொத்து வருமானம் விவரங்கள்
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item sidemenu"><a class="sidelink" href="#">ஒப்பந்தப்புள்ளிகள்</a></li>
                    <!-- <li class="nav-item sidemenu"><a class="sidelink" href="#">பணியாளர் கார்னர்</a></li> -->
                    <li class="nav-item sidemenu"><a class="sidelink" href="#">கருத்துகளை தெரிவிக்க</a></li>
                    <!-- <li class="nav-item">
                        <a class="sidelink collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Reports</a>
                        <div class="collapse" id="submenu1" aria-expanded="false">
                            <ul class="flex-column pl-2 nav">
                                <li class="nav-item "><a class="sidelink py-0" href="#">Orders</a></li>
                                <li class="nav-item">
                                    <a class="sidelink collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1">Customers</a>
                                    <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                        <ul class="flex-column nav pl-4">
                                            <li class="nav-item" style="background:#fff;">
                                                <a class="sidelink p-1" href="#">
                                                    <i class="fa fa-fw fa-clock-o"></i> Daily
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="sidelink p-1" href="#">
                                                    <i class="fa fa-fw fa-dashboard"></i> Dashboard
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="sidelink p-1" href="#">
                                                    <i class="fa fa-fw fa-bar-chart"></i> Charts
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="sidelink p-1" href="#">
                                                    <i class="fa fa-fw fa-compass"></i> Areas
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a class="sidelink" href="#">Analytics</a></li>
                    <li class="nav-item"><a class="sidelink" href="#">Export</a></li> -->
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
        changeLang()
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
    })
</script>