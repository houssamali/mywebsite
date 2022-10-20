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
            <div class="title">Users Likes</div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                       


                    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Like</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($likes as $like)
    <td>{{$like->id}}</td>
    <td>{{$like->user->name}}</td>
    <td>liked</td>
    <td>{{$like->created_at}}</td>
    <tr>
      
     
     
     
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