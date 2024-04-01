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
<!-- =========banner section startt===== -->
<section class="banner-section">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item  active">
        <img src="./images/banner-3.jpg" class="d-block w-100" alt="..." >
      </div>
      <div class="carousel-item">
        <img src="./images/banner-2.png" class="d-block w-100" alt="..."  >
      </div>
      <div class="carousel-item ">
        <img src="./images/banner-1.jpg" class="d-block w-100" alt="..."  >
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<!-- ======explore section startt====== -->
<section class="explore-section">
  <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-center pb-5 mt-5">
            <h2 class="section-title">Explore Our Offering</h2>
            <hr class="sub-heading-dropdown-divider mx-auto my-2 ">
          </div>
    </div>
    
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="text-center">
          <a href="newarrival.php" class="main-btn ">Shop Now</a>
        </div>
      </div>
    </div>
  
   
</section>
<!-- ======New Arrival section startt====== -->
<section class="new_arrival my-5">
  <div class="container">
    <h2 class="section-subheading">New Arrivals</h2>
  </div>
  <div class="container mt-4" id="new-arrival-content">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <!-- Item 1 -->
        <div class="col"
        data-aos="fade-right"
      data-aos-offset="300"
     data-aos-easing="ease-in-sine"
        >
            <a href="productdetail.php" class="hover-text">
                <div class="card shop-card">
                    <img src="images/ringsphoto/ring3.jpg" class="card-img-top" alt="Image 1">
                    <div class="overlay-image">
                        <img src="images/ringsphoto/ring4.jpg" alt="Image 2">
                    </div>
                    <div class="card-actions">
                        <button class="action-btn" aria-label="add to cart">
                            <i class="fas fa-cart-plus"></i>
                        </button>
    
                        <button class="action-btn" aria-label="add to whishlist">
                            <i class="far fa-heart"></i>                     
                       </button>
                      </div>
                </div>
                
                <div class="card-body">
                    <h5 class="card-title">ring 1</h5>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">$21.99</p>
                        <p class="card-text text-decoration-line-through">$19.99</p>
                    </div>
                
                </div>
            </a>
        </div>      
        <!-- Item 2 -->
        <div class="col"
        data-aos="fade-up"
     data-aos-duration="2000">
            <a href="productdetail.php" class="hover-text">
                <div class="card shop-card">
                    <img src="images/ringsphoto/ring1.jpg" class="card-img-top" alt="Image 1">
                    <div class="overlay-image">
                        <img src="images/ringsphoto/ring2.jpg" alt="Image 2">
                    </div>
                    <div class="card-actions">
                        <button class="action-btn" aria-label="add to cart">
                            <i class="fas fa-cart-plus"></i>
                        </button>
    
                        <button class="action-btn" aria-label="add to whishlist">
                            <i class="far fa-heart"></i>                     
                       </button>
                      </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">ring 2</h5>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">$31.99</p>
                        <p class="card-text text-decoration-line-through">$18.99</p>
                    </div>
                
                </div>
            </a>
        </div>
       <!-- Item 3 -->
     <div class="col"
     data-aos="fade-down"
     data-aos-duration="2000">
    <a href="productdetail.php" class="hover-text">
        <div class="card shop-card">
            <img src="images/earingsphotos/ear1.jpg" class="card-img-top" alt="Image 1">
            <div class="overlay-image">
                <img src="images/earingsphotos/ear3.jpg" alt="Image 2">
            </div>
            <div class="card-actions">
                <button class="action-btn" aria-label="add to cart">
                    <i class="fas fa-cart-plus"></i>
                </button>

                <button class="action-btn" aria-label="add to whishlist">
                    <i class="far fa-heart"></i>                     
               </button>
              </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Set 1</h5>
            <div class="d-flex justify-content-between">
                <p class="card-text">$31.99</p>
                <p class="card-text text-decoration-line-through">$18.99</p>
            </div>
        
        </div>
    </a>
     </div>
          <!-- Item 4 -->
     <div class="col"
     data-aos="fade-left"
      data-aos-offset="300"
     data-aos-easing="ease-in-sine">
        <a href="productdetail.php" class="hover-text">
            <div class="card shop-card">
                <img src="images/setphotos/set1.jpg" class="card-img-top" alt="Image 1">
                <div class="overlay-image">
                    <img src="images/setphotos/set2.jpg" alt="Image 2">
                </div>
                <div class="card-actions">
                    <button class="action-btn" aria-label="add to cart">
                        <i class="fas fa-cart-plus"></i>
                    </button>
    
                    <button class="action-btn" aria-label="add to whishlist">
                        <i class="far fa-heart"></i>                     
                   </button>
                  </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Set 2</h5>
                <div class="d-flex justify-content-between">
                    <p class="card-text">$9.99</p>
                    <p class="card-text text-decoration-line-through">$5.99</p>
                </div>
            
            </div>
        </a>
         </div>
    </div>
  <!-- row 2  -->
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
    <!-- Item 5 -->
    <div class="col"
    data-aos="fade-down"
     data-aos-duration="2000">
        <a href="productdetail.php" class="hover-text">
            <div class="card shop-card">
                <img src="images/ringsphoto/ring2.jpg" class="card-img-top" alt="Image 1">
                <div class="overlay-image">
                    <img src="images/ringsphoto/ring3.jpg" alt="Image 2">
                </div>
                <div class="card-actions">
                    <button class="action-btn" aria-label="add to cart">
                        <i class="fas fa-cart-plus"></i>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                        <i class="far fa-heart"></i>                     
                   </button>
                  </div>
            </div>
            
            <div class="card-body">
                <h5 class="card-title">ring 2</h5>
                <div class="d-flex justify-content-between">
                    <p class="card-text">$21.99</p>
                    <p class="card-text text-decoration-line-through">$19.99</p>
                </div>
            
            </div>
        </a>
    </div>      
    <!-- Item 6 -->
    <div class="col"
    data-aos="fade-in"
     data-aos-duration="2000">
        <a href="productdetail.php" class="hover-text">
            <div class="card shop-card">
                <img src="images/ringsphoto/ring1.jpg" class="card-img-top" alt="Image 1">
                <div class="overlay-image">
                    <img src="images/ringsphoto/ring2.jpg" alt="Image 2">
                </div>
                <div class="card-actions">
                    <button class="action-btn" aria-label="add to cart">
                        <i class="fas fa-cart-plus"></i>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                        <i class="far fa-heart"></i>                     
                   </button>
                  </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">ring 2</h5>
                <div class="d-flex justify-content-between">
                    <p class="card-text">$31.99</p>
                    <p class="card-text text-decoration-line-through">$18.99</p>
                </div>
            
            </div>
        </a>
    </div>
   <!-- Item 7 -->
 <div class="col"
 data-aos="fade-up"
     data-aos-duration="2000">
