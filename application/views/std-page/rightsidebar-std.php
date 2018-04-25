<!--Side menu and right menu -->
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li>
<?php

 ?>
                <!-- User Info -->
                <div class="user-info">
                    <div class="admin-image"> <img src="<?php echo base_url();?>Project-COOP/assets/images/sm/avatar1.jpg" alt="profile img"> </div>
                    <div class="admin-action-info"> <span><?php echo $_SESSION['stdid'] ?></span>
                        <h3><?php echo $_SESSION['std_name'].' '.$_SESSION['std_sname']?> </h3>
                        <ul>
                            <li><a data-placement="bottom" title="Go to Inbox" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>
                            <li><a data-placement="bottom" title="Go to Profile" href="profile.html"><i class="zmdi zmdi-account"></i></a></li>
                            <li><a data-placement="bottom" title="Full Screen" href=<?php echo base_url("Project-COOP/authentication/log_out") ?> ><i class="zmdi zmdi-sign-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- #User Info -->
            </li>
            <li class="header">เมนูหลัก</li>
            <li class="active open"><a href="<?php echo base_url(); ?>Project-COOP/Welcome_std/pass"><i class="zmdi zmdi-home"></i><span>News</span> </a></li>

            <li ><a href="<?php echo base_url(); ?>Project-COOP/STDPage/statuspage/status_page"><i class="material-icons">highlight</i> <span class="icon-name">Home</span> </a></li>

            <!-- <li ><a href="<?php echo base_url(); ?>Project-COOP/STDPage/Allstatuspage/Allstatus_page"><i class="material-icons">contact_phone</i> <span class="icon-name">All Status</span> </a></li> -->


        </ul>
    </div>
    <!-- #Menu -->
</aside>
<!-- #END# Left Sidebar -->
<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs tab-nav-right">
        <li class="nav-item"><a href="#settings" class="nav-link active" data-toggle="tab">Setting</a></li>
        <li class="nav-item"><a href="#chat" class="nav-link" data-toggle="tab">Chat</a></li>
        <li class="nav-item"><a href="#activities" class="nav-link" data-toggle="tab">Activities</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane in active" id="settings">
            <div class="slim-scroll">
                <div class="card">
                    <div class="header">
                        <h2>Color OPTIONS</h2>
                    </div>
                    <div class="body" >
                        <ul class="choose-skin m-b-0">
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="blue" class="active">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                        </ul>
                        <ul class="list-unstyled m-b-0 theme-light-dark m-t-15">
                            <li>
                                <div class="t-dark">Dark</div>
                            </li>
                            <li>
                                <div class="t-light">Light</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>GENERAL SETTINGS</h2>
                    </div>
                    <div class="body" >
                        <ul class="setting-list">
                            <li> <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span></label>
                                </div>
                            </li>
                            <li> <span>Email Redirect</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span></label>
                                </div>
                            </li>
                            <li> <span>Notifications</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span></label>
                                </div>
                            </li>
                            <li> <span>Auto Updates</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span></label>
                                </div>
                            </li>
                            <li> <span>Offline</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span></label>
                                </div>
                            </li>
                            <li> <span>Location Permission</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="chat">
            <div class="slim-scroll">
                <div class="m-t-15 m-l-15 m-r-15">
                    <div class="search">
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Search..." required autofocus>
                            </div>
                        </div>
                    </div>
                    <h6>Online</h6>
                    <ul>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""> </a>
                                <div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar2.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="Project-COOP/assets/images/xs/avatar3.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="Project-COOP/assets/images/xs/avatar1.jpg" alt=""> </a>
                                <div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="Project-COOP/assets/images/xs/avatar2.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="Project-COOP/assets/images/xs/avatar3.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h6>Offline</h6>
                    <ul>
                        <li class="offline">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="Project-COOP/assets/images/xs/avatar4.jpg" alt=""> </a>
                                <div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </li>
                        <li class="offline">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="Project-COOP/assets/images/xs/avatar2.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the you share the</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="offline">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="Project-COOP/assets/images/xs/avatar1.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane activities" id="activities">
            <div class="slim-scroll">
                <div class="m-t-15 m-l-15 m-r-15">
                    <div class="streamline b-accent">
                        <div class="sl-item">
                            <div class="sl-content">
                                <div class="text-muted">Just now</div>
                                <p>Finished task <a href="" class="text-info">#features 4</a>.</p>
                            </div>
                        </div>
                        <div class="sl-item b-info">
                            <div class="sl-content">
                                <div class="text-muted">10:30</div>
                                <p><a href="">@Jessi</a> retwit your post</p>
                            </div>
                        </div>
                        <div class="sl-item b-primary">
                            <div class="sl-content">
                                <div class="text-muted">12:30</div>
                                <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                            </div>
                        </div>
                        <div class="sl-item b-warning">
                            <div class="sl-content">
                                <div class="text-muted">1 days ago</div>
                                <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                            </div>
                        </div>
                        <div class="sl-item b-primary">
                            <div class="sl-content">
                                <div class="text-muted">2 days ago</div>
                                <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                            </div>
                        </div>
                        <div class="sl-item b-primary">
                            <div class="sl-content">
                                <div class="text-muted">3 days ago</div>
                                <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                            </div>
                        </div>
                        <div class="sl-item b-warning">
                            <div class="sl-content">
                                <div class="text-muted">4 Week ago</div>
                                <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                            </div>
                        </div>
                        <div class="sl-item b-warning">
                            <div class="sl-content">
                                <div class="text-muted">5 days ago</div>
                                <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                            </div>
                        </div>
                        <div class="sl-item b-primary">
                            <div class="sl-content">
                                <div class="text-muted">5 Week ago</div>
                                <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                            </div>
                        </div>
                        <div class="sl-item b-primary">
                            <div class="sl-content">
                                <div class="text-muted">3 Week ago</div>
                                <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                            </div>
                        </div>
                        <div class="sl-item b-warning">
                            <div class="sl-content">
                                <div class="text-muted">1 Month ago</div>
                                <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- #END# Right Sidebar -->
