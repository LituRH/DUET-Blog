
<?php
if($_SESSION['user'] == '12345'){
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>DUET Blog</title>
<meta name="keywords" content="" />
<meta name="Premium Series" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
<link href="stylecss2.css" rel="stylesheet" type="text/css" media="screen" />

<script>
    function back_button()
    {
        var uri='indexHome.php';
        window.location.href= uri;
    }
</script>
<?php 
}else {
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>DUET Blog</title>
<meta name="keywords" content="" />
<meta name="Premium Series" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
<link href="stylecss2.css" rel="stylesheet" type="text/css" media="screen" />
<script>
    function back_button()
    {
        var uri='indexHome.php';
        window.location.href= uri;
    }
</script>	 
<?php 
}
?>