<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="shortcut icon" href="assets/Images/SaraswatiLogo.png">
    <title>Contact</title>
</head>
<body>
    <?php include_once "Includes/nav-bar.php"
     ?>
    <main>
        <section class="ContactHead">
            <div class="container">
            <h1 id="CHead">Contact Us</h1>
            </div>
        </section>
        <section class="container py-5 ">
            <div class="row">
                <div class="col-md-5 col-sm-12 mt-5">
                    <h2 class="mt-4" style="color:#EB3E4A!important">Phone:</h2><span class="ml-5" style="font-size: 1.3rem; font-weight: 200; color: #003468!important;">&nbsp;07673-232839</span>
                    <h2 class="mt-4" style="color:#EB3E4A!important">Email:</h2><span class="ml-5" style="font-size: 1.3rem; font-weight: 200; color: #003468!important;">&nbsp;saraswati7673@gmail</span>
                    <h2 class="mt-4" style="color:#EB3E4A!important">Address:</h2><p class="ml-5"><span style="font-size: 1.3rem; font-weight: 200; color: #003468!important;">Nagod,NH-75, Panna Khajuraho Road, Satna, Madhya Pradesh 485446</span></p>

                </div>
                <div class="col-md-7 col-sm-12 mt-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29027.730081997906!2d80.5779!3d24.5731!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf20c8cee0cfaf607!2sSaraswati+Shishu+Mandir!5e0!3m2!1sen!2sin!4v1542265283426" width="100%"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
</body>

</html>