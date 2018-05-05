<!--Side menu and right menu -->
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar"> 
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li> 
                <!-- User Info -->
                <div class="user-info">
                    <div class="admin-image"> <img src="<?php echo base_url();?>Project-COOP/assets/images/sm/avatar7.png" alt="profile img"> </div>
                    <div class="admin-action-info"> <span>Welcome</span>
                        <h3><?php echo $_SESSION['logged_in']['username']; ?></h3>
                    </div>
                </div>
                <!-- #User Info --> 
            </li>
            <li class="header">เมนูหลัก</li>
            <li ><a href="#"><i class="zmdi zmdi-home"></i><span>NEWS</span> </a></li>
            <li ><a href="<?php echo base_url(); ?>Project-COOP/Teacher_con/appCOOP"><i class="zmdi zmdi-home"></i><span>Approve-COOP</span> </a></li>
            <li ><a href="<?php echo base_url(); ?>Project-COOP/Teacher_con/appintern"><i class="zmdi zmdi-home"></i><span>Approve-Internship</span> </a></li>
 
            <li ><a href="<?php echo base_url(); ?>Project-COOP/Teacher_con/Allstatus_page"><i class="material-icons">contact_phone</i> <span class="icon-name">All Status</span> </a></li>
 
                  
        </ul>
    </div>
    <!-- #Menu --> 
</aside>
<!-- #END# Left Sidebar --> 
<!-- Right Sidebar -->
 
<!-- #END# Right Sidebar --> 