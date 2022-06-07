<?php include "templates/header.php"; ?>
<h2>Iframe of </h2>
<a href="https://devresources.aitestpro.com/sample/public/print2.php">print2.php</a>
<hr>
<iframe width=600 height=600 src="https://devresources.aitestpro.com/sample/public/print2.php"></iframe>
<hr>

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


// function openInNewWindow(url) {
//  window.open(url,"win");
// }
    </script>
<?php include "templates/footer.php"; ?>