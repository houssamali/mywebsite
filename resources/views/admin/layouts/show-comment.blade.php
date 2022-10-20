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
            <div class="title">Comments</div>
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
      <th>Delete</th>
      
    </tr>
  </thead>
  <tbody>
    
    
  <tr>
      <th scope="row">{{$comment->id}}</th>
      <td>{{$comment->comment_ar}}</td>
      <td>{{$comment->comment_en}}</td>
      <td>{{$comment->created_at}}</td>
      <td><a class="btn btn-danger" href="{{url('delete-comment')}}/{{$comment->id}}">Delete</a></td>
     
     
     
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
