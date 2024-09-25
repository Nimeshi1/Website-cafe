<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUSTOMER FUNCTIONS</title>
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
    background-image: url(pic26.jpg);
    
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
    background: #2bb492;
    margin: 20px 10px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),0 6px 20px 0 rgba(0, 0, 0, 0.19);
}


       

    </style>
</head>
<body><br><br>
    <h1><center>WELCOME TO OUR GALLERY CAFE WEBSITE<br><br>DASHBOARD</center></h1>

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
                        <h1><a href ="a1_products.php">LATEST PRODUCTS</a></h1>

                    </div>
                    <div class="icon-case">
                        <img src="dashbd/employee.gif" alt="">
                    </div>
                </div>  
                
                <div class="card">
                    <div class="box">
                        <h1><a href ="a1_cart.php">ADD TO CART</a></h1> 
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