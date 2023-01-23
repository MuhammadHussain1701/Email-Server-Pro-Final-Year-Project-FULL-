<aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                                  
                        <?php
                        
                        $id = $_SESSION['login_user'];
                        $sql = "SELECT * FROM `signup` WHERE `Email`='$id'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            

                                
                                    if($row['status']=="admin"){

                                    
                                ?>

                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.php" aria-expanded="false"><i class="me-3 far fa-clock fa-fw" aria-hidden="true">
                                </i>  
                                <span class="hide-menu">Dashboard</span></a></li>
                                
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="users.php" aria-expanded="false">
                                
                                <i class="me-3 fa fa-users" aria-hidden="true">
                                </i>

                                <span class="hide-menu">All Users</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="sentemails.php" aria-expanded="false">
                                
                                <i class="me-3 fas fa-comment-alt" aria-hidden="true">
                                </i>

                                

                                <span class="hide-menu">Sent</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="recieveremails.php" aria-expanded="false">
                                
                                <i class="me-3 fas fa-comment-alt" aria-hidden="true">
                                </i>

                                

                                <span class="hide-menu">Received</span></a></li>




                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="junkemails.php" aria-expanded="false">
                                
                                <i class="me-3 fas fa-comment-alt" aria-hidden="true">
                                </i>

                                

                                <span class="hide-menu">Junk Email</span></a></li>



                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="allemails.php" aria-expanded="false">
                                
                                <i class="me-3 fas fa-comment-alt" aria-hidden="true">
                                </i>

                                

                                <span class="hide-menu">All Emails</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="adduser.php?id=<?php
                                    $id = $_SESSION['login_user'];
                                    $sql = "SELECT * FROM `signup` WHERE `Email`='$id'";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        $id = $row['registration_id'];
                                        echo $id;
                                    }
                                
                                ?>" aria-expanded="false">


                                <i class="me-3 far fa fa-user"
                                    aria-hidden="true"></i><span
                                    class="hide-menu">Profile</span></a>
                                </li>
                                
                             
                                    
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="logout.php" aria-expanded="false"><i class="me-3 fa fa-lock"
                                    aria-hidden="true"></i><span class="hide-menu">Logout</span></a></li>
                       
                                <?php
                                }elseif($row['status']=="client"){
                                        ?>
                                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.php" aria-expanded="false"><i class="me-3 far fa-clock fa-fw" aria-hidden="true">
                                </i>  
                                <span class="hide-menu">Dashboard</span></a></li>
                                
                                
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="sentemails.php" aria-expanded="false">
                                
                                <i class="me-3 fas fa-comment-alt" aria-hidden="true">
                                </i>

                                

                                <span class="hide-menu">Sent</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="recieveremails.php" aria-expanded="false">
                                
                                <i class="me-3 fas fa-comment-alt" aria-hidden="true">
                                </i>

                                

                                <span class="hide-menu">Received</span></a></li>



                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="junkemails.php" aria-expanded="false">
                                
                                <i class="me-3 fas fa-comment-alt" aria-hidden="true">
                                </i>

                                

                                <span class="hide-menu">Junk Email</span></a></li>


                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="adduser.php?id=<?php
                                    $id = $_SESSION['login_user'];
                                    $sql = "SELECT * FROM `signup` WHERE `Email`='$id'";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        $id = $row['registration_id'];
                                        echo $id;
                                    }
                                
                                ?>" aria-expanded="false">
                                <i class="me-3 far fa fa-user"
                                    aria-hidden="true"></i><span
                                    class="hide-menu">Profile</span></a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="logout.php" aria-expanded="false"><i class="me-3 fa fa-lock"
                                    aria-hidden="true"></i><span class="hide-menu">Logout</span></a></li>
                                       
                                                  
                                                    
                                                     
                                                     <?php
                                    }
                                       
                                       
                                       
                                      
                                        
                                        
                                    }else{
                                        
                                       
                                    }

                            
                        
                        
                        ?>
                    </ul>
                </nav>
            </div>
        </aside>