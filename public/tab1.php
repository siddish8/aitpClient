<?php include "templates/header.php"; ?>
<h2>Tab 1</h2>
<div onclick="openInNewTab('tab2.php');">New tab(2)</div>
<hr>
<a onclick="openInNewWindow('https://testresources.aitestpro.com/sample/tab2.php');">New tab new url-test</a>
<script>
    function openInNewTab(url) {
 window.open(url, '_blank').focus();
}

function openInNewWindow(url) {
 window.open(url,"win");
}
    </script>
<?php include "templates/footer.php"; ?>