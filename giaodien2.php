
<?php
    include("header.php");
    include("menu_logout.php");
?>

<div id = "main">
   <br> <br>
  
   <center> <font face="Comic sans MS" size="9" >** Merry Christmas **</font> </center>
    <div class="row">  
      
      
        <div class= "col-md-12">
        <div id="mycarousel" class="carousel slide" data-ride="carousel">

            <!--Cho hiện thị chỉ số nếu muốn-->
            <ol class="carousel-indicators">
                <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mycarousel" data-slide-to="1" class=""></li>
                <li data-target="#mycarousel" data-slide-to="2" class=""></li>
            </ol>
            <!--Hết tạo chỉ số-->

            <!--Các slide bên trong carousel-inner-->
            <div class="carousel-inner">

            <!--Slide 1 thiết lập hiện thị đầu tiên .active-->
            <div class="carousel-item active">
                <img class="d-block w-100 h" src="./img/anh1.jpg">
                
            </div>

            <!--Slide 2-->
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/anh7.jpg">
            </div>
            <!--Slide 3-->
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/anhcuoi.jpg">
            </div>
            </div>



            <!--Cho thêm khiển chuyển slide trước, sau nếu muốn-->
                <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
                <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
            <!--Hết tạo điều khiển chuyển Slide--> 

        </div>
    </div>
    <div class= "col-md-2"></div>
       
    </div>
        <br> <br>
         <center> <font face="Comic sans MS" size="9">Phim Hot THáng 12</font> </center>
  
       
        <br><br>
        <div class="row">
            
            <div class="col-md-4"> 
                <center><img src= "./img/robin hood.jpg" class="img-thumbnail" alt="">
                    <div class ="caption">
                        <h4>Robin hood</h4>
                        <p>
                            <a href="#" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>
            </div>
            <div class="col-md-4"> 
                <center><img src= "./img/Ralph breaks the internet.jpg" class="img-thumbnail" alt="">
                    <div class ="caption">
                        <h4>Ralph breaks the internet</h4>
                        <p>
                            <a href="#" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>
            </div>
            <div class="col-md-4"> 
                <center><img src= "./img/comaytuthan.jpg" class="img-thumbnail" alt="">
                    <div class ="caption">
                        <h4>Cỗ máy tử thần</h4>
                        <p>
                            <a href="#" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>
            </div>
        </div>
        <div class=row></div>
        <div class="row">
            
            <div class = "col-md-4">
               <center> <img src= "./img/hunter killer.jpg" class="img-thumbnail" alt="">
                    <div class ="caption">
                        <h4>Hunter killer</h4>
                        <p>
                            <a href="#" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>    
            </div>
      
            <div class = "col-md-4">
               <center> <img src= "./img/toiac.jpg" class="img-thumbnail" alt="">
                    <div class ="caption">
                        <h4>Tội ác</h4>
                        <p>
                            <a href="#" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>    
            </div>
        
            <div class = "col-md-4">
            
                <center><img src= "./img/fat-buddies.jpg" class="img-thumbnail" alt="">
                    <div class ="caption">
                        <h4>Fat-buddies</h4>
                        <p>
                            <a href="#" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>    
            </div>
        </div>
       
    </div>
    
    
               
       
   
<?php
    include("footer.php");
?>
