

</div><!-- #content -->

<?php wp_footer(); ?>

<script type="text/javascript">
function toggle_sidebar() {
    var accordion = document.getElementById("accordion");
    var left = document.getElementById("left-nav");
    var content = document.getElementById("ajax");
    var toggle = document.getElementById("hide-show");
    if (accordion.style.opacity === "0") {
        accordion.style.opacity = "1";
        content.style.width = "70%";
        content.style.padding = "8vh 20% 10% 0%";
        toggle.style.top = "auto";
        toggle.textContent = "Hide menu";
        left.style.top = "8vh";
    } else {
        accordion.style.opacity = "0";
        content.style.width = "90%";
        content.style.padding = "8vh 25% 10% 15%";
        toggle.style.top = "7%";
        toggle.textContent = "Show menu";
        left.style.top = "-36vh";
    }
}
</script>


</body>
</html>
