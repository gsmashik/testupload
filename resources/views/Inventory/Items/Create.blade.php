@extends('Inventory.Items.layout')
@section('content')
@include('partials.sessionmessage')

<form action=" {{ route('items.store') }}" method="POST"  >
@csrf  

	<div class="card bg-light">
		<div class="card-body">
			<table class="table table-bordered " id="myTable">
				<tbody>
				
					<td style="padding: 5px;margin:0;" > Item Code </td>
           			 <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"  name="ItemCode" id=""></td>
            
						<td style="padding: 5px;margin:0;" > Item Description </td>
           			 <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"  name="ItemName" id=""></td>
            
				</tbody>
			</table>
			<div class="text-center">
				<button type="button" class="btn btn-primary disabled">Save</button>
			</div>
		</div>
	</div>
</form>
@endsection
