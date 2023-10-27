@include('header.header')
<main id="main">
<!--Experience Section Start -->
<section id="experience" class="services-mf pt-5 route m-4 p-4">
  <div class="container">
    <div class="row">
      <div class="position-relative mb-4"> 
        <div class="position-absolute top-0 start-50 translate-middle-x">
          <h2 class="text-light">Experience</h2>
        </div>
      </div>
      <div class="col-sm-10 mt-4 pt-4"  style="margin-left:15%;"> 
      <?php 
          for( $i = 0; $i < count($experience_data); $i++ ){            
            ?>       
        <div class="col-sm-10 rounded-4 mb-4" style="background-color:#FFFFFF;"><!--start-->
          <div class="text-light py-2 d-flex flex-row justify-content-center">
            <div class="col-sm-4 mt-4 ps-1 rounded-4 h-50" style="background-color:#EAF3F3;">
              <p class="text-dark fw-bold my-4 ps-3">
                <span class="text-primary">{{ $experience_data[$i]->Duration }}</span>
              </p>
              <p class="text-dark fw-bold ps-3"  style="margin-bottom:-28px; margin-top:-20px;">{{ $experience_data[$i]->Designation }}</p>
              <p class="text-secondary fw-medium my-4 ps-3 ">{{ $experience_data[$i]->CompanyName }}</p>
            </div>
            <div class="col-sm-6 text-dark ms-2 mt-2 rounded-4" >
              <p class="p-3" style="text-align:justify;">{{ $experience_data[$i]->Description }} </p>
            </div>
          </div>
        </div><!--End-->
        <?php
        } 
          ?>

      </div>
    </div>
  </div>
</section> <!--Experience Section End -->  
@include('footer.footer')
