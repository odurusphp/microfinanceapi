<?php require APPROOT . '/applications/crm/views/inc/header.php'; ?>

    <link href="<?php echo URLROOT ?>pages/css/header.css" rel="stylesheet">

    <style>
        .icon-wrapper-bg {
            background: #0F420F !important
        }

        .widget-chart-content .widget-numbers {
            color: #0F420F !important
        }

        .app-header {
            background-color: #E8E9EB !important;
        }

        .app-sidebar {
            background-color: #E8E9EB !important;
        }

        .app-sidebar__heading {
            color: #125929 !important;
        }

        .app-main__outer {
            background-color: #E8E9EB !important;
        }

        .card {
            background-color: #E8E9EB !important;
        }

        .card-header {
            background-color: #E8E9EB !important;
        }

        .form-control {
            background-color: #E8E9EB !important;
            border-color: #125929 !important;
        }

        .widget-content {
            background-color: #E8E9EB !important;
        }

        .list-group-item {
            background-color: #E8E9EB !important;
        }

        .pagination > li > a, .pagination > li > span
        {
            background-color: #E8E9EB !important;
            border-color: #125929 !important;
        }

        .icon-wrapper-bg {
            background: #0F420F !important
        }

        .widget-chart-content .widget-numbers {
            color: #0F420F !important
        }

        .widget-subheading {
            color: #000000 !important;
            font-weight: bold;
        }

        .widget-numbers span {
            color: #125929 !important;
        }


        .card-header-title {
            color: #125929 !important;
        }

        #example_filter label {
            color: #125929 !important;
        }

        #example_length label {
            color: #125929 !important;
        }

        .custom-select option {
            color: #125929 !important;
        }


        .pagination > li > a, .pagination > li > span
        {
            color: #125929 !important;
        }

        .dataTables_info {
            color: #125929 !important;
        }

        tr > th {
            color: #125929 !important;
        }

        tr > td {
            color: #125929 !important;
        }


        .widget-heading {
            color: #125929 !important;

        }

        .vertical-nav-menu ul > li > a {
            color: #125929 !important;
        }

        .vertical-nav-menu li a {
            color: #125929 !important;
        }

        .vertical-nav-menu ul:before {
            background: #125929 !important;
        }

        table, th, td {
            border: 1px solid #125929 !important;
        }

        .pagination li.active a {
            z-index: 1;
            color: #fff !important;
        }

        .dropdown-menu.dropdown-menu-lg {
              background: #E8E9EB !important;
        }

        .bg-success {
            background-color: #125929 !important;
        }

        .header-icon {
            color: #125929 !important;
        }

        .hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
            background-color: #125929 !important;
        }

        .app-wrapper-footer .app-footer .app-footer__inner {
            border-left: #125929 !important;
            border-top: #125929 solid 1px !important;
        }

        .app-wrapper-footer .app-footer {
            border-left: #125929 solid 1px !important;
            border-top: #125929 solid 1px !important;
        }

        footer {
            border-top: #125929 solid 1px !important;
        }


    </style>

    <body>

    <div class="se-pre-con"></div>

    <!-- TOP MENU-->
    <?php require APPROOT . '/applications/crm/views/inc/menu.php'; ?>


    <div class="app-main">

        <!-- SIDEBAR-->
        <?php require APPROOT . '/applications/crm/views/inc/sidebar.php'; ?>


        <!-- MAIN CONTENT-->
        <div class="app-main__outer">

            <div class="app-main__inner">


                <div class="tabs-animation">

                    <div class="row">

                        <div class="col-md-12">
                            <div class="mb-3 card">

                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-bold">
                                        <i class="header-icon lnr-laptop-phone"> </i>
                                        <?php echo _('ADMINISTRATOR DASHBOARD') ?>
                                    </div>

                                </div>

                                <div class="no-gutters row">
                                    <div class="col-sm-6 col-md-3 col-xl-3">
                                        <div class="card no-shadow rm-border bg-transparent widget-chart
                                                   text-left">
                                            <div class="icon-wrapper rounded-circle">
                                                <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                                <i class="lnr-laptop-phone text-white"></i></div>
                                            <div class="widget-chart-content">
                                                <div class="widget-subheading"><?php echo _('All Projects') ?></div>
                                                <div class="widget-numbers"><span><?php echo _('TOTAL PROJECTS : '). $data['projectcount']  ?></span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="divider m-0 d-md-none d-sm-block"></div>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xl-3">
                                        <div class="card no-shadow rm-border bg-transparent widget-chart
                                                   text-left">
                                            <div class="icon-wrapper rounded-circle">
                                                <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                                <i class="lnr-hourglass text-white"></i></div>
                                            <div class="widget-chart-content">
                                                <div class="widget-subheading"><?php echo _('Pending Projects') ?></div>
                                                <div class="widget-numbers"><span><?php echo _('TOTAL PENDING :  '). $data['pendingprojectcount']  ?></span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="divider m-0 d-md-none d-sm-block"></div>
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-xl-3">
                                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                            <div class="icon-wrapper rounded-circle">
                                                <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                                <i class="lnr-checkmark-circle text-white"></i></div>
                                            <div class="widget-chart-content">
                                                <div class="widget-subheading"><?php echo _('Completed Projects') ?></div>
                                                <div class="widget-numbers"><span> <?php echo _('TOTAL COMPLETED : ').  $data['completedprojectcount']  ?></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-3 col-xl-3">
                                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                            <div class="icon-wrapper rounded-circle">
                                                <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                                <i class="lnr-users text-white"></i></div>
                                            <div class="widget-chart-content">
                                                <div class="widget-subheading"><?php echo _('Number of Companies') ?></div>
                                                <div class="widget-numbers"><span><?php echo _('TOTAL COMPANIES : '). $data['companycount']  ?></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>


                            </div>

                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-card mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                                                class="header-icon lnr-users">
                                        </i><?php echo _('System Users') ?>
                                    </div>
                                    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                        <div class="btn-group dropdown">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" class="btn-icon btn-icon-only btn btn-link"><i
                                                        class="pe-7s-menu btn-icon-wrapper"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table style="width: 100%;" id="example"
                                               class="table table-hover table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th><?php echo _('Email') ?></th>
                                                <th><?php echo _('Name') ?></th>
                                                <th><?php echo _('Status') ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($data['userdata'] as $get): ?>
                                                <tr>
                                                    <td><?php echo $get->email ?></td>
                                                    <td><?php echo $get->firstname . ' ' . $get->lastname ?></td>
                                                    <td><?php echo getUserRole($get->roles_roleid) ?></td>
                                                </tr>
                                            <?php endforeach; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="card-hover-shadow-2x mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                                                class="header-icon lnr-database"> </i>
                                        <?php echo _('System Statistics') ?>
                                    </div>
                                    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                        <div class="btn-group dropdown">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                <i class="pe-7s-menu btn-icon-wrapper"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="scroll-area-lg" style="height: 300px">
                                    <div class="scrollbar-container">
                                        <div class="p-2">
                                            <ul class="todo-list-wrapper list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="todo-indicator bg-success"></div>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-2">
                                                                <div class="custom-checkbox custom-control"><input
                                                                            type="checkbox" id="exampleCustomCheckbox12"
                                                                            class="custom-control-input"><label
                                                                            class="custom-control-label"
                                                                            for="exampleCustomCheckbox12">&nbsp;</label>
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading"><?php echo _('Total Users (System Users)')  ?>
                                                                    <div class="badge badge-success ml-2"><?php echo $data['usercount']   ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="todo-indicator bg-success"></div>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-2">
                                                                <div class="custom-checkbox custom-control"><input
                                                                            type="checkbox" id="exampleCustomCheckbox12"
                                                                            class="custom-control-input"><label
                                                                            class="custom-control-label"
                                                                            for="exampleCustomCheckbox12">&nbsp;</label>
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading"><?php echo _('Total Projects (All Projects Created)') ?>
                                                                    <div class="badge badge-success ml-2"><?php echo $data['projectcount']   ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="todo-indicator bg-success"></div>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-2">
                                                                <div class="custom-checkbox custom-control"><input
                                                                            type="checkbox" id="exampleCustomCheckbox12"
                                                                            class="custom-control-input"><label
                                                                            class="custom-control-label"
                                                                            for="exampleCustomCheckbox12">&nbsp;</label>
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading"><?php echo _('Total Pending (Projects Pending)') ?>
                                                                    <div class="badge badge-success ml-2"><?php echo $data['pendingprojectcount']   ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="todo-indicator bg-success"></div>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-2">
                                                                <div class="custom-checkbox custom-control"><input
                                                                            type="checkbox" id="exampleCustomCheckbox12"
                                                                            class="custom-control-input"><label
                                                                            class="custom-control-label"
                                                                            for="exampleCustomCheckbox12">&nbsp;</label>
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading"><?php echo _('Total Completed (Number of projects completed)') ?>
                                                                    <div class="badge badge-success ml-2"><?php echo $data['completedprojectcount']   ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="todo-indicator bg-success"></div>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-2">
                                                                <div class="custom-checkbox custom-control"><input
                                                                            type="checkbox" id="exampleCustomCheckbox12"
                                                                            class="custom-control-input"><label
                                                                            class="custom-control-label"
                                                                            for="exampleCustomCheckbox12">&nbsp;</label>
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading"><?php echo _('Total Companies (Total  companies enrolled)') ?>
                                                                    <div class="badge badge-success ml-2"><?php echo $data['companycount']   ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>


                    <?php require APPROOT . '/applications/crm/views/inc/page_footer.php'; ?>
                </div>


            </div>

        </div>


    </div>

    </body>
    </html>

<?php require APPROOT . '/applications/crm/views/inc/footer.php'; ?>