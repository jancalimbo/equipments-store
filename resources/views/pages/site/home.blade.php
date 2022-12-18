@extends('components.base')

@section('content')

  <div class="home">
    <div class="container">
      <div class="d-flex justify-content-center">
        <div class="card">
          Providing you quality equipments for the best experience.
        </div>
      </div>
    </div>
   
  </div>

  <style>
    .home{
      width: 100%;
      height: 90vh;
      background-image: url('gym-green.jpg');
      background-size: cover;
    }
    .home .container div .card {
      margin-top: 30vh;
      background: rgba(0, 0, 0, 0.936);
      border-radius: 10px;
      padding: 100px;
      color: white;
      box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.266);
    }
  </style>
@endsection
