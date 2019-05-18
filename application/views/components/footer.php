</div>
<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                    </li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                    document.write(new Date().getFullYear())
                    </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                </span>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<!--   Core JS Files   -->
<script src="<?=base_url('public/assets/js/core/jquery.min.js')?>"></script>
<script src="<?=base_url('public/assets/js/core/popper.min.js')?>"></script>
<script src="<?=base_url('public/assets/js/core/bootstrap.min.js')?>"></script>
<script src="<?=base_url('public/assets/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!-- Chart JS -->
<script src="<?=base_url('public/assets/js/plugins/chartjs.min.js')?>"></script>
<!--  Notifications Plugin    -->
<script src="<?=base_url('public/assets/js/plugins/bootstrap-notify.js')?>"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?=base_url('public/assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript')?>"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="<?=base_url('public/assets/demo/demo.js')?>"></script>
<script>
$(document).ready(function() {
    // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
    demo.initChartsPages();
});

function add_connection(email, ref) {
btn = ref;
  $.ajax({
    url : "<?=base_url('index.php/main/add_connection')?>",
    type : "POST",
    dataType : "json",
    data : {"to" : email},
    success : function(data) {
        // do something
        console.log(data);
        $(btn).prop('disabled', true);
        $(btn).html('Pending');
    }
});
}
</script>
</body>

</html>