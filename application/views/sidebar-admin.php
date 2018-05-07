<!--Side menu and right menu -->
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li>
                <!-- User Info -->
                <div class="user-info">
                    <div class="admin-image"> <img src=<?php echo base_url("Project-COOP/assets/images/sm/avatar8.png");?> alt="profile img"> </div>
                    <div class="admin-action-info"> <span>Welcome</span>
                        <h3> <?php echo $_SESSION['logged_in']['username'];
                        $uname = $_SESSION['logged_in']['username'];
                         ?> </h3>
                        
                    </div>
                </div>
                <!-- #User Info -->
            </li>

            <li class="active open"><a href=<?php echo base_url("Project-COOP/index.php/Fun_sidebar_admin/home"); ?> onclick="return true;"><i class="zmdi zmdi-home"></i><span>HOME</span> </a>

           <?php
                $query = $this->db->query("SELECT * FROM faculty;");
                foreach ($query->result() as $row) { ?>
                        <li >
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">account_balance</i>
                                <span class="icon-name">
                                    <?php echo $row->NameFac_sub; ?>
                                </span>
                            </a>
                         <ul class="ml-menu">
                            <li>
                                <a href="<?php echo(base_url().'Project-COOP/Fun_sidebar_admin/show_news?namefac_sub='.$row->NameFac_sub); ?>">
                                    <i class="material-icons">home</i>
                                    <span class="icon-name">
                                        NEWS
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">home</i>
                                    <span class="icon-name">
                                        Time Setting
                                    </span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo(base_url()."Project-COOP/time_setting/loadpage?subname_Fac=".$row->NameFac_sub."&type_major=COOP");?>"> 
                                            <i class="material-icons">home</i>
                                            <span class="icon-name">
                                                COOP
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo(base_url()."Project-COOP/time_setting/loadpage?subname_Fac=".$row->NameFac_sub."&type_major=internship");?>"> 
                                            <i class="material-icons">home</i>
                                            <span class="icon-name">
                                                Internship
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">home</i>
                                    <span class="icon-name">
                                        Organization
                                    </span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo(base_url()."Project-COOP/Fun_sidebar_admin/show_company?subname_Fac=".$row->NameFac_sub."&type_major=COOP"); ?>" > 
                                            <i class="material-icons">home</i>
                                            <span class="icon-name">
                                                COOP
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo(base_url()."Project-COOP/Fun_sidebar_admin/show_company?subname_Fac=".$row->NameFac_sub."&type_major=internship"); ?>" > 
                                            <i class="material-icons">home</i>
                                            <span class="icon-name">
                                                Internship
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">home</i>
                                    <span class="icon-name">
                                        Export Summarize
                                    </span>
                                </a>
                                <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);" class="menu-toggle"> 
                                                    <i class="material-icons">home</i>
                                                        <span class="icon-name">
                                                            COOP
                                                        </span>
                                                </a>
                                                <ul class="ml-menu">
                                                    <li>
                                                        <a href="<?php 
                                                        echo(base_url()."Project-COOP/Fun_sidebar_admin/show_export_view?subname_Fac=".$row->NameFac_sub."&status=Printing&type_major=COOP"); 
                                                        ?>" >
                                                            <i class="material-icons">home</i>
                                                            <span class="icon-name">
                                                                Printing
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php 
                                                        echo(base_url()."Project-COOP/Fun_sidebar_admin/show_export_view?subname_Fac=".$row->NameFac_sub."&status=Waiting&type_major=COOP"); 
                                                        ?>">
                                                            <i class="material-icons">home</i>
                                                            <span class="icon-name">
                                                                Waitng
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li >
                                                <a href="javascript:void(0);" class="menu-toggle">
                                                    <i class="material-icons">home</i> 
                                                    <span class="icon-name">
                                                        Internship
                                                    </span>
                                                </a>
                                                <ul class="ml-menu">
                                                    <li>
                                                        <a href="<?php 
                                                        echo(base_url()."Project-COOP/Fun_sidebar_admin/show_export_view?subname_Fac=".$row->NameFac_sub."&status=printing&type_major=Internship"); 
                                                        ?>" >
                                                            <i class="material-icons">home</i>
                                                            <span class="icon-name">
                                                                Printing
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php 
                                                        echo(base_url()."Project-COOP/Fun_sidebar_admin/show_export_view?subname_Fac=".$row->NameFac_sub."&status=Waiting&type_major=Internship"); 
                                                        ?>">
                                                            <i class="material-icons">home</i>
                                                            <span class="icon-name">
                                                                Waiting
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                     </ul>
                            </li>

                            <?php
                                    $queryMaj =$this->db->query("SELECT * FROM major WHERE Fac_ID =".$row->Fac_ID.";");
                                        foreach ($queryMaj->result() as $rowMaj) { ?>
                                          <li > <a href="javascript:void(0);" class="menu-toggle"> <i class="material-icons">home</i> <span class="icon-name">
                                          <?php echo $rowMaj->NameMajor_sub; ?>
                                            </span> </a>
                                            <ul class="ml-menu">
                                            <li > <a href="javascript:void(0);" class="menu-toggle"> <i class="material-icons">home</i> <span class="icon-name">
                                                Internship
                                             </span></a>
                                                <ul class="ml-menu"> 
                                                    <li><a href="<?php
                                                         echo(base_url()."Project-COOP/Fun_sidebar_admin/show_teacher?subname_Fac=".$row->NameFac_sub."&subname_major=".$rowMaj->NameMajor_sub."&type_major=internship");
                                                    ?>">Assign Aprove Lecturer</a></li>
                                                    
                                                </ul>
                                        </li>
                                        <li > <a href="javascript:void(0);" class="menu-toggle"> <i class="material-icons">home</i> <span class="icon-name">
                                                COOP
                                             </span></a>
                                                <ul class="ml-menu">

                                                    <li><a href="<?php
                                                        echo(base_url()."Project-COOP/Fun_sidebar_admin/show_teacher?subname_Fac=".$row->NameFac_sub."&subname_major=".$rowMaj->NameMajor_sub."&type_major=COOP");
                                                    ?>">Assign Aprove Lecturer</a></li>
                                                    <li><a href="<?php
                                                        echo(base_url()."Project-COOP/Fun_sidebar_admin/show_teacher_monitor?subname_Fac=".$row->NameFac_sub."&subname_major=".$rowMaj->NameMajor_sub."&type_major=COOP");
                                                    ?>">Assign Monitor Lecturer</a></li>
                                                 
                                                    
                                                </ul>
                                        </li>
                                    </ul>
                                </li>
                            <?php } ?>
                      </ul>
                   </li>
            <?php } ?>
            <li ><a href="<?php
                                echo(base_url()."Project-COOP/Fun_sidebar_admin/Add_Fac_view");
                            ?>">Add Faculty</a></li>
             <li ><a href="<?php
                                echo(base_url()."Project-COOP/Fun_sidebar_admin/Add_ma_view");
                            ?>">Add Major</a></li>
        </li>
    </div>
    <!-- #Menu -->
</aside>
<!-- #END# Left Sidebar -->
