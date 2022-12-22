@extends('layouts.adminlayout')
@section('content')
    <div class="main-panel">
        <!-- Navbar -->
        @include('utilities.topNav')
        <!-- End Navbar -->


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    {{-- Today Register New Users Numbers --}}
                    <div class="col-xl-4 col-lg-12">
                        <div class="card card-chart">
                            <div class="card-header card-header-success">
                                <p class="text-center text-light" style="font-weight:800">Today Register Users</p>
                            </div>

                            <div class="card-body">
                                <h2 class="card-title text-center" style="font-weight: 600">{{ $today_number }}</h2>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i>Today Register users number
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- Total Register Users Numbers --}}
                    <div class="col-xl-4 col-lg-12">
                        <div class="card card-chart">
                            <div class="card-header card-header-warning">
                                <p class="text-center text-light fs-4" style="font-weight: 800">Total Number of Users
                                </p>
                                {{-- <div class="ct-chart" id="websiteViewsChart"></div> --}}
                            </div>
                            <div class="card-body">
                                <h2 class="card-title text-center" style="font-weight: 600">{{ $total_number }}</h2>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> Total Register Users Numbers
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Number of Total withdrawal Request Today --}}
                    <div class="col-xl-4 col-lg-12">
                        <div class="card card-chart">
                            <div class="card-header card-header-danger">
                                <p class="text-center text-light" style="font-weight:800">Today Withdrawal Request</p>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Completed Tasks</h4>
                                <p class="card-category">Last Campaign Performance</p>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        {{-- Footer --}}
        @include('utilities.footer')
        {{-- Footer End --}}


        <script>
            const x = new Date().getFullYear();
            let date = document.getElementById('date');
            date.innerHTML = '&copy; ' + x + date.innerHTML;
        </script>
    </div>

    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Filters</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger active-color">
                        <div class="badge-colors ml-auto mr-auto">
                            <span class="badge filter badge-purple active" data-color="purple"></span>
                            <span class="badge filter badge-azure" data-color="azure"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-warning" data-color="orange"></span>
                            <span class="badge filter badge-danger" data-color="danger"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Images</li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-1.jpg" alt="">
                    </a>
                </li>
                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-2.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-3.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-4.jpg" alt="">
                    </a>
                </li>
                <li class="button-container">
                    <a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank"
                        class="btn btn-primary btn-block">Free Download</a>
                </li>
                <!-- <li class="header-title">Want more components?</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class="button-container">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  Get the pro version
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </li> -->
                <li class="button-container">
                    <a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.html"
                        target="_blank" class="btn btn-default btn-block">
                        View Documentation
                    </a>
                </li>
                <li class="button-container github-star">
                    <a class="github-button"
                        href="https://github.com/creativetimofficial/material-dashboard/tree/dark-edition"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                </li>
                <li class="header-title">Thank you for 95 shares!</li>
                <li class="button-container text-center">
                    <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot;
                        45</button>
                    <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i>
                        &middot;
                        50</button>
                    <br>
                    <br>
                </li>
            </ul>
        </div>
    </div>
@endsection
