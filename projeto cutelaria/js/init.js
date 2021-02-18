(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.dropdown-trigger').dropdown();

  });

  //Navbar Dropdown
  const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
  const instancesDropdown = M.Dropdown.init(elemsDropdown,{
    coverTrigger:false
  })

  elemsSidenav = document.querySelectorAll(".sidenav");
  const instancesSidenav = M.sidenav.init(elemsSidenav, {edge:"right"});

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });
  
 // end of document ready
})(jQuery); // end of jQuery name space
