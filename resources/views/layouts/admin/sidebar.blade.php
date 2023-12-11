<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="index.html">
            {{-- <img src="images/logo.png" alt=""> --}}
            <h5 class="text-primary">GROUP 12</h5>
        </a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="
            @if(Route::is('admin.dashboard'))
            mm-active
            @endif">
            <a href="{{route('admin.dashboard')}}" >

                <img src="{{asset('fonts/1.svg')}}" alt="">
                <span>Dashboard</span>
            </a>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="{{asset('fonts/2.svg')}}" alt="">
                <span>Users</span>
            </a>
            <ul>
                <li><a href="{{route('admin.users.index')}}">All Users</a></li>
                <li><a href="{{route('admin.users.create')}}">Create New User</a></li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="{{asset('fonts/4.svg')}}" alt="">
                <span>Jobs</span>
            </a>
            <ul>
                <li><a href="#">Jobs</a>
                    <ul>
                        <li><a href="{{route('admin.jobs.index')}}">All Jobs</a></li>
                        <li><a href="dropdown.html">Open Jobs</a></li>
                        <li><a href="{{route('admin.jobs.create')}}">Create Job</a></li>
                    </ul>
                </li>
                <li><a href="#">Interviews</a>
                    <ul>
                        <li><a href="notification.html">Pending Interviews</a></li>
                        <li><a href="progress.html">Completed Interviews</a></li>
                        <li><a href="{{route('admin.interviews.index')}}">All Interviews</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="fonts/3.svg" alt="">
                <span>Job Applications</span>
            </a>
            <ul>
                <li><a href="{{route('admin.applicants')}}">All Applicants</a></li>
                {{-- <li><a href="mail_box.html">Mail Box</a></li>
                <li><a href="chat.html">Chat</a></li>
                <li><a href="faq.html">FAQ</a></li> --}}
            </ul>
        </li>
        {{-- Employees --}}
        <li class="
            @if(Route::is('admin.employees.index'))
            mm-active
            @endif">
            <a href="{{route('admin.employees.index')}}" >

                <img src="fonts/1.svg" alt="">
                <span>Employees</span>
            </a>
        </li>
        {{-- Employees --}}
    </ul>
</nav>