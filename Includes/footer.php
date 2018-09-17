<head>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .grid-container{
            display: grid;
            grid-template-columns: 10% 15% 15% 5% auto 10%;  
            height: 200px;
            width:100%;
            grid-template-areas: 
            ". At-a-glnce q-link . abt-school .";
            text-align: center;
            /* background-color: #E9E7E1; */
            font-family: 'Open Sans','Times New Roman', Times, serif;
            color: #94B4D6;
            background-color:rgba(64,110,157,0.21);
        }
        .Q-links {
            grid-area: q-link;
            padding:20px 20%;
            text-align:left;
        }
        .At-a-glnce {
            grid-area: At-a-glnce;
            padding:20px 20%;
            text-align: left;
            padding-left:0px;
        }
        .abt-school {
            grid-area: abt-school;
            padding:20px 20%;
            padding-right: 0px;
            padding-left:150px;
            text-align:right;
        }

        /* ul styling */
        ul{
            list-style-type: none;
        }
        a{
            text-decoration: none;
            color:#617488;
        }
        a:hover{
            color:#617488;
        }
        .f-li{
            padding: 2px;
        }
    </style>
</head>

    <div class="grid-container">
        <div class="Q-links">
            <h4>Quick Links</h4>
            <ul style="padding-top:20px">
                <li class="f-li"><a href="http://" target="_blank" rel="noopener noreferrer">Home</a></li>
                <li class="f-li"><a href="http://" target="_blank" rel="noopener noreferrer">Activities</a></li>
                <li class="f-li"><a href="http://" target="_blank" rel="noopener noreferrer">News</a></li>
                <li class="f-li"><a href="http://" target="_blank" rel="noopener noreferrer">About</a></li>
            </ul>
        </div>
        <div class="At-a-glnce">
            <h4>At a glance</h4>
            <ul style="padding-top:20px">
                <li class="f-li"><a href="tel:+">Phone no.</a></li>
                <li class="f-li"><a href="mailto:">email</a></li>
                <li class="f-li"><address>School Address:</address></li>
            </ul>
            
        </div>
        <div class="abt-school">
            <h4>About School</h4>
            <p style="padding-top: 20px; color: #617488">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent iaculis, elit gravida convallis malesuada, diam nibh hendrerit ex, ac sodales purus eros in felis</p>
        </div>
    </div>
    <div style="width:100%;background-color:#0D5D98; padding:20px; color:white; text-align:center;">Copyright &copy; 2018</div>
