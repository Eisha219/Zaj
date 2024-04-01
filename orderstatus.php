<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<body>
    <!-- ==========navbar start========= -->
<?php
include_once "nav.php"
?>
<style>

.main{
  
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.head{
    text-align: center;
}
.head_1{
    font-size: 30px;
    font-weight: 600;
    color: #333;
}
.head_1 span{
    color: #d37c35;
}
.head_2{
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin-top: 3px;
}
.main ul{
    display: flex;
    margin-top: 80px;
}
.main ul li{
    list-style: none;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.main ul li .icon{
    font-size: 35px;
    color: #d37c35;
    margin: 0 60px;
}
.main ul li .text{
    font-size: 14px;
    font-weight: 600;
    color: #d37c35!important;
}

/* Progress Div Css  */

.main ul li .progress-bar{
    width: 30px!important;
    height: 30px!important;
    border-radius: 50%!important;
    background-color: rgba(68, 68, 68, 0.781)!important;
    margin: 14px 0;
    display: grid;
    place-items: center;
    color: #fff;
    position: relative;
    cursor: pointer;
}
.main ul li .progress-bar::after {
    content: "";
    position: absolute;
    width: 125px;
    height: 5px;
    background-color: rgba(68, 68, 68, 0.781);
    right: 30px;
    top: 50%;
    transform: translateY(-50%);
}

.main  ul li .one::after{
    width: 0!important;
    height: 0!important;
}
.main ul li .progress-bar .uil{
    display: none;
}
.main ul li .progress-bar p{
    font-size: 13px;
}

/* Active Css  */

.main ul li  .active{
    background-color: #d37c35!important;
    display: grid;
    place-items: center;
}
.main li .active::after{
    background-color: #d37c35;
}
.main ul li .active p{
    display: none;
}
.main ul li .active .uil{
    font-size: 20px;
    display: flex;
}

/* Responsive Css  */

@media (max-width: 980px) {
    .main ul{
        flex-direction: column;
    }
   .main ul li{
        flex-direction: row;
    }
   .main ul li .progress-bar{
        margin: 0 30px;
    }
    .main  ul li .progress-bar::after{
        width: 5px;
        height: 55px;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        z-index: -1;
    }
    .main  ul li  .one::after{
        height: 0;
    }
  .main  ul li .icon{
        margin: 15px 0;
    }
}

@media (max-width:600px) {
    .head .head_1{
        font-size: 24px;
    }
    .head .head_2{
        font-size: 16px;
    }
}


</style>
<body>
    <div class="container mt-4">
    <p class="head_2">Excepted Arrival time: 20 March,2024</p>
    <div class=" text-end mt-2"  id="billingForm">
     <button class="main-btn px-2" data-bs-toggle="modal" data-bs-target="#orderCancelModal">Cancel an Order</button>
    </div>
    <div class="main">
    <div class="head">
        <p class="head_1">Shipment <span>Status</span></p>
        <p class="head_2">Tracking No:12345</p>
    </div>
    <ul>
        <li>
            <i class="icon uil uil-capture"></i>
            <div class="active progress-bar one">
                <p>1</p>
                <i class="uil uil-check"></i>
            </div>
            <p class="text">Order in Progress</p>
        </li>
        <li>
            <i class="icon uil uil-clipboard-notes"></i>
            <div class="progress-bar two">
                <p>2</p>
                <i class="uil uil-check"></i>
            </div>
            <p class="text"> Order Shipped</p>
        </li>
        <li>
            <i class="icon uil uil-exchange"></i>
            <div class="progress-bar three">
                <p>3</p>
                <i class="uil uil-check"></i>
            </div>
            <p class="text">Order Enroute</p>
        </li>
        <li>
            <i class="icon uil uil-map-marker"></i>
            <div class="progress-bar four">
                <p>4</p>
                <i class="uil uil-check"></i>
            </div>
            <p class="text">Order Arrived</p>
        </li>
    </ul>
</div>
    </div>
    <div class="container">
    <div class="my-5"><div class="section-subheading">Shipping information</div></div>
    </div>
  
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <table class="table">
  <thead>

    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone no</th>
      <th scope="col">Destination</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Eisha</td>
      <td scope="col">eisha@gmail.com</td>
      <td>03412466203</td>
      <td>Lahore Johr town 74D</td>
    </tr>
    <tr>
      <th scope="col">Order</th>
      <th scope="col">Status</th>
      <th scope="col">Quantity</th>
      <th scope="col">Payment Method</th>
      <tr>
      <td>Green ring</td>
      <td>in Progress</td>
      <td>2</td>
      <td>Cash on Delivery</td>
    </tr>
    </tr>

  </tbody>
</table>
        </div>
    </div>

</div>

 <!-- Order Cancel Modal -->
 <div class="modal fade" id="orderCancelModal" tabindex="-1" aria-labelledby="orderConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderCancelModalLabel">Order Placed</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Are  you sure to cancel this order?
        </div>
        <div class="modal-footer">
        <button type="button" class="main-btn border-0 btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="sec-btn" onClick="ordercancelconfirm()" >Confirm</button>
      </div>
      </div>
    </div>
  </div>
   Order Cancel confimation box Modal
 <div class="modal fade" id="orderCancelconfirmModal" tabindex="-1" aria-labelledby="orderConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderCancelModalLabel">Order Cancel Request</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Your cancellation request for order ID 12345 has been successfully submitted. 
        The request is being sent to the administrator for processing. 
        You will receive a confirmation email shortly.        
      </div>
        <div class="modal-footer">
        <button type="button" class="main-btn border-0 btn-secondary" data-bs-dismiss="modal">ok</button>
      </div>
      </div>
    </div>
  </div>
   
<!-- ======footer section startt====== -->
<?php
 include_once 'footer.php'
?>


</body>
</html>



<script>
const one = document.querySelector(".one");
const two = document.querySelector(".two");
const three = document.querySelector(".three");
const four = document.querySelector(".four");
const five = document.querySelector(".five");

one.onclick = function() {
    one.classList.add("active");
    two.classList.remove("active");
    three.classList.remove("active");
    four.classList.remove("active");
    five.classList.remove("active");
}

two.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.remove("active");
    four.classList.remove("active");
    five.classList.remove("active");
}
three.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.remove("active");
    five.classList.remove("active");
}
four.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.add("active");
    five.classList.remove("active");
}
five.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.add("active");
    five.classList.add("active");
}
function ordercancelconfirm(){
    alert("Your cancellation request for order ID 12345 has been successfully submitted. The request is being sent to the administrator for processing. You will receive a confirmation email shortly")
    window.location="index.php";
}
</script>
