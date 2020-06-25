<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php $this->load->view("_includes/head.php") ?>
<!-- BEGIN: Head-->
<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 2-columns" data-open="click" data-menu="horizontal-menu" data-col="2-columns">

<!-- BEGIN: Navbar-->
<?php $this->load->view("_includes/navbar.php") ?>
<!-- END: Navbar-->

<!-- BEGIN: SideNav-->
<?php $this->load->view("_includes/sidenav.php") ?>
<!-- END: SideNav-->

<!-- BEGIN: Breadcrumbs-->
<?php //$this->load->view("_includes/breadcrumbs.php") ?>
<!-- END: Breadcrumbs-->

<?php echo $body ?>

<!-- BEGIN: Footer-->
<?php $this->load->view("_includes/footer.php") ?>
<!-- END: Footer-->

<!-- BEGIN: JS-->
<?php $this->load->view("_includes/js.php") ?>
<!-- END: JS-->

<?php if ($sel_list != ""){ ?>
    <script>
        $(document).ready(function(){
            $(".<?php echo $sel_list; ?>").addClass('active');
        });
    </script>
<?php } ?>

</body>

</html>
