<?php include ("header.html")
?>
<head>
    <style>
        #register{
            height: 700px;
            width: 100%;
            background-image: url("robo.jpeg");
            background-position: center;
            background-size: cover;
        }
        table{
            height: 400px;
            width: 500px;
            top: 200px;
            position:relative;
            left: 40%;
        }
        td{
            font-size: 30px;
            text-transform: capitalize;
            color: white;
        }
        input,select{
            height: 30px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="register">
        <form action="connect.php" method="POST">
            <table>
                <tr>
                 <td>name</td>   
                <td><input type="text"name="name" placeholder="Enter your name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="Enter your email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password"name="password" placeholder="Enter you password"></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="date" name="date"></td>
                </tr>
                <tr>
                    <td>domin</td>
                    <td>
                        <select name="domin" id="">
                        <option value=""></option>
                            <option value="Ai">Ai</option>
                            <option value="Ml">Ml</option>
                            <option value="Web">Web</option>
                            <option value="Python">Python</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>resume</td>
                    <td><input type="file" name="resume"></td>
                </tr>
                <tr>
                    <td><input type="submit" class="button"></tr></td>
            </table>
        </form>
    </div>
</body>



<?php include("footer.html")
?>