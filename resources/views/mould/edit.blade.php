@extends('mould.layout')
@section('content')
@include('partials.sessionmessage')

<form action="{{ route('mould.update',$mould->id) }}" method="POST" enctype="multipart/form-data" >
       @csrf
        @method('PUT')
        <table class="table table-striped table-bordered table-responsive" id="myTable">
                <thead class="thead-light">
                    <tr>

                        <th>#</th>
                        <th>Mould Ref No</th>
						<th>Lettering</th>
                        <th>Item</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Buyers</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 0px;margin:0;" > {{ $mould->id }} </td>
                        <td style="padding: 0px;margin:0;"><input type="text" name="title"  class="form-control input-sm"  value="{{ $mould->title }}" id="pwd"></div></td>
                        <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm"  type="text" name="letering" value="{{ $mould->letering }}" id=""></td>

                        <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm"  type="text" name="description" value="{{ $mould->description }}" id=""></td>
                        <td style="padding: 0px;margin:0;" ><input   class="form-control input-sm" type="text" name="dimention" value="{{ $mould->dimention }}"  id=""></td>
                        <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text" name="color" value="{{ $mould->color }}"  id=""></td>
                        <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text" name="buyers" value="{{ $mould->buyers }}"  id=""></td>
                        <td style="padding: 0px;margin:0;"><input  class="form-control input-sm" type="file" name="image" value="{{ asset('storage/app/public/'.$mould->image)}}"   id=""></td>
                    </tr>

                </tbody>

            </table>
            <i class="fa fa-plus btn btn-info" aria-hidden="true" id="addrow"></i> 
        <button type="submit" class="btn-primary">Save</button>

        </form>


@endsection

