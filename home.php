<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background-image: url(pic26.jpg);

}

        
a{
    text-decoration: none;
    color: white;

}

h1{
    color: white;
}


.container{
    position: absolute;
    right: 0;
    width: 80vw;
    height: 100vh;

}





.container .content{
    position: relative;
    margin-top: 10vh;
    min-height: 90vh;
}
.container .content .cards{
    padding: 20px 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.container .content .cards .card{
    width: 650px;
    height: 150px;
    background: #D071f9;
    margin: 20px 10px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),0 6px 20px 0 rgba(0, 0, 0, 0.19);
}


       

    </style>
</head>
<body><br><br>
    <h1><center>WELCOME TO GALLERY CAFE <br><br>ADMIN PANEL</center></h1>

    <div class="container">
            <div class="nav">
                <div class="user">
                    <div class="img-case">
                    </div>
                </div>
            
        </div>
        <div class="content"><bt><br>
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><a href ="login.php">ADMIN</a></h1>

                    </div>
                    <div class="icon-case">
                        <img src="dashbd/employee.gif" alt="">
                    </div>
                </div>  
                
                <div class="card">
                    <div class="box">
                        <h1><a href ="staff_log.php">STAFF</a></h1> 
                    </div>
                    <div class="icon-case">
                        <img src="dashbd/employee.gif" alt="">
                    </div>
                </div>   
            
            
            
             
            </div>
            
        
        </div>
    </div>
</body>
</html>