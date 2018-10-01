<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/s-g.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Saraswati Vidya Mandir, Nagod</title>
</head>

<body>
    <header>
        <?php include_once "Includes/nav-bar.php"; ?>
    </header>
    <main>
        <!-- Main Row of the Page -->
        <div class="row">
            <!-- Column with taking as the whole page cover -->
            <div class="col-12 p-0">
                <!-- First Row of the page with school-image in it -->
                <div class="row">
                    <!-- School-Image With quote inserted in it -->
                    <div class="school-image">
                        <img src="https://jooinn.com/images/school-building-3.jpg" class="S-image" alt="School-Image"
                            width="600" height="400">
                        <div class="middle">
                            <div class="s-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam blandit
                                sem et lectus aliquam, in varius
                                lectus interdum. Quisque ultrices.</div>
                        </div>
                    </div>
                </div>
                <!-- First Row ends here -->
                <!-- NEWS SECTION ROW -->
                

<!--                     <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6 s-news">
                            <h1>NEWS</h1>
                            <ul>
                                <li class="news-item"><a class="news-link" href="http://" target="_blank" rel="noopener noreferrer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id interdum purus, sit amet pellentesque.</a></li>
                                <li class="news-item"><a class="news-link" href="http://" target="_blank" rel="noopener noreferrer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id interdum purus, sit amet pellentesque.</a></li>
                                <li class="news-item"><a class="news-link" href="http://" target="_blank" rel="noopener noreferrer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id interdum purus, sit amet pellentesque.</a></li>
                                <li class="news-item"><a class="news-link" href="http://" target="_blank" rel="noopener noreferrer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id interdum purus, sit amet pellentesque.</a></li>
                                <li class="news-item"><a class="news-link n-disable" href="http://" target="_blank" rel="noopener noreferrer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id interdum purus, sit amet pellentesque.</a></li>
                            </ul>
                        </div>
                        <div class="col-3"></div>
                    </div>

 -->
                <!-- News SECTION END HERE -->
                <!-- Second Row begins here with Speciality of the school-->
                <div class="row l-div Speciality">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <h1>Our Speciality</h1>
                            <!-- 
                            Speciality List items
                             -->
                        <div class="col-6">
                            <ul class="a-eo">
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="a-eo">
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
                <!-- Second Row ends here -->
                <!-- Third Row of the page begins here with Facilities -->
                <div class="row l-div facility">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <!-- <h1>Facilities</h1> -->
                        <div class="col-3 Over-lay">
                            <img class="lab-img" src="assets/Images/Facility-1.jpg" alt="">
                            <div>
                                <div class="text">Science Laboratory</div>
                            </div>
                        </div>
                        <div class="col-3 Over-lay">
                            <img class="lab-img" src="assets/Images/Facility-2.jpg"
                                alt="">
                            <div>
                                <div class="text">Computer Laboratory</div>
                            </div>
                        </div>
                        <div class="col-3 Over-lay">
                            <img class="lab-img" src="assets/Images/Facility-3.jpg" alt="">
                            <div>
                                <div class="text">Mathematics Laboratory</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-1"></div>
                </div>
                <!-- Third Row Ends here -->
            </div>
        </div>
        <!-- Main Row ends here -->
    </main>
    <footer>
        <!--Footer of the page -->
        <?php include_once "Includes/footer.php" ?>
    </footer>
    <script type="text/javascript">
        var nav = document.getElementById("toggle");

        function myFunction() {

            if (nav.className === "nav-bar") {
                nav.className += " responsive";
            } else {
                nav.className = "nav-bar";
            }
        }
    </script>
</body>

</html>