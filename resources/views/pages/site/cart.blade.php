@extends('components.base')

@section('content')
  <div class="container mt-5 mb-5">
    @if ($items->count() == 0)
      <h1 class="text-center">Nothing in cart</h1>

      @else
      <h4>Items in Cart</h4>
      <br>
      <div class="card  bg-light">
        <div class="card-body">
          @foreach ($items as $item)
            <div class="d-flex justify-content-between">
              <div id="image-box" class=" m-3 w-25">
                @php
                    $images = App\Models\Image::where('code', $item->code)->get();
                @endphp
              
                @foreach ($images as $img)
                    <img id="" class="" src="{{ asset('uploads/all')}}/{{ $img->image }}" alt="">
                    
                @endforeach
              </div>
              <div class="details w-75 p-3 ">
                <table class="table border-light">
                  <tr>
                    <td>
                      Item Name
                    </td>
                    <td style="">
                      {{ $item->item }}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Quantity
                    </td>
                    <td style="">
                      23
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Price
                    </td>
                    <td style="">
                      Php 1,612.00
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <hr>
                      Total
                    </td>
                    <td style="">
                      <hr>
                     Php 37,076.00
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <hr>
          @endforeach
        </div>
        <div class="card-footer bg-light d-flex justify-content-end">
          <a href="{{ route('checkout') }}" class="btn btn-warning">Checkout</a>
        </div>
      </div>
    @endif
  </div>
    

  <style>
      #image-box img{
        height: 180px;
        /* width: 100%; */
        object-fit: cover;
      }
      .details tr td{
        margin-right: 50px;
      }
  </style>
@endsection
