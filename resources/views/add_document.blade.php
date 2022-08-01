<div class="col-xl-12 col-md-6 mb-4">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Add Document</h6>
                                </div>
                                <!-- Card Body -->
								
                                <div class="card-body">
                                    	
<form action="{{ route('file.store') }}" method="POST" id="file-upload" enctype="multipart/form-data">

@csrf
<div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
File uploaded successfully! 
</div>
            <div class="form-group row">
    <label for="facName" class="col-sm-2 col-form-label">Faculity Name</label>
    <div class="col-sm-10">
      <select name="faculity_name" class="form-control">
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
      <select id="document_type" name="document_type" class="form-control">
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
    <input type="file" class="form-control-file" id="file" name="file">
    <span class="text-danger" id="file-input-error"></span>
    </div>
  </div>

  <div class="form-group row">
    <label for="subName" class="col-sm-2 col-form-label">Subject Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="subject_name" name="subject_name">
    <span class="text-danger" id="sub-input-error"></span>
    </div>
  </div>

  
  
  <div class="form-group row">
    <label for="desc" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" id="btn-add" class="btn btn-primary">Save</button>
    </div>
  </div>
          </form>            
                                </div>
                            </div>
                        </div>
<link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
<script src="{{asset('js\uploadDocuments.js')}}"></script>

