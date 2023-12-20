@extends('layout.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon-big text-center">
                                        <i class="teal fas fa-shopping-cart"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="detail text-center">
                                        <p>New Orders</p>
                                        <span class="number">6,267</span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <hr />
                                <div class="stats">
                                    <i class="fas fa-redo-alt"></i> Updated every 30 minutes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon-big text-center">
                                        <i class="olive fas fa-money-bill-alt"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="detail text-center">
                                        <p>Revenue</p>
                                        <span class="number">$180,900.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <hr />
                                <div class="stats">
                                    <i class="fas fa-calendar"></i> In this current Month
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon-big text-center">
                                        <i class="violet fas fa-eye"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="detail text-center">
                                        <p>Page views</p>
                                        <span class="number">28,210</span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <hr />
                                <div class="stats">
                                    <i class="fas fa-stopwatch"></i> In the last 24 Hour
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon-big text-center">
                                        <i class="orange fas fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="detail text-center">
                                        <p>Support Request</p>
                                        <span class="number">75</span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <hr />
                                <div class="stats">
                                    <i class="fas fa-envelope-open-text"></i> Active in the last 7 days
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="content">
                            <div class="head">
                                <h4 class="mb-0">Traffic Overview</h4>
                                <p class="text-muted">Your year long website traffic data</p>
                            </div>
                            <div class="canvas-wrapper">
                                <canvas class="chart" id="trafficflow"></canvas>
                            </div>
                            <div class="ui hidden divider"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="content">
                            <div class="head">
                                <h4 class="mb-0">Sales Overview</h4>
                                <p class="text-muted">Your year long sales data</p>
                            </div>
                            <div class="canvas-wrapper">
                                <canvas class="chart" id="sales"></canvas>
                            </div>
                            <div class="ui hidden divider"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="dfd text-center">
                                    <i class="blue large-icon mb-2 fas fa-thumbs-up"></i>
                                    <h4 class="mb-0">+21,900</h4>
                                    <p class="text-muted">FACEBOOK PAGE LIKES</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="dfd text-center">
                                    <i class="orange large-icon mb-2 fas fa-reply-all"></i>
                                    <h4 class="mb-0">+22,566</h4>
                                    <p class="text-muted">INSTAGRAM FOLLOWERS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="dfd text-center">
                                    <i class="grey large-icon mb-2 fas fa-envelope"></i>
                                    <h4 class="mb-0">+15,566</h4>
                                    <p class="text-muted">E-MAIL SUBSCRIBERS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="dfd text-center">
                                    <i class="olive large-icon mb-2 fas fa-dollar-sign"></i>
                                    <h4 class="mb-0">+98,601</h4>
                                    <p class="text-muted">TOTAL SALES</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

            

    