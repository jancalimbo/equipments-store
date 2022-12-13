<div class="container">
  <h1 class="text-center">Hello, {{ $user->name }}!</h1>
  <h3 class="text-center">It is our pleasure to hook you up with the best quality equipments straight from our store!</h3>

<br>

<h5 class="text-center">Click the link below to get verified and receive notifications from us.</h5>

<p class="text-center">
  <a href="{{ url('/verification/' . $user->id . '/' . $user->remember_token)}} " class="text-center">Get verified</a>
</p>
</div>

