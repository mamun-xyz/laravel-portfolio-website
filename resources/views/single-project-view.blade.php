<?php
 $id= ($Data['project_id'][0]);
 $id = $id - 1;
 $data = count( $Data['project_details']->project);
?>
@include('header.header')
  <div class="hero hero-single route bg-image" style="background-image:url({{asset($Data['project_details']->Image[0]->BgImage)}})">
    <div class="overlay-mf"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="hero-title mb-4">Project Details</h2>
        </div>
      </div>
    </div>
  </div>
  <main id="main">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="align-items-center">             
                  <img src="{{asset($Data['project_details']->project[$id]->Image)}}" alt="error">
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3 class="text-light">Project information</h3>
              <ul  class="text-light">
                <li><strong>Category</strong>: {{($Data['project_details']->project[$id]->Category)}}</li>
                <li><strong>Client</strong>: {{($Data['project_details']->project[$id]->Client)}}</li>
                <li><strong>Project date</strong>: {{($Data['project_details']->project[$id]->Date)}}</li>
                <li><strong>Project URL</strong>: <a  class="text-light" href="https://www.{{($Data['project_details']->project[$id]->URL)}}/" target="_blank">{{($Data['project_details']->project[$id]->URL)}}</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-8 text-light mb-4" style="text-align: justify;>
          <div class="portfolio-description pb-4">
              <h2 class="text-light">{{($Data['project_details']->project[$id]->Title)}}</h2>
              <p>
              {{($Data['project_details']->project[$id]->Details)}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
  </main><!-- End #main -->
  @include('footer.footer')
