@extends('adminlte::page')

@section('title', 'Staff List')

@section('content')
  <div class="panel panel-default">
    <div class="panel-heading panel-primary">List of Staff</div>
    <div class="panel-body">
        <div class="table-responsive">
            <table id="tStaffList" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Staff No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($staffs as $singleuser)
                    <tr>
                        <td>{{ $singleuser->id }}</td>
                        <td>{{ $singleuser->name }}</td>
                        <td>{{ $singleuser->email }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editStaff" data-role_id="{{$singleuser['id']}}" data-role_name="{{$singleuser['name']}}" data-role_permission="">
                                <i class="fas fa-cog"></i>
                            </button>
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewUser" data-staff_id="{{$singleuser['staff_no']}}" data-staff_name="{{$singleuser['name']}}" data-staff_email="{{$singleuser['email']}}">
                                MANAGE
                            </button> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>

<!-- Modal-->
<div id="viewUser" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create new Role</h4>
      </div>
      <form action="{{ route('staff.dosearch') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="inputstaff" name="inputstaff" placeholder="{{ __('adminlte::adminlte.input_staff') }}" value="{{ old('inputstaff') }}">
        </div>
        <button type="submit" class="btn btn-primary">SEARCH</button>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@stop

@section('js')
<script type="text/javascript">
$(document).ready(function() {
    $('#tStaffList').DataTable({
      "responsive": "true",
      "order" : [[0, "desc"]],
      "columns": [
            null,
            null,
            null,
            null,
            { "width": "5%" }
        ]
    });
} );

// $('#viewUser').on('show.bs.modal', function(e) {
//     //get data-id attribute of the clicked element
//     var staff_id = $(e.relatedTarget).data('staff_id');
//     var staff_name = $(e.relatedTarget).data('staff_name');
//     var staff_email = $(e.relatedTarget).data('staff_email');

//     //populate the textbox
//     $('#staff_id').text(staff_id);
//     $('#staff_name').text(staff_name);
//     $('#staff_email').text(staff_email);

// });
</script>
@stop