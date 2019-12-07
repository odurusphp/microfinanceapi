<?php require APPROOT . '/applications/crm/views/test/inc/header.php'; ?>

<div class="an-page-content">

    <?php require APPROOT . '/applications/crm/views/test/inc/sidebar.php'; ?>

        <div class="an-content-body">

            <div class="an-breadcrumb wow fadeInUp">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">People</a></li>
                    <li class="active">Overview</li>
                </ol>
            </div> <!-- end AN-BREADCRUMB -->

            <div class="row with-shadow with-bg" style="margin-top: -2.1% !important;
            margin-bottom: 2% !important;">
                <div class="an-doc-block default with-shadow"
                     style="height: 130px;margin-bottom: 0 !important;">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <form class="an-form" action="#">
                            <div class="an-search-field topbar">
                                <input class="an-form-control" type="text" placeholder="Search...">
                                <button class="an-btn an-btn-icon" type="submit">
                                    <i class="icon-search"></i>
                                </button>
                            </div>
                        </form>

                        <hr style="margin-top: -3% !important;"/>

                        <div style="margin-top: -3% !important;">
                            <button class="an-btn an-btn-primary block-icon" style="background-color: #3A987B">
                                <i class="glyphicon glyphicon-filter"></i>Filter
                            </button>
                            <button class="an-btn an-btn-primary block-icon" style="background-color: #3A987B">
                                <i class="glyphicon glyphicon-align-left"></i>Group By
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="an-portfolio-section">
                <div class="button-group filter-button-group  text-center">
                    <button class="an-btn an-btn-primary-transparent uppdercase" data-filter="*">Overview</button>
                    <button  class="an-btn an-btn-primary-transparent uppercase" data-filter=".design">Baking Crew</button>
                    <button class="an-btn an-btn-primary-transparent uppercase" data-filter=".development">Delivery Crew</button>
                    <button class="an-btn an-btn-primary-transparent uppercase" data-filter=".ui">Team</button>
                </div>
                <div class="row">
                    <div class="col-md-3 development ui">
                        <div class="an-single-component with-shadow">

                            <div class="an-component-body">
                                <div class="an-user-lists customer-support">
                                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y" data-ps-id="e4c4f063-bbb8-3571-bb7d-45c1452b705b">
                                        <div class="list-user-single closed">
                                            <div class="list-name">
                          <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user8.jpg') center center no-repeat;
                            background-size: cover;"></span>
                                                <a href="#" style="color:#333333">Alex Jordan </a>
                                            </div>
                                            <p class="comment">
                                                <i class="glyphicon glyphicon-envelope"></i> antoine@odoo.com<br/>
                                                <i class="glyphicon glyphicon-phone"></i> +328 2378320
                                            </p>
                                            <p class="hidediv" style="display: none">
                                                <i class="glyphicon glyphicon-map-marker"></i> Berlin, Germany<br/>
                                                <i class="glyphicon glyphicon-user"></i> Supervisor <br/>
                                                <i class="glyphicon glyphicon-calendar"></i> 12th July, 1934
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end .AN-COMPONENT-BODY -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 design ui">
                        <div class="an-single-component with-shadow">
                            <div class="an-component-body">
                                <div class="an-user-lists customer-support">
                                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y" data-ps-id="e4c4f063-bbb8-3571-bb7d-45c1452b705b">
                                        <div class="list-user-single closed">
                                            <div class="list-name">
                          <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user8.jpg') center center no-repeat;
                            background-size: cover;"></span>
                                                <a href="#" style="color:#333333">Alex Jordan </a>
                                            </div>
                                            <p class="comment">
                                                <i class="glyphicon glyphicon-envelope"></i> antoine@odoo.com<br/>
                                                <i class="glyphicon glyphicon-phone"></i> +328 2378320
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end .AN-COMPONENT-BODY -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ui development">
                        <div class="an-single-component with-shadow">
                            <div class="an-component-body">
                                <div class="an-user-lists customer-support">
                                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y" data-ps-id="e4c4f063-bbb8-3571-bb7d-45c1452b705b">
                                        <div class="list-user-single closed">
                                            <div class="list-name">
                          <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user8.jpg') center center no-repeat;
                            background-size: cover;"></span>
                                                <a href="#" style="color:#333333">Alex Jordan </a>
                                            </div>
                                            <p class="comment">
                                                <i class="glyphicon glyphicon-envelope"></i> antoine@odoo.com<br/>
                                                <i class="glyphicon glyphicon-phone"></i> +328 2378320
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end .AN-COMPONENT-BODY -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 design">
                        <div class="an-single-component with-shadow">
                            <div class="an-component-body">
                                <div class="an-user-lists customer-support">
                                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y" data-ps-id="e4c4f063-bbb8-3571-bb7d-45c1452b705b">
                                        <div class="list-user-single closed">
                                            <div class="list-name">
                          <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user8.jpg') center center no-repeat;
                            background-size: cover;">
                          </span>
                                                <a href="#" style="color:#333333">Alex Jordan </a>

                                            </div>
                                            <p class="comment">
                                                <i class="glyphicon glyphicon-envelope"></i> antoine@odoo.com<br/>
                                                <i class="glyphicon glyphicon-phone"></i> +328 2378320
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end .AN-COMPONENT-BODY -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 design development">
                        <div class="an-single-component with-shadow">
                            <div class="an-component-body">
                                <div class="an-user-lists customer-support">
                                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y" data-ps-id="e4c4f063-bbb8-3571-bb7d-45c1452b705b">
                                        <div class="list-user-single closed">
                                            <div class="list-name">
                          <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user8.jpg') center center no-repeat;
                            background-size: cover;"></span>
                                                <a href="#" style="color:#333333">Alex Jordan </a>
                                            </div>
                                            <p class="comment">
                                                <i class="glyphicon glyphicon-envelope"></i> antoine@odoo.com<br/>
                                                <i class="glyphicon glyphicon-phone"></i> +328 2378320
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end .AN-COMPONENT-BODY -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ui development">
                        <div class="an-single-component with-shadow">
                            <div class="an-component-body">
                                <div class="an-user-lists customer-support">
                                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y" data-ps-id="e4c4f063-bbb8-3571-bb7d-45c1452b705b">
                                        <div class="list-user-single closed">
                                            <div class="list-name">
                          <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user8.jpg') center center no-repeat;
                            background-size: cover;"></span>
                                                <a href="#" style="color:#333333">Alex Jordan </a>
                                            </div>
                                            <p class="comment">
                                                <i class="glyphicon glyphicon-envelope"></i> antoine@odoo.com<br/>
                                                <i class="glyphicon glyphicon-phone"></i> +328 2378320
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end .AN-COMPONENT-BODY -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 design">
                        <div class="an-single-component with-shadow">
                            <div class="an-component-body">
                                <div class="an-user-lists customer-support">
                                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y" data-ps-id="e4c4f063-bbb8-3571-bb7d-45c1452b705b">
                                        <div class="list-user-single closed">
                                            <div class="list-name">
                          <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user8.jpg') center center no-repeat;
                            background-size: cover;"></span>
                                                <a href="#" style="color:#333333">Alex Jordan </a>
                                            </div>
                                            <p class="comment">
                                                <i class="glyphicon glyphicon-envelope"></i> antoine@odoo.com<br/>
                                                <i class="glyphicon glyphicon-phone"></i> +328 2378320
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end .AN-COMPONENT-BODY -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 design ui">
                        <div class="an-single-component with-shadow">
                            <div class="an-component-body">
                                <div class="an-user-lists customer-support">
                                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y" data-ps-id="e4c4f063-bbb8-3571-bb7d-45c1452b705b">
                                        <div class="list-user-single closed">
                                            <div class="list-name">
                          <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user8.jpg') center center no-repeat;
                            background-size: cover;"></span>
                                                <a href="#" style="color:#333333">Alex Jordan </a>
                                            </div>
                                            <p class="comment">
                                                <i class="glyphicon glyphicon-envelope"></i> antoine@odoo.com<br/>
                                                <i class="glyphicon glyphicon-phone"></i> +328 2378320
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end .AN-COMPONENT-BODY -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ui development">
                        <div class="an-single-component with-shadow">
                            <div class="an-component-body">
                                <div class="an-user-lists customer-support">
                                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y" data-ps-id="e4c4f063-bbb8-3571-bb7d-45c1452b705b">
                                        <div class="list-user-single closed">
                                            <div class="list-name">
                          <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user8.jpg') center center no-repeat;
                            background-size: cover;"></span>
                                                <a href="#" style="color:#333333">Alex Jordan </a>
                                            </div>
                                            <p class="comment">
                                                <i class="glyphicon glyphicon-envelope"></i> antoine@odoo.com<br/>
                                                <i class="glyphicon glyphicon-phone"></i> +328 2378320
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end .AN-COMPONENT-BODY -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 design ui">
                        <div class="an-single-component with-shadow">

                            <div class="an-component-body">
                                <div class="an-user-lists customer-support">
                                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y" data-ps-id="e4c4f063-bbb8-3571-bb7d-45c1452b705b">
                                        <div class="list-user-single closed">
                                            <div class="list-name">
                          <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user8.jpg') center center no-repeat;
                            background-size: cover;">
                          </span>
                                                <a href="#" style="color:#333333">Alex Jordan </a>

                                            </div>
                                            <p class="comment">
                                                <i class="glyphicon glyphicon-envelope"></i> antoine@odoo.com<br/>
                                                <i class="glyphicon glyphicon-phone"></i> +328 2378320
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end .AN-COMPONENT-BODY -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 development ui">
                        <div class="an-single-component with-shadow">

                            <div class="an-component-body">
                                <div class="an-user-lists customer-support">
                                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y" data-ps-id="e4c4f063-bbb8-3571-bb7d-45c1452b705b">
                                        <div class="list-user-single closed">
                                            <div class="list-name">
                          <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user8.jpg') center center no-repeat;
                            background-size: cover;">
                          </span>
                                                <a href="#" style="color:#333333">Alex Jordan </a>

                                            </div>
                                            <p class="comment">
                                                <i class="glyphicon glyphicon-envelope"></i> antoine@odoo.com<br/>
                                                <i class="glyphicon glyphicon-phone"></i> +328 2378320
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end .AN-COMPONENT-BODY -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 design">
                        <div class="an-single-component with-shadow">

                            <div class="an-component-body">
                                <div class="an-user-lists customer-support">
                                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y" data-ps-id="e4c4f063-bbb8-3571-bb7d-45c1452b705b">
                                        <div class="list-user-single closed">
                                            <div class="list-name">
                          <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user8.jpg') center center no-repeat;
                            background-size: cover;">
                          </span>
                                                <a href="#" style="color:#333333">Alex Jordan </a>

                                            </div>
                                            <p class="comment">
                                                <i class="glyphicon glyphicon-envelope"></i> antoine@odoo.com<br/>
                                                <i class="glyphicon glyphicon-phone"></i> +328 2378320
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end .AN-COMPONENT-BODY -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end an-portfolio-section -->

        </div> <!-- end .AN-PAGE-CONTENT-BODY -->
    </div> <!-- end .AN-PAGE-CONTENT -->

<?php require APPROOT . '/applications/crm/views/test/inc/footer.php'; ?>

</div> <!-- end .MAIN-WRAPPER -->


<script src="<?php echo URLROOT  ?>crm/assets/js-plugins/isotope.pkg.min.js" type="text/javascript"></script>
<script src="<?php echo URLROOT  ?>crm/assets/js-plugins/wow.min.js" type="text/javascript"></script>

<!--  MAIN SCRIPTS START FROM HERE  above scripts from plugin   -->
<script src="<?php echo URLROOT  ?>crm/assets/js/scripts.js" type="text/javascript"></script>

</body>

</html>

