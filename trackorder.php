<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
 
<style>
    
 .user-container {
    background: linear-gradient(rgba(0, 0, 0, 0.5), transparent);
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;

}

.user-form-box{
    width: 90%;
    max-width:450px;
    min-width: 350px;
    background-color: #fff;
    padding: 55px;
    text-align: center;
    border-radius: 10px;
    height: 300px;
    box-shadow: -2px 2px 15px rgba(0, 0, 0, 0.5);
}
.user-form-box h1{
    color: #d37c35;
    font-size: 30px;
}
.user-form-box .under-line{
    width: 30px;
    height: 4px;
    background: #d37c35;
    margin: 10px auto 50px auto;
    border-radius: 5px;
    transition: transform .5s;
}
.input-field{
    background: #eaeaea;
    margin: 15px 0;
    border-radius: 10px;
    display: flex;
   align-items: center;
   max-height: 60px;
   transition: max-height 0.5s;
   overflow: hidden;
}
.user-input-group{
    height: 280px;
}
.user-input-group .input-field input{
    width: 100%;
    background: transparent;
    border: 0;
    outline: 0;
    padding: 18px 15px;

}
.user-input-group .input-field i{
    margin-left: 15px;
    color: #999;
}
.user-form-box form p 
{
    text-align: left;
    font-size: 13px;
}
.user-form-box form p  a
{
text-decoration: none;

}
.btn-field{
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
.btn-field button{
   flex-basis: 50%;
   background: #d37c35;
   color: #fff;
   border: 0;
   outline: none;
   cursor: pointer;
   height: 40px;
   border-radius: 20px;
   transition: background 1s;
   
}
.btn-field button.disable{
    background: #eaeaea;
    color:#555;
}


</style>
<body>
  <!-- ==========navbar start========= -->
<?php
include_once "nav.php"
?>
<!-- =========banner section startt===== -->
<section>
    <div class="user-container">
        <div class="user-form-box">
         <h1 class="title">Track Order</h1>
         <div class="under-line"></div>
         <form id="orderForm" action="orderstatus.php" method="POST">
    <div class="user-input-group">
      <div class="input-field namefield">
        <i class="fa-solid fa-user"></i>
        <input type="text" id="orderid" required placeholder="Enter Order Id" />
      </div>
      <div class="btn-field text-center ">
        <button type="button" class="checkstatus">Track your Shipment <i class="fas fa-arrow-right"></i></button>
      </div>
    </div>
  </form>

     </div>
     </div>
</section>


<!-- ======footer section startt====== -->
<?php
 include_once 'footer.php'
?>


    
   
    



<script>
   document.querySelector('.checkstatus').addEventListener('click', function() {
      var orderId = document.getElementById('orderid').value;
      if (orderId === '12345') {
        document.getElementById('orderForm').submit();
      } else {
        alert('Invalid Order ID. Please try again.');
      }
    });
</script>
</body>
</html>