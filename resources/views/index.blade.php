@include('header')

<!----Home Section start--->

<div class="home py-5" id="home">
    <div class="container-lg">
      <div class="row text-center bg-light align-items-center justify-content-center">

       <div class="col-md-6 my-like">
        <div class="home-img text-center">
      <img src="{{asset('assets/images/houssam4.png')}}" class="img-fluid rounded-circle" alt="">
        </div>
        <div class="m-4">
            <form action="{{url('add-like')}}" method="post">
                @csrf
                <input type="hidden" name="like" value="1" class="like">
            <button class="button-like"> <i class="fa-solid fa-thumbs-up like-me"></i></button>
         {{$likes}}
          
            <a href="{{url('remove-like')}}" class="button-like"><i class="fa-solid fa-thumbs-down like-me "></i></a>
{{$dislikes}}
        </form>
</div>
       </div>



       <div class="col-md-6 mt-5 mt-md-0 order-md-first">
        <div class="home-img">
            <h4 class="text-muted mb-1">{{__("messages.Hello I'm")}}</h4>
            <h1 class="text-danger text-uppercase fs-1 fw-bold">{{__('messages.Software Developer')}}</h1>
            <h2 class="fs-4">{{__('messages.Houssam Almohamadi')}}</h2>
            <p class="mt-4 text-muted">{{__('messages.Am Backend Developer and Web Desinger with Laravel FrameWork i love coding and do hard tasks with learning a New thing Everday')}}</p>
        <a href="#portfolio" class="btn btn-secondary">{{__('messages.My Work')}}</a>
        
    </div>
       </div>




      </div>
    </div>
</div>

<!---Home Section End---->



<!---about Section start---->


<section class="about bg-white py-5" id="about">

    <div class="container-lg py-4">

        <div class="row justify-content-center">

          <div class="col-lg-8">
            <div class="section-title text-center">
                <h2 class="fw-bold mb-5">{{__('messages.About Me')}}</h2>
            </div>
          </div>
        </div>

           

        <div class="row">



            <div class="col-md-6">
                <div class="about-text">
                    <h3 class="fs-4 mb-3">{{__('messages.Skill which i had learnned in my roadmap')}}</h3>
                     <p class="text-muted">{{__('messages.Am still Fresh student i dont work in any company but i know do any project')}}!</p>
                    </div>
                     <div class="row text-center text-uppercase my-3">
                       <div class="col-sm-4">
                        <div class="fact-item">
                            <h4 class="fs-1 fw-bold">100</h4>
                            <p class="text-muted">Projects Completed</p>
                        </div>
                       </div>
                       <div class="col-sm-4">
                        <div class="fact-item">
                            <h4 class="fs-1 fw-bold">90</h4>
                            <p class="text-muted">happy clients</p>
                        </div>
                       </div>
                       <div class="col-sm-4">
                        <div class="fact-item">
                            <h4 class="fs-1 fw-bold">95</h4>
                            <p class="text-muted">Positive Reviews</p>
                        </div>
                       </div>
                     </div>




                     <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <a href=" " class="btn btn-danger px-3 me-5">Download CV</a>
                            <div class="social-links">
                                <a href="" class="text-dark me-2 fab fa-facebook-f"></a>
                                <a href="" class="text-dark me-2 fab fa-twitter"></a>
                                <a href="" class="text-dark me-2 fab fa-instagram"></a>
                                <a href="" class="text-dark me-2 fab fa-linkedin-in"></a>
                                
                            </div>
                        </div>
                     </div>


                </div>




            <div class="col-md-6 mt-5 mt-md-0">
                <div class="skill-item mb-4">
                    <h3 class="fs-6">HTML</h3>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" 
                        style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                </div>


                <div class="skill-item mb-4">
                    <h3 class="fs-6">CSS</h3>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" 
                        style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                </div>




                <div class="skill-item mb-4">
                    <h3 class="fs-6">JAVA SCRIP</h3>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" 
                        style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                </div>



                <div class="skill-item mb-4">
                    <h3 class="fs-6">BOOTSTRAP</h3>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" 
                        style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                </div>



                <div class="skill-item mb-4">
                    <h3 class="fs-6">git&github</h3>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" 
                        style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                </div>




                <div class="skill-item mb-4">
                    <h3 class="fs-6">PHP</h3>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" 
                        style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                </div>


                <div class="skill-item mb-4">
                    <h3 class="fs-6">PHP OOP</h3>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" 
                        style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                </div>


                <div class="skill-item mb-4">
                    <h3 class="fs-6">MYSQL</h3>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" 
                        style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                </div>




                <div class="skill-item mb-4">
                    <h3 class="fs-6">LARAVEL</h3>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" 
                        style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                </div>




            </div>






        </div>


    </div>
