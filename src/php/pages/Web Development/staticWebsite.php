<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css files -->
  <link rel="stylesheet" href="../../../../dist/css/index.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- bulma -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <!-- animate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- mdb -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <!-- aos -->
  <link rel="stylesheet" href="../../../../node_modules/aos/dist/aos.css">
  <title>Static Website</title>
</head>
<!-- mostly used bulma than bootstrap -->

<body>
  <!-- navbar start -->
  <?php
  $page = "staticWeb";
  include("C:/xampp/htdocs/dropdown/src/php/navbar/navbar.php")
  ?>
  <!-- navbar end -->

  <!-- main start -->
  <main>
    <section class="header-section">
      <div class="has-text-centered">
        <div class="overlay-img"></div>
        <div class="section-bg">
          <div class="columns is-mobile">
            <div class="column has-text-left is-6-tablet" style="padding: 0;">
              <p class="section-title pl-3 has-text-weight-bold is-size-3-desktop is-size-6-mobile">Static Website</p>
            </div>
            <div class="column  has-text-right is-6-tablet">
              <nav class="breadcrumb is-justify-content-center" aria-label="breadcrumbs">
                <ul class="content-section_breadcrum">
                  <li><a href="#" class="is-size-6-desktop is-size-7-mobile _link" style="color: #fff">
                      <span class="icon is-small">
                        <i class="fas fa-home" aria-hidden="true"></i>
                      </span>
                      <span class="is-size-5-desktop is-size-7-mobile">Home</span></a></li>
                  <li><a href="dynamicWebsite.php" class="is-size-6-desktop is-size-7-mobile" style="color: #fff">
                      <span class="is-size-5-desktop is-size-7-mobile">Next Page</span></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content-section">

      <div class="has-text-centered">
        <div class="content-box">
          <p class="has-text-weight-bold is-size-2-desktop is-size-4-mobile content-box_content-heading">Static Website Development</p>
          <hr class="underline">
          <div class="columns">
            <div class="column">
              <p class="has-text-weight-semibold content-box_content-para is-size-5-desktop is-size-7-mobile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam facere, sunt ducimus, quo omnis corporis quae, totam reprehenderit alias ratione unde aliquam magni accusamus cupiditate quidem officia! Dicta, recusandae vitae!
                sto ut quidem delectus beatae molestias ab cumque fugit, natus aut distinctio ad recusandae voluptatum corporis nobis numquam accusantium explicabo tenetur ipsum possimus quas. Sit, rerum ipsam!
              </p>
            </div>
            <div class="column">
              <img src="../../../../images/svgs/swd.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <img src="../../../../images/svgs/wave1.svg" alt="">

    <section class="provide section">
      <div class="has-text-centered" data-aos="fade-up" data-aos-duration="800">
        <p class="has-text-weight-bold is-size-2-desktop is-size-4-mobile provide_heading">What We Will Provide</p>
        <hr class="underline mb-5">
      </div>
      <div>
        <div class="columns px-4">
          <div class="column">
            <div class="card">
              <div class="card-image pt-3">
                <figure class="image is-2by1">
                  <img src="../../../../images/svgs/card1.svg" alt="landing-page-svg">
                </figure>
              </div>
              <div class="card-content">

                <div class="content has-text-centered">
                  <p class="is-size-5-desktop is-size-6-mobile has-text-weight-semibold  card_heading">Landing Page</p>
                  <p class="is-size-6-desktop is-size-7-mobile card_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum exercitationem voluptate esse quia fugiat ex dolor ullam ea quod similique!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="card-image pt-3">
                <figure class="image is-2by1">
                  <img src="../../../../images/svgs/card2.svg" alt="contact-page-svg">
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  <div class="content has-text-centered">
                    <p class="is-size-5-desktop is-size-6-mobile has-text-weight-semibold card_heading">Contact Page</p>
                    <p class="is-size-6-desktop is-size-7-mobile card_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum exercitationem voluptate esse quia fugiat ex dolor ullam ea quod similique!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="card-image pt-3">
                <figure class="image is-2by1">
                  <img src="../../../../images/svgs/card3.svg" alt="services-page-svg">
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  <div class="content has-text-centered">
                    <p class="is-size-5-desktop is-size-6-mobile has-text-weight-semibold card_heading">Service Page</p>
                    <p class="is-size-6-desktop is-size-7-mobile card_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum exercitationem voluptate esse quia fugiat ex dolor ullam ea quod similique!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <img src="../../../../images/svgs/wave2.svg" alt="">
    <div class="features-bg">
      <section class="features section">
        <div class="has-text-centered" data-aos="fade-up" data-aos-duration="800">
          <p class="has-text-weight-bold is-size-2-desktop is-size-4-mobile features_heading">Static Website Features</p>
          <hr class="underline mb-5">
        </div>
        <div class="features_content">
          <div class="columns has-text-centered is-variable is-multiline">
            <div class="column is-4-desktop is-6-tablet is-12-mobile">
              <div class="card has-text-centered">
                <div class="card-image pt-3" style="margin: 0 117px;">
                  <figure class="image" style="width: 100px;">
                    <img src="../../../../images/svgs/carousel.svg" alt="carousel-svg">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content">
                    <div class="has-text-centered">
                      <p class="is-size-5-desktop is-size-6-mobile has-text-weight-semibold card_heading">Carousel</p>
                      <hr class="underline">
                      <p class="is-size-6-desktop is-size-7-mobile card_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum exercitationem voluptate esse quia fugiat ex dolor ullam ea quod similique!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column is-12-mobile is-6-tablet  is-4-desktop is-6-tablet is-12-mobile">
              <div class="card">
                <div class="card-image pt-3" style="margin: 0 117px;">
                  <figure class="image" style="width: 100px;">
                    <img src="../../../../images/svgs/contact.svg" alt="contact-svg">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content">
                    <div class="has-text-centered">
                      <p class="is-size-5-desktop is-size-6-mobile has-text-weight-semibold card_heading">Contact Page</p>
                      <hr class="underline">
                      <p class="is-size-6-desktop is-size-7-mobile card_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum exercitationem voluptate esse quia fugiat ex dolor ullam ea quod similique!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column is-4-desktop is-6-tablet is-12-mobile">
              <div class="card">
                <div class="card-image pt-3" style="margin: 0 117px;">
                  <figure class="image" style="width: 100px;">
                    <img src="../../../../images/svgs/image.svg" alt="image-svg">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content">
                    <div class="has-text-centered">
                      <p class="is-size-5-desktop is-size-6-mobile has-text-weight-semibold card_heading">Image Gallery</p>
                      <hr class="underline">
                      <p class="is-size-6-desktop is-size-7-mobile card_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum exercitationem voluptate esse quia fugiat ex dolor ullam ea quod similique!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="columns is-variable is-multiline">
            <div class="column is-4-desktop is-6-tablet is-12-mobile">
              <div class="card">
                <div class="card-image pt-3" style="margin: 0 117px;">
                  <figure class="image" style="width: 100px;">
                    <img src="../../../../images/svgs/video-player.svg" alt="vedio-player-svg">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content">
                    <div class="has-text-centered">
                      <p class="is-size-5-desktop is-size-6-mobile has-text-weight-semibold card_heading">Video</p>
                      <hr class="underline">
                      <p class="is-size-6-desktop is-size-7-mobile card_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum exercitationem voluptate esse quia fugiat ex dolor ullam ea quod similique!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column is-4-desktop is-6-tablet is-12-mobile">
              <div class="card">
                <div class="card-image pt-3" style="margin: 0 117px;">
                  <figure class="image" style="width: 100px;">
                    <img src="../../../../images/svgs/customer-review.svg" alt="Testimonials-svg">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content">
                    <div class="has-text-centered">
                      <p class="is-size-5-desktop is-size-6-mobile has-text-weight-semibold card_heading">Testimonials</p>
                      <hr class="underline">
                      <p class="is-size-6-desktop is-size-7-mobile card_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum exercitationem voluptate esse quia fugiat ex dolor ullam ea quod similique!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column is-4-desktop is-6-tablet is-12-mobile">
              <div class="card">
                <div class="card-image pt-3" style="margin: 0 117px;">
                  <figure class="image" style="width: 100px;">
                    <img src="../../../../images/svgs/map.svg" alt="map-svg">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content">
                    <div class="has-text-centered">
                      <p class="is-size-5-desktop is-size-6-mobile has-text-weight-semibold card_heading">Maps</p>
                      <hr class="underline">
                      <p class="is-size-6-desktop is-size-7-mobile card_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum exercitationem voluptate esse quia fugiat ex dolor ullam ea quod similique!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <img src="../../../../images/svgs/wave3.svg" alt="">


    <section class="section benifits pt-0">
      <div class="has-text-centered" data-aos="fade-up" data-aos-duration="800">
        <p class="has-text-weight-bold is-size-2-desktop is-size-4-mobile  benifits_heading">Static Website Benifits</p>
        <hr class="underline">
      </div>
      <div class="columns is-mobile mt-6" data-aos="fade-down-right" data-aos-duration="900" data-aos-offset="200" data-aos-easing="ease-in-sine">
        <div class="column is-6-mobile has-text-centered benifits_content">
          <p class="is-size-4-desktop is-size-5-mobile">
            Security
          </p>
          <p class="is-size-6-desktop is-size-7-mobile card_para">
            As there’s no intermediary, i.e., the database involved, the threat of code injection is minimal for a static website. No plugins and dynamic software to host the website.
          </p>
        </div>
        <div class="column is-6-mobile benifits_img">
          <img src="../../../../images//svgs/security.svg" alt="security-svg">
        </div>
      </div>
      <div class="columns is-mobile mt-6 has-background-light" data-aos="fade-down-left" data-aos-duration="900" data-aos-offset="200" data-aos-easing="ease-in-sine">
        <div class="column is-6-mobile benifits_img">
          <img src="../../../../images//svgs/relaibility.svg" alt="relaibility-svg">
        </div>
        <div class="column is-6-mobile has-text-centered benifits_content">
          <p class="is-size-4-desktop is-size-5-mobile">
            Relaibility
          </p>
          <p class="is-size-6-desktop is-size-7-mobile card_para ">
            No errors from database or backend.
            Serving just basic HTML files makes it easier to host them anywhere with ease like on a CDN.
          </p>
        </div>
      </div>
      <div class="columns is-mobile mt-6" data-aos="fade-down-right" data-aos-duration="900" data-aos-offset="200" data-aos-easing="ease-in-sine">
        <div class="column is-6-mobile has-text-centered benifits_content">
          <p class="is-size-4-desktop is-size-5-mobile">
            Speed
          </p>
          <p class="is-size-6-desktop is-size-7-mobile card_para ">
            The absence of middleman/database makes the static site much more speedy and easy to load.
            A static site is ten times faster than a dynamic site that is built with a CMS.
          </p>
        </div>
        <div class="column is-6-mobile benifits_img">
          <img src="../../../../images//svgs/speed.svg" alt="speed-svg">
        </div>
      </div>
      <div class="columns is-mobile mt-6 has-background-light" data-aos="fade-down-left" data-aos-duration="900" data-aos-offset="200" data-aos-easing="ease-in-sine">
        <div class="column is-6-mobile benifits_img">
          <figure class="image image is-3by2">
            <img src="../../../../images//svgs/save.svg" alt="save-svg">
          </figure>
        </div>
        <div class="column is-6-mobile has-text-centered benifits_content">
          <p class="is-size-4-desktop is-size-5-mobile">
            Hosting and Price
          </p>
          <p class="is-size-6-desktop is-size-7-mobile card_para ">
            Static websites have basic HTML files which require less space making the hosting of these websites cheaper to that of dynamic websites.
          </p>
        </div>
      </div>
      <div class="columns is-mobile mt-6" data-aos="fade-down-right" data-aos-duration="900" data-aos-offset="200" data-aos-easing="ease-in-sine">
        <div class="column is-6-mobile has-text-centered benifits_content">
          <p class="is-size-4-desktop is-size-5-mobile">
            Scalability
          </p>
          <p class="is-size-6-desktop is-size-7-mobile card_para ">
            What to do when your website is finally up and running? Handling massive traffic on a dynamic website might be a cumbersome process as it requires complex code playing on the server. Basic static websites with HTML files can be easily scaled up by just increasing the bandwidth.
          </p>
        </div>
        <div class="column is-6-mobile benifits_img">
          <img src="../../../../images//svgs/scale.svg" alt="scale-svg">
        </div>
      </div>
    </section>
  </main>

  <!-- main end -->





  <!-- javascript -->
  <script src="../../../javascript/index.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  <!-- aos js -->
  <script src="../../../../node_modules/aos/dist/aos.js"></script>
  <script>
    AOS.init({
      delay: 400
    });
  </script>
</body>

</html>