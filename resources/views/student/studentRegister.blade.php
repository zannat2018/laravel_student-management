@extends('layouts.master')
@section('content')
<style type="text/css">
.student-photo{
	height:160px;
	padding-left:1px;
	padding-right:1px;
	border:1px solid #ccc;
	background: #eee;
	width: 140px;
	margin: 0 auto;

}
.phpto > input[type='file']{
display: none;
}
.photo{
	width: 30px;
	height: 30px;
	border-radius: 100%;
}
.student-id{
	background-repeat: repeat-x;
	border-color: #ccc;
	padding: 5px;
	text-align: center;
	background: #eee;
	border-bottom: 1px solid #ccc;
}
.btn-browse{
	border-color: #ccc;
	padding: 5px;
	text-align: center;
	background: #eee;
	border:none;
	border-top: 1px solid #ccc;
}
fieldset{
	margin-top: 5px;
}
fieldset legend{
	display: block;
	width: 100%;
	padding: 0;
	font-size: 15px;
	line-height: inherit;
	color: #797979;
	border:0;
	border-bottom: 1px solid #e5e5e5;
}

</style>


<div class="row">
	<div class="col-lg-12">
		
	
	     <h3 class="page-header"><i class="fa fa-file-text-0"></i>Student Registration</h3>
	     <ol class="breadcrumb">
	     	<li><<i class="fa fa-home"></i><a href="index.html"></a>Home</li>
	     	<li><i class="icon_document_alt"></i>Student</li>
	     	<li><<i class="fa fa-file-text-0"></i>Create Student</li>
	     </ol>
		
	</div>
	
</div>
<div class="panal-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<a data-toggle="collapse" data-parent="#accordion" href="#callapse1" style="text-decoration: none; ">Choose Academic</a>
			<a href="#" class="pull-right"><i class="fa fa-plus"></i>
			
		</div>
		<div id="collapse1" class="panel-collapse collapse in">
			<div class="panel-body academic-detail"><p></p>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<b><i fa fa-apple></i>Student Information</b>
		
	</div>
	<div class="panel-body" style="padding-bottom: 4px;">
		<form action="#" method="POST" id="frm-create-student">
			<input type="hidden" name="class_id" id="class_id">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-9">
					{{---------First name--------}}
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="lastname">First Name</label>
						<input type="text" name="last_name" id="last_name" class="form-control" required>
						
					</div>
					
				</div>
				{{--------English Name-------}}
				<div class="col-md-4">
					<div class="form-group">
						<label for="firstname">Englisg Name</label>
						<input type="text" name="firstname" id="firstname" class="form-control" required>
						
					</div>
					
				</div>
				
			</div>
		
	</div>
	
</div>