<a href="productdetail.php" class="hover-text">
    <div class="card shop-card">
        <img src="images/earingsphotos/ear3.jpg" class="card-img-top" alt="Image 1">
        <div class="overlay-image">
            <img src="images/earingsphotos/ear1.jpg" alt="Image 2">
        </div>
        <div class="card-actions">
            <button class="action-btn" aria-label="add to cart">
                <i class="fas fa-cart-plus"></i>
            </button>

            <button class="action-btn" aria-label="add to whishlist">
                <i class="far fa-heart"></i>                     
           </button>
          </div>
    </div>
    <div class="card-body">
        <h5 class="card-title">Set 1</h5>
        <div class="d-flex justify-content-between">
            <p class="card-text">$31.99</p>
            <p class="card-text text-decoration-line-through">$18.99</p>
        </div>
    
    </div>
</a>
 </div>
      <!-- Item 8 -->
 <div class="col"
 data-aos="fade-left"
      data-aos-offset="300"
     data-aos-easing="ease-in-sine"
 >
    <a href="productdetail.php" class="hover-text">
        <div class="card shop-card">
            <img src="images/setphotos/set5.jpg" class="card-img-top" alt="Image 1">
            <div class="overlay-image">
                <img src="images/setphotos/set2.jpg" alt="Image 2">
            </div>
            <div class="card-actions">
                <button class="action-btn" aria-label="add to cart">
                    <i class="fas fa-cart-plus"></i>
                </button>

                <button class="action-btn" aria-label="add to whishlist">
                    <i class="far fa-heart"></i>                     
               </button>
              </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Set 2</h5>
            <div class="d-flex justify-content-between">
                <p class="card-text">$9.99</p>
                <p class="card-text text-decoration-line-through">$5.99</p>
            </div>
        
        </div>
    </a>
     </div>
</div>


  
</div>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="text-center">
        <a href="newarrival.php" class="main-btn ">View All</a>
      </div>
    </div>
  </div>
 
