@include('admin.layouts.header')
    
@include('admin.layouts.slide')
<div id="main-content">
    <div id="header">
        <div class="header-left float-left">
            <i id="toggle-left-menu" class="ion-android-menu"></i>
        </div>
        <div class="header-right float-right">
            <i class="ion-ios-people"></i>
        </div>
    </div>

    <div id="page-container">
       
        
        <div class="card">
            <div class="title">Users</div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                       


                    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Register_Date</th>
      <th>Update_Date</th>
      <th> Delete</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
      <td>{{$user->updated_at}}</td>
      <td><a class="btn btn-danger" href="{{url('delete-user')}}/{{$user->id}}">Delete</a></td>
     
     
     
    </tr>
    
    @endforeach
  </tbody>
</table>



                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>

<span id="show-lable">Hello</span>

@include('admin.layouts.footer')
