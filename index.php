<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/s-g.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/nav-bar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
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
        <img src="https://jooinn.com/images/school-building-3.jpg" class="S-image" alt="School-Image" width="600" height="400">
        <div class="middle">
        <div class="s-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam blandit sem et lectus aliquam, in varius
             lectus interdum. Quisque ultrices.</div>
        </div>
    </div>
        </div>
        
            <!-- First Row ends here -->
            <!-- Second Row begins here with Speciality of the school-->
            <div class="row l-div Speciality">
            <h1 style="">Our Speciality</h1>
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
            <!-- Second Row ends here -->
            <!-- Third Row of the page begins here with Facilities -->
            <div class="row l-div facility">
            <h1>Facilities</h1>
            <div class="col-4 Over-lay">
                <img class="lab-img" src="http://www.dobbsschool.com/images/blog_img4.jpg" alt="">
                <div><div class="text">Science Laboratory</div></div></div>
            <div class="col-4 Over-lay">
                <img class="lab-img" src="http://www.udgamschool.com/UnzipImages/Computer%20Laboratory/12.JPG" alt="">
                <div><div class="text">Computer Laboratory</div></div></div>
            <div class="col-4 Over-lay">
                <img class="lab-img" src="http://davcsp.org/File/50/Mathlab.JPG" alt="">
               <div><div class="text">Mathematics Laboratory</div></div></div>
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
        function myFunction(){
            
        if (nav.className === "nav-bar") {
            nav.className += " responsive";
        } else {
            nav.className = "nav-bar";
        }
        }


    </script>
</body>

</html>
