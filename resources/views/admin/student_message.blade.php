<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
            @foreach($messages as $message)
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

          {!! $messages->appends(Request::all())->links() !!}

        </div>

      </div>
      
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.script')
  </body>
</html>
