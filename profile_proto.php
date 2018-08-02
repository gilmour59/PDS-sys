<?php require_once 'includes/header.php'; ?>

        <h3>
            <i class='glyphicon glyphicon-circle-arrow-right'></i>
            Employee Profile	
        </h3>

        <!--card-->
        <div class="card">
            <div class="card-header">
                <i class="glyphicon glyphicon-info-sign"></i>	
                Personal Data Sheet
            </div> 
            
            <!--card-body-->	
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <form action="php_action/editEmployeeImage.php" method="POST" id="updateEmployeeImageForm" enctype="multipart/form-data">
                            <div id="edit-employeePhoto-messages"></div>                            
                            <div class="text-center">
                                <!-- the avatar markup -->
                                <div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>                                           
                                <div class="kv-avatar center-block">
                                    <div class="file-loading">
                                        <!-- .div-hide to hide. input file to show up when loading-->
                                        <input class="div-hide" id="editEmployeeImage" name="editEmployeeImage" type="file"/>
                                    </div>
                                </div>
                            </div> 
                            <div class="editEmployeePhotoFooter"></div>
                        </form>
                    </div>
                    <div class="col-sm-9">
                        <table class="table table-bordered table-hover">
                            <tr><td style="width: 30%">Employee Name: </td><td id="empName"></td></tr>
                            <tr><td>Employee ID: </td><td id="empId"></td></tr>
                            <tr><td>Contact Number: </td><td id="empContactNum"></td></tr>
                            <tr><td>Email: </td><td id="empEmail"></td></tr>
                            <tr><td>Department: </td><td id="empDept"></td></tr>
                        </table>
                    </div>
                </div><!--row(Personal Info)-->                
            </div> <!--/card-body-->
            
            <div class="card-header text-center"><i class="glyphicon glyphicon-info-sign"></i> Details</div> 
            
            <!-- Vertical Tabs --> 
            <div class="d-flex flex-row mt-2">
                <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
                    <li class="nav-item">
                        <a href="#personalInformation" class="nav-link active" data-toggle="tab" role="tab" aria-controls="personalInformation">Personal Information</a>
                    </li>
                    <li class="nav-item">
                        <a href="#familyBackground" class="nav-link" data-toggle="tab" role="tab" aria-controls="familyBackground">Family Background</a>
                    </li>
                    <li class="nav-item">
                        <a href="#educationalBackground" class="nav-link" data-toggle="tab" role="tab" aria-controls="educationalBackground">Educational Background</a>
                    </li>
                    <li class="nav-item">
                        <a href="#civilService" class="nav-link" data-toggle="tab" role="tab" aria-controls="civilService">Civil Service Eligibility</a>
                    </li>
                    <li class="nav-item">
                        <a href="#workExperience" class="nav-link" data-toggle="tab" role="tab" aria-controls="workExperience">Work Experience</a>
                    </li>
                    <li class="nav-item">
                        <a href="#voluntaryWork" class="nav-link" data-toggle="tab" role="tab" aria-controls="voluntaryWork">Voluntary Work</a>
                    </li>
                    <li class="nav-item">
                        <a href="#learningDevelopment" class="nav-link" data-toggle="tab" role="tab" aria-controls="learningDevelopment">Learning and Development Interventions</a>
                    </li>
                    <li class="nav-item">
                        <a href="#otherInformation" class="nav-link" data-toggle="tab" role="tab" aria-controls="otherInformation">Other Information</a>
                    </li>
                </ul>
                
                <div class="tab-content w-100 p-3">
                    
                    <!-- Personal Information TAB -->
                    <div class="tab-pane fade show active" id="personalInformation" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3>Personal Information</h3>
                            </div>
                            <div class="col-sm-3 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#personalInfoModal">
                                    Edit
                                </button>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:35%;">Date of Birth: </td><td style="width:65%;"></td></tr>
                                    <tr><td>Place of Birth: </td><td></td></tr>
                                    <tr><td>Sex: </td><td></td></tr>
                                    <tr><td>Civil Status: </td><td></td></tr>
                                    <tr><td>Height: </td><td></td></tr>
                                    <tr><td>Weight: </td><td></td></tr>
                                    <tr><td>Blood Type: </td><td></td></tr>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:41%;">GSIS ID:</td><td style="width:59%;">Gilmour Almalbis asddddddddsdasdasdasdasdasdasdasdasddddddddddddd asdasd asd asdasdasdasdasd</td></tr>
                                    <tr><td>PAGIBIG ID:</td><td></td></tr>
                                    <tr><td>PHILHEALTH:</td><td></td></tr>
                                    <tr><td>SSS:</td><td></td></tr>
                                    <tr><td>TIN:</td><td></td></tr>
                                    <tr><td>Agency Employee No:</td><td></td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Family Background TAB -->
                    <div class="tab-pane fade" id="familyBackground" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3>Family Background</h3>
                            </div>
                            <div class="col-sm-3 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#familyBackgroundModal">
                                    Edit
                                </button>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:35%;">Date of Birth: </td><td style="width:65%;"></td></tr>
                                    <tr><td>Place of Birth: </td><td></td></tr>
                                    <tr><td>Sex: </td><td></td></tr>
                                    <tr><td>Civil Status: </td><td></td></tr>
                                    <tr><td>Height: </td><td></td></tr>
                                    <tr><td>Weight: </td><td></td></tr>
                                    <tr><td>Blood Type: </td><td></td></tr>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:41%;">GSIS ID:</td><td style="width:59%;">Gilmour Almalbis asddddddddsdasdasdasdasdasdasdasdasddddddddddddd asdasd asd asdasdasdasdasd</td></tr>
                                    <tr><td>PAGIBIG ID:</td><td></td></tr>
                                    <tr><td>PHILHEALTH:</td><td></td></tr>
                                    <tr><td>SSS:</td><td></td></tr>
                                    <tr><td>TIN:</td><td></td></tr>
                                    <tr><td>Agency Employee No:</td><td></td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Educational Background TAB -->
                    <div class="tab-pane fade" id="educationalBackground" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3>Educational Background</h3>
                            </div>
                            <div class="col-sm-3 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#educationalBackground">
                                    Edit
                                </button>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:35%;">Date of Birth: </td><td style="width:65%;"></td></tr>
                                    <tr><td>Place of Birth: </td><td></td></tr>
                                    <tr><td>Sex: </td><td></td></tr>
                                    <tr><td>Civil Status: </td><td></td></tr>
                                    <tr><td>Height: </td><td></td></tr>
                                    <tr><td>Weight: </td><td></td></tr>
                                    <tr><td>Blood Type: </td><td></td></tr>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:41%;">GSIS ID:</td><td style="width:59%;">Gilmour Almalbis asddddddddsdasdasdasdasdasdasdasdasddddddddddddd asdasd asd asdasdasdasdasd</td></tr>
                                    <tr><td>PAGIBIG ID:</td><td></td></tr>
                                    <tr><td>PHILHEALTH:</td><td></td></tr>
                                    <tr><td>SSS:</td><td></td></tr>
                                    <tr><td>TIN:</td><td></td></tr>
                                    <tr><td>Agency Employee No:</td><td></td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Civil Service TAB -->
                    <div class="tab-pane fade" id="civilService" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3>Civil Service</h3>
                            </div>
                            <div class="col-sm-3 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#civilServiceModal">
                                    Edit
                                </button>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:35%;">Date of Birth: </td><td style="width:65%;"></td></tr>
                                    <tr><td>Place of Birth: </td><td></td></tr>
                                    <tr><td>Sex: </td><td></td></tr>
                                    <tr><td>Civil Status: </td><td></td></tr>
                                    <tr><td>Height: </td><td></td></tr>
                                    <tr><td>Weight: </td><td></td></tr>
                                    <tr><td>Blood Type: </td><td></td></tr>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:41%;">GSIS ID:</td><td style="width:59%;">Gilmour Almalbis asddddddddsdasdasdasdasdasdasdasdasddddddddddddd asdasd asd asdasdasdasdasd</td></tr>
                                    <tr><td>PAGIBIG ID:</td><td></td></tr>
                                    <tr><td>PHILHEALTH:</td><td></td></tr>
                                    <tr><td>SSS:</td><td></td></tr>
                                    <tr><td>TIN:</td><td></td></tr>
                                    <tr><td>Agency Employee No:</td><td></td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Work Experience TAB -->
                    <div class="tab-pane fade" id="workExperience" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3>Work Experience</h3>
                            </div>
                            <div class="col-sm-3 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#workExperienceModal">
                                    Edit
                                </button>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:35%;">Date of Birth: </td><td style="width:65%;"></td></tr>
                                    <tr><td>Place of Birth: </td><td></td></tr>
                                    <tr><td>Sex: </td><td></td></tr>
                                    <tr><td>Civil Status: </td><td></td></tr>
                                    <tr><td>Height: </td><td></td></tr>
                                    <tr><td>Weight: </td><td></td></tr>
                                    <tr><td>Blood Type: </td><td></td></tr>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:41%;">GSIS ID:</td><td style="width:59%;">Gilmour Almalbis asddddddddsdasdasdasdasdasdasdasdasddddddddddddd asdasd asd asdasdasdasdasd</td></tr>
                                    <tr><td>PAGIBIG ID:</td><td></td></tr>
                                    <tr><td>PHILHEALTH:</td><td></td></tr>
                                    <tr><td>SSS:</td><td></td></tr>
                                    <tr><td>TIN:</td><td></td></tr>
                                    <tr><td>Agency Employee No:</td><td></td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Voluntary Work TAB -->
                    <div class="tab-pane fade" id="voluntaryWork" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3>Voluntary Work</h3>
                            </div>
                            <div class="col-sm-3 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#voluntaryWorkModal">
                                    Edit
                                </button>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:35%;">Date of Birth: </td><td style="width:65%;"></td></tr>
                                    <tr><td>Place of Birth: </td><td></td></tr>
                                    <tr><td>Sex: </td><td></td></tr>
                                    <tr><td>Civil Status: </td><td></td></tr>
                                    <tr><td>Height: </td><td></td></tr>
                                    <tr><td>Weight: </td><td></td></tr>
                                    <tr><td>Blood Type: </td><td></td></tr>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:41%;">GSIS ID:</td><td style="width:59%;">Gilmour Almalbis asddddddddsdasdasdasdasdasdasdasdasddddddddddddd asdasd asd asdasdasdasdasd</td></tr>
                                    <tr><td>PAGIBIG ID:</td><td></td></tr>
                                    <tr><td>PHILHEALTH:</td><td></td></tr>
                                    <tr><td>SSS:</td><td></td></tr>
                                    <tr><td>TIN:</td><td></td></tr>
                                    <tr><td>Agency Employee No:</td><td></td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Learning Development TAB -->
                    <div class="tab-pane fade" id="learningDevelopment" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3>Learning Development</h3>
                            </div>
                            <div class="col-sm-3 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#learningDevelopmentModal">
                                    Edit
                                </button>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:35%;">Date of Birth: </td><td style="width:65%;"></td></tr>
                                    <tr><td>Place of Birth: </td><td></td></tr>
                                    <tr><td>Sex: </td><td></td></tr>
                                    <tr><td>Civil Status: </td><td></td></tr>
                                    <tr><td>Height: </td><td></td></tr>
                                    <tr><td>Weight: </td><td></td></tr>
                                    <tr><td>Blood Type: </td><td></td></tr>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:41%;">GSIS ID:</td><td style="width:59%;">Gilmour Almalbis asddddddddsdasdasdasdasdasdasdasdasddddddddddddd asdasd asd asdasdasdasdasd</td></tr>
                                    <tr><td>PAGIBIG ID:</td><td></td></tr>
                                    <tr><td>PHILHEALTH:</td><td></td></tr>
                                    <tr><td>SSS:</td><td></td></tr>
                                    <tr><td>TIN:</td><td></td></tr>
                                    <tr><td>Agency Employee No:</td><td></td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Other Info TAB -->
                    <div class="tab-pane fade" id="otherInformation" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3>Other Information</h3>
                            </div>
                            <div class="col-sm-3 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#otherInformationModal">
                                    Edit
                                </button>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:35%;">Date of Birth: </td><td style="width:65%;"></td></tr>
                                    <tr><td>Place of Birth: </td><td></td></tr>
                                    <tr><td>Sex: </td><td></td></tr>
                                    <tr><td>Civil Status: </td><td></td></tr>
                                    <tr><td>Height: </td><td></td></tr>
                                    <tr><td>Weight: </td><td></td></tr>
                                    <tr><td>Blood Type: </td><td></td></tr>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                    <tr><td style="width:41%;">GSIS ID:</td><td style="width:59%;">Gilmour Almalbis asddddddddsdasdasdasdasdasdasdasdasddddddddddddd asdasd asd asdasdasdasdasd</td></tr>
                                    <tr><td>PAGIBIG ID:</td><td></td></tr>
                                    <tr><td>PHILHEALTH:</td><td></td></tr>
                                    <tr><td>SSS:</td><td></td></tr>
                                    <tr><td>TIN:</td><td></td></tr>
                                    <tr><td>Agency Employee No:</td><td></td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- /Vertical Tabs -->
        </div> <!--/card-->
        
        <!--Personal Info modal-->
        <div class="modal fade" id="personalInfoModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="glyphicon glyphicon-plus-sign"></i> Personal Information</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="modal-body" style="max-height:450px; overflow:auto;">  
                        <div class="div-result">
                            
                        </div><!--/div-result-->
                    </div> <!-- /modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="createProductBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                    </div> <!-- /modal-footer -->	 
                                        
                </div> <!-- /modal-content -->    
            </div> <!-- /modal-dailog -->
        </div><!-- /modal -->
        
        <!--Family Background modal-->
        <div class="modal fade" id="familyBackgroundModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="glyphicon glyphicon-plus-sign"></i> Family Background</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="modal-body" style="max-height:450px; overflow:auto;">  
                        <div class="div-result">

                            
                        </div><!--/div-result-->
                    </div> <!-- /modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="createProductBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                    </div> <!-- /modal-footer -->	 
                                        
                </div> <!-- /modal-content -->    
            </div> <!-- /modal-dailog -->
        </div><!-- /modal -->
        
        <!--Educational Background modal-->
        <div class="modal fade" id="educationalBackgroundModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="glyphicon glyphicon-plus-sign"></i> Educational Background</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="modal-body" style="max-height:450px; overflow:auto;">  
                        <div class="div-result">

                            
                        </div><!--/div-result-->
                    </div> <!-- /modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="createProductBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                    </div> <!-- /modal-footer -->	 
                                        
                </div> <!-- /modal-content -->    
            </div> <!-- /modal-dailog -->
        </div><!-- /modal -->
        
        <!--Civil Service modal-->
        <div class="modal fade" id="civilServiceModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="glyphicon glyphicon-plus-sign"></i> Civil Service</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="modal-body" style="max-height:450px; overflow:auto;">  
                        <div class="div-result">

                            
                        </div><!--/div-result-->
                    </div> <!-- /modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="createProductBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                    </div> <!-- /modal-footer -->	 
                                        
                </div> <!-- /modal-content -->    
            </div> <!-- /modal-dailog -->
        </div><!-- /modal -->
        
        <!--Work Experience modal-->
        <div class="modal fade" id="workExperienceModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="glyphicon glyphicon-plus-sign"></i> Work Experience</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="modal-body" style="max-height:450px; overflow:auto;">  
                        <div class="div-result">

                            
                        </div><!--/div-result-->
                    </div> <!-- /modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="createProductBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                    </div> <!-- /modal-footer -->	 
                                        
                </div> <!-- /modal-content -->    
            </div> <!-- /modal-dailog -->
        </div><!-- /modal -->
        
        <!--Voluntary Work modal-->
        <div class="modal fade" id="voluntaryWorkModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="glyphicon glyphicon-plus-sign"></i> Voluntary Work</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="modal-body" style="max-height:450px; overflow:auto;">  
                        <div class="div-result">

                            
                        </div><!--/div-result-->
                    </div> <!-- /modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="createProductBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                    </div> <!-- /modal-footer -->	 
                                        
                </div> <!-- /modal-content -->    
            </div> <!-- /modal-dailog -->
        </div><!-- /modal -->
        
        <!--Learning Development modal-->
        <div class="modal fade" id="learningDevelopmentModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="glyphicon glyphicon-plus-sign"></i> Learning Development</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="modal-body" style="max-height:450px; overflow:auto;">  
                        <div class="div-result">

                            
                        </div><!--/div-result-->
                    </div> <!-- /modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="createProductBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                    </div> <!-- /modal-footer -->	 
                                        
                </div> <!-- /modal-content -->    
            </div> <!-- /modal-dailog -->
        </div><!-- /modal -->
        
        <!--Other Info modal-->
        <div class="modal fade" id="otherInformationModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="glyphicon glyphicon-plus-sign"></i> Other Information</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="modal-body" style="max-height:450px; overflow:auto;">  
                        <div class="div-result">

                            
                        </div><!--/div-result-->
                    </div> <!-- /modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="createProductBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                    </div> <!-- /modal-footer -->	 
                                        
                </div> <!-- /modal-content -->    
            </div> <!-- /modal-dailog -->
        </div><!-- /modal -->

<?php require_once 'php_action/getUserId.php'; ?>

<script src="custom/js/image.js"></script>
<script src="custom/js/personalinformation.js"></script>

<?php require_once 'includes/footer.php'; ?>

