  <!-- Sidebar Menu -->
  <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item   <?php if(in_array($activeMenu,['dashboard'])) echo "menu-open" ?>">
            <a href="#" class="nav-link <?php if(in_array($activeMenu,['dashboard'])) echo "active" ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('dashboard') ?>" class="nav-link <?php if($activeMenu == 'dashboard') echo "active"?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item <?php if(in_array($activeMenu, ['suppliers'])){
              echo "menu-open";
              }?>">
            <a href="<?php echo site_url('suppliers') ?>" class="nav-link <?php if ($activeMenu == 'suppliers') echo "active"; ?>">
              <i class="fas fa-circle nav-icon"></i>
              <p>Suppliers</p>
            </a>
          </li>

          <li class="nav-item <?php if(in_array($activeMenu, ['custommers'])){
              echo "menu-open";
              }?>">
            <a href="<?php echo site_url('customers') ?>" class="nav-link <?php if ($activeMenu == 'customers') echo "active"; ?>">
              <i class="fas fa-circle nav-icon"></i>
              <p>Customers</p>
            </a>
          </li>

          <!-- Products -->
          <!-- kalau di aktifkan flot atau seterusnya maka [chartjs, float, dan seterusnnya] di bagian menu-open dan active -->
          <li class="nav-item <?php if(in_array($activeMenu, ['chartjs','categories','items','units'])){
              echo "menu-open";
              }?>">
            <a href="#" class="nav-link <?php if(in_array($activeMenu, ['chartjs','categories','items','units'])){
              echo "active";
              }?>">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('chartjs') ?>" class="nav-link <?php if ($activeMenu == 'chartjs') echo "active"; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('categories') ?>" class="nav-link <?php if ($activeMenu == 'categories') echo "active"; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('items') ?>" class="nav-link <?php if ($activeMenu == 'items') echo "active"; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('units') ?>" class="nav-link <?php if ($activeMenu == 'units') echo "active"; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Units</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php if(in_array($activeMenu, ['sales','stock_in','stock_out'])){
              echo "menu-open";
              }?>">
            <a href="#" class="nav-link <?php if(in_array($activeMenu, ['sales','stock_in','stock_out'])){
              echo "active";
              }?>">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Transaction
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('sales') ?>" class="nav-link <?php if ($activeMenu == 'sales') echo "active"; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('stock_in') ?>" class="nav-link <?php if ($activeMenu == 'stock_in') echo "active"; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock In</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('stock_out') ?>" class="nav-link <?php if ($activeMenu == 'stock_out') echo "active"; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock Out</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Reports</p>
            </a>
          </li>

          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Admin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Kasir</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->