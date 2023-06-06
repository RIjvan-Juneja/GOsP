<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

*{
    margin: 0px;
    padding: 0px;
}

body{
    font-family: 'Exo', sans-serif;
    color: #fff;
}


.context {
    width: 100%;
    position: absolute;
    top:7vh;
    
}

.context h1{
    text-align: center;
    color: #fff;
    font-size: 50px;
}


.area{
    background: #4e54c8;  
    background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
    width: 100%;
    height:100vh;
    
   
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}
        

        tr:nth-child(even) {
            background: #ff4c4c21;
        }

        

        td,
        td b {
            text-transform: uppercase;
        }
        .mb{
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="context">
        <div class="container">
            <h2 class="text-center font-bold mb">User Application</h2>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><b>Name</b></td>
                        <td>Juneja Rijvan Riyajbhai</td>
                        <td><b>Enrollment Number </b></td>
                        <td>201290116020</td>
                        <td rowspan="4" width="100px"><img src="assets/images/user2.jpg" alt="" width="180px"></td>
                    </tr>
                    <tr>
                        <td><b>Course</b></td>
                        <td>B.E</td>
                        <td><b>Branch</b></td>
                        <td>IT</td>
                    </tr>
                    <tr>
                        <td><b>Semester</b></td>
                        <td>3</td>
                        <td><b>Email Id</b></td>
                        <td>asdd54@bdh.com</td>
                    </tr>
                    <tr>
                        <td colspan="4"> <b>GitHub Link : </b><a href="">link</a></td>
                    </tr>
                    <tr>
                        <td><b>Skills :</b></td>
                        <td colspan="5">HTML,css,jS</td>
                    </tr>
                    

                    <tr>
                        <td colspan="5">
                            <b>About Us :</b> <br><br>
                            <p class="text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
                                provident, maiores eveniet, itaque omnis corrupti, quam id accusamus quo harum facere!
                                Molestiae aspernatur minima consequuntur nemo qui voluptate cumque hic eaque dicta,
                                maxime porro! Laudantium doloribus unde ab, labore mollitia excepturi, facere sunt enim
                                soluta nam saepe natus! Dicta, itaque.</p>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
    <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >

</body>

</html>