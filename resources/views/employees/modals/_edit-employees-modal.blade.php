<!-- Modal -->
<div class="modal fade" id="edit-employees-modal-{{$employee->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('employees.update') }}" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">edit Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="{{ route('employees.update') }}" method="post">
                 @csrf
                 <input type="hidden" name="id" value="{{ $employee->id}}"/>
                 <input class="form-control mb-2" name="first_name" placeholder="First Name" value="{{$employee->first_name}}"/>
                 <input class="form-control mb-2" name="middle_name" placeholder="Middle Name" value="{{$employee->middle_name}}"/>
                 <input class="form-control mb-2" name="last_name" placeholder="Last Name" value="{{$employee->last_name}}"/>
                 <input class="form-control mb-2" name="age" placeholder="Age" value="{{$employee->age}}"/>
                 <input class="form-control mb-2" name="address" placeholder="Address" value="{{$employee->address}}"/>
                 <input class="form-control mb-2" name="cp_number" placeholder="Cell Phone Number" value="{{$employee->cp_number}}"/>
                 <input class="form-control mb-2" name="salaryeverypresent" placeholder="SalaryEveryPresent" value= "{{$employee->salaryeverypresent}}"/>
                 <input class="form-control mb-2" name="dayspresent" placeholder="DaysPresent" value= "{{$employee->dayspresent}}"/>
                 
            
                
                
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit Employee</button>
      </div>
      </form>
    </div>
  </div>
</div>