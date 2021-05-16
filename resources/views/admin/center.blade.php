@extends('layouts.admin')

@section('content')
<section class="contact-page pt-50 pb-80">
  <div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
        <h3 style="margin-bottom:15px;">Pathology Center Collections</h3>
            <a href="{{ url('/download-center')}}" class="btn btn-success pull-right"  style="margin: 10px;">Download</a>
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
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>PIN Code</th>
    <th>Registration date</th>
    <th>Action</th>
     </tr>
    </thead>
    <tbody id="myTable">
@if(count($center) > 0 )
    @foreach($center as $getcenter)
      <tr>
        <!-- <td>{{ $getcenter->lab_ctrid }}</td> -->
        <td>082PATH{{ sprintf("%04d", $getcenter->lab_ctrid) }}</td>
        <td>{{ $getcenter->lab_ctrname }}</td>
        <td>{{ $getcenter->lab_addline1 }} {{ $getcenter->lab_addline2 }}</td>
        <!-- <td></td> -->
        <td>{{ $getcenter->lab_pincode }}</td>
        <td>{{ \Carbon\Carbon::parse($getcenter->lab_regdate)->format("d/m/Y g:i A ") }}</td>
        <td><a href="{{url('/admin/center/soft-delete')}}/{{$getcenter->lab_ctrid}}" class="bt btn-danger">Delete</a></td>
    </tr>
    @endforeach
@endif

    </tbody></table>
    <table>
        <body>
{!! $center->onEachSide(1)->links() !!}
</body>
</table>
    </div>
    </div>
  </div>
</section>
@endsection
