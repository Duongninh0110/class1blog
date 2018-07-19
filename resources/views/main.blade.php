<!DOCTYPE html>
<html lang="en">
  <head>
    @include ('partials._header')
  </head>

  <body>
    @include ('partials._nav')

    <br>
    <br>
    <br>
    
    <div class="container">
      <div class="row">
      
      
      @yield ('content')   
      @include('partials._comment')
      
        
      @include('partials._category')
      
    
      
    </div><!--end of row-->


    </div> <!--end of container-->
    @include ('partials._footer')
    @include ('partials._javascript')

  </body>
</html>
