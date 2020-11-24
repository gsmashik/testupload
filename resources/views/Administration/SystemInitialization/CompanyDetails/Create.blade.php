@extends('Administration.SystemInitialization.CompanyDetails.layout')
@section('content')
@include('partials.sessionmessage')


@if(empty($companydetails->CompnyName))
<form action=" {{ route('companydetails.store') }}" method="POST"  >
@csrf
@else

<form action=" {{ route('companydetails.update',$companydetails->id ) }}" method="POST"  >
@csrf
        @method('PUT')
@endif









      
       
        <div class="card bg-light">
           
            <div class="card-body">
            <table class="table  " id="myTable">
    
    <tbody>
        <tr>
            <!-- Company Name -->
            @if(!empty($companydetails->CompnyName))
            <td style="padding: 0px;margin:0;" > CompnyName </td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"    value="{{ $companydetails->CompnyName}} " name="CompnyName" id="" @auth @else readonly @endauth></td>
            @else
            <td style="padding: 0px;margin:0;" > CompnyName </td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"   name="CompnyName" id="" @auth @else readonly @endauth></td>
            @endif

            <!-- Company Address -->
            @if(!empty($companydetails->CompnyName))
            <td style="padding: 0px;margin:0;" > Company Address </td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"  value="{{ $companydetails->Address}} " name="Address" id=""></td>
            @else
            <td style="padding: 0px;margin:0;" > Company Address </td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"   name="Address" id=""></td>
            @endif
        </tr>   

        <tr>

            <!-- Internet Address -->
            @if(!empty($companydetails->CompnyName))
            <td style="padding: 0px;margin:0;" > Internet Address </td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"  value="{{ $companydetails->InternetAddress}} " name="InternetAddress" id=""></td>
            @else
            <td style="padding: 0px;margin:0;" > Internet Address </td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"   name="InternetAddress" id=""></td>
            @endif

            <!-- Printing Header -->
            @if(!empty($companydetails->CompnyName))
            <td style="padding: 0px;margin:0;" > Printing Header </td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"  value="{{ $companydetails->PrintingHeader}} " name="PrintingHeader" id=""></td>
            @else
            <td style="padding: 0px;margin:0;" > Printing Header </td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"   name="PrintingHeader" id=""></td>
            @endif
 
        
       
        </tr>  

        <tr>
              <!-- Phone Number 1 -->
              @if(!empty($companydetails->CompnyName))
              <td style="padding: 0px;margin:0;" > Phone Number 1</td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"  value="{{ $companydetails->Phone1}} " name="Phone1" id=""></td>
            @else
            <td style="padding: 0px;margin:0;" > Phone Number 1</td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"   name="Phone1" id=""></td>
            @endif
 
              <!-- Phone Number 2 -->
              @if(!empty($companydetails->CompnyName))
              <td style="padding: 0px;margin:0;" > Phone Number 2</td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"  value="{{ $companydetails->Phone2}} " name="Phone2" id=""></td>
            @else
            <td style="padding: 0px;margin:0;" > Phone Number 2</td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"   name="Phone2" id=""></td>
            @endif

       
         </tr> 

        <tr>

             <!-- Fax -->
             @if(!empty($companydetails->CompnyName))
             <td style="padding: 0px;margin:0;" > Fax</td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"  value="{{ $companydetails->Fax}} " name="Fax" id=""></td>
            @else
            <td style="padding: 0px;margin:0;" > Fax</td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"   name="Fax" id=""></td>
            @endif

             <!-- Email -->
             @if(!empty($companydetails->CompnyName))
             <td style="padding: 0px;margin:0;" > Email</td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"  value="{{ $companydetails->Email}} " name="Email" id=""></td>
            @else
            <td style="padding: 0px;margin:0;" > Email</td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"   name="Email" id=""></td>
            @endif


      </tr> 

        <tr>
               <!-- Tax Office  -->
               @if(!empty($companydetails->CompnyName))
               <td style="padding: 0px;margin:0;" > Tax Office</td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"  value="{{ $companydetails->TaxOffice}} " name="TaxOffice" id=""></td>
            @else
            <td style="padding: 0px;margin:0;" > Tax Office</td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"   name="TaxOffice" id=""></td>
            @endif
           <!-- Tax Rate  -->
           @if(!empty($companydetails->CompnyName))
            <td style="padding: 0px;margin:0;" > Tax Rate</td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"  value="{{ $companydetails->TaxRate}} " name="TaxRate" id=""></td>
            @else
            <td style="padding: 0px;margin:0;" > Tax Rate </td>
            <td style="padding: 0px;margin:0;" ><input  class="form-control input-sm" type="text"   name="TaxRate" id=""></td>
            @endif


 </tr> 

    </tbody>

</table>
<div class="text-center">

@if(empty($companydetails->CompnyName))

<button type="submit" class="btn btn-primary ">Save</button> 

@else
@auth
<button type="submit" class="btn btn-primary ">Update</button>
@else
<button type="button" class="btn btn-primary disabled">Save</button> 
@endauth
@endif






</div>

            </div>
        </div>

   
     
        </form>
@endsection
