<?php require APPROOT . '/applications/crm/views/test/inc/header.php'; ?>

<div class="an-page-content">

    <?php require APPROOT . '/applications/crm/views/test/inc/sidebar.php'; ?>

    <div class="an-content-body">

        <div class="an-breadcrumb wow fadeInUp">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Customers</a></li>
                <li class="active">Cafes</li>
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

        <div class="an-single-component with-shadow">
            <div class="an-component-header">
                <h6>Cafes</h6>
                <div class="component-header-right">
                    <form class="an-form" action="#">
                        <div class="an-search-field">
                            <input class="an-form-control" type="text" placeholder="Search...">
                            <button class="an-btn an-btn-icon" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                    <div class="an-default-select-wrapper">
                        <select name="sort">
                            <option value="0">Show All</option>
                            <option value="1">Unread</option>
                            <option value="2">Read</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="an-component-body padding20">
                <div class="an-user-lists messages">
                    <div class="list-title">
                        <h6 class="basis-20">Name of Cafe</h6>
                        <h6 class="basis-30">Address of Cafe</h6>
                        <h6 class="basis-20">Contact Person</h6>
                        <h6 class="basis-20">Email</h6>
                        <h6 class="basis-10">Action</h6>
                    </div>

                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y"
                         data-ps-id="0d1d0745-2e8d-558d-b3d3-77a7fa5f5591">
                        <div class="list-user-single">
                            <div class="list-name basis-20">Cafe's Name</div>
                            <div class="basis-30">Cafe's Address here</div>
                            <div class="list-name basis-20">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user3.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-20">
                                test@kuchentratsch.com
                            </div>

                            <div class="list-action basis-10">
                                <div class="btn-group">
                                    <button type="button" class="an-btn an-btn-icon small">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                </div>
                                <button class="an-btn an-btn-icon small muted danger"><i
                                        class="glyphicon glyphicon-trash"></i></button>
                            </div>
                        </div> <!-- end .USER-LIST-SINGLE -->

                        <div class="list-user-single">
                            <div class="list-name basis-20">Cafe's Name</div>
                            <div class="basis-30">Cafe's Address here</div>
                            <div class="list-name basis-20">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user3.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-20">
                                test@kuchentratsch.com
                            </div>

                            <div class="list-action basis-10">
                                <div class="btn-group">
                                    <button type="button" class="an-btn an-btn-icon small">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                </div>
                                <button class="an-btn an-btn-icon small muted danger"><i
                                        class="glyphicon glyphicon-trash"></i></button>
                            </div>
                        </div> <!-- end .USER-LIST-SINGLE -->

                        <div class="list-user-single">
                            <div class="list-name basis-20">Cafe's Name</div>
                            <div class="basis-30">Cafe's Address here</div>
                            <div class="list-name basis-20">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user3.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-20">
                                test@kuchentratsch.com
                            </div>

                            <div class="list-action basis-10">
                                <div class="btn-group">
                                    <button type="button" class="an-btn an-btn-icon small">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                </div>
                                <button class="an-btn an-btn-icon small muted danger"><i
                                        class="glyphicon glyphicon-trash"></i></button>
                            </div>
                        </div> <!-- end .USER-LIST-SINGLE -->

                        <div class="list-user-single">
                            <div class="list-name basis-20">Cafe's Name</div>
                            <div class="basis-30">Cafe's Address here</div>
                            <div class="list-name basis-20">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user3.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-20">
                                test@kuchentratsch.com
                            </div>

                            <div class="list-action basis-10">
                                <div class="btn-group">
                                    <button type="button" class="an-btn an-btn-icon small">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                </div>
                                <button class="an-btn an-btn-icon small muted danger"><i
                                        class="glyphicon glyphicon-trash"></i></button>
                            </div>
                        </div> <!-- end .USER-LIST-SINGLE -->

                        <div class="list-user-single">
                            <div class="list-name basis-20">Cafe's Name</div>
                            <div class="basis-30">Cafe's Address here</div>
                            <div class="list-name basis-20">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user3.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-20">
                                test@kuchentratsch.com
                            </div>

                            <div class="list-action basis-10">
                                <div class="btn-group">
                                    <button type="button" class="an-btn an-btn-icon small">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                </div>
                                <button class="an-btn an-btn-icon small muted danger"><i
                                        class="glyphicon glyphicon-trash"></i></button>
                            </div>
                        </div> <!-- end .USER-LIST-SINGLE -->

                        <div class="list-user-single">
                            <div class="list-name basis-20">Cafe's Name</div>
                            <div class="basis-30">Cafe's Address here</div>
                            <div class="list-name basis-20">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user3.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-20">
                                test@kuchentratsch.com
                            </div>

                            <div class="list-action basis-10">
                                <div class="btn-group">
                                    <button type="button" class="an-btn an-btn-icon small">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                </div>
                                <button class="an-btn an-btn-icon small muted danger"><i
                                        class="glyphicon glyphicon-trash"></i></button>
                            </div>
                        </div> <!-- end .USER-LIST-SINGLE -->


                        <div class="list-user-single">
                            <div class="list-name basis-20">Cafe's Name</div>
                            <div class="basis-30">Cafe's Address here</div>
                            <div class="list-name basis-20">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user3.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-20">
                                test@kuchentratsch.com
                            </div>

                            <div class="list-action basis-10">
                                <div class="btn-group">
                                    <button type="button" class="an-btn an-btn-icon small">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                </div>
                                <button class="an-btn an-btn-icon small muted danger"><i
                                        class="glyphicon glyphicon-trash"></i></button>
                            </div>
                        </div> <!-- end .USER-LIST-SINGLE -->

                        <div class="list-user-single">
                            <div class="list-name basis-20">Cafe's Name</div>
                            <div class="basis-30">Cafe's Address here</div>
                            <div class="list-name basis-20">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user3.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-20">
                                test@kuchentratsch.com
                            </div>

                            <div class="list-action basis-10">
                                <div class="btn-group">
                                    <button type="button" class="an-btn an-btn-icon small">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                </div>
                                <button class="an-btn an-btn-icon small muted danger"><i
                                        class="glyphicon glyphicon-trash"></i></button>
                            </div>
                        </div> <!-- end .USER-LIST-SINGLE -->

                        <div class="list-user-single">
                            <div class="list-name basis-20">Cafe's Name</div>
                            <div class="basis-30">Cafe's Address here</div>
                            <div class="list-name basis-20">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user3.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-20">
                                test@kuchentratsch.com
                            </div>

                            <div class="list-action basis-10">
                                <div class="btn-group">
                                    <button type="button" class="an-btn an-btn-icon small">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                </div>
                                <button class="an-btn an-btn-icon small muted danger"><i
                                        class="glyphicon glyphicon-trash"></i></button>
                            </div>
                        </div> <!-- end .USER-LIST-SINGLE -->

                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 305px; right: 0px;">
                            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 152px;"></div>
                        </div>
                    </div> <!-- end .AN-LISTS-BODY -->
                </div>

                <div class="an-pagination-container">
                    <p class="result-info">Showing 1-5 results of 1245</p>
                    <button class="an-btn an-btn-transparent rounded uppercase small-font">Show More</button>
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="ion-chevron-left"></i></span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">..</a></li>
                        <li><a href="#">45</a></li>
                        <li><a href="#">55</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="ion-chevron-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> <!-- end .AN-COMPONENT-BODY -->
        </div>

    </div> <!-- end .AN-PAGE-CONTENT-BODY -->
</div> <!-- end .AN-PAGE-CONTENT -->

<?php require APPROOT . '/applications/crm/views/test/inc/footer.php'; ?>

</body>

</html>
