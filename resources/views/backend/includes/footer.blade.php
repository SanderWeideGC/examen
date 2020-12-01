</div>
<script src="https://bootadmin.net/js/jquery.min.js"></script>
<script src="https://bootadmin.net/js/bootstrap.bundle.min.js"></script>
<script src="https://bootadmin.net/js/datatables.min.js"></script>
<script src="https://bootadmin.net/js/moment.min.js"></script>
<script src="https://bootadmin.net/js/fullcalendar.min.js"></script>
<script src="https://bootadmin.net/js/bootadmin.min.js"></script>
<script>
  $(document).ready(function () {
      $('#example').on( 'init.dt', function () {
        setTimeout(function() {
          addClickToButton();
        }, 1250);

      }).DataTable();
  });
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118868344-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-118868344-1');
</script>

<script>

function addClickToButton() {
$('.removeButton').click(function() {
  var confirm = window.confirm("Weet u zeker dat u deze baan wilt verwijderen?");
  var id = $(this).data('id');
  var type = $(this).data('type');
  if(confirm) {
      $.ajax(
      {
          url: "/admin/" + type + "/"+ id + "/delete",
          success: function()
          {
            location.reload();
          }
      }); 
  }
});
}
</script>
</body>
</html>