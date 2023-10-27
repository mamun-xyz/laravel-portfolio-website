@include('header.header')
<main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section id="project" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box  text-center">
              <h3 class="title-a text-light">
                Project
              </h3>
              <p class="subtitle-a text-light">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          @for ($i=0; $i < count($Projects->project); $i++)
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{$Projects->project[$i]->Image}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="{{$Projects->project[$i]->Image}}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">{{$Projects->project[$i]->Title}}</h2>
                    <div class="w-more">
                      <span class="w-ctegory">{{$Projects->project[$i]->Category}}</span> 
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="{{URL::to('/project-details/'.$Projects->project[$i]->Id)}}"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endfor
        </div>
      </div>
    </section><!-- End Portfolio Section -->
@include('footer.footer')