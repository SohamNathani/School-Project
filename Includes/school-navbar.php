<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        *{
            margin: 0;
            font-family: 'Open Sans', Helvetica, sans-serif;
        }
    
        .topnav {
            overflow: hidden;
            background-color: #6BA5F1;
            float: right;
            padding-top: 69px;
            grid-area: top-nav;
            margin-right: 10px;
            margin-bottom: auto;
        }
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;

        }
        .topnav a:hover{
            background-color: #0D5D98;
            color: white;
        }
        .topnav .icon{
            display: none;
        }
        .topnav .icon2{
        	display: none;
        }
        a.active{
            background-color: #0D5D98;
            color: white;
        }
        .p-left{
            margin-left:10px; 
        }
        .main{
            height: 150px;
            background-color: #0D5D98;
            display: grid;
            grid-template-columns:5% 12% auto 40%;
            grid-template-areas: 
            ". S-logo . top-nav";
        }

        /* school-logo-css */
        .school-logo{
            width: 140px;
            height: 120px;
        }
        .S-logo{
            grid-area: S-logo;
            padding-top: 8px;
        }
    
        @media screen and (max-width:800px){
            /* main responsive issue */
            /* .main{
                height: auto;
                background-color: #333;
            } */
            .icon2{
            	display: block;
            	margin: 10px 0px;
            }
            .p-left{
            	margin-left: 0px;
            }
            .main{
                height: 0px;
            }
            .S-logo{
                display: none;
            }
            .topnav{
                grid-column-start: 1;
                grid-column-end: 8;
                padding-top: 0px;
                margin-right: 0px;
                background-color: 0D5D98;
            }
            .topnav a /*not(:first-child) */
            {display: none;}
            .topnav a.icon{
                float: right;
                display: block;
            }
        }
        @media screen and (max-width:800px){
            .topnav.responsive{position: relative;}
            .topnav.responsive .icon{
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a{
                float: none;
                display: block;
                text-align: left;
            }
            .topnav.responsive a.active{
                float: none;
                display: block;
                text-align: left;
                background-color: #6BA5F1;
            }
        }
        </style>
    </head>
    
    
    <body>
        <div class="main">
            <div class="S-logo">
                <img class="school-logo" src="sarswati-vidhalay-logo.png" alt="School-logo">
            </div>
                <div class="topnav" id="myTopnav">
                		<a href="#" class="icon2"></a>
                        <a href="#home" class="active p-left">Home</a>
                        <a href="#news">News</a>
                        <a href="#contact">Contact</a>
                        <a href="#about">About Institution</a>
                        <a href="javasript:void(0);" class="icon" onclick="myFunction()">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
        </div>

    
        <script>
        function myFunction(){
            var x = document.getElementById("myTopnav");
            if(x.className === "topnav"){
                x.className += " responsive";
            }
            else {
                x.className = "topnav";
            }
        }
        </script>
    </body>