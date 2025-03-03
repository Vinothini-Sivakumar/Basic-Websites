<?php include("header.html")
?>
<head>
    <style>
        #contact{
            height: 700px;
            width: 100%;
        }
        .row8{
            height: 350px;
            width: 100%;
            background-image: linear-gradient(lightgreen, lightseagreen);
        }
        .col10{
            height: 350px;  
            width: 50%;
            float: left;
        }
        .col11{
            height: 350px;
            width: 50%;
            float: right;
        }
        h3{
            font-size: 30px;
            text-transform: capitalize;
            text-align: center;
        }
        .col10 p{
            font-size: 25px;
            text-align: center;
            text-transform: capitalize;
            top: 40px;
            position: relative;
        }
    </style>
</head>

<body>
    <div id="contact">
        <div class="row7">
        <iframe src= "Embed a Map" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="row8">
            <div class="col10">
                <h3>location</h3>
                <p>123, xxxx<br>
                   yyyyy, <br>
                   zzzzzzz.</p>
            </div>
        </div>
        <div class="col11">
            <h3>contact</h3>
            <p>01234 56789</p>
            <p>xx@gmail.com</p>
        </div>
    </div>
</body>






<?php include("footer.html")
?>