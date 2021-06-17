<?php
    include('php/sessionManager.php');
?>
<!doctype html>
<html lang="en">
 
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>STAFF MANAGEMENT SYSTEM</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link href='assets/vendor/full-calendar/css/fullcalendar.css' rel='stylesheet' />
    <link href='assets/vendor/full-calendar/css/fullcalendar.print.css' rel='stylesheet' media='print' />
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
                include('pages/calender.php');   
                include('components/footer.php');   
           ?>
        </div>
    </div>
 <!-- ============================================================== -->
     <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src='assets/vendor/full-calendar/js/moment.min.js'></script>
    <script src='assets/vendor/full-calendar/js/fullcalendar.js'></script>
    <script src='assets/vendor/full-calendar/js/jquery-ui.min.js'></script>
    <script src='assets/vendor/full-calendar/js/calendar.js'></script>
    <script type="text/javascript">
        $('#calendar2').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            events:"php/fetch-timestamp.php",
            eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                            event.allDay = true;
                        } else {
                            event.allDay = false;
                        }
                    }

        });
    </script>
    <script src="assets/libs/js/main-js.js"></script>
     <script src="assets/libs/js/custom.js"></script>
</body>
 
</html>