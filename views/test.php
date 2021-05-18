<?php  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html"; ?>

<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
<tbody>
    <tr class="rowlink">
        <td>
            <div class="dropdown">
                <a class="dropdown-toggle rowlink" data-toggle="dropdown" href="#">
                    Click For Dropdown Menu
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li>
                        <a tabindex="-1" href="#">
                            Action
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="#">
                            Another action
                        </a>
                    </li>
                </ul>
            </div>
        </td>
        <td>
            Click For Dropdown Menu
        </td>    
    </tr>
    <tr><td>Cell</td><td>Cell</td></tr>         
</tbody>
</table>​

<script src="js/jquery.js"></script>
<script src="js/bootstrap-dropdown.js"></script>

<script>
    $(function() {
        $(this).find('.dropdown-toggle').dropdown();

        $('.rowlink').on('click', function(e) {
            $(this).find('.dropdown').toggleClass('open');
            e.stopPropagation();
        });
    });
</script>

</body>
</html>