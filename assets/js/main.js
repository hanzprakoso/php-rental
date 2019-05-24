  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('select').formSelect();
    $('.parallax').parallax();
  });

var myVar = setInterval(myTimer, 1000);

function myTimer() {
  let t = moment().format('MMMM Do YYYY, h:mm:ss a');
  document.getElementById("jam").innerHTML = t;
}
