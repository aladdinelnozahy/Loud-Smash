<!-- Start navbar Area -->
<header class="default-header">
    <div class="container">
        <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="#home"><img src="frontstyle/img/logo.png" alt=""></a>
                </div>
                <div class="main-menubar d-flex align-items-center">
                    <nav class="hide">
                        <a href="#home">Home</a>
                        <a href="#feature">Feature</a>
                        <a href="#about">About</a>
                        <a href="#contact">Contact</a>
                    </nav>

                    
                    {{-- <h6 class="masthead-heading text-uppercase mb-0"> select your Category</h6>
                        @php
                        $categories =App\Models\Category::get()
                        @endphp
                        
                    <select id="category"  class="frontcat form-control"  >
                        <option > All Categories</option>
                        @foreach ($categories as $category )
                        <option > {{ $category->c_name }}</option>
                            
                        @endforeach
                    </select> --}}


                    <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End navbar Area -->
