<main class="home pb-5">
  <Section class="banner-home d-flex justify-content-center">
    <div class="img-banner">
      <img src="<?= BASE_URL ?>/assets/images/banner.jpg" alt="logo">
    </div>
    <div class="content-banner">
      <img src="<?= BASE_URL ?>/assets/images/text.svg" alt="logo">
      <div class="mt-4 d-flex justify-content-center act">
        <div class="btn-group ml-2 mr-2 mb-2 mb-md-0">
          <a class="btn btn-light d-flex" href="#">
            <i class="flaticon-download-to-storage-drive mr-1"></i>
            Try Now </a>
          <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right drop">
            <a class="dropdown-item item" href="#">
              <i class="flaticon-download-to-storage-drive mr-1"></i> NAMO 1 (Legacy)
            </a>
          </div>
        </div>
        <a class="btn btn-light ml-2 d-flex" href="#">
          <i class="flaticon-shopping-cart  mr-1"></i>
          Buy NAMO</a>
      </div>
    </div>
  </Section>

  <section class="intro pt-3 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 order-lg-first">
          <img src="<?= BASE_URL ?>/assets/images/img1.png" alt="logo">
        </div>
        <div class="col-12 col-lg-6 pl-lg-5 line-text order-lg-last position-relative">
          <h3>What is NAMO?</h3>
          <p>NAMO is an application that helps you run a local DNS server on your Mac. You don't have to be a network professional: the simple user interface makes it possible for anyone to install and set up a name server under macOS within a few minutes.</p>
          <p>For users of MAMP PRO, NAMO even automatically resolves any selected virtual host. But NAMO is also the perfect partner for users of our free MAMP software for an optimized workflow in local testing.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="top-content mt-5 bg-light">
    <div class="container pt-3">
      <div class="text-center line-text pt-4 pb-4">
        <h3>What can I use NAMO for?</h3>
        <h4>Simplify local website testing &amp; streamline access to web-based apps in your LAN</h4>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6 mb-4 text-center">
          <p class="text-app-specific">
            <img src="<?= BASE_URL ?>/assets/images/vial.svg" alt="logo">
          </p>
          <p><b>Testing websites on the local network</b> with fixed domain names instead of changing IP addresses - NAMO is ideal for simplified testing on mobile devices.</p>
        </div>
        <div class="col-12 col-md-6 col-lg-6 mb-4 text-center  pt-0 pb-4">
          <p class="text-app-specific"><img src="<?= BASE_URL ?>/assets/images/ethernet.svg" alt="logo">
          </p>
          <p><b>Comfortable hosting of server based applications</b> in the LAN. Provide easy access to your company's internal services like wikis, CRMs, image databases, calendars, bug trackers, etc.</p>
        </div>
        <div class="col-12 text-center line-text">
          <h3>The perfect MAMP &amp; MAMP PRO companion</h3>
          <p>NAMO resolves any selected virtual host of MAMP PRO. These are then automatically available under the host name assigned in MAMP PRO.</p>
          <p>NAMO also gets along very well with MAMP. With just a few steps you can reach your local MAMP websites under a fixed domain name and forget IP addresses in the future.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="body-content mt-5 pt-3">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6 mb-4">
          <h3>Preview your websites on your local network easily</h3>
          <p>With NAMO you can easily test your websites on different devices in the LAN. With NAMO as your local name server, you no longer have to type in IP addresses. Instead, you can reach your projects under "real" domain names, e.g. "MyWebProject.com" instead of hard-to-remember IP addresses like "192.168.178.14". This is ideal for fast access from mobile devices such as smartphones and tablets.</p>
          <p>Thanks to NAMO's automatic IP address update function, your projects remain accessible under the domain name even if the IP address of your computer changes. This is very often the case if your computer is assigned its IP address dynamically (via DHCP) by the router.</p>
        </div>
        <div class="col-12 col-md-6 col-lg-6 mb-4">
          <h3>Access web applications on your LAN&nbsp;effortlessly</h3>
          <p>No matter if you want to provide a wiki, a CRM, an image database, a bugtracker or any other web application in your company: There are many reasons why you should not do this on the Internet, but in your own local network. Not only does this increase security, but access times are also faster. Even if your Internet provider should fail: No problem, all your data is available to you locally and NAMO ensures that your applications are accessible through simple domain names. <a href="https://www.mamp.info/namo/application/mac/current.php" onclick="open_overlay_while_downloading(); gtag('event', 'NAMO', {'event_category': 'Download','event_label': 'OS X'});">Try now!</a></p>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-5 bg-light pt-4 pb-4 download-link">
    <div class="container">
      <div class="text-center line-text">
        <h3 class="text-uppercase pt-3"><a href="#">Download free trial version</a></h3>
      </div>
    </div>
  </section>

  <section class="mt-5 pt-4 pb-4">
    <div class="container">
      <h2 class="text-center">NAMO 2 DNS Server Screenshots</h2>
      <div class="row">
        <?php for ($i = 0; $i < 8; $i++) : ?>
          <div class="col-12 col-md-6 col-lg-3">
            <a href="#">
              <img src="<?= BASE_URL ?>/assets/images/img3.png" alt="logo">
            </a>
          </div>
        <?php endfor ?>
      </div>
    </div>
  </section>
</main>