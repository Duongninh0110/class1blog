<!DOCTYPE html>
<html lang="en">
  <head>
    @include ('partials.header')
  </head>

  <body>
    @include ('partials._nav')
    
    <div class="container">
      <div class="row">
      @include('partials._Messages')
      
      @yield ('content')    
    
      @include ('partials._footer')
    </div><!--end of row-->

    </div> <!--end of container-->

    @include ('partials._javascript')

  </body>
</html>
