<div class="sidebar sidebar-style-2" data-background-color="blue">	
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{asset('main_asset/examples')}}/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/demo1/index.html">
                                    <span class="sub-item">Dashboard 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Finance</h4>
                </li>
                <li class="nav-item">
                    <a href="starter-template.html">
                        <i class="far fa-file-excel"></i>
                        <p>Annual Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="starter-template.html">
                        <i class="fas fa-file-contract"></i>
                        <p>HR Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="starter-template.html">
                        <i class="fas fa-chart-bar"></i>
                        <p>Finance Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="starter-template.html">
                        <i class="icon-briefcase"></i>
                        <p>Revenue Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="starter-template.html">
                        <i class="fas fa-print"></i>
                        <p>IPO Report</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Snippets</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#emsal-nav">
                        <i class="fas fa-user-friends"></i>
                        <p>User</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="emsal-nav">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{url('admin/user/manage')}}">
                                    <span class="sub-item">Semua Pengguna</span>
                                </a>
                            </li>
                            <li>
                                <a href="email-compose.html">
                                    <span class="sub-item">Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="email-detail.html">
                                    <span class="sub-item">Pegawai</span>
                                </a>
                            </li>
                            <li>
                                <a href="email-detail.html">
                                    <span class="sub-item">Pelanggan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#messages-app-nav">
                        <i class="far fa-paper-plane"></i>
                        <p>Messages App</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="messages-app-nav">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="messages.html">
                                    <span class="sub-item">Messages</span>
                                </a>
                            </li>
                            <li>
                                <a href="conversations.html">
                                    <span class="sub-item">Conversations</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="projects.html">
                        <i class="fas fa-file-signature"></i>
                        <p>Projects</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="boards.html">
                        <i class="fas fa-th-list"></i>
                        <p>Boards</p>
                        <span class="badge badge-count">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="invoice.html">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <p>Invoices</p>
                        <span class="badge badge-count">6</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>