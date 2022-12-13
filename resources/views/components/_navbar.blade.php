<nav id="navbar-box" class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <h1><a id="navbar-link-title" class="navbar-brand" href="{{url('/')}}">RICO Gym Equipments</a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                
                @role('customer')
                {{-- <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/posts/recent-posts')}}">News Feed</a>
                </li>
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/authors')}}">Discover Users</a>
                </li> --}}
                <li class="nav-item">
                    
                   <a id="navbar-links" class="nav-link" href=""><i class="fa-solid fa-house"></i></a>
                   
                   
                </li>
                <li class="nav-item">
                    
                   <a id="navbar-links" class="nav-link" href=""><i class="fa-solid fa-dumbbell"></i></a>
                   
                   
                </li>
                <li class="nav-item">
                    
                   <a id="navbar-links" class="nav-link" href=""><i class="fa-solid fa-cart-shopping"></i></a>
                   
                   
                </li>

                
                {{-- <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/logs')}}">Activity</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/logout')}}">Logout &nbsp; <i class="fa-solid fa-right-to-bracket"></i></a>
                </li> --}}
                @endrole

                @hasanyrole('admin|customer')
                    <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="">
                            <span>
                                {{-- <i class="fa-solid fa-user"></i> --}}
                            </span>
                            <span>
                                {{Auth::user()->name}}
                            </span>
                        </a>
                        
                        
                    </li>
                    <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="/logout"><i class="fa-solid fa-right-from-bracket"></i></a>
                        
                        
                    </li>
                @endrole
            </ul>
        </div>
    </div>
</nav>


<style>


#navbar-box{
    height: 80px;
    padding-left: 20px; 
    padding-right: 20px; 
    background-color: #010202;
}
.navbar-brand{
    font-size: 30px;
}

a.nav-link:link{
    
    font-weight: bold;
}
#navbar-link-title{
    color: #4e598c;
    
    font-weight: bold;
}
a.nav-link:hover{
    color: #4e598c;
    
    font-weight: bold;
}

.nav-link{
    margin-left: 25px;
}
</style>