<?php include "templates/header.php"; ?>
<h2>Window print</h2>
<button id="printButton" >Print this</button>
<hr>
<button id="clear" >Clear</button>
<hr>
<!-- <a onclick="openInNewWindow('https://testresources.aitestpro.com/sample/tab2.php');">New tab new url-test</a> -->
<script>

(function() {

var beforePrint = function() {
    console.log('Functionality to run before printing.');
};

var afterPrint = function() {
    console.log('Functionality to run after printing');
};

if (window.matchMedia) {
    console.log(window.matchMeida);
    var mediaQueryList = window.matchMedia('print');
    mediaQueryList.addListener(function(mql) {
        if (mql.matches) {
            beforePrint();
        } else {
            afterPrint();
        }
    });
}

window.onbeforeprint = beforePrint;
window.onafterprint = afterPrint;

}());

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