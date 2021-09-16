  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
      <div class="scrollbar-inner">
          <!-- Brand -->
          <div class="sidenav-header  align-items-center">
              <a class="navbar-brand" href="dashboard.php">
                  <img src="../../../assets/img/logo.jpeg" class="navbar-brand-img " alt="..." style="border-radius:50%">
                  <p class="text-dark">S2C</p>
              </a>
          </div>
          <div class="navbar-inner">
              <!-- Collapse -->
              <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                  <!-- Nav items -->
                  <ul class="navbar-nav"><strong>
                          <li class="nav-item">
                              <a class="nav-link <?php echo $page == "dashboard" ? "active" : ""; ?>" href="../../dashboard.php">
                                  <i class="ni ni-tv-2 text-primary text-red"></i>
                                  <span class="nav-link-text"><strong>Dashboard</strong></span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link <?php echo $page == "timetable" ? "active" : ""; ?>" href="../../timetable.php">
                                  <i class="ni ni-calendar-grid-58 text-red"></i>
                                  <span class="nav-link-text"><strong>Timetable</strong></span>
                              </a>
                          </li>
                          <li class="nav-item <?php echo $username !== "admin" ? "d-none" : "" ?>">
                              <a class="nav-link <?php echo $pageName == "studentmanagment" ? "active" : ""; ?>" href="../../studentmanagement.php">
                                  <i class="ni ni-single-02 text-red"></i>
                                  <span class="nav-link-text"><strong>Student Managment</strong></span>
                              </a>
                          </li>
                          <!-- <li class="nav-item">
              <a class="nav-link " href="feemanagement.php">
                <i class="ni ni-credit-card text-red"></i>
                <span class="nav-link-text"> <strong>Fee Managment</strong></span>
              </a>
            </li> -->
                          <li class="nav-item">
                              <a class="nav-link <?php echo $page == "studymaterial" ? "active" : ""; ?>" href="../../studymaterial.php">
                                  <i class="ni ni-single-copy-04 text-red"></i>
                                  <span class="nav-link-text"> <strong>Study material/notes section</strong></span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link <?php echo $page == "assignment" ? "active" : ""; ?>" href="../../assignment.php">
                                  <i class="ni ni-collection text-red"></i>
                                  <span class="nav-link-text"> <strong>Assignment section</strong></span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link <?php echo $page == "classlink" ? "active" : ""; ?>" href="../../classlink.php">
                                  <i class="ni ni-bell-55 text-red"></i>
                                  <span class="nav-link-text"> <strong>class Link</strong></span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="../../../logout.php">
                                  <i class="ni ni-button-power text-red"></i>
                                  <span class="nav-link-text"><strong>Logout</strong></span>
                              </a>
                          </li>
                  </ul>
              </div>
          </div>
      </div>
  </nav>