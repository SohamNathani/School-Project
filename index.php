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
        <?php include_once "Includes/navbar.php";
        ?>
    </header>
    <main style="height: 1000px">
    <div class="school-image">
        <div class="school-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Praesent iaculis, elit gravida convallis malesuada, diam 
                nibh hendrerit ex, ac sodales purus eros in felis.</p>
                <button>Know more</button>
        </div>
    </div>

    
    </main>
    <footer>
    <?php include_once "Includes/footer.php";
    ?>
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
