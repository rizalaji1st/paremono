      <header class="header navbar navbar-expand-lg navbar-dark navbar-floating navbar-sticky" data-fixed-element>
        <div class="container px-0 px-xl-3">
          <button class="navbar-toggler ms-n2 me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand flex-shrink-0 order-lg-1 mx-auto ms-lg-0 pe-lg-2 me-lg-4" href="index.html"><img class="navbar-floating-logo d-none d-lg-block" src="{{asset('paremono/logo/logo-light.png')}}" alt="Around" width="153"><img class="navbar-stuck-logo" src="{{asset('paremono/logo/logo-dark.png')}}" alt="Around" width="153"><img class="d-lg-none" src="{{asset('paremono/logo/logo.png')}}" alt="Around" width="50"></a>
          <div class="offcanvas offcanvas-collapse order-lg-2" id="primaryMenu">
            <div class="offcanvas-header navbar-shadow">
              <h5 class="mt-1 mb-0">Menu</h5>
              <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <!-- Menu-->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Berita</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">About</a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Contacts</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="contacts-v1.html">Contacts v.1</a></li>
                        <li><a class="dropdown-item" href="contacts-v2.html">Contacts v.2</a></li>
                        <li><a class="dropdown-item" href="contacts-v3.html">Contacts v.3</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Help Center</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                        <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                        <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">404 Not Found</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="404-simple.html">Simple Text</a></li>
                        <li><a class="dropdown-item" href="404-illustration.html">Illustration</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Coming Soon</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="coming-soon-image.html">Image</a></li>
                        <li><a class="dropdown-item" href="coming-soon-illustration.html">Illustration</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">UMKM</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">About</a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Contacts</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="contacts-v1.html">Contacts v.1</a></li>
                        <li><a class="dropdown-item" href="contacts-v2.html">Contacts v.2</a></li>
                        <li><a class="dropdown-item" href="contacts-v3.html">Contacts v.3</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Help Center</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                        <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                        <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">404 Not Found</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="404-simple.html">Simple Text</a></li>
                        <li><a class="dropdown-item" href="404-illustration.html">Illustration</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Coming Soon</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="coming-soon-image.html">Image</a></li>
                        <li><a class="dropdown-item" href="coming-soon-illustration.html">Illustration</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/galeri')}}">Galeri</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/kontak')}}">Kontak Penting</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>