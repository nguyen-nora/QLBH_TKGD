<?php
/**
 * backend/views/inc_header.php
 *
 * Author: pixelcave
 *
 * The header of each page
 *
 */
?>

<!-- Header -->
<header id="page-header">
  <!-- Header Content -->
  <div class="content-header">
    <!-- Left Section -->
    <div class="space-x-1">
      <!-- Toggle Sidebar -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->

      <!-- Open Search Section -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
        <i class="fa fa-fw fa-search"></i>
      </button>
      <!-- END Open Search Section -->

      <!-- Color Themes -->

      <!-- END Color Themes -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div class="space-x-1">
      <!-- User Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user d-sm-none"></i>
          <span class="d-none d-sm-inline-block fw-semibold">Nhóm 1</span>
          <i class="fa fa-angle-down opacity-50 ms-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
          <div class="px-2 py-3 bg-body-light rounded-top">
            <h5 class="h6 text-center mb-0">
              Nhóm 1
            </h5>
          </div>
          <div class="p-2">
            <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="be_pages_generic_profile.php">
              <span>Profile</span>
              <i class="fa fa-fw fa-user opacity-25"></i>
            </a>
            <div class="dropdown-divider"></div>
  
            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
              <span>Settings</span>
              <i class="fa fa-fw fa-wrench opacity-25"></i>
            </a>
            <!-- END Side Overlay -->
  
            <div class="dropdown-divider"></div>
            <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="op_auth_signin.php">
              <span>Sign Out</span>
              <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- END User Dropdown -->

      <!-- Notifications -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-flag"></i>
          <span class="text-primary">&bull;</span>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications">
          <div class="px-2 py-3 bg-body-light rounded-top">
            <h5 class="h6 text-center mb-0">
              Notifications
            </h5>
          </div>
          <ul class="nav-items my-2 fs-sm">
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-2 ms-3">
                  <i class="fa fa-fw fa-times text-danger"></i>
                </div>
                <div class="flex-grow-1 pe-2">
                  <p class="fw-medium mb-1">Web server stopped responding and it was automatically restarted!</p>
                  <div class="text-muted">4 hours ago</div>
                </div>
              </a>
            </li>
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-2 ms-3">
                  <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                </div>
                <div class="flex-grow-1 pe-2">
                  <p class="fw-medium mb-1">Please consider upgrading your plan. You are running out of space.</p>
                  <div class="text-muted">16 hours ago</div>
                </div>
              </a>
            </li>
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-2 ms-3">
                  <i class="fa fa-fw fa-plus text-primary"></i>
                </div>
                <div class="flex-grow-1 pe-2">
                  <p class="fw-medium mb-1">New purchases! +$250</p>
                  <div class="text-muted">1 day ago</div>
                </div>
              </a>
            </li>
          </ul>
          <div class="p-2 bg-body-light rounded-bottom">
            <a class="dropdown-item text-center mb-0" href="javascript:void(0)">
              <i class="fa fa-fw fa-flag opacity-50 me-1"></i> View All
            </a>
          </div>
        </div>
      </div>
      <!-- END Notifications -->

      <!-- Toggle Side Overlay -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
        <i class="fa fa-fw fa-stream"></i>
      </button>
      <!-- END Toggle Side Overlay -->
    </div>
    <!-- END Right Section -->
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-body-extra-light">
    <div class="content-header">
      <form class="w-100" action="be_pages_generic_search.php" method="POST">
        <div class="input-group">
          <!-- Close Search Section -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times"></i>
          </button>
          <!-- END Close Search Section -->
          <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
          <button type="submit" class="btn btn-secondary">
            <i class="fa fa-fw fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- END Header Search -->

  <!-- Header Loader -->
  <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
  <div id="page-header-loader" class="overlay-header bg-primary">
    <div class="content-header">
      <div class="w-100 text-center">
        <i class="far fa-sun fa-spin text-white"></i>
      </div>
    </div>
  </div>
  <!-- END Header Loader -->
</header>
<!-- END Header -->
