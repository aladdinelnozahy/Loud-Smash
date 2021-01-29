<!-- Start navbar Area -->
@include('frontend.includes.header')
<!-- End navbar Area -->

<!-- Start navbar Area -->
@include('frontend.includes.nav')
<!-- End navbar Area -->

<!-- Start Page Content  -->
@yield('content')
<!-- End Page Content  -->

<!-- Strat Footer Area -->
@include('frontend.includes.footer')
<!-- End Footer Area -->

<script>
    $(document).ready(function (){
        $('#category').change( function( ) {
            var id = $(this).val();
            $.ajax ({
                url:"{{ route('frontshow.songs') }}",
                method:'POST',
                data:{
                    '_token':"{{ csrf_token() }}",
                    ' id':id
                },
                success:function(response){
                    $('.show-songs').show();
                    $('.show-songs').html(response);
                }
            });

        });
    });
</script>
		
