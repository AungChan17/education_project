        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li style="width:300px ;" class="nav-item nav-profile">
              <div>
                <x-app-layout>
                </x-app-layout>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('redirect')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('student_message')}}">
                <span class="menu-title">Student Message</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('student_list')}}">
                <span class="menu-title">Student List</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>