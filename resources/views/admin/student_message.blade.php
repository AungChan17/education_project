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
        <div class="content-wrapper">

        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session()->get('message')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="https://cdn-icons-png.flaticon.com/512/59/59836.png"/> </button>
        </div>
        @endif

          <h1>Message From Student</h1>
          <table class="table">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Grade</th>
              <th>Message</th>
              <th>Action</th>
            </tr>
            @foreach($message as $message)
            <tr>
              <td>{{$message->name}}</td>
              <td>{{$message->email}}</td>
              <td>{{$message->phone_number}}</td>
              <td>{{$message->grade}}</td>
              <td>{{$message->message}}</td>
              <td>
                <a href="{{url('delete_message',$message->id)}}" class="btn btn-outline-danger">Delete</a>
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
