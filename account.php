<!doctype html>
<?php
    include('php/sessionManager.php');
?>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <title>STAFF MANAGEMENT SYSTEM | Account</title>
</head>

<body onload="$('.loader').removeClass('is-active')">
    <div class="loader loader-border is-active" data-text="Loading..."></div>
    <div class="dashboard-main-wrapper">
         <?php
            include('components/header.php');
            include('components/sidebar.php');
        ?>
        <div class="dashboard-wrapper">
            <?php
                include('pages/account.php');
                include('components/footer.php');
            ?>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
     <script src="assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
     <!-- datepicker -->
    <script src="assets/vendor/datepicker/moment.js"></script>
    <script src="assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
    <script src="assets/vendor/datepicker/datepicker.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/libs/js/custom.js"></script>
    <script type="text/javascript">
        $(function(e) {
    "use strict";
        $(".date-inputmask").inputmask("dd/mm/yyyy"),
        $(".phone-inputmask").inputmask("(999) 999-9999"),
        $(".email-inputmask").inputmask({
            mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
            greedy: !1,
            onBeforePaste: function(n, a) {
                return (e = e.toLowerCase()).replace("mailto:", "")
            },
            definitions: {
                "*": {
                    validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                    cardinality: 1,
                    casing: "lower"
                }
            }
        })
});
    </script>
</body>
 
</html>