</section>

<!---about Section End---->







<!---service Section start---->

<section id="services" class="services  py-5">
    <div class="container-lg py-4">


        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="fw-bold mb-5">{{__('messages.My Own Projects')}}</h2>
                </div>
            </div>
        </div>


        <div class="row text-center">


            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="fs-4 py-2">{{__('messages.Ecomerce Web Site with Laravel')}}</h3>
                    <p class="text-muted">{{__('messages.Backend And Frontend project')}}</p>
                </div>
            </div>


             <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                    <i class="fas fa-code"></i>
                    </div>
                    <h3 class="fs-4 py-2">{{__('messages.Ecomerce Web Site with php and mysql')}}</h3>
                    <p class="text-muted">{{__('messages.Backend And Frontend project')}}</p>
                </div>
            </div>



            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                    <i class="fas fa-code"></i>
                    </div>
                    <h3 class="fs-4 py-2">{{__('messages.Restuarant Web Site With Laravel')}}</h3>
                    <p class="text-muted">{{__('messages.Backend And Frontend project')}}</p>
                </div>
            </div>







        </div>  



    </div>
</section>


<!---service Section End---->









<!---freelancer Section start---->


<section class="freelancer-available py-5 bg-danger">
    <div class="container-lg py-4">



        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
            <p class="text-light fs-5">?{{__('messages.If You Have Any Project')}}</p>
            <h2 class="fs-1 text-white mb-4">{{__("messages.I'm Available For Freelancer Projects")}}</h2>
            <a href="" class="btn btn-outline-light">{{__('messages.Call me')}}</a>
            </div>
        </div>

    </div>
</section>



<!---freelancer Section End---->




<!---testimonails Section start---->


<section class="testimonials bg-white py-5" id="testimonials">
   <div class="container">
    <div class="row">

    

  
            <div class="card">
            <div class="owl-carousel comment-show owl-theme">
            @foreach($comments as $comment)
           <div class="item">
                <div class="card-body">
                    <div class="d-flex justify-content-center ">
                    <img src="{{asset('assets/images/profile_image.png')}}"  class="w-50 img-fluid rounded-circle">
                  </div>
                  <div class="d-flex justify-content-center">
                    <h6>name<h6>
                     </div>
                    <div class="d-flex justify-content-center">
                    <h6>email</h6>
                       </div>
                    <p>{{$comment->comment_ar}}</p>
                    <p>{{$comment->comment_en}}</p>
                
                  </div>
                </div>
              @endforeach
            </div>
           



          

</div>  
</div>

<div class="row">
    <div class="col-md-12 d-flex justify-content-center">





    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{__('messages.add comment')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

        <form action="{{url('/add-comment')}}" method="POST" >
            @csrf

        <div class="form-control">
            <label for="">{{__('messages.comment_ar')}}</label>
            <textarea name="comment_ar" class="w-100"></textarea>
        </div>

        <div class="form-control">
            <label for="">{{__('messages.comment_en')}}</label>
            <textarea name="comment_en" class="w-100"></textarea>
        </div>

        
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('messages.cancel')}}</button>
        <button type="submit" class="btn btn-primary">{{__('messages.submit')}}</button>
      </div>
      </form>
    </div>
  </div>
</div>








   <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    {{__('messages.add comment')}}
</button>-->

    </div>
</div>


   </div>
</section>

@include('footer')
