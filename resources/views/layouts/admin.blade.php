<!doctype html>
<html lang="en">
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Admin Template">
    <meta name="author" content="">
    <link rel="icon" href="{{url('admin/')}}favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{url('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/vendor/animate-css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{url('assets/admin/css/main.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/css/color_skins.css')}}">
    <script src="{{url('assets/admin/bundles/libscripts.bundle.js')}}"></script>

</head>
<body class="theme-blue">

<!-- Page Loader -->

<!-- Overlay For Sidebars -->
<div class="overlay" style="display: none;"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-brand">
                <a href="{{url('')}}">
                    <img src="{{url('assets/admin/images/logo-icon.svg')}}" alt="Mplify Logo" class="img-responsive logo">
                    <span class="name">My Admin</span>
                </a>
            </div>

            <div class="navbar-right">
                <ul class="list-unstyled clearfix mb-0">
                    <li>
                        <div class="navbar-btn btn-toggle-show">
                            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                        </div>
                        <a href="javascript:void(0);" class="btn-toggle-fullwidth btn-toggle-hide"><i class="fa fa-bars"></i></a>
                    </li>

                    <li>
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <img class="rounded-circle" src="{{url('assets/admin/images/user-small.png')}}" width="30" alt="">
                                    </a>
                                    <div class="dropdown-menu animated flipInY user-profile">
                                        <div class="d-flex p-3 align-items-center">
                                            <div class="drop-left m-r-10">
                                                <img src="{{url('assets/admin/images/user-small.png')}}" class="rounded" width="50" alt="">
                                            </div>
                                            <div class="drop-right">
                                                <h4>Admin</h4>
                                            </div>
                                        </div>
                                        <div class="m-t-10 p-3 drop-list">
                                            <ul class="list-unstyled">
                                                <li><a href="{{url('admin/settings')}}"><i class="icon-settings"></i>Settings</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="icon-power"></i>Logout</a></li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>




                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

