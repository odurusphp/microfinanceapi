<?php  require ("includes/customernav.php"); ?>
<?php  require ("includes/header.php"); ?>
<style>
h3{
    font-size:12px !important;
}
</style>
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
     <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm">
		    <h4 class="page-title">Application For Cold Storage Facility Licensing</h4>
            <?php if(isset($data['message'])): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
				    <button type="button" class="close" data-dismiss="alert">×</button>
				    <div class="alert-icon">
					 <i class="icon-check"></i>
				    </div>
				    <div class="alert-message">
				      <span><strong>Success!</strong> Applicantion saved Successfully .</span>
				    </div>
            </div>
        <?php endif;?>
	   </div>
     </div>
    <!-- End Breadcrumb-->
  
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">
              Application Form
            </div>
            <div class="card-body">
             <form id="wizard-validation-form" action="" method="post">
                    <div>
                        <h3>Particulars of Applicant </h3>
                        <section>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="companyname">Name of Applicant *</label>
                                <input class="required form-control" id="companyname" value="<?=$data['business']->companyname; ?>" name="companyname" type="text">
                            </div>
                            <div class="form-group">
                                <label for="telephone"> Telephone number  *</label>
                                <input id="telephone" name="password" type="text" value="<?=$data['business']->telephone; ?>" class="required form-control">
                            </div>

                            <div class="form-group">
                                <label for="address">Postal Address  *</label>
                                <input id="address" name="address" type="text" value="<?=$data['business']->mailingaddress; ?>" class="required form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="fax">Fax *</label>
                                <input class="required form-control" id="fax" name="fax" value="<?=$data['business']->fax; ?>" type="text">
                            </div>
                            <div class="form-group">
                                <label for="email"> E-mail *</label>
                                <input id="email" name="email" type="email" value="<?=$data['business']->email; ?>" class="required form-control">
                            </div>

                           
                        </div>
                        <div class="form-group">
                                <label class="col-lg-12 control-label">(*) Mandatory</label>
                            </div>
                        </div>
                        </section>
                        <h3>Facility Information</h3>
                        <section>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="applicantname">Name of Facility *</label>
                                <input class="required form-control" id="applicantname" name="facilityname"  value="<?=$data['coldstorage']->facilityname; ?>" type="text">
                            </div>
                            <div class="form-group">
                                <label for="telephone">  Exact Location of Facility   *</label>
                                <input id="telephone" name="facilitylocation" type="text" value="<?=$data['coldstorage']->facilitylocation; ?>" class="required form-control">
                            </div>

                            <div class="form-group">
                                <label for="address">Maximum storage capacity in Tonnes  *</label>
                                <input id="address" name="storage" value="<?=$data['coldstorage']->storagecapacity; ?>" type="text" class="required form-control">
                            </div>
                            <div class="form-group">
                                <label for="meat">Type of Meat / Fish</label>
                                <input id="meat" name="meat" value="" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="fax"> Type of Freezer Facility  *</label>
                                <input class="required form-control" id="fax" name="freezerfacility" value="<?=$data['coldstorage']->freezerfacility; ?>" type="text">
                            </div>
                            <div class="form-group">
                                <label for="horsepower">  Indicate Availability and Horsepower of Generator  *</label>
                                <input id="horsepower" name="horsepower" type="text" value="<?=$data['coldstorage']->horsepower; ?>" class="required form-control">
                            </div>
                            <div class="form-group">
                                <label for="otherfacilities">  Indicate other facilities used by company but not belonging to company  *</label>
                                <input id="otherfacilities" name="otherfacilities" value="<?=$data['coldstorage']->otherfacilities; ?>" type="text" class="required form-control">
                            </div>
                            <div class="form-group">
                                <label for="country">Country of Origin</label>
                                <input id="country" name="country" value="" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-lg-12 control-label">(*) Mandatory</label>
                            </div>
                        </div>
                        </section>
                        <h3>Declaration</h3>
                        <section>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input id="acceptTerms-2" name="acceptTerms2" type="checkbox" class="required">
                                    <label for="acceptTerms-2">I hereby confirm that the information provided above is true to the best of my knowledge.</label>
                                </div>

                                <input type="hidden" name="uid" value="<?= $data['business']->uid?>">
                                <input type="hidden" name="coldid" value="<?= $data['coldstorage']->coldid?>">
                            </div>
                        </section>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
    <?php  require ("includes/footer.php"); ?>
