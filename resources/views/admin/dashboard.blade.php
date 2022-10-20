
@include('admin.layouts.header')
    


<div id="logo">
    <span class="big-logo">.S!mple</span>
    <span class="small-logo">S!M</span>
</div>
<div id="left-menu">
    <ul>
        <li class="active"><a href="#">
            <i class="ion-ios-person-outline"></i>
            <span>Dashboard</span>
        </a></li>
       
        <li><a href="{{url('home')}}">
            <i class="ion-ios-chatboxes-outline"></i>
            <span>Main Table</span>
        </a></li>

        <li class="has-sub">
            <a href="{{url('users')}}">
                <i class="ion-ios-chatboxes-outline"></i>
                <span>Users</span>
            </a>
       
        <li class="has-sub">
            <a href="">
                <i class="ion-ios-chatboxes-outline"></i>
                <span>Report</span>
            </a>
            <ul>
                <li><a href="#">Report Item 1</a></li>
                <li><a href="#">Report Item 2</a></li>
                <li><a href="#">Report Item 3</a></li>
                <li><a href="#">Report Item 3</a></li>
                <li><a href="#">Report Item 3</a></li>
                <li><a href="#">Report Item 3</a></li>
                <li><a href="#">Report Item 3</a></li>
            </ul>
        </li>
      
        <li><a href="#">
            <i class="ion-ios-chatboxes-outline"></i>
            <span>Setting</span>
        </a></li>

        <li><a href="">
            <i class="ion-ios-chatboxes-outline"></i>
            <span>Logout</span>
        </a></li>

    </ul>
</div>
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
