            <!-- Manage Document -->
            <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Manage Document</h6>
                                </div>
                                <!-- Card Body -->
								
                                <div class="card-body">
								<div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
									File Updated successfully! 
								</div>
								<div class="alert alert-danger" role="alert" id="successDMsg" style="display: none" >
									File Delete successfully! 
								</div>
									 <table id="manageDocument" class="table table-striped table-bordered" style="width:100%">
									 <thead>
												<tr>
													<th>ID</th>
													<th>File Name</th>
													<th>Faculity Name</th>
													<th>Document Type</th>
													<th>Subject Name</th>
													<th>Description</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody id="getRecords">
                                               
											</tbody>
										</table>
                                </div>
                            </div>

                        <!-- Modal Delete Start-->
			<div class="modal fade" data-backdrop="true" id="delete-model" tabindex="-1" role="dialog" aria- 
            labelledby="deleteM" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="deleteM">Warning!</h5>
								<button type="button" class="close" data-bs-dismiss="modal" aria- 
                                label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
						</div>
						<div class="modal-body">
							Are you sure you want to delete this?
							<input type="hidden" id="idd" name="idd">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-danger" id="btn-delete" data-dismiss="modal">Yes, Delete</button>
								
						</div>
					</div>
				</div>
			</div>
	 <!-- Modal Delete End-->

	  <!-- Start Modal Edit-->
	  <div class="modal fade" data-backdrop="true" id="edit-model" tabindex="-1" aria-labelledby="editM" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                   <div class="modal-header">
							<h5 class="modal-title" id="editM">Edit File</h5>
								<button type="button" class="close" data-bs-dismiss="modal" aria- 
                                label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
						</div>
                                    <div class="modal-body">
							 <form action="" method="POST" id="updateEditForm" enctype="multipart/form-data">
													@csrf
													<input type="hidden" id="id" name="id">
																		<div class="form-group row">
																<label for="facName" class="col-sm-2 col-form-label">Faculity Name</label>
																<div class="col-sm-10">
																<select id="faculity_name" name="faculity_name" class="form-control" vlaue="">
																<option value="FKEKK">FKEKK</option>
																	<option value="FKE">FKE</option>
																	<option value="FKM">FKM</option>
																	<option value="FKP">FKP</option>
																	<option value="FTMK">FTMK</option>
																	<option value="FPTT">FPTT</option>
																	<option value="PPB">PPB</option>
																	<option value="IPTK">IPTK</option>
																</select>
																<span class="text-danger" id="fac-input-error"></span>
																</div>
															</div>
															
																<div class="form-group row">
																<label for="docType" class="col-sm-2 col-form-label">Document Type</label>
																<div class="col-sm-10">
																<select id="document_type" name="document_type" class="form-control" vlaue="">
																<option value="Past years exams">Past years exams</option>
																	<option value="Past years quizes">Past years quizes</option>
																	<option value="Past years assignments">Past years assignments</option>
																	<option value="Past years mini projects">Past years mini projects</option>
																	<option value="Past years final projects">Past years final projects</option>
																</select>
																<span class="text-danger" id="doc-input-error"></span>
																</div>
															</div>
															
															<div class="form-group row">
																<label for="uploadFile" class="col-sm-2 col-form-label">Upload File</label>
																<div class="col-sm-10">
																<input type="file" class="form-control-file" id="file" name="file" vlaue="">
																<span class="text-danger" id="file-input-error"></span>
																</div>
															</div>

															<div class="form-group row">
																<label for="subName" class="col-sm-2 col-form-label">Subject Name</label>
																<div class="col-sm-10">
																<input type="text" class="form-control" id="subject_name" name="subject_name" vlaue="">
																<span class="text-danger" id="sub-input-error"></span>
																</div>
															</div>

															
															
															<div class="form-group row">
																<label for="desc" class="col-sm-2 col-form-label">Description</label>
																<div class="col-sm-10">
																<textarea class="form-control" id="description" name="description" rows="3" vlaue=""></textarea>
																</div>
															</div>
															
															<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
															<button type="submit" id="btn-add" class="btn btn-primary" data-dismiss="modal">Save</button>
													</div>
													</form>
					</div>
				</div>
			</div>
							<!-- End Modal Edit -->
                        

<link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css\tables.css')}}">
<link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('vendor\datatables\jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor\bootstrap\js\bootstrap5-1-3.bundle.min.js')}}"></script>
<script src="{{asset('js\Models.js')}}"></script>
<script src="{{asset('js\modalBackdrop.js')}}"></script>
