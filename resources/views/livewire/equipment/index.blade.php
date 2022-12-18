<div>
   <div class="container mt-4">
    <div class="d-flex justify-content-between">
      <h1>Inventory</h1>
      <div class="btns">
        <a class="btn" style="background-color: #faa916; " href="{{ route('add-to-inventory') }}">
          <i class="fa-solid fa-plus"></i>
        </a>
      </div>
    </div>

    <hr>
    
    {{-- <br>
    <div class="col search-div">
      <input type="text" class="search form-control" placeholder="Find an eqpmt.." wire:model="search">
    </div>
    <br> --}}


    <div class="container">
      <div id="" class="row">
        @if ($equipments->count() == 0)
          <h1 class="text-center">
            No equipment in inventory yet
          </h1>

          @else
          <table class="table table-bordered table-striped table-responsive table-hover">
            <thead class="bg-dark" style="color: #faa916">
              <tr>
                
                <th>Photo</th>
                <th>Name</th>
                <th>Stocks</th>
                <th>Description</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($equipments as $eqpmt )
              <tr>
                
                <td class="d-flex justify-content-center">
                  @php
                    $images = App\Models\Image::where('code', $eqpmt->code)->get();
                  @endphp
  
                  @foreach ($images as $img)
                  <img id="" class="" src="{{ asset('uploads/all')}}/{{ $img->image }}" alt="">
                  @endforeach
  
                </td>
                <td>{{ $eqpmt->name }}</td>
                <td>
                  {{ $eqpmt->stocks }}
                </td>
                <td>
                  {{ $eqpmt->description }}
                </td>
                <td>
                  <a href="{{url('/equipments/update',['eqpmt'=>$eqpmt->id]) }}" class="m-2 btn  bg-dark">
                    <i style="color: #faa916;" class="fa-solid fa-pen"></i> 
                  </a>
                  <a href="{{url('/equipments/delete',['eqpmt'=>$eqpmt->id]) }}" class="m-2 btn bg-dark"><i class="fa-solid fa-trash" style="color: #faa916;"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        @endif

      </div>

   
    </div>

    <style>
      img{
        height: 150px;
        width: 200px;
        object-fit: cover;
      }
    </style>
   </div>
</div>