@yield('content')

    <!-- SIDE MENU START -->
    <div id="leftsidebar" class="sidebar">
        <div class="sidebar-scroll">
            <nav id="leftsidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="heading">Main</li>


                    <li {{isset($menu)?($menu==0?'class=active':''):''}}>
                        <a href="{{url('admin')}}"><i class="icon-home"></i><span>Dashboard</span></a>
                    </li>

                    <li {{isset($menu)?($menu==1?'class=active':''):''}}>
                        <a href=""><i class="icon-home"></i><span>Home</span></a>

                    <ul {{isset($menu)?($menu==1?'aria-expanded="true" class="collapse in"':'aria-expanded="false" class="collapse" style="height: 0px;"'):''}}>
                        <li {{isset($sub_menu)?($sub_menu==11?'class=active':''):''}}><a href="{{route('admin.homeslider')}}">Home</a></li>
                        <li {{isset($sub_menu)?($sub_menu==12?'class=active':''):''}}><a href="{{route('admin.newthoughts')}}">New Thoughts</a></li>
                        <li {{isset($sub_menu)?($sub_menu==13?'class=active':''):''}}><a href="{{route('admin.ongoingprojects')}}">Ongoing Projects</a></li>
                        <li {{isset($sub_menu)?($sub_menu==14?'class=active':''):''}}><a href="{{route('admin.casestudies')}}">Case Studies</a></li>
                        <li {{isset($sub_menu)?($sub_menu==15?'class=active':''):''}}><a href="{{route('admin.clients')}}">Clients</a></li>

                    </ul>
                    </li>

                    <li {{isset($menu)?($menu==2?'class=active':''):''}}>
                        <a href=""><i class="fa fa-building-o"></i><span>Company</span></a>

                        <ul {{isset($menu)?($menu==2?'aria-expanded="true" class="collapse in"':'aria-expanded="false" class="collapse" style="height: 0px;"'):''}}>
                            <li {{isset($sub_menu)?($sub_menu==21?'class=active':''):''}}><a href="{{route('admin.teams')}}">Teams</a></li>
                            <li {{isset($sub_menu)?($sub_menu==22?'class=active':''):''}}><a href="{{route('admin.group_of_companies')}}">Group of Companies</a></li>
                            <li {{isset($sub_menu)?($sub_menu==23?'class=active':''):''}}><a href="{{route('admin.social_responsibilities')}}">Social Responsibilities</a></li>
                            <li {{isset($sub_menu)?($sub_menu==24?'class=active':''):''}}><a href="{{route('admin.awards_achievements')}}">Awards & Achievements</a></li>

                        </ul>
                    </li>

                    <li {{isset($menu)?($menu==3?'class=active':''):''}}>
                        <a href="{{route('admin.brands')}}"><i class="fa fa-list"></i><span>Brands</span></a>
                    </li>

                    <li {{isset($menu)?($menu==4?'class=active':''):''}}>
                        <a href=""><i class="fa fa-building-o"></i><span>Business</span></a>

                        <ul {{isset($menu)?($menu==4?'aria-expanded="true" class="collapse in"':'aria-expanded="false" class="collapse" style="height: 0px;"'):''}}>
                            <li {{isset($sub_menu)?($sub_menu==41?'class=active':''):''}}><a href="{{route('admin.it_automation')}}">IT & Automation</a></li>
                            <li {{isset($sub_menu)?($sub_menu==42?'class=active':''):''}}><a href="{{route('admin.consulting')}}">Consulting</a></li>
                            <li {{isset($sub_menu)?($sub_menu==43?'class=active':''):''}}><a href="{{route('admin.contracting')}}">Contracting</a></li>
                            <li {{isset($sub_menu)?($sub_menu==44?'class=active':''):''}}><a href="{{route('admin.trading')}}">Trading</a></li>
                            <li {{isset($sub_menu)?($sub_menu==45?'class=active':''):''}}><a href="{{route('admin.operations')}}">Operations</a></li>

                        </ul>
                    </li>

                    <li {{isset($menu)?($menu==5?'class=active':''):''}}>
                        <a href="{{route('admin.jobvacancies')}}"><i class="fa fa-list"></i><span>Job Vacancies</span></a>
                    </li>
                    <li {{isset($menu)?($menu==6?'class=active':''):''}}>
                        <a href="{{route('admin.job_applications')}}"><i class="fa fa-list"></i><span>Job Applications</span></a>
                    </li>
                    <li {{isset($menu)?($menu==7?'class=active':''):''}}>
                        <a href="{{route('admin.partnership')}}"><i class="fa fa-list"></i><span>Partnership</span></a>
                    </li>

                    <li class="heading">Settings</li>

                        <li {{isset($menu)?($menu==10?'class=active':''):''}}>
                            <a href="{{url('admin/settings')}}"><i class="fa fa-gear"></i><span>Settings</span></a>
                        </li>



                </ul>
            </nav>
        </div>
    </div>
    <!-- SIDE MENU END -->
    <div class="modal fade" id="del_itm_Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="defaultModalLabel">Delete</h4>
                </div>
                <div class="modal-body"> <h5>Do you really want to Delete?</h5></div>
                <div class="modal-footer" id="status_button">
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Javascript -->

<script src="{{url('assets/admin/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{url('assets/admin/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{url('assets/admin/bundles/morrisscripts.bundle.js')}}"></script>




<script src="{{url('assets/admin/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
<script src="{{url('assets/admin/vendor/parsleyjs/js/parsley.min.js')}}"></script>




<!-- Javascript -->


<script>
    function del_itm(del_id)
    {
        document.getElementById("status_button").innerHTML =('<button type="button" data-dismiss="modal" class="btn btn-default"><i class="fa fa-close"></i> Cancel</button><form id="delete-item" action="'+del_id+'" method="POST"><input name="_method" type="hidden" value="DELETE"> @csrf<button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Delete</button></form>');
    }
    $(function() {
        // validation needs name of the element
        $('#food').multiselect();
        // initialize after multiselect
        $('#basic-form').parsley();
    });
</script>

<script>
    $('#showProfile').on('show.bs.modal', function (e) {
        var loadurl = $(e.relatedTarget).data('load-url');
        $(this).find('.modal-body').load(loadurl);
    });
</script>

</body>
</html>
