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
            <i class="ion-ios-albums-outline"></i>
            <span>Main Table</span>
        </a></li>
        <li><a href="{{url('users')}}">
            <i class="ion-ios-chatboxes-outline"></i>
            <span>Users</span>
        </a></li>
       
        <li class="has-sub">
            <a href="#">
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
      <th scope="col">Arabic</th>
      <th scope="col">English</th>
      <th scope="col">Created_at</th>
      
    </tr>
  </thead>
  <tbody>
    
    
  <tr>
      <th scope="row">{{$comment->id}}</th>
      <td>{{$comment->comment_ar}}</td>
      <td>{{$comment->comment_en}}</td>
      <td>{{$comment->created_at}}</td>
     
     
     
    </tr>
    
   
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
