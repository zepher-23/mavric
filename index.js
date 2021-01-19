var y=true;

$('.welcome').addClass('welcome2');
 function myFunction(x) {
    x.classList.toggle("change");
    $('.service').removeClass('active');
        if(x.hasClass("change")){
          y=true;
        }
        else{
          y=false;
        }
  }
 
     console.log(y);
  $('.container').on('click', function() {
    console.log("true");
	$('.nav').toggleClass('active');
});

$('.drop').on('click', function() {
  console.log(y);
  if(y===true){
    console.log("true");
  $('.service').toggleClass('active');
  }

});
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}