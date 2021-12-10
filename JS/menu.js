function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function openOps() {
          document.getElementById("myOps").style.width = "250px";
        }
        
function closeOps() {
  document.getElementById("myOps").style.width = "0";
}

function filme(i){
    location.href = "/php/filme.php?i="+i;
}

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
