<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wowdash - Bootstrap 5 Admin Dashboard HTML Template</title>
  <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}" sizes="16x16">
  <!-- remix icon font css  -->
  <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
  <!-- BootStrap css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/bootstrap.min.css')}}">
  <!-- Apex Chart css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/apexcharts.css')}}">
  <!-- Data Table css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/dataTables.min.css')}}">
  <!-- Text Editor css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/editor-katex.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/lib/editor.atom-one-dark.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/lib/editor.quill.snow.css')}}">
  <!-- Date picker css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/flatpickr.min.css')}}">
  <!-- Calendar css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/full-calendar.css')}}">
  <!-- Vector Map css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/jquery-jvectormap-2.0.5.css')}}">
  <!-- Popup css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/magnific-popup.css')}}">
  <!-- Slick Slider css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/slick.css')}}">
  <!-- prism css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/prism.css')}}">
  <!-- file upload css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/file-upload.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/lib/audioplayer.css')}}">
  <!-- main css -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
  <aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
      <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
      <a href="index.html" class="sidebar-logo">
        <img src="{{asset('assets/images/idnetworkers-merah.png')}}" alt="site logo" class="light-logo">
        <img src="{{asset('assets/images/idnetworkers-putih.png')}}" alt="site logo" class="dark-logo">
        <img src="{{asset('assets/images/idn-icon.png')}}" alt="site logo" class="logo-icon">
      </a>
    </div>
    <div class="sidebar-menu-area">
      {{-- area sidebar --}}

      @include('template.menu')

    </div>
  </aside>

  <main class="dashboard-main">
    <div class="navbar-header">
      <div class="row align-items-center justify-content-between">
        <div class="col-auto">
          <div class="d-flex flex-wrap align-items-center gap-4">
            <button type="button" class="sidebar-toggle">
              <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl non-active"></iconify-icon>
              <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl active"></iconify-icon>
            </button>
            <button type="button" class="sidebar-mobile-toggle">
              <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
            </button>

          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex flex-wrap align-items-center gap-3">
            <button type="button" data-theme-toggle
              class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"></button>
            <div class="dropdown">
              <button class="d-flex justify-content-center align-items-center rounded-circle" type="button"
                data-bs-toggle="dropdown">
                <img src="{{asset('assets/images/user.png')}}" alt="image"
                  class="w-40-px h-40-px object-fit-cover rounded-circle">
              </button>
              <div class="dropdown-menu to-top dropdown-menu-sm">
                <div
                  class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                  <div>

                    @if (Auth::check())
            <h6 class="text-lg text-primary-light fw-semibold mb-2">{{Auth::user()->name}}</h6>
            @if (Auth::user()->isAdmin)
        <span class="text-secondary-light fw-medium text-sm">Admin</span>
      @else
    <span class="text-secondary-light fw-medium text-sm">User</span>
  @endif
          @endif

                  </div>
                  <button type="button" class="hover-text-danger">
                    <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon>
                  </button>
                </div>
                <ul class="to-top-list">
                  <li>
                    <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                      href="{{route('profile.edit')}}">
                      <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon> My Profile</a>
                  </li>
                  <li>
                    <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3"
                      href="javascript:void(0)" onclick="event.preventDefault();
                      document.getElementById('logout').submit();
                      ">
                      <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon> Log Out</a>

                    <form action="{{route('logout')}}" id="logout" method="post">
                      @csrf
                    </form>

                  </li>
                </ul>
              </div>
            </div><!-- Profile dropdown end -->
          </div>
        </div>
      </div>
    </div>

    <div class="dashboard-main-body">
      <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">@yield('page-title')</h6>
        <ul class="d-flex align-items-center gap-2">
          <li class="fw-medium">
            <a href="{{route('dashboard')}}" class="d-flex align-items-center gap-1 hover-text-primary">
              <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
              Dashboard
            </a>
          </li>
          <li>-</li>
          <li class="fw-medium">@yield('page-title')</li>
        </ul>
      </div>

      {{-- container content --}}
      @yield('content')

    </div>

    <footer class="d-footer">
      <div class="row align-items-center justify-content-between">
        <div class="col-auto">
          <p class="mb-0">© 2024 FahmiFN. All Rights Reserved.</p>
        </div>
        <div class="col-auto">
          <p class="mb-0">Made by <span class="text-primary-600">Training Laravel IDN</span></p>
        </div>
      </div>
    </footer>
  </main>

  <!-- jQuery library js -->
  <script src="{{asset('assets/js/lib/jquery-3.7.1.min.js')}}"></script>
  <!-- Bootstrap js -->
  <script src="{{asset('assets/js/lib/bootstrap.bundle.min.js')}}"></script>
  <!-- Apex Chart js -->
  <script src="{{asset('assets/js/lib/apexcharts.min.js')}}"></script>
  <!-- Data Table js -->
  <script src="{{asset('assets/js/lib/dataTables.min.js')}}"></script>
  <!-- Iconify Font js -->
  <script src="{{asset('assets/js/lib/iconify-icon.min.js')}}"></script>
  <!-- jQuery UI js -->
  <script src="{{asset('assets/js/lib/jquery-ui.min.js')}}"></script>
  <!-- Vector Map js -->
  <script src="{{asset('assets/js/lib/jquery-jvectormap-2.0.5.min.js')}}"></script>
  <script src="{{asset('assets/js/lib/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- Popup js -->
  <script src="{{asset('assets/js/lib/magnifc-popup.min.js')}}"></script>
  <!-- Slick Slider js -->
  <script src="{{asset('assets/js/lib/slick.min.js')}}"></script>
  <!-- prism js -->
  <script src="{{asset('assets/js/lib/prism.js')}}"></script>
  <!-- file upload js -->
  <script src="{{asset('assets/js/lib/file-upload.js')}}"></script>
  <!-- audioplayer -->
  <script src="{{asset('assets/js/lib/audioplayer.js')}}"></script>

  <!-- main js -->
  <script src="{{asset('assets/js/app.js')}}"></script>

  <script src="{{asset('assets/js/editor.highlighted.min.js')}}"></script>
  <script src="{{asset('assets/js/editor.quill.js')}}"></script>
  <script src="{{asset('assets/js/editor.katex.min.js')}}"></script>


  <script>
    let table = new DataTable('#dataTable');
  </script>

  <script>
    // Editor Js Start
    const quill = new Quill('#editor', {
      modules: {
        syntax: true,
        toolbar: '#toolbar-container',
      },
      placeholder: 'Compose an epic...',
      theme: 'snow',
    });
    // Editor Js End

    const fileInput = document.getElementById("upload-file");
    const imagePreview = document.getElementById("uploaded-img__preview");
    const uploadedImgContainer = document.querySelector(".uploaded-img");
    const removeButton = document.querySelector(".uploaded-img__remove");

    fileInput.addEventListener("change", (e) => {
      if (e.target.files.length) {
        const src = URL.createObjectURL(e.target.files[0]);
        imagePreview.src = src;
        uploadedImgContainer.classList.remove('d-none');
      }
    });
    removeButton.addEventListener("click", () => {
      imagePreview.src = "";
      uploadedImgContainer.classList.add('d-none');
      fileInput.value = "";
    });
  

  </script>

<script>    
  $('.remove-button').on('click', function() {
      $(this).closest('.alert').addClass('d-none')
  }); 
</script>

</body>

</html>