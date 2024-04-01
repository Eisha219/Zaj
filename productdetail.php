<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>

<style>
 .flex-box{
    display: flex;
    width: 1000px;
    margin: 20px auto;
}
.left{
    width: 40%;
}
.big-img{
    width: 250px;
}
.big-img img{
    width: inherit;
}
.images{
    display: flex;
    justify-content: space-between;
    width: 60%;
    margin-top: 15px;
}
.small-img{
    width: 50px;
    overflow: hidden;
    border: 1.5px solid black;
}
.small-img img{
    width: inherit;
    cursor: pointer;
    transition: all 0.3s ease;
}
.small-img:hover img{
    transform: scale(1.2);
}
.url{
    font-size: 16px;
    font-weight: 400;
    color: rgb(0, 102, 255);
}
.pname{
    font-size: 22px;
    font-weight: 600;
    margin-top: 50px;
}
.ratings i{
    color: rgb(255, 136, 0);
}
.price{
    font-size: 20px;
    font-weight: 500;
    margin: 20px 0;
}
.size{
    display: flex;
    align-items: center;
    margin: 20px 0;
}
.size p{
    font-size: 18px;
    font-weight: 500;
}
.psize{
    width: 60px;
    height: 30px;
    border: 1px solid #ff5e00;
    color: #000;
    text-align: center;
    margin: 0 10px;
    cursor: pointer;
}
.psize.active{
    border-width: 1.5px;
    color: #ff5e00;
    font-weight: 500;
}
.quantity{
    display: flex;
}
.quantity p{
    font-size: 18px;
    font-weight: 500;
}
.quantity input{
    width: 40px;
    font-size: 17px;
    font-weight: 500;
    text-align: center;
    margin-left: 15px;
}
.btn-box{
    display: flex;
    margin-top: 40px;
}
.btn-box button{
    font-size: 18px;
    padding: 8px 25px;
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    color: white;
}
.cart-btn{
    background-color: #ff5e00;
    margin-right: 20px;
}
.buy-btn{
    background-color: #000;
}
.cart-btn:hover{
    background-color: #ff3c00;
}
.buy-btn:hover{
    background-color: #fff;
    color: #000;
    border: #000 1px solid;
}
.product-detail{
    font-size: 18px;
    letter-spacing: 2.5px;
}


</style>
<body>
    <!-- ==========navbar start========= -->
<?php
include_once "nav.php"
?>
<!-- =========banner section startt===== -->

<div class="container-fluid">
    <div class="flex-box">
        <div class="left">
            <div class="big-img">
                <img src="./images/pins/pin1.jpg">
            </div>
            <div class="images">
                <div class="small-img">
                    <img src="./images/pins/pin1.jpg" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="./images/pins/pin2.jpg" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="./images/pins/pin3.jpg" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="./images/pins/pin1.jpg" onclick="showImg(this.src)">
                </div>
            </div>
        </div>
    
        <div class="right">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Hair Accessories</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Bobby Pins</li>
                </ol>
              </nav>
              
            <div class="pname">Bobby Pins</div>
            <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">Rs $40</div>
            <!-- <div class="size">
                <p>Size :</p>
                <div class="psize active">M</div>
                <div class="psize">L</div>
                <div class="psize">XL</div>
                <div class="psize">XXL</div>
            </div> -->
            <div class="quantity">
                <p>Quantity :</p>
                <input type="number" min="1" max="5" value="1">
            </div>
            <div class="btn-box">
               <a href="cart.php"><button class="cart-btn">Add to Cart</button></a> 
               <a href="checkout.php"> <button class="buy-btn">Buy Now</button></a>
            </div>
            
        </div>
        
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-4">
            <div class="my-3 product-detail">
                <p>Elevate your style with our stunning double layered necklace set, perfect for adding a touch of elegance to any outfit. Double the layers, double the beauty.</p>
            </div>
        </div>
    </div>
</div>

<!-- ======footer section startt====== -->
 <!-- footer  -->
<?php
 include_once 'footer.php'
?>
<script>
       let bigImg = document.querySelector('.big-img img');
        function showImg(pic){
            bigImg.src = pic;
        }
</script>
</body>
</html>