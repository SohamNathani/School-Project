<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Home</title>
</head>

<body>
    <?php
        include_once "Includes/nav-bar.php";
    ?>
    <main>
        <section class="home-head">
            <p class="display4 text-center">To impart quality education ensuring self-ability to choice vocation.
                To provide academic excellence.</p>
        </section>
        <section class="container" style="padding:50px 0;">
            <h1 class="HEad text-center">Welcome</h1>
            <div class="row mt-4">
                <div class="text-center">
                    <p class="about-text">This school came into existence on 4/7/1982 and ever since it has been
                        continuously catering to the scholastic needs of the community</p>
                    <p class="about-text">At Saraswati Vidya Mandir, we believe that learning is an interactive process
                        wherein each student has a different disposition towards knowledge and learning. Our student
                        strength is small to allow the teachers to personalize the curriculum to a child to learn the
                        way he or she enjoys. We treat each student as distinct individual with his/her own uniqueness,
                        strengths, weaknesses and cultural diversity. We believe in creating an interactive and
                        entertaining environment that stimulates the desire to be inquisitive and learn new skills and
                        concepts. We are trusted by parents of multi-cultural Indian society. We practise
                        student–centred approach enriched with activities that develop imagination, thinking and
                        creativity. Personal care and attention are the key words in our teaching methodology.</p>
                </div>
            </div>
        </section>
        <section id="NEWs" style="padding:50px 0;">
            <div class="container">
                <h1 class="HEad text-center mb-3 text-white">Important News</h1>
                <div class="news-container">
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
                                echo '<div class="news-event"><div class="news-date"><h3 class="day">' . $row["day"] . '</h3><p class="month">' . $row["month"] . '</p></div><div class="news-detail"><h3 class="main-event">' . $row["event_name"] . '</h3><p class="news-time"><i class="far fa-clock"></i>' . date('h:i a', strtotime($row['time'])) . '</p></div></div>';
                            }
                            ?>

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
                                <img src="assets/Images/activity/' . $row["c_name"] . '" style="width:100%;">
                                </div>';
                            }
                            ?>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="container" style="padding: 80px 0px;">
            <div class="row" style="margin-top:20px;">
                <div class="col-md-4 col-sm-12 text-center">
                    <img src="assets\Images\achievment.jpg" class="img-fluid rounded shadow-lg mb-5 bg-white rounded" alt="Achievements">
                </div>
                <div class="col-md-8 col-sm-12 align-self-center">
                    <h1 class="HEad text-center" style="align-self: flex-start!important;">Achievements</h1>
                    <p class="about-text">
                        The school aims at not only in academic but also in extra – curricular activities . Our
                        students have displayed their excellent performance in extra-curricular activities like
                        Inter-school Essay competition, Debate competition , Elocution, Science Exhibition , Drama ,
                        Painting and Song competition held in our school or in various schools of Rourkela.
                    </p>
                    <p class="pt-3 about-text">
                        In the academic year 2017-18, total 71 students appeared in AISS Examination and passed with
                        flying colours. 40 students got 1st division in the Board Examination making their alma-mater
                        to be immensely proud of them.
                    </p>
                </div>
            </div>
        </section>
        <section class="detailed_chart">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center pt-5">
                        <i class="fas fa-chalkboard-teacher chart_icon"></i><br>
                        <span class="chart font-weight-bold">70 Teachers</span>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center pt-5">
                        <i class="fas fa-user-graduate chart_icon"></i><br>
                        <span class="chart font-weight-bold">4000 Students</span>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center pt-5">
                        <i class="fas fa-book chart_icon"></i><br>
                        <span class="chart font-weight-bold">97% Passing Rate</span>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center pt-5">
                        <i class="fas fa-users chart_icon"></i><br>
                        <span class="chart font-weight-bold">100% Satisfying Parents</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="facility" style="padding:50px 0px;">
            <div class="container">
                <h1 class="HEad text-center pt-4">Facility</h1>
                <p class="text-center container" style="font-size: 1.2rem; margin-top:20px;">Our School provides various facilities to the students which improves the
                student in the various manners.</p>
                <div class="row" style="padding:20px 0;">
                    <div class="col-md-4 col-sm-12  text-center">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <img src="assets/Images/Facility-1.jpg" alt="Science Laboratory" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Science Laboratory</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12  text-center">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <img src="assets/Images/Facility-2.jpg" alt="Computer Laboratory" class="card-img-top">
                            <div class="card-body">
                                    <h4 class="card-title">Computer Laboratory</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12  text-center">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <img src="assets/Images/Facility-3.jpg" alt="Mathematics Laboratory" class="card-img-top">
                            <div class="card-body">
                                    <h4 class="card-title">Mathematics Laboratory</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php 
        include_once "Includes/footer.php"
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
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