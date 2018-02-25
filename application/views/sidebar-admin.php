<!--Side menu and right menu -->
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar"> 
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li> 
                <!-- User Info -->
                <div class="user-info">
                    <div class="admin-image"> <img src="<?php echo base_url();?>assets/images/sm/avatar1.jpg" alt="profile img"> </div>
                    <div class="admin-action-info"> <span>Welcome</span>
                        <h3> <?php echo $_SESSION['logged_in']['username']; ?> </h3>
                        <ul>
                            
                            <li><a data-placement="bottom" title="Go to Profile" href="profile.html"><i class="zmdi zmdi-account"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
                <!-- #User Info --> 
            </li>
            <li class="active open"><a href="/" onclick="return false;"><i class="zmdi zmdi-home"></i><span>HOME</span> </a>
           <?php
                $query = $this->db->query("SELECT * FROM faculty;");
                foreach ($query->result() as $row) { ?>
                        <li > <a href="javascript:void(0);" class="menu-toggle"> <i class="material-icons">account_balance</i><span class="icon-name">
                        <?php echo $row->NameFac_sub; ?>
                        </span> </a>
                         <ul class="ml-menu">
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
                                                            echo(base_url()."/Fun_sidebar_admin/show_student?subname_major=".$rowMaj->NameMajor_sub."&type_major=internship");  
                                                        ?>">Student</a></li>
                                                    <li><a href="<?php
                                                        echo(base_url()."/Fun_sidebar_admin/show_teacher?subname_Fac=".$row->NameFac_sub);
                                                    ?>">Assign Lecturer</a></li>
                                                    <li ><a href="<?php
                                                        echo(base_url()."/Fun_sidebar_admin/show_news?subname_Fac=".$row->NameFac_sub."&type_major=internship");
                                                    ?>"> News </a></li>
                                                    <li><a href="<?php
                                                        echo(base_url()."/Fun_sidebar_admin/show_company?subname_major=".$rowMaj->NameMajor_sub."&type_major=internship");
                                                    ?>">Organization</a></li>
                                                    <li><a href="">Time Setting</a></li>
                                                    <li><a href="">Export Summarize</a></li>
                                                    <li><a href="">Import</a></li>
                                                </ul>
                                        </li>
                                        <li > <a href="javascript:void(0);" class="menu-toggle"> <i class="material-icons">home</i> <span class="icon-name">
                                                COOP
                                             </span></a>
                                                <ul class="ml-menu">
                                                    <li><a href="
                                                        <?php 
                                                            echo(base_url()."/Fun_sidebar_admin/show_student?subname_major=".$rowMaj->NameMajor_sub."&type_major=COOP");  
                                                        ?>
                                                    ">
                                                Student
                                            </a></li>
                                                    <li><a href="<?php
                                                        echo(base_url()."/Fun_sidebar_admin/show_teacher?subname_Fac=".$row->NameFac_sub);
                                                    ?>">Assign Lecturer</a></li>
                                                    <li ><a href="<?php
                                                        echo(base_url()."/Fun_sidebar_admin/show_news?subname_Fac=".$row->NameFac_sub."&type_major=COOP");
                                                    ?>"> News </a></li>
                                                    <li><a href="<?php
                                                        echo(base_url()."/Fun_sidebar_admin/show_company?subname_major=".$rowMaj->NameMajor_sub."&type_major=COOP");
                                                    ?>">Organization</a></li>
                                                    <li><a href="">Time Setting</a></li>
                                                    <li><a href="">Export Summarize</a></li>
                                                    <li><a href="">Import</a></li>
                                                </ul>
                                        </li>
                                    </ul>
                                </li>
                            <?php } ?>
                      </ul>       
                   </li>      
            <?php } ?>  
        </li>
    </div>
    <!-- #Menu --> 
</aside>
<!-- #END# Left Sidebar --> 
