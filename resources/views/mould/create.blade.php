@extends('mould.layout')
@section('content')
@include('partials.sessionmessage')

<form action="{{ route('mould.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
    

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
                        <td style="padding: 0px;margin:0;" > 1 </td>
                        <td style="padding: 0px;margin:0;"><input type="text" name="title[]"  class="form-control input-sm" id="pwd"></div></td>
                        <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm"  type="text" name="letering[]" id=""></td>

                        <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm"  type="text" name="description[]" id=""></td>
                        <td style="padding: 0px;margin:0;" ><input   class="form-control input-sm" type="text" name="dimention[]" id=""></td>
                        <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text" name="color[]" id=""></td>
                        <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text" name="buyers[]" id=""></td>
                        <td style="padding: 0px;margin:0;"><input  class="form-control input-sm" type="file" name="image[]" id=""></td>
                    </tr>

                </tbody>

            </table>
            <i class="fa fa-plus btn btn-info" aria-hidden="true" id="addrow"></i> 
        <button type="submit" class="btn-primary">Save</button>

        </form>


@endsection

