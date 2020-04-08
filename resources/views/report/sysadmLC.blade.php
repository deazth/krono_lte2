@extends('adminlte::page')
@section('title', 'Report')
@section('content')
<div class="panel panel-default">
<div class="panel-heading"><strong>Report : Overtime Log Changes</strong></div>
<div class="panel-body">
  <form action="{{ route('rep.sa.OTLog', [], false) }}" method="GET">

  <div class="col-sm-6">
  <div class="form-group">
    	<label for="fdate">From</label>
  	<input type="date" class="form-control" id="fdate" name="fdate" required autofocus>
  </div>
  </div>
  <div class="col-sm-6">
  <div class="form-group">
  	<label for="tdate">To</label>
  	<input type="date" class="form-control" id="tdate" name="tdate"  required autofocus>
  </div>
  </div>
  <div class="col-sm-6">
  <div class="form-group">
  	<label for="fpersno">Persno</label>
  	<input type="text" class="form-control" id="fpersno" name="fpersno" placeholder="Use commas to search multiple persno, e.g. 30013,45450,38884" required autofocus>
    </div>
  </div>
  <div class="col-sm-6">
  <div class="form-group">
  	<label for="frefno">Refno</label>
  	<input type="text" class="form-control" id="frefno" name="frefno">
  </div>
  </div>

  <div class="col-lg-12">  <BR>
  <div class="form-group text-center">
    <button type="submit" name="searching" value="gexcelLC" class="btn btn-primary">Generate Report</button>
  </div>
  </div>
  </form>
</div>
</div>

<div class="panel panel-default" id="psearch">
<div class="panel-heading"><strong>Reports History</strong></div>
<div class="panel-body">
  <div class="table-responsive">
  <table id="repothist" class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">Submit Date</th>
        <th scope="col">Group</th>
        <th scope="col">Status</th>
        <th scope="col">Data From</th>
        <th scope="col">Data To</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($history as $his)
      <tr>
        <td>{{ $his->created_at }}</td>
        <td>{{ $his->job_type }}</td>
        <td>{{ $his->status }}</td>
        <td>{{ $his->from_date }}</td>
        <td>{{ $his->to_date }}</td>
        @if($his->status == 'Completed')
        <td><form action="{{ route('rep.sa.dOT', [], false)}}"
          method="post">
          <input type="hidden" name="bjid" value="{{ $his->id }}" />
          @csrf
          <button type="submit" class="btn btn-sm btn-info" title="Download"><i class="fa fa-download"></i></button>
        </form></td>
        @else
        <td>...</td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>

</div>

@stop
