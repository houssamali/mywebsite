<div class="bg-img-me">

<section class="contact py-5  " id="contact">
    
    <div class="container-lg py-4 ">
      <div class="row justify-content-center  ">
        <div class="col-lg-8">
            <div class="section-title text-center">
                <h2 class="fw-bold mb-5 call-color">{{__("messages.Call me")}}</h2>
            </div>
        </div>
      </div>


        <div class="row">
            <div class="col-md-5">



             <div class="contact-item d-flex mb-3">
                <div class="icon fs-4 text-danger">
             <i class="fas fa-envelope"></i>
                </div>
                <div class="text ms-3">
                <h3 class="fs-5">{{__('messages.Email')}}</h3>
                <p class="text-muted call-color">houssam71134@gmail.com</p>
                </div>
                </div>


                <div class="contact-item d-flex mb-3">
                    <div class="icon fs-4 text-danger">
                 <i class="fas fa-phone"></i>
                    </div>
                    <div class="text ms-3">
                    <h3 class="fs-5">{{__('messages.Phone')}}</h3>
                    <p class="text-muted call-color">7676973863</p>
                    </div>

                     </div>



                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4 text-danger">
                     <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text ms-3">
                        <h3 class="fs-5">{{__('messages.Address')}}</h3>
                        <p class=" call-color">lighthouse</p>
                        </div>




             </div>
            </div>



             <div class="col-md-7  ">
                <div class="d-flex justify-content-between">
                <img src="{{asset('assets/images/houssam.jpg')}}" class="rounded-circle w-50 image-opacity" alt="not fount">
                
               
        <div class="d-flex flex-row-reverse">
        <div>

            <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4 text-danger">
                        <i class="fa-brands fa-github"></i>
                        </div>

            <div class="text ms-3">
            

            <h3 class="fs-5">{{__('messages.Github')}}</h3>
            <a href="https://github.com/houssamali" class=" call-color">{{__('messages.visit me')}}</a>
          </div></div>


          <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4 text-danger">
                        <i class="fa-brands fa-linkedin"></i>
                        </div>
          <div class="text ms-3">

            <h3 class="fs-5">{{__('messages.Linked In')}}</h3>
            <a href="https://www.linkedin.com/in/houssam-almohamadi-6b9624247" class=" call-color">{{__('messages.follow me')}}</a>
          </div></div>


          <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4 text-danger">
                        <i class="fa-brands fa-facebook"></i>
                        </div>
          <div class="text ms-3">

            <h3 class="fs-5">{{__('messages.Facebook')}}</h3>
            <a href="https://www.facebook.com/profile.php?id=100016696270507" class=" call-color">{{__('messages.add me')}}</a>
          </div></div>

        </div>
</div>
        </div> 
</div>  
</div>
</div>
<div class="text-center my-5">
    <button type="button" class="button-like bg-button-add-comment" data-bs-toggle="modal" data-bs-target="#exampleModal">
    {{__('messages.add comment')}}
</button>
</div>

            

 


    

</section>
<!---contact Section End---->


<!---footer Section start---->
<footer class="footer border-top py-4">
    <div class="container-lg">
   <div class="row">
    <div class="col-lg-12">
        <p class="m-0 text-center text-muted">&copy;2022 The WebSite</p>
    </div>
   </div>
    </div>
</footer>
</div>

<!---footer Section End---->

    <!---Bootstrap.js---->
    <script src="{{asset('assets/js/jquerycdn.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/ajax.js')}}"></script>
    <script src="{{asset('assets/js/all.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
 $('.comment-show').owlCarousel({
    loop:true,
    margin:10,
   // dots:false,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
    </script>

    @if(Session::has('status'))

    <script>
        swal("Done", "{{Session::get('status')}}!", "success");
    </script>

    @endif


</body>
</html>