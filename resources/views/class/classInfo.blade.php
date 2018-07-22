<style type="text/css">
	.academic-details{
		white-space: normal;
		width: 400px;
	}
	.table-class-info{
		width:100%;
	
	}
	table tbody > tr >td{
		vertical-align: middle;
	}
</style>
<table class="table table-hover table-striped table-condensed table-borderd" id="table-class-info">
	<thead>
		<tr>
			<th>Program</th>
			<th>Level</th>
			<th>Shift</th>
			<th>Time</th>
			<th>Academic Detail</th>
			<th>Action</th>
		
		</tr>
	</thead>
	<tbody>
		@foreach($classes as $key=>$c)
	  <tr>
		<td>{{$c->program}}</td>
		<td>{{$c->level}}</td>
	    <td>{{$c->shift}}</td>
		<td>{{$c->time}}</td>
		<td class="academic-details">
			<a href="#" data-id="{{$c->class_id}}" id="class-edit">
				Program:{{$c->program}} / Level:{{$c->level}} / Shift:{{$c->shift}} / Time:{{$c->time}} / Batch:{{$c->batch}} / Group:{{$c->groups}} / StartDate:{{ date("d-M-y",strtotime($c->start_date))}} / EndDate:{{date("d-M-y",strtotime($c->end_date))}}
			</a>
		</td>
		<td style="vertical-align: middle;width: 50px;">
			<button value="{{$c->class_id}}" class=" btn btn-danger btn-sm " id="del-class">Del</button>
		</td>
	  </tr>

		@endforeach
	</tbody>
</table>