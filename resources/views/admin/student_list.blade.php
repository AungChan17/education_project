<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.slidebar')
        <!-- partial -->
        <div class="content-wrapper" >

        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session()->get('message')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="https://cdn-icons-png.flaticon.com/512/59/59836.png"/> </button>
        </div>
        @endif

        <h2>Student List</h2>
        <table class="table">
          <tr>
            <th>Pa_Name</th>
            <th>Pa_Email</th>
            <th>Pa_Phone</th>
            <th>St_Name</th>
            <th>St_Age</th>
            <th>St_Grade</th>
            <th>Message</th>
            <th>Actions</th>
          </tr>
          @foreach($student as $student)
          <tr>
            <td>{{$student->parent_name}}</td>
            <td>{{$student->parent_email}}</td>
            <td>{{$student->parent_phone}}</td>
            <td>{{$student->child_name}}</td>
            <td>{{$student->child_age}}</td>
            <td>{{$student->child_grade}}</td>
            <td>{{$student->message}}</td>
            <td>
              <a href="{{url('delete_student',$student->id)}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure to delete this!')">Delete</a>
            </td>
          </tr>
          @endforeach

        </table>
        </div>

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.script')
  </body>
</html>
