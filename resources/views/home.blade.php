@include('header.header')
<!-- ======= Hero Section ======= -->
  <div id="home" class="hero route bg-image" style="background-image: url({{$PersonalInfo[0]->BgImage}})">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">I am {{ $PersonalInfo[0]->Name }} </h1> 
         
          <p class="hero-subtitle"><span class="typed" data-typed-items=" 
          {{ $PersonalInfo[0]->AllDesignation[0] }}, {{ $PersonalInfo[0]->AllDesignation[1]}}, {{ $PersonalInfo[0]->AllDesignation[2]}}"></span></p>
          
          <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="{{('#about')}}" role="button">Learn More</a></p>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">
  <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="{{($PersonalInfo[0]->ProfileImage)}}" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>{{ $PersonalInfo[0]->Name }}</span></p>
                        <p><span class="title-s">Profile: </span> <span>{{ $PersonalInfo[0]->Designation }}</span></p>
                        <p><span class="title-s">Email: </span> <span>{{ $PersonalInfo[0]->Email }}</span></p>
                        <p><span class="title-s">Phone: </span> <span>{{ $PersonalInfo[0]->Phone }}</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    <span>{{ $PersonalInfo[0]->Skills[0]->HTML}}</span> <span class="pull-right"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>{{ $PersonalInfo[0]->Skills[1]->CSS}}</span> <span class="pull-right"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>{{ $PersonalInfo[0]->Skills[2]->PHP}}</span> <span class="pull-right"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>{{ $PersonalInfo[0]->Skills[3]->JavaScript}}</span> <span class="pull-right"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                    {{ $PersonalInfo[0]->About }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    @include('footer.footer')
    