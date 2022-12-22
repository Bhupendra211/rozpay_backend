<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
        -->
    <div class="logo"><a href="{{ url('/dashboard') }}" class="simple-text logo-normal">
            Roz Pay
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            {{-- Dashboard --}}
            <li class="nav-item active  ">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>{{-- End --}}

            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/user-list') }}">
                    <i class="material-icons">person</i>
                    <p>Users List</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/add-slider') }}">
                    <i class="material-icons">person</i>
                    <p>Withdrawal Requests</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                    <i class="material-icons">money</i>
                    <p>Withdrawal History</p>
                </a>
            </li>


            {{-- Logout --}}
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('logout') }}">
                    <i class="material-icons">person</i>
                    <p>Logout</p>
                </a>
            </li>{{-- End --}}
        </ul>
    </div>
</div>
