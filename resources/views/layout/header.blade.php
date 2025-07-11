        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="#"><img class="img-fluid for-light"
                                src="{{ asset('assets/images/logo/logo.png') }}" alt=""><img
                                class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                            data-feather="align-center"></i></div>
                </div>
              
                <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">
                        
                        
                        
                     
                        <li class="profile-nav onhover-dropdown pe-0 py-0">
                            <div class="d-flex profile-media"><img class="b-r-10"
                                    src="{{ asset('assets/images/dashboard/profile.png') }}" alt="">
                                <div class="flex-grow-1"><span>{{Auth::user()->name}}</span>
                                    <p class="mb-0">@if(Auth::user()->hasRole('admin')) Administrador @elseif(Auth::user()->hasRole('supervisor')) Supervisor @elseif(Auth::user()->hasRole('bodega')) Bodega @else Secretaria  @endif<i class="middle fa-solid fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                
                                <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i data-feather="log-in"> </i><span>Salir</span></a></li>
                                <form action="{{route('logout')}}" method="POST" class="d-none" id="logout-form">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template"><div class="ProfileCard u-cf">                        
                    <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                    <div class="ProfileCard-details">
                    <div class="ProfileCard-realName">name</div>
                    </div>
                    </div>
                </script>
                
            </div>
        </div>
        <!-- Page Header Ends -->
