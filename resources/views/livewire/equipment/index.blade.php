<div>
    <div class="d-flex justify-content-between">
      <h1>Inventory</h1>
      <div class="btns">
        <a class="btn btn-primary" href="{{ route('add-to-inventory') }}">
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
        <table class="table table-bordered table-striped table-responsive table-hover">
          <thead>
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
              
              <td>
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
               
                <a class="m-2 btn" href="{{url('/inventory/eqpmts/view',['eqpmt'=>$eqpmt->id]) }}"><i class="fa-solid fa-eye"></i>
                </a>
                <a href="{{url('/inventory/eqpmts/edit',['eqpmt'=>$eqpmt->id]) }}" class="m-2 btn">
                  <i class="fa-solid fa-pen"></i> 
                </a>
                <a href="{{url('/inventory/eqpmts/delete',['eqpmt'=>$eqpmt->id]) }}" class="m-2 btn"><i class="fa-solid fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>

   
    </div>

    <style>
      img{
        height: 150px;
        /* width: 100px; */
      }
    </style>
</div>


