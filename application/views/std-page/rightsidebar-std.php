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
                    <div class="admin-image"> <img src="<?php echo base_url();?>Project-COOP/assets/images/sm/avatar6.png" alt="profile img"> </div>
                    <div class="admin-action-info"> <span><?php echo $_SESSION['stdid'] ?></span>
                        <h3><?php echo $_SESSION['std_name'].' '.$_SESSION['std_sname']?> </h3>
                        <ul>
                           
                        </ul>
                    </div>
                </div>
                <!-- #User Info -->
            </li>
            <li class="header">เมนูหลัก</li>
            <li class=""><a href="<?php echo base_url(); ?>Project-COOP/Welcome_std/pass"><i class="zmdi zmdi-home"></i><span>News</span> </a></li>

            <li ><a href="<?php echo base_url(); ?>Project-COOP/STDPage/statuspage/status_page"><i class="material-icons">highlight</i> <span class="icon-name">Status</span> </a></li>

           <li ><a href="<?php echo base_url(); ?>Project-COOP/STDPage/Allstatuspage/Allstatus_page"><i class="material-icons">contact_phone</i> <span class="icon-name">All Status</span> </a></li> 


        </ul>
    </div>
    <!-- #Menu -->
</aside>
