@extends('layouts.admin')

@section('content')
<section class="contact-page pt-50 pb-80">
  <div class="container">
    <div class="row">
     <div class="col-md-12 col-sm-12">
    <h3 style="margin-bottom:15px;">Appointment Collections</h3>
           <a href="{{ url('download-appointment')}}"  style="margin: 10px;" class="btn btn-success pull-right">Download</a>
           <input id="myInput" class="pull-right" type="text" placeholder="Search.." style="padding: 6px;
    margin-top: 8px;">
         </div>
@if(session()->has('success'))
    <div class="alert alert-success col-md-12">
        {{ session()->get('success') }}
    </div>
@endif
    <div class="table-responsive">
        
     <table class="table table-striped Patientdk">
    <thead>
    <tr>
    <th>Name</th>
    <th>Patient ID</th>
    <th>Phone Number</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Date &amp;  Time</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody id="myTable">
@if(count($Appointment) > 0 )
    @foreach($Appointment as $uappointment)
      <tr>
        <td>{{ $uappointment->lab_customer_fname }}</td>
        <!-- <td>082PAT{{ sprintf("%04d", $uappointment->lab_customer_cd) }}</td> -->
        <td>{{ $uappointment->lab_customer_cd }}</td>
        <td>{{ $uappointment->lab_cust_mobile }}</td>
        <td>{{ $uappointment->lab_customer_gender }}</td>
        <td>{{ $uappointment->lab_Age }}</td>
        <td>{{ \Carbon\Carbon::parse($uappointment->lab_report_date)->format("d/m/Y g:i A ") }}</td>
        <td><a href="{{url('/admin/appointments/soft-delete')}}/{{$uappointment->lab_customer_cd}}" class="bt btn-danger">Delete</a></td>
    </tr>
    @endforeach
@endif

    </tbody></table>
    <table>
        <body>
{!! $Appointment->onEachSide(1)->links() !!}
</body>
</table>
    </div>
    </div>
  </div>
</section>
@endsection
@section('jsFunctions')

@endsection
