<style>
footer {
    background-color: #eb8d4d;
    color: #f5f5f5;
    padding: 32px;
    border-top: solid white;
}

footer a {
    color: #f5f5f5;
}

footer a:hover {
    color: #777;
    text-decoration: none;
}


</style>

<footer class="text-center">
  <a class="up-arrow" href="#myCarousel" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Created by Team BoB by RED tribe</p> 
</footer>

<script>
$(document).ready(function(){
  
  $('[data-toggle="tooltip"]').tooltip(); 
  
  
  $(".navbar a, footer a[href='#myCarousel']").on('click', function(event) {

    
    if (this.hash !== "") {

      
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>