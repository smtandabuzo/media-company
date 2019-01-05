<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
  <?php include('head.php'); ?>
  <body>
    <!-- Page-->
    <div class="page">
      <!-- Page Header-->
  <?php include('header.php'); ?>
      <!-- Page Content-->
      <main class="page-content">
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="active">Videos</li>
        </ol>
        <section class="section-50 section-mac-103">
          <h4 class="text-center text-uppercase" style="padding-bottom:50px">Videos</h4>
          <div class="row">
            <!-- Isotope Filters-->
           <!-- <div class="col-lg-12">
              <div class="isotope-filters isotope-filters-horizontal section-50 section-mac-80 section-mac-bottom-89">
                <ul>
                  <li>
                    <h4><a data-isotope-filter="*" data-isotope-group="gallery" href="#" class="active">show all</a></h4>
                  </li>
                  <li>
                    <h4><a data-isotope-filter="Category 1" data-isotope-group="gallery" href="#">Category 1</a></h4>
                  </li>
                  <li>
                    <h4><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">Category 2</a></h4>
                  </li>
                  <li>
                    <h4><a data-isotope-filter="Category 3" data-isotope-group="gallery" href="#">Category 3</a></h4>
                  </li>
                </ul>
              </div>
            </div>-->
            <!-- Isotope Content-->
            <div class="col-lg-12">
              <div data-isotope-layout="masonry" data-isotope-group="gallery" class="isotope">
                <div data-photo-swipe-gallery="gallery" class="row">
                  <div data-filter="Category 1" class="col-sm-6 col-md-4 isotope-item">
                    <figure class="thumbnail thumbnail-variant-7"><img src="images/videos-masonry-type-01-495x677.jpg" alt="" width="495" height="677"/>
                      <div class="thumbnail-overlay"><a href="blog-post.html" class="thumbnail-icon icon icon-xl material-design-forward18"></a></div>
                    </figure>
                  </div>
                  <div data-filter="Category 2" class="col-sm-6 col-md-4 isotope-item">
                    <figure class="thumbnail thumbnail-variant-7"><img src="images/videos-masonry-type-02-495x332.jpg" alt="" width="495" height="332"/>
                      <div class="thumbnail-overlay"><a href="blog-post.html" class="thumbnail-icon icon icon-xl material-design-forward18"></a></div>
                    </figure>
                  </div>
                  <div data-filter="Category 3" class="col-sm-6 col-md-4 isotope-item">
                    <figure class="thumbnail thumbnail-variant-7"><img src="images/videos-masonry-type-03-495x499.jpg" alt="" width="495" height="499"/>
                      <div class="thumbnail-overlay"><a href="blog-post.html" class="thumbnail-icon icon icon-xl material-design-forward18"></a></div>
                    </figure>
                  </div>
                  <div data-filter="Category 1" class="col-sm-6 col-md-4 isotope-item">
                    <figure class="thumbnail thumbnail-variant-7"><img src="images/videos-masonry-type-04-495x677.jpg" alt="" width="495" height="677"/>
                      <div class="thumbnail-overlay"><a href="blog-post.html" class="thumbnail-icon icon icon-xl material-design-forward18"></a></div>
                    </figure>
                  </div>
                  <div data-filter="Category 2" class="col-sm-6 col-md-4 isotope-item">
                    <figure class="thumbnail thumbnail-variant-7"><img src="images/videos-masonry-type-06-495x677.jpg" alt="" width="495" height="677"/>
                      <div class="thumbnail-overlay"><a href="blog-post.html" class="thumbnail-icon icon icon-xl material-design-forward18"></a></div>
                    </figure>
                  </div>
                  <div data-filter="Category 2" class="col-sm-6 col-md-4 isotope-item">
                    <figure class="thumbnail thumbnail-variant-7"><img src="images/videos-masonry-type-07-495x510.jpg" alt="" width="495" height="510"/>
                      <div class="thumbnail-overlay"><a href="blog-post.html" class="thumbnail-icon icon icon-xl material-design-forward18"></a></div>
                    </figure>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
<?php include('footer.php'); ?>
  </body>
</html>