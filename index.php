<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/s-g.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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
                        <img src="assets/Images/SchoolPhoto.JPG" class="S-image" alt="School-Image"
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
                <div class="news-container">
                <h1 class="main-heading-b">New events</h1>
                <div class="main-heading-bot"></div>

                <?PHP
                    if (isset($_SESSION['u_login'])) {
                        echo '<div class="form">
                    <form action="Includes/news_update_inc.php" method="post">
                        <label for="event1">Event name</label><br>
                        <input type="text" placeholder="Enter the event name" class="admin-form" name="event" id="event1">
                        <div class="form-date">
                            <input type="number" placeholder="Day" class="inner-date" name="Day" max="31" min="1">
                            <select name="Month" class="inner-date">
                                <option disabled>Month</option>
                                <option value="Jan">January</option>
                                <option value="Feb">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="Aug">Agust</option>
                                <option value="Sep">September</option>
                                <option value="Oct">October</option>
                                <option value="Nov">November</option>
                                <option value="Dec">December</option>
                            </select>
                            <input type="time" class="inner-date" name="time">
                        </div>
                        <input type="submit" value="upload" name="submit_n" class="form-button">
                    </form></div>';
                    }
                ?>

                <!-- <div class="form">
                    <form action="Includes/news_update_inc.php" method="post">
                        <label for="event1">Event name</label><br>
                        <input type="text" placeholder="Enter the event name" class="admin-form" name="event" id="event1">
                        <div class="form-date">
                            <input type="number" placeholder="Day" class="inner-date" name="Day" max="31" min="1">
                            <select name="Month" class="inner-date">
                                <option disabled>Month</option>
                                <option value="Jan">January</option>
                                <option value="Feb">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="Aug">Agust</option>
                                <option value="Sep">September</option>
                                <option value="Oct">October</option>
                                <option value="Nov">November</option>
                                <option value="Dec">December</option>
                            </select>
                            <input type="time" class="inner-date" name="time">
                        </div>
                        <input type="submit" value="upload" name="submit_n" class="form-button">
                    </form></div> -->

                <div class="news">
                    <div class="news-list">

                        <?php
                            include_once "Includes/dbc_inc.php";

                            $stmt = mysqli_stmt_init($conn);
                            $sql = "SELECT * FROM news ORDER BY news_id DESC LIMIT 0,3";
                            mysqli_stmt_prepare($stmt, $sql);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="news-event"><div class="news-date"><h3 class="day">'.$row["day"].'</h3><p class="month">'.$row["month"].'</p></div><div class="news-detail"><h3 class="main-event">'.$row["event_name"].'</h3><p class="news-time"><i class="far fa-clock"></i>'. date('h:i a', strtotime($row['time'])) .'</p></div></div>';
                            }
                        ?>

                        <!-- <div class="news-event"><div class="news-date"><h3 class="day">07</h3><p class="month">March</p></div><div class="news-detail"><h3 class="main-event">Painting compition : at Auditorium</h3><p class="news-time"><i class="far fa-clock"></i>7:30 am</p></div></div>
                        <div class="news-event"><div class="news-date"><h3 class="day">07</h3><p class="month">April</p></div><div class="news-detail"><h3 class="main-event">Painting compition : at Auditorium</h3><p class="news-time"><i class="far fa-clock"></i>7:30 am</p></div></div>
                        <div class="news-event"><div class="news-date"><h3 class="day">07</h3><p class="month">june</p></div><div class="news-detail"><h3 class="main-event">Painting compition : at Auditorium</h3><p class="news-time"><i class="far fa-clock"></i>7:30 am</p></div></div> -->
                    </div>
                    <div class="news-c">
                        <?php
                            include_once "Includes/dbc_inc.php";
                            
                            $stmt = mysqli_stmt_init($conn);
                            $sql = "SELECT * FROM activity_c ORDER BY c_id ASC";
                            mysqli_stmt_prepare($stmt, $sql);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="mySlides fade">
                            <img src="assets/Images/activity/'.$row["c_name"].'" style="width:100%;">
                            </div>';
                            }
                        ?>

                            <!-- <div class="mySlides fade">
                            <img src="assets/Images/background.jpg" style="width:100%;">
                            </div>

                            <div class="mySlides fade">
                            <img src="assets/Images/background2.jpg" style="width:100%;">
                            </div>

                            <div class="mySlides fade">
                            <img src="assets/Images/background4.jpg" style="width:100%;">
                            </div> -->

                    </div>
                </div>
                </div>
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
                <div class="goals">
                    <div class="goals-container">
                        <div class="goals-circles"><div class="circle-content">
                            <i class="fas fa-chalkboard-teacher icon-font"></i><br>
                            <div class="circle-p">70 Teachers</div>
                        </div></div>
                        <div class="goals-circles"><div class="circle-content"><i class="fas fa-user-graduate icon-font"></i><br><p class="circle-p">250000 students</p></div></div>
                        <div class="goals-circles"><div class="circle-content">
                            <i class="fas fa-book icon-font"></i><br>
                            <div class="circle-p">97% Passing rate</div>
                        </div></div>
                        <div class="goals-circles"><div class="circle-content">
                            <i class="fas fa-users icon-font"></i><br>
                            <div class="circle-p">100% Satisfied parents</div>
                        </div></div>
                    </div>
                </div>
                <!-- Third Row of the page begins here with Facilities -->
                <div class="facility">

                    <h1 class="main-heading-w">Facilities</h1>
                    <div class="main-heading-bot"></div>
                    
                    <div class="facility1">
                        <!-- <h1>Facilities</h1> -->
                        <div class="Over-lay">
                            <img class="lab-img" src="assets/Images/Facility-1.jpg" alt="">
                                <div class="text">Science Laboratory</div>
                        </div>
                        <div class="Over-lay">
                            <img class="lab-img" src="assets/Images/Facility-2.jpg"
                                alt="">
                                <div class="text">Computer Laboratory</div>
                        </div>
                        <div class="Over-lay">
                            <img class="lab-img" src="assets/Images/Facility-3.jpg" alt="">
                            <div>
                                <div class="text">Mathematics Laboratory</div>
                            </div>
                        </div>
                    </div>    
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

        //slideshow script
        var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                
                for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
        
                slides[slideIndex-1].style.display = "block";  
                
                setTimeout(showSlides, 3000); // Change image every 2 seconds
            }
    </script>
</body>

</html>