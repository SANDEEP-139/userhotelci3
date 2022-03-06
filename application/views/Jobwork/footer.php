

        <!-- jQuery -->
       <script src="<?php  echo base_url();?>dist/js/plugins.min.js"></script>
        <script src="<?php  echo base_url();?>dist/js/common.js"></script>
        
 
        <script>
function manage() {
    document.getElementById("management").style.width = "100%";
//$(this).parent().find('.nospave').show();
var element = document.getElementById("management");
   element.classList.add("fadeIn");
   element.classList.remove("fadeOut");

}
function closeNav() {
    document.getElementById("management").style.width = "0";

    var element = document.getElementById("management");
   element.classList.add("fadeOut");
   element.classList.remove("fadeIn");
}
// close function for query list
 function closeNav(input) {
 	$(input).parent().hide();
}

</script>
 <script>
        $(document).ready(function() {
    $('table.display').DataTable();
} );
        </script>

    </body>
</html>