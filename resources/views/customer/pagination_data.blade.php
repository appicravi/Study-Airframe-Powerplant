 
@if($customertList)
<?php $i = 1;?>
	@foreach($customertList as $key => $customert)
<tr class="tr-shadow" id="row_{{$customert->id}}" style="border-top: 1px solid #ebe8f8;">
        <td><?php echo $i;?></td>
        <td>{{$customert->name}}</td>
		<td>{{$customert->dial_code}}</td>
		<td>{{$customert->phone}}</td>
		<td>{{$customert->email}}</td>
		<td>{{$customert->created_at}}</td>
        <td>
            <div class="table-data-feature">
				<a class="item" data-toggle="tooltip" data-placement="top" href="{{url('')}}/super-admin/edit-customer/{{$customert->id}}"><i class="zmdi zmdi-edit"></i></a>
				<a class="item deleteme" data-id="{{$customert->id}}" data-type="customer" data-token="{{ csrf_token() }}" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
            </div>
        </td>
    </tr>
<?php $i++;?>

   
	@endforeach
	@endif


