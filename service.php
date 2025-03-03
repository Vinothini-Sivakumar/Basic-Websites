<?php include("header.html")
?>
<head>
    <style>
        #service{
            height: 700px;
            width: 100%;
            background-image: linear-gradient(pink, purple);
        }
        .row9{
            height: 350px;
            width: 90%;
            margin: auto;
        }
        .col10{
            height: 300px;
            width: 22%;
            float: left;
            border: solid;
            margin-left: 20px;
            margin-top: 20px;
            border-radius: 50px;
            box-shadow: black 10px 10px;
        }
        .col10 h3{
            font-size: 30px;
            text-transform: capitalize;
            text-align: center;
            top: 20px;
            position: relative;
        }
        .col10 img{
            top: 30px;
            left: 25%;
            position: relative;
            border-radius: 10px;
        }
        .col10 p{
            font-size: 25px;
            text-transform: capitalize;
            text-align: center;
            top: 50px;
            position: relative;
            
        }
        .col10 a{
            text-decoration: none;
            background-color: lightcoral;
            padding: 6px;
            border-radius: 5px 10px;
        }
        .col10 a:hover{
            background-color: white;
            box-shadow: black 10px 10px;
        }
    </style>
</head>

<body>
    <div id="service">
        <div class="row9">
            <div class="col10">
                <h3>web</h3>
                <img src="web de.jpg" height="150px" width="150px" alt="">
                <p><a href="">book now</a></p>
            </div>
            <div class="col10">
                <h3>javascript</h3>
                <img src="web de.jpg" height="150px" width="150px" alt="">
                <p><a href="">book now</a></p>
            </div>
            <div class="col10">
                <h3>php</h3>
                <img src="web de.jpg" height="150px" width="150px" alt="">
                <p><a href="">book now</a></p>
            </div>
            <div class="col10">
                <h3>bootstrap</h3>
                <img src="web de.jpg" height="150px" width="150px" alt="">
                <p><a href="">book now</a></p>
            </div>
        </div>
        <div class="row9">
            <div class="col10">
                <h3>react</h3>
                <img src="web de.jpg" height="150px" width="150px" alt="">
                <p><a href="">book now</a></p>
            </div>
            <div class="col10">
                <h3>angular</h3>
                <img src="web de.jpg" height="150px" width="150px" alt="">
                <p><a href="">book now</a></p>
            </div>
            <div class="col10">
                <h3>node</h3>
                <img src="web de.jpg" height="150px" width="150px" alt="">
                <p><a href="">book now</a></p>
            </div>
            <div class="col10">
                <h3>web</h3>
                <img src="web de.jpg" height="150px" width="150px" alt="">
                <p><a href="">book now</a></p>
            </div>
        </div>
    </div>
</body>



<?php include("footer.html")
?>