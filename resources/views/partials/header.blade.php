<div class="container">
    <nav id="site_nav" class="d-flex justify-content-between h-100 align-items-center">
        <div class="logo text-uppercase h-75">
            <img src="{{asset('img/piratinviaggio_white_logo.svg')}}" alt="">
        </div>
        <div class="main_menu d-flex">
            <a class="text-decoration-none text-uppercase px-2" href="{{route('home')}}">Home</a>
            <a class="text-decoration-none text-uppercase px-2" href="{{route('travels')}}">Vacanze</a>
            <a class="text-decoration-none text-uppercase px-2" href="#">Contatti</a>
        </div>

        <div class="input-group" style="width: 20%"> 
        <input type="text" class="form-control">
        <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
        </div>
    </nav> 
    <!-- /.site_nav -->
</div>
