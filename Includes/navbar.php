<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
</head>

<body>
    <header>
        <nav>
            <div class="ham-button"><a><i onclick="myFunction()" class="fa fa-bars" aria-hidden="true"></i></a></div>
<!--        <div class="school-logo"><img src="" alt="School Logo"></div>
            school name image
-->
        <div class="main-nav-section">
            <ul class="nav-bar" id="toggle" >
            <p id="n-quote">सरस्वती शिक्षा परिषद् मध्यप्रदेश एवं विद्याभारती से सम्बद्ध </p>
                
                <li><a class="b-link p-left" href="#home">Home</a></li>
                <li><a class="b-link" href="#news">News</a></li>
                <li><a class="b-link" href="#activities">Activities</a></li>
                <li><a class="b-link" href="#about">About Institution</a></li>
                
            </ul>            
        </div>
        </nav>
    </header>
    <script>
              $(document).ready(function(){
                    $(".b-link").click(function() {
              // remove classes from all
              $("b-link").removeClass("active1");
              // add class to the one we clicked
              $(this).addClass("active1");
           });
        });   
    </script>
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
