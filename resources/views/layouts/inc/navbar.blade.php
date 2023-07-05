<nav class="navbar navbar-expand-lg hite nabar-light  shadow" style="background-color:aquamarine">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}"><i class="fa-brands fa-twitter me-2"></i>DEV</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('index') }}"><i class="fa-solid fa-house-chimney me-2"></i>หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about')}}"><i class="fa-solid fa-building-columns me-2"></i></i>เกี่ยวกับเรา</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('about')}}"><i class="fa-solid fa-user me-2"></i>ลูกค้า</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact')}}"><i class="fa-solid fa-phone me-2"></i>ติดต่อเรา</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-users-line me-2"></i>เว็บอื่นๆ
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('http://www.trattc.ac.th/') }}">วท.ตราด</a></li>
              <li><a class="dropdown-item" href="{{ url('https://www.vec.go.th/')}}">อาชีวศึกษา</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ url('https://www.moe.go.th/')}}">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  