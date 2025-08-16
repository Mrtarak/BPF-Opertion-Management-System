<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">

    <!-- Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="<?= site_url('/') ?>">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Home</span>
      </a>
    </li>

    <!-- Settings (Only for Super-Admin) -->
    <li class="nav-item nav-category">SETTINGS </li>

    <!-- Manage programs -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#programs" aria-expanded="false" aria-controls="programs">
        <i class="mdi mdi-folder-multiple menu-icon"></i>
        <span class="menu-title">Manage Programs</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="programs">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="<?= site_url('programs') ?>">Manage Programs</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('program_theme') ?>">Manage Program Themes</a></li>
        </ul>
      </div>
    </li>

    <!-- Manage centers -->
    <li class="nav-item"><a class="nav-link" href="<?= site_url('center') ?>"><i class="mdi mdi-map-marker-radius menu-icon"></i><span class="menu-title">Manage Centers</span></a></li>

    <!-- Roles & Rights -->
     <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#rolesRights" aria-expanded="false" aria-controls="rolesRights">
        <i class="mdi mdi-account-key menu-icon"></i>
        <span class="menu-title">Roles & Rights</span>
        <i class="menu-arrow"></i>
      </a>
     <div class="collapse" id="rolesRights">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('roles/manage') ?>">Manage Roles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('rights/manage') ?>">Manage Rights</a>
        </li>
      </ul>
     </div>
        </li>

      <!-- Manage Goal Types -->
      <li class="nav-item"><a class="nav-link" href="<?= site_url('goals/types') ?>"><i class="mdi mdi-calendar-multiselect menu-icon"></i><span class="menu-title">Manage GoalTypes</span></a></li>
      
      <!-- Manage Expense Heads -->
     <li class="nav-item"><a class="nav-link" href="<?= site_url('expense_heads') ?>"><i class="mdi mdi-currency-inr menu-icon"></i><span class="menu-title">Expense Heads</span></a></li>
     
     <!-- manage EventTypes -->
    <li class="nav-item"><a class="nav-link" href="<?= site_url('eventtype') ?>"><i class="mdi mdi-calendar-multiselect menu-icon"></i><span class="menu-title">EventTypes</span></a></li>
    
    <!-- Manage Batches -->
    <li class="nav-item"><a class="nav-link" href="<?= site_url('batches') ?>"><i class="mdi mdi-calendar-clock menu-icon"></i><span class="menu-title">Manage Batches</span></a></li>

    <!-- Manage Users Dropdown -->
    <li class="nav-item nav-category">Manage Users</li>
      <!-- Manage User -->
           <li class="nav-item"><a class="nav-link" href="<?= site_url('users') ?>"><i class="mdi mdi-account-circle menu-icon"></i><span class="menu-title">Manage Users</span></a></li>

<!-- Manage Students -->
<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#programsSubmenu" aria-expanded="false" aria-controls="programsSubmenu">
        <i class="mdi mdi-book-multiple menu-icon"></i>
        <span class="menu-title">Manage Students</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="programsSubmenu">
        <ul class="nav flex-column sub-menu">

            <!-- Vijetaas main with sub-links -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#vijetaasSubmenu" aria-expanded="false" aria-controls="vijetaasSubmenu">
                    Vijetaas
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="vijetaasSubmenu">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('students/vijetaas') ?>">All Vijetaas</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('students/vijetaas/goals') ?>">Goals</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('students/vijetaas/results') ?>">Results</a></li>
                    </ul>
                </div>
            </li>

            <!-- Other programs -->
            <li class="nav-item"><a class="nav-link" href="<?= site_url('students/doosra_mauka') ?>">Doosra Mauka Students</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= site_url('students/learning_adda') ?>">Learning Adda Students</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= site_url('students/digital_shakti') ?>">Digital Shakti Students</a></li>
        </ul>
    </div>
</li>

        <!-- Manage Monthly Activity Uploads -->
    <li class="nav-item"><a class="nav-link" href="<?= site_url('uploads') ?>"><i class="mdi mdi-upload menu-icon"></i><span class="menu-title"> Monthly Uploads</span></a></li>

    
    <li class="nav-item nav-category">Others</li>

    <!-- Attendance -->
    <li class="nav-item"><a class="nav-link" href="<?= site_url('attendance') ?>"><i class="mdi mdi-calendar-check menu-icon"></i><span class="menu-title">Manage Attendance</span></a></li>

    <!-- Events -->
     <li class="nav-item"><a href="<?= site_url('events') ?>" class="nav-link"><i class=" mdi mdi-calendar-multiple menu-icon"></i><p>All Events</p></a></li>
    <!-- Finance -->
    <li class="nav-item nav-category">Manage Finance</li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('finance/fees') ?>"><i class="mdi mdi-cash-multiple menu-icon"></i><span class="menu-title">Fees</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('finance/donations') ?>"><i class="mdi mdi-currency-inr menu-icon"></i><span class="menu-title">Donations</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('finance/assets') ?>"><i class="mdi mdi-package-variant menu-icon"></i><span class="menu-title">Assets</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('finance/expenses') ?>"><i class="mdi mdi-cash-minus menu-icon"></i><span class="menu-title">Expenses</span></a></li>

    <!-- Reports -->
    <li class="nav-item nav-category">Reports</li>
    <!-- Program Performance Reports -->
<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#programPerformanceReports" aria-expanded="false" aria-controls="programPerformanceReports">
    <i class="mdi mdi-chart-bar menu-icon"></i>
    <span class="menu-title">Program Performance Reports</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="programPerformanceReports">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/program_summary') ?>">Program Summary Report</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/enrollment_completion') ?>">Program Enrollment & Completion Report</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/program_attendance') ?>">Program Attendance Report</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/completion_rate') ?>">Completion Rate Report</a></li>
    </ul>
  </div>
</li>

<!-- Financial Reports -->
<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#financialReports" aria-expanded="false" aria-controls="financialReports">
    <i class="mdi mdi-currency-inr menu-icon"></i>
    <span class="menu-title">Financial Reports</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="financialReports">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/fees_collection') ?>">Fees Collection Report</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/expenditure') ?>">Expenditure Report</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/donation') ?>">Donation Report</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/spend_vs_donation') ?>">Spend vs Donation Report</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/budget_planning') ?>">Budget Planning Report</a></li>
    </ul>
  </div>
</li>

<!-- Operational & Resource Reports -->
<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#operationalReports" aria-expanded="false" aria-controls="operationalReports">
    <i class="mdi mdi-domain menu-icon"></i>
    <span class="menu-title">Operational & Resource Reports</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="operationalReports">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/center_event_summary') ?>">Center & Event Summary Report</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/asset_utilization') ?>">Asset Utilization Report</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/event_details') ?>">Event Details Report</a></li>
    </ul>
  </div>
</li>

<!-- KPI Dashboards -->
<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#kpiDashboards" aria-expanded="false" aria-controls="kpiDashboards">
    <i class="mdi mdi-monitor-dashboard menu-icon"></i>
    <span class="menu-title">KPI Dashboards</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="kpiDashboards">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/program_kpi') ?>">Program KPI Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/attendance_kpi') ?>">Attendance KPI Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/financial_kpi') ?>">Financial KPI Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/coordinator_kpi') ?>">Coordinator KPI Dashboard</a></li>
    </ul>
  </div>
</li>

    <!-- Results -->
    <li class="nav-item nav-category">Results</li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('results') ?>"><i class="mdi mdi-file-certificate menu-icon"></i><span class="menu-title">Results</span></a></li>

  </ul>
</nav>
