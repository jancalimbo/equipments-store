<div>
    <div id="" class="row">
        @foreach ($equipments as $eqpmt )
          <div class="mb-3 w-25">
            <a id="eqpmt-{{ $eqpmt->id }}" class="col-4 eqpmt-to-view">
              <div id="" class="eqpmt-card card mb-3 {{ $eqpmt->stocks == 0 ? 'sold-out-container':'eqpmt-container' }} " >
              <div class="">
                <div id="image-box" class=" m-3">
                  @php
                      $images = App\Models\Image::where('code', $eqpmt->code)->get();
                  @endphp
      
                  @foreach ($images as $img)
                      <img id="" class="" src="{{ asset('uploads/all')}}/{{ $img->image }}" alt="">
                      
                  @endforeach
                </div>
              </div>
              <div class="card-body details">
                <h6 class="text-center">
                  [{{ $eqpmt->code }}] <br> {{ $eqpmt->name }}
                  
                </h6>
                
              </div>
              <div class="card-footer">
                <button class="btn">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <button class="btn">
                    <i class="fa-regular fa-comment"></i>
                </button>
                <button class="btn">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
              </div>
               
              </div>
              {{-- <div id="" class="card-footer">
                <a href="{{url('/inventory/eqpmts/edit',['eqpmt'=>$eqpmt->id]) }}" class="btn"><i id="eqpmt-tiled-edit" class='bx bxs-edit'></i></a>
                <a href="{{url('/inventory/eqpmts/delete',['eqpmt'=>$eqpmt->id]) }}" id="eqpmt-tiled-delete" class="btn "><i class='bx bxs-trash-alt' ></i></a>
            </div> --}}
            </a>
            
          </div>
    
          
    
        @endforeach
    
       
      </div>

      <style>
        
        #image-box img{
            height: 180px;
            width: 100%;
            object-fit: cover
        }
        a{
            color: black;
            text-decoration: none;
        }
        a:hover{
            color: black;
            text-decoration: none;
        }
        
      </style>
</div>
