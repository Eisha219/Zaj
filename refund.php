<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
 <style>
        /* Custom styles for the refund policy page */
        .refund {
            background-color: #f8f9fa;
        }
        /* .container {
            max-width: 800px;
            margin: 50px auto;
        } */
        h1, h2 {
            color: #343a40;
            margin-bottom: 30px;
        }
        p {
            color: #6c757d;
            line-height: 1.6;
        }
      
    </style>
<body class="refund">
    <!-- ==========navbar start========= -->
<?php
include_once "nav.php"
?>
   <section >
   <div class="container justify-content-center">
    <div class="container">
    <h2 class="section-subheading text-center mt-4">Refund Policy</h2>
  </div>
 <p class="lead">At our services, we want to ensure that you are satisfied with your purchase. If you have any questions or concerns, please do not hesitate to 
    <span ><a href="contact.php" class="text-primary">contact us</a> </span>.</p>

        <h2>Refund Process</h2>
        <p>If you are not satisfied with your purchase, please follow these steps to request a refund:</p>
        <ol class=" list-styled">
            <li>Send an email to <a href="zaineb@gmail.com">zaineb@gmail.com</a> within 7 days of your purchase.</li>
            <li>Include your order number and reason for the refund request in the email.</li>
            <li>We will review your request and respond within 24 hours business days.</li>
            <li>If your request is approved, we will process the refund to your original method of payment.</li>
        </ol>
        <div class="highlight my-2">
            <h2>Cancel Order Policy</h2>
            <p>Please note that certain some rules for cancel order:</p>
            <ol class=" list-styled">
                <li>if your order is not dispatch ,we will cancel your order without any charges</li>
                <li>Once an order has been dispatched, any return shipping charges will be the responsibility of the customer</li>
                <li>The order can be change in case of any issue</li>
    </ol>
            <p>If you have any questions about whether your item is eligible for a refund, please contact us.</p>
        </div>

        <div >
            <h2>Refund Exceptions</h2>
            <p>Please note that certain items are not eligible for refunds:</p>
            <ol class="highlight list-styled">
                <li>Please note that refunds will not be processed for orders placed more than 7 days ago</li>
                <li>We do not offer refunds unless we deliver the incorrect order or the product is faulty.</li>
              </ol>
            <p>If you have any questions about whether your item is eligible for a refund, please contact us.</p>
        </div>

        <h2>Contact Us</h2>
        <p>If you have any questions about our refund policy, please contact us:</p>
        <p>Email: <a href="mailto:info@example.com">zaineb@gmail.com</a><br>
        Phone: 0300751235</p>
    </div>
   </section>
   

    
<!-- ======footer section startt====== -->

<!-- footer  -->
<?php
 include_once 'footer.php'
?>
</body>
</html>
