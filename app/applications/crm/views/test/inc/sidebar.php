<div class="an-sidebar-nav collapse an-hide-sidebar js-sidebar-toggle-with-click">
    <div class="an-sidebar-nav">
        <ul class="an-main-nav">
            <li class="an-nav-item <?php echo(
            $_SERVER['PHP_SELF'] == "/peopleoverview.php" ||
            $_SERVER['PHP_SELF'] == "/bakingcrew.php" ||
            $_SERVER['PHP_SELF'] == "/deliverycrew.php" ||
            $_SERVER['PHP_SELF'] == "/team.php"
                ? "active" : ""); ?>">
                <a class=" js-show-child-nav" href="#">
                    <i class="icon-user"></i>
                    <span class="nav-title">People
                    <span class="an-arrow-nav"><i class="icon-arrow-down"></i></span>
                  </span>
                </a>
                <ul class="an-child-nav js-open-nav">
                    <li><a href="<?php echo URLROOT  ?>crm/test/peopleoverview" class="active">Overview</a></li>
                    <li><a href="<?php echo URLROOT  ?>crm/test/bakingcrew">Baking Crew</a></li>
                    <li><a href="<?php echo URLROOT  ?>crm/test/deliverycrew">Delivery Crew</a></li>
                    <li><a href="<?php echo URLROOT  ?>crm/test/team">Team</a></li>
                </ul>
            </li>
            <li class="an-nav-item <?php echo(
            $_SERVER['PHP_SELF'] == "/customeroverview.php" ||
            $_SERVER['PHP_SELF'] == "/customershop.php" ||
            $_SERVER['PHP_SELF'] == "/customercafe.php" ||
            $_SERVER['PHP_SELF'] == "/businesscustomer.php"
                ? "active" : ""); ?>">
                <a class=" js-show-child-nav" href="#">
                    <i class="icon-board-list"></i>
                    <span class="nav-title">Customers
                    <span class="an-arrow-nav"><i class="icon-arrow-down"></i></span>
                  </span>
                </a>
                <ul class="an-child-nav js-open-nav">
                    <li><a href="<?php echo URLROOT  ?>crm/test/customeroverview">Overview</a></li>
                    <li><a href="<?php echo URLROOT  ?>crm/test/customershop">Shop</a></li>
                    <li><a href="<?php echo URLROOT  ?>crm/test/customercafe">Cafes</a></li>
                    <li><a href="<?php echo URLROOT  ?>crm/test/businesscustomer">Business Customers</a></li>
                </ul>
            </li>
            <li class="an-nav-item ">
                <a class=" js-show-child-nav" href="#">
                    <i class="icon-cart"></i>
                    <span class="nav-title">Products
                    <span class="an-arrow-nav"><i class="icon-arrow-down"></i></span>
                  </span>
                </a>

                <ul class="an-child-nav js-open-nav">
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Cafes</a></li>
                    <li><a href="#">Business Products</a></li>
                </ul>
            </li>
            <li class="an-nav-item ">
                <a class=" js-show-child-nav" href="#">
                    <i class="icon-shopping-bag"></i>
                    <span class="nav-title">Orders
                    <span class="an-arrow-nav"><i class="icon-arrow-down"></i></span>
                  </span>
                </a>

                <ul class="an-child-nav js-open-nav">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Order Details</a></li>
                </ul>
            </li>
            <li class="an-nav-item ">
                <a class=" js-show-child-nav" href="#">
                    <i class="icon-chart-stock"></i>
                    <span class="nav-title">Bakery
                    <span class="an-arrow-nav"><i class="icon-arrow-down"></i></span>
                  </span>
                </a>
                <ul class="an-child-nav js-open-nav">
                    <li><a href="#">Report</a></li>
                    <li><a href="#">Plan</a></li>
                    <li><a href="#">Manage</a></li>
                    <li><a href="#">Quality</a></li>
                </ul>
            </li>
            <li class="an-nav-item  <?php echo(
            $_SERVER['PHP_SELF'] == "/stock.php" ||
            $_SERVER['PHP_SELF'] == "/qr_codes.php"
                ? "active" : ""); ?>">
                <a class=" js-show-child-nav" href="#">
                    <i class="icon-file"></i>
                    <span class="nav-title">Inventory
                    <span class="an-arrow-nav"><i class="icon-arrow-down"></i></span>
                  </span>
                </a>
                <ul class="an-child-nav js-open-nav">
                    <li><a href="<?php echo URLROOT  ?>crm/test/stock">Stock</a></li>
                    <li><a href="qr_codes.php">QR-Codes</a></li>
                </ul>
            </li>
        </ul> <!-- end .AN-MAIN-NAV -->
    </div> <!-- end .AN-SIDEBAR-NAV -->
</div>
<!-- end .AN-SIDEBAR-NAV -->