<?php include("header.html")
?>
<head>
    <style>
        #about{
           height: 700px;
           width: 100%; 
           background-image: linear-gradient(lightgreen, lightseagreen);
        }
        .row5{
            height: 350px;
            width: 100%;
        }
        .col6{
            height: 350px;
            width: 50%;
            float: left;
        }
        .col6 img{
            top: 80px;
            left: 80px;
            position: relative;
            border-radius: 45px 20px;
            box-shadow: skyblue 0px 0px 10px 8px;
        }
        .col7{
            height: 350px;
            width: 50%;
            float: right;
        }
        .col7 p{
            font-size: 30px;
            top: 30%;
            right: 80px;
            position: relative;
            text-align: justify;
            font-style: italic;
        }
        .row6{
            height: 350px;
            width: 100%;
        }
        .col8{
            height: 350px;
            width: 50%;
            float: left;
        }
        .col8 p{
            font-size: 30px;
            top: 30%;
            left: 80px;
            position: relative;
            text-align: justify;
            font-style: italic;
        }
        .col9{
            height: 350px;
            width: 50%;
            float: right;
        }
        .col9 img{
            top: 80px;
            left: 30%;
            position: relative;
            border-radius: 45px 20px;
            box-shadow: skyblue 0px 0px 10px 8px;
        }
        marquee{
            font-size: 30px;
            text-transform: capitalize;
            background-color: aquamarine;
        }
    </style>
</head>
<body>
    <marquee behavior="" direction="">
        <h4>welcome</h4>
    </marquee>
    <div id="about">
        <div class="row5">
            <div class="col6">
                <img src="web.jpg" height="200px" width="200px" alt="">
            </div>
            <div class="col7">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium hic expedita cumque sunt consequuntur. Alias, id quod animi, libero rerum nemo atque, consequatur sint quos laudantium ex sunt ratione error.</p>
            </div>
        </div>
        <div class="row6">
            <div class="col8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quidem corporis magni sapiente voluptatem natus explicabo dicta, obcaecati reiciendis maxime iure facilis. Veniam aliquam ea sunt dolore deleniti excepturi repudiandae?</p>
            </div>
            <div class="col9">
                <img src="web.jpg" height="200px" width="200px" alt="">
            </div>
        </div>
    </div>
</body>

<?php include("footer.html")
?>