<?php
echo dirname(__FILE__).'<br>';
echo $_SERVER['DOCUMENT_ROOT'].'<br>';
?>
<script>
    console.log(window.document.location.pathname);
    console.log(window.location.host);
    var host=window.location.protocol+'//'+window.location.host;
    console.log(host);
</script>
