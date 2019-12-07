<?php require APPROOT . '/applications/crm/views/test/inc/header.php'; ?>

<div class="an-page-content">

    <?php require APPROOT . '/applications/crm/views/test/inc/sidebar.php'; ?>

    <div class="an-content-body">

        <div class="an-breadcrumb wow fadeInUp">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">People</a></li>
                <li class="active">Baking Crew</li>
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
                <h6>Baking Crew</h6>
                <div class="component-header-right">
                    <form class="an-form" action="#">
                        <div class="an-search-field">
                            <input class="an-form-control" type="text" placeholder="Search...">
                            <button class="an-btn an-btn-icon" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                    <button class="an-btn an-btn-primary block-icon" data-toggle="modal" data-target="#addNew"
                            style="float:right;margin-left:5px">
                        <i class="glyphicon glyphicon-plus-sign"></i> Add New
                    </button>
                </div>
            </div>
            <div class="an-component-body padding20">
                <div class="an-user-lists messages">
                    <div class="list-title">
                        <h6 class="basis-30">Name</h6>
                        <h6 class="basis-30">Email</h6>
                        <h6 class="basis-20">Telephone</h6>
                        <h6 class="basis-20">Action</h6>
                    </div>

                    <div class="an-lists-body an-customScrollbar ps-container ps-theme-default ps-active-y"
                         data-ps-id="0d1d0745-2e8d-558d-b3d3-77a7fa5f5591">
                        <div class="list-user-single">
                            <div class="list-name basis-30">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user1.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-30">
                                test@kuchentratsch.com
                            </div>
                            <div class="basis-20">+392 232 23 23</div>
                            <div class="list-action basis-20">
                                <div class="btn-group">
                                    <button type="button" class="an-btn an-btn-icon small">
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                    </button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="an-btn an-btn-icon small">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                </div>
                                <div class="btn-group">
                                    <button class="an-btn an-btn-icon small muted danger"><i
                                                class="glyphicon glyphicon-trash"></i></button>
                                </div>
                            </div>
                        </div> <!-- end .USER-LIST-SINGLE -->
                        <div class="list-user-single">
                            <div class="list-name basis-30">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user2.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-30">
                                test@kuchentratsch.com
                            </div>
                            <div class="basis-20">+392 232 23 23</div>
                            <div class="list-action basis-20">
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
                            <div class="list-name basis-30">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user3.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-30">
                                test@kuchentratsch.com
                            </div>
                            <div class="basis-20">+392 232 23 23</div>
                            <div class="list-action basis-20">
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
                            <div class="list-name basis-30">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user4.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-30">
                                test@kuchentratsch.com
                            </div>
                            <div class="basis-20">+392 232 23 23</div>
                            <div class="list-action basis-20">
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
                            <div class="list-name basis-30">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user5.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-30">
                                test@kuchentratsch.com
                            </div>
                            <div class="basis-20">+392 232 23 23</div>
                            <div class="list-action basis-20">
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
                            <div class="list-name basis-30">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user6.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-30">
                                test@kuchentratsch.com
                            </div>
                            <div class="basis-20">+392 232 23 23</div>
                            <div class="list-action basis-20">
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
                            <div class="list-name basis-30">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user7.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-30">
                                test@kuchentratsch.com
                            </div>
                            <div class="basis-20">+392 232 23 23</div>
                            <div class="list-action basis-20">
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
                            <div class="list-name basis-30">
                                    <span class="image" style="background: url('<?php echo URLROOT  ?>crm/assets/img/users/user8.jpg') center center no-repeat;
                        background-size: cover;">
                      </span>
                                <a href="#" style="color:#333333">Sylvain Guiheneuc</a>
                            </div>
                            <div class="list-text basis-30">
                                test@kuchentratsch.com
                            </div>
                            <div class="basis-20">+392 232 23 23</div>
                            <div class="list-action basis-20">
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

        <!-- Modal -->
        <div class="modal fade primary" id="addNew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div id="error_loc"></div>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add New Member</h4>
                    </div>
                    <div class="modal-body">
                        <div class="an-component-body">
                            <div class="an-helper-block">
                                <div class="an-input-group">
                                    <div class="an-input-group-addon"><i class="ion-ios-person"></i></div>
                                    <input type="text" class="an-form-control"
                                           id="full_name"
                                           placeholder="Please enter name">
                                </div>
                                <div class="an-input-group">
                                    <div class="an-input-group-addon"><i class="ion-ios-email-outline"></i></div>
                                    <input type="email"
                                           id="email_address"
                                           class="an-form-control"  placeholder="Please enter email">
                                </div>
                                <div class="an-input-group">
                                    <div class="an-input-group-addon"><i class="ion-ios-telephone"></i></div>
                                    <input type="text"
                                           id="telephone"
                                           onkeypress="return isNumber(event)"
                                           class="an-form-control"  placeholder="Please enter telephone">
                                </div>

                                <input type="file" id="upload_image"/>


                            </div>
                        </div> <!-- end .AN-COMPONENT-BODY -->
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                id="submitbtn"
                                class="an-btn an-btn-success">Save</button>
                        <button type="button" class="an-btn an-btn-danger ml-5" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end .AN-PAGE-CONTENT-BODY -->
</div> <!-- end .AN-PAGE-CONTENT -->

<?php require APPROOT . '/applications/crm/views/test/inc/footer.php'; ?>

<script>
    $('#upload_image').uploadifive({
        'auto': false,
        'method': 'post',
        'buttonText': 'Upload Image',
        'fileType'     : 'image/*',
        'multi': true,
        'width': 180,
        'formData': {'randno': ''},
        'dnd': false,
        'uploadScript': '',
        'onUploadComplete': function (file, data) {
            console.log(data);
        },
        'onSelect': function(file) {
            // Update selected so we know they have selected a file
            $("#selected_file").val('yes');
        },
        'onCancel': function(file) {
            // Update selected so we know they have no file selected
            $("#selected_file").val('');
        }
    });


    $("#submitbtn").click(function () {
        var full_name = $("#full_name").val();
        var email_address = $("#email_address").val();
        var telephone = $("#telephone").val();

        var error = '';
        if (full_name == "") {
            error += 'Please enter full name \n';
            $("#full_name").focus();
        }
        if (email_address == "") {
            error += 'Please enter email address \n';
            $("#email_address").focus();
        }
        if (!email_address.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            error += 'Please enter valid email \n';
            $("#email_address").focus();
        }
        if (telephone == "") {
            error += 'Please enter telephone \n';
            $("#telephone").focus();
        }
        if (error == "") {
            alert('success');
        }
        else {
            $('#error_loc').notify(error);
        }
        return false;
    })
</script>

</body>

</html>

