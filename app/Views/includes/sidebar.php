<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('/'); ?>">
        <i class="mdi mdi-grid-large menu-icon"></i>
            <!-- Dashboard -->
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
        
    <li class="nav-item nav-category">Main Modules</li>
        <!-- Manage Programs -->
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('programs'); ?>">
        <i class="mdi mdi-folder-multiple menu-icon"></i>
        <span class="menu-title">Manage Programs</span>    
      </a>
    </li>
    <!-- Manage Centers -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('centers'); ?>">
              <i class="mdi mdi-map-marker-radius menu-icon"></i>
              <span class="menu-title">Manage Centers</span>
            </a>
        </li>
              
    <!-- Manage Users -->
          <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#manageUsers" aria-expanded="false" aria-controls="manageUsers">
                  <i class="mdi mdi-account-group menu-icon"></i>
                  <span class="menu-title">Manage Users</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="manageUsers">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('students/vijetaas'); ?>">Vijetaas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Students/doosra'); ?>">Doosra Mauka</a>
                    </li>
                   <li class="nav-item">
                       <a class="nav-link" href="<?php echo base_url('students/learning_adda'); ?>">Learning Adda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('students/digital_shakti'); ?>">Digital Shakti</a>
                    </li>
                  </ul>
                </div>
              </li>
              
              <!-- Coordinators -->
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('manage/coordinators'); ?>">
                  <i class="mdi mdi-account-tie menu-icon"></i>
                  <span class="menu-title">Manage Coordinators</span>
                </a>
              </li>
              
              <!-- Batches -->
               <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('manage/batches'); ?>">
                  <i class="mdi mdi-calendar-clock menu-icon"></i>
                  <span class="menu-title">Manage Batch</span>
                </a>
              </li>
              
              <!-- Events -->
               <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('manage/events'); ?>">
                  <i class="mdi mdi-calendar-multiselect menu-icon"></i>
                  <span class="menu-title">Manage Events</span>
                </a>
                </li>
                
                <!-- Donors -->
                 <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('manage/donors'); ?>">
                    <i class="mdi mdi-hand-heart menu-icon"></i>
                    <span class="menu-title">Manage Donors</span>
                  </a>
                </li>
                
                <!-- Finance -->
                 <li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#financeSubmenu" aria-expanded="false" aria-controls="financeSubmenu">
    <i class="mdi mdi-currency-inr menu-icon"></i>
    <span class="menu-title">Manage Finance</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="financeSubmenu">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('finance/fees'); ?>">Fees</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('finance/donations'); ?>">Donations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('finance/assets'); ?>">Assets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('finance/salary'); ?>">Salary</a>
      </li>
    </ul>
  </div>
</li>

                
              <!-- Attendance -->
               <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('manage/attendance'); ?>">
                    <i class="mdi mdi-calendar-check menu-icon"></i>
                    <span class="menu-title">Manage Attendance</span>
                </a>
              </li>

              <!-- Reports -->
               <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('manage/reports'); ?>">
                    <i class="mdi mdi-file-chart menu-icon"></i>
                    <span class="menu-title">Reports</span>
                  </a>
                </li>

                <!-- Result -->
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('manage/results'); ?>">
                    <i class="mdi mdi-file-certificate menu-icon"></i>
                    <span class="menu-title">Result Module</span>
                  </a>
                </li>
          </ul>
        </nav>
