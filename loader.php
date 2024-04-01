<!DOCTYPE html>
<html lang="en">
<?php
include_once 'head.php'
?>
<style>
    /* Preloader */
.preloaderBg {
    position: fixed;
    z-index: 10000;
    top: 0;
    background: #fff;
    width: 100%;
    height: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
}
.preloader-wrap{
    position: relative;
    width: 250px;
    height: 250px;
}

.preloader-logo {
    margin: auto;
    background-size: 150px;
    background-color: #d37c35;
    border-radius: 50%;
    width: 200px;
    height: 200px;
    position: absolute;
    top: 25px;
    left: 25px;
    border: 5px solid #d37c35;
    border-top: 5px solid #d37c35;
    
}


.preloader-circle {
    border: 5px solid #f3f3f3;
    border-top: 5px solid #c18263;
    border-radius: 50%;
    width: 250px;
    height: 250px;
    animation: spin 1s ease-in-out infinite;
    position: absolute;
    top: 0;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
.logo {
   
  font-size: 50px;
  letter-spacing: 18px;
  position: absolute;
  top: 40%;
  left: 20%;
  transform: translateY(-40%);
  font-weight: 300;

}

</style>

<body>
<!-- apply javascript before page content be loaded -->

<div class="preloaderBg" id="preloader">
    <div class="preloader-wrap">
        <div class="preloader-logo "><span class="logo justify-content-center align-items-center">ZAJ</span> </div>
        <div class="preloader-circle"></div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
   $(window).on('load', function() {
            // Hide the preloader after all content is loaded
            $('#preloader').delay(500).fadeOut('fast');
            $('html').css({'overflow-y':'auto'});
        });
</script>

<!-- end page-content -->


<!-- ------end page--- -->

</body>
</html>