@extends('layouts.admin')

@section('content')
<section class="contact-page pt-50 pb-80">
  <div class="container">
    <div class="row">
     <div class="col-md-12 col-sm-12">
    <h3 style="margin-bottom:15px;">Patient Collections</h3>
           <a href="{{ url('download-patient')}}"  style="margin: 10px;" class="btn btn-success pull-right">Download</a>
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
    <th>Date &amp;  Time</th>
    <th>Invoic</th>
    <th>Report</th>
    </tr>
    </thead>
     <tbody>
@if(count($userDetail) > 0 )
    @foreach($userDetail as $report)
      <tr>
        <td>{{ $report->name }}</td>
        <td>082PAT{{ sprintf("%04d", $report->id) }}</td>
        <td>{{ $report->inputphone }}</td>
        <td>{{ \Carbon\Carbon::parse($report->report_date)->format("d/m/Y g:i A ") }}</td>
        
        <td><button type="button"><a href="{{ url('invoices/') }}/{{$report->invoice_pdf}}" target="_blank"><img src="images/pdf.png" alt="" > Download</a></button></td>
        <td><button type="button">
          <a href="{{ url('reports')}}/{{ $report->report_pdf }}" target="_blank"><img src="images/pdf.png" alt=""> Download</a></button></td>
    </tr>
    @endforeach
@endif
    </tbody></table>
    <table>
        <body>
{!! $userDetail->onEachSide(1)->links() !!}
</body>
</table>
    </div>
    </div>
  </div>
</section>
@endsection
@section('jsFunctions')

@endsection
