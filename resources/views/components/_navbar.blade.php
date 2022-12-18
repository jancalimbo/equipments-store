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
                    
                    <a id="navbar-links" class="nav-link" href="{{ route('home') }}"><i class="fa-solid fa-house"></i></a>   
                </li>

                
                <li class="nav-item">
                    
                   <a id="navbar-links" class="nav-link" href="{{ route('cart') }}">
                        <i class="fa-solid fa-cart-shopping"></i>
                        @php
                            $count = App\Models\Cart::where('user_id', auth()->user()->id)->count();
                        @endphp
                        <div class="cart-count-div  ">
                            <span class="cart-count">{{ $count }}</span>

                        </div>
                        
                    </a>
                </li>

              
                
               
                @endrole

                @role('admin')
                    <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="{{ route('admin-index') }}">
                            <span>
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <span>
                                {{-- {{Auth::user()->name}} --}}
                            </span>
                        </a>
                        
                    </li>
                @endrole

                @hasanyrole('admin|customer')
                    <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="{{ route('user-index') }}"><i class="fa-solid fa-dumbbell"></i></a>  
                        
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
    background-color: #1b1b1e;
}
.navbar-brand{
    font-size: 30px;
}

a.nav-link:link{
    
    font-weight: bold;
}
#navbar-link-title{
    color: #96031a;
    
    font-weight: bold;
}
a.nav-link:hover{
    color: white;
    
    font-weight: bold;
}

.nav-link{
    margin-left: 25px;
    color: #faa916;
}

.cart-count-div .cart-count{
    padding: 5px;
    font-size: 10px;
    position: relative;
    top: -33px;
    color: white;
    right: -14px;
    height: 10px;
    border-radius: 50%;
}
.cart-count-div{
    position: absolute;
    
}
</style>