<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">

    <!-- Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="<?= site_url('/') ?>">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <!-- Settings (Only for Super-Admin) -->
    <li class="nav-item nav-category">Settings (Super Admin)</li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('programs') ?>"><i class="mdi mdi-folder-multiple menu-icon"></i><span class="menu-title">Manage Programs</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('centers') ?>"><i class="mdi mdi-map-marker-radius menu-icon"></i><span class="menu-title">Manage Centers</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('users') ?>"><i class="mdi mdi-account-circle menu-icon"></i><span class="menu-title">Manage Users</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('roles/manage') ?>"><i class="mdi mdi-account-key menu-icon"></i><span class="menu-title">Manage Role & Rights</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('goals/types') ?>"><i class="mdi mdi-target menu-icon"></i><span class="menu-title">Manage Goal Types</span></a></li>


    <!-- Programs Dynamic Dropdown (Future Ready) -->
    <li class="nav-item nav-category">Programs</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#programsSubmenu" aria-expanded="false" aria-controls="programsSubmenu">
        <i class="mdi mdi-book-multiple menu-icon"></i>
        <span class="menu-title">Manage Students</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="programsSubmenu">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="<?= site_url('program/vijetaas') ?>">Vijetaas</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('program/doosra_mauka') ?>">Doosra Mauka Students</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('program/learning_adda') ?>">Learning Adda Students</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('program/digital_shakti') ?>">Digital Shakti Students</a></li>
        </ul>
      </div>
    </li>

    <!-- Coordinators -->
    <li class="nav-item"><a class="nav-link" href="<?= site_url('coordinators') ?>"><i class="mdi mdi-account-tie menu-icon"></i><span class="menu-title">Manage Coordinators</span></a></li>

    <!-- Batches -->
    <li class="nav-item"><a class="nav-link" href="<?= site_url('batches') ?>"><i class="mdi mdi-calendar-clock menu-icon"></i><span class="menu-title">Manage Batches</span></a></li>

    <!-- Events -->
    <li class="nav-item"><a class="nav-link" href="<?= site_url('events') ?>"><i class="mdi mdi-calendar-multiselect menu-icon"></i><span class="menu-title">Manage Events</span></a></li>

    <!-- Finance -->
    <li class="nav-item nav-category">Manage Finance</li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('finance/fees') ?>"><i class="mdi mdi-cash-multiple menu-icon"></i><span class="menu-title">Fees</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('finance/donations') ?>"><i class="mdi mdi-currency-inr menu-icon"></i><span class="menu-title">Donations</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('finance/salary') ?>"><i class="mdi mdi-bank menu-icon"></i><span class="menu-title">Salaries</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('finance/assets') ?>"><i class="mdi mdi-package-variant menu-icon"></i><span class="menu-title">Assets</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('finance/expenses') ?>"><i class="mdi mdi-cash-minus menu-icon"></i><span class="menu-title">Expenses</span></a></li>


    <!-- Donors -->
    <li class="nav-item"><a class="nav-link" href="<?= site_url('donors') ?>"><i class="mdi mdi-hand-heart menu-icon"></i><span class="menu-title">Manage Donors</span></a></li>

    <!-- Attendance -->
    <li class="nav-item"><a class="nav-link" href="<?= site_url('attendance') ?>"><i class="mdi mdi-calendar-check menu-icon"></i><span class="menu-title">Manage Attendance</span></a></li>

    <!-- Reports -->
    <li class="nav-item nav-category">Reports</li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/program') ?>"><i class="mdi mdi-chart-bar menu-icon"></i><span class="menu-title">Programs Report</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/student') ?>"><i class="mdi mdi-account-search menu-icon"></i><span class="menu-title">Student Report</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/coordinators') ?>"><i class="mdi mdi-account-search menu-icon"></i><span class="menu-title">Coordinators Report</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/donor') ?>"><i class="mdi mdi-account-search menu-icon"></i><span class="menu-title">Donor Report</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/finance') ?>"><i class="mdi mdi-finance menu-icon"></i><span class="menu-title">Finance Reports</span></a></li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('reports/event') ?>"><i class="mdi mdi-calendar-text menu-icon"></i><span class="menu-title">Event Reports</span></a></li>

    <!-- Results -->
    <li class="nav-item nav-category">Results</li>
    <li class="nav-item"><a class="nav-link" href="<?= site_url('results') ?>"><i class="mdi mdi-file-certificate menu-icon"></i><span class="menu-title">Results</span></a></li>

  </ul>
</nav>
