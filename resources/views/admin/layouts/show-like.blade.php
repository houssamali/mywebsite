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
            <div class="title">Users Like</div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                       


                    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Created_Dated</th>
      <th scope="col">Update_Date</th>
      
      
    </tr>
  </thead>
  <tbody>
    
    
  <tr>
      <th scope="row">{{$like->id}}</th>
      <td>{{$like->created_at}}</td>
      <td>{{$like->updated_at}}</td>
      
     
     
     
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
