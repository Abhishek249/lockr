@extends('app')

@section('content')
    
    <div class="container">
    <div class="row">
  		<div class="col-md-3">
      		<h3><i class="glyphicon glyphicon-briefcase"></i> Toolbox</h3>
            <hr>
            
            <ul class="nav nav-stacked">
              <li><a href="javascript:;"><i class="glyphicon glyphicon-cloud-upload"></i>Upload</a></li>
              <li><a href="javascript:;"><i class="glyphicon glyphicon-cloud-download"></i>Download</a></li>
              <li><a href="javascript:;"><i class="glyphicon glyphicon-link"></i>Generate Link</a></li>
              <li><a href="javascript:;"><i class="glyphicon glyphicon-ok-sign"></i>e-Sign</a></li>
            </ul>
            
            <hr>
        
      	</div><!--span 3 ends here -->
      
      	<div class="col-md-9">
      		 <h3><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h3>  
      	</div>
  
  	</div>
</div>
@endsection
