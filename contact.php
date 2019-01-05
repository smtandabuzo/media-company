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
          <li class="active">Contact</li>
        </ol>

        <section class="section-50 section-lg-70 section-lg-bottom-25">
          <div class="shell">
            <h4 class="text-center text-uppercase">Contact information</h4>
            <div class="range text-center text-xs-left text-sm-center">
              <div class="cell-sm-4">
                <div class="contact-info-variant-2">
                  <div class="unit unit-1 unit-vertical unit-xs-horizontal unit-sm-vertical">
                    <div class="unit-left">
                      <div class="icon icon-md icon-primary fa-home"></div>
                    </div>
                    <dl class="unit-body">
                      <dt class="h6">Address</dt>
                      <dd><a href="#">43 Montrose Street, Vorna Valley Midrand, 1686, South Africa</a></dd>
                    </dl>
                  </div>
                </div>
              </div>
              <div class="cell-sm-4">
                <div class="contact-info-variant-2">
                  <div class="unit unit-1 unit-vertical unit-xs-horizontal unit-sm-vertical">
                    <div class="unit-left">
                      <div class="icon icon-md icon-primary fa-phone"></div>
                    </div>
                    <dl class="unit-body">
                      <dt class="h6">Phones</dt>
                      <dd><a href="callto:+27 (0)11 655 7019">+27 (0)11 655 7019</a>
                      </dd>
                    </dl>
                  </div>
                </div>
              </div>
              <div class="cell-sm-4">
                <div class="contact-info-variant-2">
                  <div class="unit unit-1 unit-vertical unit-xs-horizontal unit-sm-vertical">
                    <div class="unit-left">
                      <div class="icon icon-md icon-primary fa-envelope"></div>
                    </div>
                    <dl class="unit-body">
                      <dt class="h6">E-mail</dt>
                      <dd><a href="mailto:services@mhlontlobg.co.za" class="text-primary"><span class="__cf_email__" data-cfemail="caa7aba3a68aaeafa7a5a6a3a4a1e4a5b8ad">services@mhlontlobg.co.za</span></a></dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-50 section-lg-70 section-lg-top-25" style="background:#f5f5f5;">
          <div class="shell">
            <h4 class="text-center text-uppercase">Contact us</h4>
            <!-- RD Mailform-->
            <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform text-left">
              <div class="range">
                <div class="cell-sm-4 offset-top-8 offset-sm-top-0">
                  <div class="form-group">
                    <label for="contact-name" class="form-label">Your name</label>
                    <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
                  </div>
                </div>
                <div class="cell-sm-4 offset-top-8 offset-sm-top-0">
                  <div class="form-group">
                    <label for="contact-email" class="form-label">Email</label>
                    <input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                  </div>
                </div>
                <div class="cell-sm-4 offset-top-8 offset-sm-top-0">
                  <div class="form-group">
                    <label for="contact-phone" class="form-label">Phone</label>
                    <input id="contact-phone" type="text" name="phone" data-constraints="@Numeric @Required" class="form-control">
                  </div>
                </div>
                <div class="cell-sm-12 offset-top-8">
                  <div class="form-group">
                    <label for="contact-message" class="form-label">Your message</label>
                    <textarea id="contact-message" name="message" data-constraints="@Required" class="form-control"></textarea>
                  </div>
                </div>
                <div class="cell-md-12 offset-top-10 offset-sm-top-20 offset-md-top-30 grid-indents-2 text-center">
                  <button type="submit" class="btn btn-sm btn-primary">Send</button>
                  <button type="reset" class="btn btn-sm btn-default">Clear</button>
                </div>
              </div>
            </form>
          </div>
        </section>
  <?php include('footer.php'); ?>
      <!-- Page Footer-->
    </div>

    
  </body>
</html>