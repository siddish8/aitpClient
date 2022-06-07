<?php include "templates/header.php"; ?>
<h2>Window print2</h2>
<h5>No event listeners here.. will be used as iframe</h5>
<button id="printButton" >Print this</button>
<hr>
<button id="clear" >Clear</button>
<hr>
<!-- <a onclick="openInNewWindow('https://testresources.aitestpro.com/sample/tab2.php');">New tab new url-test</a> -->
<script>


$("#clear").click(function(event){
    event.stopImmediatePropagation();
location.reload();
});

$("#printButton").click(function(event) {
  event.stopImmediatePropagation();
  //Do Stuff

  window.print();
});

// function openInNewWindow(url) {
//  window.open(url,"win");
// }
    </script>
<?php include "templates/footer.php"; ?>