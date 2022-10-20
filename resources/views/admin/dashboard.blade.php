
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
            <div class="title">Main Table</div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                       


                    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Comment</th>
      <th scope="col">Like</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td><a href="{{url('show-user')}}/{{$user->id}}">{{$user->name}}</a></td>
      <td><a href="{{url('show-comment')}}/{{$user->id}}">View</a></td>
      <td><a href="{{url('show-like')}}/{{$user->id}}">View Date</a></td>
     
     
     
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
