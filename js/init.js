(function($){
  $(function(){

    $(document).ready(function() {
    $('select').material_select();
  });

    $('.button-collapse').sideNav();
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
    $(document).ready(function(){
      $('.parallax').parallax();
    });
    
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  }); // end of document ready
})(jQuery); // end of jQuery name space