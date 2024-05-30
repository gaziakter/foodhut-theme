
    <!-- page footer  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
            <?php dynamic_sidebar( 'footer-left-widget'); ?>
            </div>
            <div class="col-sm-4">
            <?php dynamic_sidebar( 'footer-center-widget'); ?>
            </div>
            <div class="col-sm-4">
            <?php dynamic_sidebar( 'footer-right-widget'); ?>
            </div>
        </div>
    </div>
    <?php footer_copyright(); ?>
    <!-- end of page footer -->

    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <?php wp_footer(); ?>
</body>
</html>
