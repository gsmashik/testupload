@extends('mould.layout')
@section('content')
@include('partials.sessionmessage')



<table class="table table-striped table-bordered table-responsive hover img-list"" style="width:100%" id='table1' >
    <thead>
      <tr>
        <th> #         	@auth
        <button class="" > <a class="" href="{{ route('mould.create') }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
		@else
			
		 @endauth</th>
        <th>Mould Ref No</th>
        <th>Lettering</th>
        <th>Item</th>
        <th>Size</th>
        <th>Color</th>
        <th>Buyers Name</th>
        <th>Picture</th>
		@auth
		 <th>Action</th>
		 @else
			 <th></th>
		 @endauth
      </tr>
    </thead>
    <tbody>
    @foreach($metalbutton as $key => $data  )
      <tr>
        <td>{{$key+1}}     
		
</td>
        <td>{{$data->title}}</td>
        <td>{{$data->letering}}</td>
        <td>{{$data->description}}</td>   
        <td>{{$data->dimention}}</td>
        <td>{{$data->color}}</td>
        <td>{{$data->buyers}}</td>
       
        <td>
        <a href="{{ asset('storage/'.$data->image)}}" data-lightbox="image-1" data-title="{{$data->title}}"><img style="height: 63px;width: 150px;padding:0px;margin:0px;"  src="{{ asset('storage/'.$data->image)}}" class=" img-responsive"></a>
        


        </td>
		@auth
		<td>
    <button class="" type="submit"> <a class="" href="{{ route('mould.edit',$data->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
    </button>
		   <form action="{{ route('mould.destroy', $data->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="" type="submit"><i class="fa fa-trash" aria-hidden="true"></i>
</button>
                </form>

		</td>
		@else
			<td></td>
		 @endauth
      </tr>
      @endforeach
    </tbody>
  </table>
  


@endsection

