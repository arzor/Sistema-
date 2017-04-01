<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TCG Admin</title>

    <link href="lumino/css/bootstrap.min.css" rel="stylesheet">
    <link href="lumino/css/datepicker3.css" rel="stylesheet">
    <link href="lumino/css/styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="lumino/js/lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
    <script src="lumino/js/html5shiv.js"></script>
    <script src="lumino/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

@include('admin.includes.bars')

@yield('container')

<script src="lumino/js/jquery-1.11.1.min.js"></script>
<script src="lumino/js/bootstrap.min.js"></script>
<script src="lumino/js/chart.min.js"></script>
<script src="lumino/js/chart-data.js"></script>
<script src="lumino/js/easypiechart.js"></script>
<script src="lumino/js/easypiechart-data.js"></script>
<script src="lumino/js/bootstrap-datepicker.js"></script>
<script>
    $('#calendar').datepicker({
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>

</html>
