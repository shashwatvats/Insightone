<?php
include 'db.php';
$query = "SELECT * FROM college_data";
$result = mysqli_query($connect,$query);
//$row=mysqli_fetch_array($result);

$storeArray_college_image = Array();
$storeArray_college_name = Array();
$storeArray_about_college = Array();
$storeArray_s_no = Array();
$storeArray_link_to_college = Array();
$counter=0;
while ($row = mysqli_fetch_array($result)){
    $storeArray_college_image[] =  $row['college_image'];
    $storeArray_college_name[] = $row['college_name'];
    $storeArray_about_college[] = $row['about_college'];
    $storeArray_link_to_college[] = $row['link_to_college'];
    $storeArray_s_no[] = $row['s_no'];
    $counter++;
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta name="viewport" content="width=device-width initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="icon" type="img/png" href="../images/icon.png">
        <link href="https://fonts.googleapis.com/css?family=Anton|Barlow:100,300,400,500,600,700,800,900|Cabin:400,400i,500,600,700|Caveat:400,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/additional-methods.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/animate.css">
        <script type="text/javascript" src="../js/wow.min.js"></script>
        <script type="text/javascript" src="../js/scroll.js"></script>
        <link rel="stylesheet" href="../css/style.css"influencers@insightone.in&oacute;ne</title>
    </head>

    <body onload="loaderFun()">



        <div class="loader-container" id="loader-c">
            <div class="lds-roller">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <div id="myDiv">
            <div id="top"></div>
            <!--Navbar-->
            <nav class="navbar navbar-default" id="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="../images/logo.png" alt="logo" class="logo-img fadeIn animated delay1" id="logo"></a>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle navbar-btn" data-toggle="collapse" data-target="#main" id="cmd">
                    <span class="icon-bar" id="bar1"></span>
                    <span class="icon-bar" id="bar2"></span>
                    <span class="icon-bar" id="bar3"></span>
                </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main">
                        <ul class="nav navbar-nav navbar-right" id="nav">
                            <li><a href="../index.html" id="l1">HOME</a></li>
                            <li><a id="l7" href="../about.html">WHAT IS INSIGHT&Oacute;NE ?</a></li>
                            <li><a href="college.php" id="l2">COLLEGES</a></li>
                            <li><a href="../blog/blog.php" id="l3">BLOG</a></li>
                            <li><a href="../internship.html" id="l5">INTERNSHIPS</a></li>
                            <li><a href="../events.html" id="l4">EVENTS</a></li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="header_image-college">
                <h1 class="php__heading noselect">COLLEGES</h1>
            </div>

            <div class="college-container">


                <?php
         $blog_no = 0;
        for ($i=0; $i < $counter; $i++) { 
           
          ?>
                    <div class="college">
                        <div class="college__image-box">
                            <img src="<?php echo($storeArray_college_image[$blog_no]); ?>" class="college__image" alt="image">
                        </div>
                        <div class="college__main">
                            <div class="college-link">
                                <a href="http://<?php echo ($storeArray_link_to_college[$blog_no]);?>" target="_blank">Link to College</a>
                            </div>
                            <h3 class="college-heading">
                                <?php echo $storeArray_college_name[$blog_no];?>
                            </h3>
                            <p class="college-showcase">
                                <?php echo $storeArray_about_college[$blog_no];?>
                            </p>

                        </div>
                    </div>

                    <?php
                        $blog_no++;
            
                        }
                        ?>



            </div>





            <footer class="footer container-fluid">
                <div class="social-media col-md-12">
                    <a href="https://www.youtube.com/channel/UCuhGyDTLN4oA9S5OZvZeEDw" target="_blank"><i class="fab fa-youtube social_icon" ></i></a>
                    <a href="https://www.facebook.com/insightone1/" target="_blank"><i class="fab fa-facebook-square social_icon"></i></a>
                    <a href="https://www.linkedin.com/company/insightone01" target="_blank"><i class="fab fa-linkedin  social_icon"></i></a>
                    <a href="https://www.instagram.com/_insightone/" target="_blank"><i class="fab fa-instagram social_icon"></i></a>
                </div>
                <div class="container logo col-md-6">
                    <img src="../images/logo1.png" class="img-responsive" style="width: 350px;height: auto;margin-top: 40px ;">
                </div>
                <div class="mailsection col-md-6">
                    <i class="fa fa-envelope" aria-hidden="true" style="font-size: 21px; padding-right: 7px;padding-top:50px; padding-bottom: 10px; color: grey;"></i><a href="mailto:influencers@insightone.in"> info@insightone.in</a><span> - For Internship and Tie-Ups</span><br>
                    <i class="fa fa-envelope" aria-hidden="true" style="font-size: 21px; padding-right: 7px; color: grey;"></i><a href="mailto:influencers@insightone.in"> influencers@insightone.in</a><span> - For Influencers Marketing Programme</span>
                </div><br>
                <div class="csi"><a href="http://csiakgec.in" target="_blank"><img src="../images/logocsi.png" class="csi__image animated infinite pulse delay-2s" alt="CSI"></a><span class="csi__text">Powered by <a class="csitext" href="http://csiakgec.in" target="_blank">csiakgec</a></span></div>
                <hr>
                <p style="text-align: center;color:#C6C3C2;">&copy; 2018 Insight&oacute;ne, All rights reserved</p>
            </footer>


            <div class="scrollUp" id="up" title="Back To Top">
                <a href="#header"><i class="fafa-angle-double-up fa-2x scrollUp__icon"></i></a>
            </div>
        </div>

        <script src="../js/script.js"></script>

        <script>
            //Navbar
            $(window).scroll(function() {
                // 150 = The point you would like to fade the nav in.
                if ($(window).scrollTop() > 20) {
                    if ($(window).width() >= 767) {
                        $('#navbar').addClass('show');
                        $('#l1').addClass('show2');
                        $('#l2').addClass('show2');
                        $('#l3').addClass('show2');
                        $('#l4').addClass('show2');
                        $('#l5').addClass('show2');
                        $('#l6').addClass('show2');
                        $('#l7').addClass('show2');
                        // $('#logo').attr("src", "../images/logo.png");
                    }
                    $('#up').addClass('showUp');
                } else {
                    if ($(window).width() >= 767) {
                        $('#navbar').removeClass('show');
                        $('#l1').removeClass('show2');
                        $('#l2').removeClass('show2');
                        $('#l3').removeClass('show2');
                        $('#l4').removeClass('show2');
                        $('#l5').removeClass('show2');
                        $('#l6').removeClass('show2');
                        $('#l7').removeClass('show2');
                        //$('#logo').attr("src", "../images/logo1.png");
                    }
                    $('#up').removeClass('showUp');
                };
            });




            $(document).ready(function() {
                // Add smooth scrolling to all links
                $("#up").on('click', function(event) {
                    console.log(this.hash);
                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = document.getElementById("top");

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 1100, function() {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            // window.location.hash = hash;
                        });
                    } // End if
                });
            });

            // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.querySelector("#navbar").classList.add("expandNav");

                } else {
                    document.querySelector("#navbar").classList.remove("expandNav");
                }
            }

        </script>

    </body>

    </html>
