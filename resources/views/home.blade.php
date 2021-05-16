@extends('layouts.app')

@section('content')
<section class="contact-page pt-50 pb-80">
  <div class="container">
    <div class="row">
    <h3 style="margin-bottom:15px;">Patient Document</h3>
    <div class="table-responsive">
     <table class="table table-striped Patientdk">
    <thead>
    <tr>
    <th>Name</th>
    <th>Patient ID</th>
    <th>Phone Number</th>
    <th>Date &amp;  Time</th>
    <th>Invoice PDF</th>
    <th>Report PDF</th>
    </tr>
    </thead>
    <tbody>
@if($userDetail && count($userDetail->ReportDetail) > 0 )
    @foreach($userDetail->ReportDetail as $report)
      <tr>
        <td>{{ $userDetail->name }}</td>
        <td>082PAT{{ sprintf("%04d", $report->id) }}</td>
        <td>{{ $userDetail->inputphone }}</td>
        <td>{{ \Carbon\Carbon::parse($report->report_date)->format("d/m/Y g:i A ") }}</td>
        
        <td><button type="button"><a href="{{ url('invoices/') }}/{{$report->invoice_pdf}}" target="_blank"><img src="images/pdf.png" alt="" > Download</a></button></td>
        <td><button type="button">
          <a href="{{ url('reports')}}/{{ $report->report_pdf }}" target="_blank"><img src="images/pdf.png" alt=""> Download</a></button></td>
    </tr>
    @endforeach
@endif
    </tbody></table>
    </div>
    </div>
  </div>
</section>

@endsection
