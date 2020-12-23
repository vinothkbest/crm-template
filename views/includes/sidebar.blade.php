<div class="sidebar"
    data-color="green"
    data-background-color="white"
    data-image="{{asset('admin/assets/img/sidebar-1.jpg')}}">
    <div class="logo"><a href="" class="simple-text logo-normal">
        Mannavilla Group
      </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item-link {{request()->is('master') ? 'active' : ''}}  ">
                <a class="nav-link" href="{{url('master')}}">
                  <i class="material-icons">dashboard</i>
                  <p>Dashboard</p>
                </a>
            </li>
           <li class="nav-item-link {{request()->is('table') ? 'active' : ''}} ">
                <a class="nav-link" href="{{url('table')}}">
                  <i class="material-icons">content_paste</i>
                  <p>Table List</p>
                </a>
            </li>
            <li class="nav-item-link {{request()->is('form') ? 'active' : ''}} ">
                <a class="nav-link" href="{{url('form')}}">
                  <i class="material-icons">content_paste</i>
                  <p>Form</p>
                </a>
            </li>
        </ul>
    </div>
</div>