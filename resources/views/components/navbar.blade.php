<div>
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="about">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
          <marquee>welcome</marquee>

        </a>
       <link rel="stylesheet" href="css/style.css">
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>profile</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/visimisi">
              <i class="bi bi-circle"></i><span>visi dan misi</span>
            </a>
          </li>

          <li>
            <a href="/latarbelakang">
              <i class="bi bi-circle"></i><span>latar belakang</span>
            </a>
          </li>

          <li>
            <a href="/posts">
              <i class="bi bi-circle"></i><span>blog</span>
            </a>
          </li>


          {{-- <li>
            <a href="/strukturpt">
              <i class="bi bi-circle"></i><span>struktur pt</span>
            </a>
          </li> --}}
          {{-- <li>
            <a href="/jenisjenisproduk">
              <i class="bi bi-circle"></i><span>jenisjenis produk</span>
            </a>
          </li> --}}
          <li>
            <a href="components-progress.html">
              <i class="bi bi-circle"></i><span></span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="about_jurusan32">
          <i class="bi bi-journal-text"></i><span>jurusan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="https://web.whatsapp.com">
              <i class="bi bi-circle"></i><span>whatsapp</span>
            </a>
          </li>
          <li>
            <a href="formpertanyaan">
              <i class="bi bi-circle"></i><span>Form pertanyaan</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>tutorial</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tutorial">
              <i class="bi bi-circle"></i><span>tutorial</span>
            </a>
          </li>
          <li>
            <a href="aset">
              <i class="bi bi-circle"></i><span>aset</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav --> --}}

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav --> --}}

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="about">
          <i class="bi bi-person"></i>
          <span>data mahasiswa</span>
        </a>
      </li><!-- End Profile Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav --> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="about_jurusan">
          <i class="bi bi-envelope"></i>
          <span>jurusan</span>
        </a>
      </li>
 <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}">
          <i class="bi bi-envelope"></i>
          <span>logout</span>
        </a>
      </li>
     

      
    </ul>

  </aside><!-- End Sidebar-->
</div>