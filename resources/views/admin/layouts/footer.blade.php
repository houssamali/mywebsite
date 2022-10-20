<script src="{{asset('assets/js/jquerycdn.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
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
</body></html>