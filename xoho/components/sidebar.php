 <div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Dashboard</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="leave_application.php">Apply Leave</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Search</a>
                    </li>
                    <?php 
                        if($_SESSION['position']=='hod' || $_SESSION['position']=='principal' ){   
                            echo '<li class="nav-item">
                                <a class="nav-link" href="track_leave.php">Track Leave</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="late_entry.php">Late Entry</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="approval.php" id="approval-link">Approval</a>
                            </li>'
                            ;
                            }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="calender.php">Calender</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>