</section>
<!-- ======Sale section startt========== -->
<section class="Hair my-5">
  <div class="banner-box " 
  data-aos="zoom-in"
  data-aos-easing="ease-out-sine"
     data-aos-duration="800">
    <div class="section-subheading mt-5 mb-2">Hair Essentials</div>
    <p class="mb-5 paragraph">Discover a world of glam with ZAJ</p>
    <a href="hair.php" class="main-btn bg-dark text-white border-dark shop-now-btn my-2">Shop Now</a>
  </div>
</section>
<!-- =========Featured Collection========  -->
<section class="featured my-5">
  <div class="container">
    <h2 class="section-subheading">Featured Collection</h2>
  </div>
  <div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
  
      <!-- Item 1 -->
      <div class="col"  
      data-aos="fade-right"
      data-aos-offset="300"
     data-aos-easing="ease-in-sine">
        <a href="productdetail.php" class="hover-text">
        <div class="card shop-card">
          <img src="images/earingsphotos/ear12.jpg" class="card-img-top" alt="Image 1">
          <div class="overlay-image">
            <img src="images/ringsphoto/ring4.jpg" alt="Image 2">
          </div>
          <div class="card-actions">
                <button class="action-btn" aria-label="add to cart">
                    <i class="fas fa-cart-plus"></i>
                </button>

                <button class="action-btn" aria-label="add to whishlist">
                    <i class="far fa-heart"></i>                     
               </button>
              </div>
        </div>
        <div class="card-body">
          <h5 class="card-title">Golden ring</h5>
        </a>
          <p class="card-text">$19.99</p>
        </div>
      </div>
  
      <!-- Item 2 -->
      <div class="col"
      data-aos="fade-up"
     data-aos-duration="2000">
        <a href="productdetail.php" class="hover-text">
        <div class="card shop-card">
          <img src="images/ringsphoto/ring1.jpg" class="card-img-top" alt="Image 1">
          <div class="overlay-image">
            <img src="images/ringsphoto/ring2.jpg" alt="Image 2">
          </div>
          <div class="card-actions">
                <button class="action-btn" aria-label="add to cart">
                    <i class="fas fa-cart-plus"></i>
                </button>

                <button class="action-btn" aria-label="add to whishlist">
                    <i class="far fa-heart"></i>                     
               </button>
              </div>
        </div>
        <div class="card-body">
          <h5 class="card-title">ring 2</h5>
        </a>
          <p class="card-text">$29.99</p>
        </div>
      </div>
      <!-- Item 3 -->
    <div class="col" 
    data-aos="fade-down"
     data-aos-duration="2000">
      <a href="productdetail.php" class="hover-text">
        <div class="card shop-card">
          <img src="images/earingsphotos/ear13.jpg" class="card-img-top" alt="Image 1">
          <div class="overlay-image">
            <img src="images/earingsphotos/ear2.jpg" alt="Image 2">
          </div>
          <div class="card-actions">
                <button class="action-btn" aria-label="add to cart">
                    <i class="fas fa-cart-plus"></i>
                </button>

                <button class="action-btn" aria-label="add to whishlist">
                    <i class="far fa-heart"></i>                     
               </button>
              </div>
        </div>
        <div class="card-body">
          <h5 class="card-title">ear 1</h5>
        </a>
          <p class="card-text">$19.99</p>
        </div>
      </div>
      <!-- Item 4 -->
      <div class="col"
      data-aos="fade-left"
      data-aos-offset="300"
     data-aos-easing="ease-in-sine"
     >
        <a href="productdetail.php" class="hover-text">
        <div class="card shop-card">
          <img src="images/setphotos/set1.jpg" class="card-img-top" alt="Image 1">
          <div class="overlay-image">
            <img src="images/setphotos/set3.jpg" alt="Image 2">
          </div>
          <div class="card-actions">
                <button class="action-btn" aria-label="add to cart">
                    <i class="fas fa-cart-plus"></i>
                </button>

                <button class="action-btn" aria-label="add to whishlist">
                    <i class="far fa-heart"></i>                     
               </button>
              </div>
        </div>
        <div class="card-body">
          <h5 class="card-title">set 2</h5>
        </a>
          <p class="card-text">$19.99</p>
        </div>
   </div>
  </div>
   <div class="container my-5">
    <div class="row justify-content-center">
      <div class="text-center">
        <a href="set.php" class="main-btn ">View All</a>
      </div>
    </div>
  </div>
      
</section>
<!-- footer  -->
<?php
 include_once 'footer.php'
?>


   

    


</body>
</html>