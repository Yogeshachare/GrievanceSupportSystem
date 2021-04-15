<table id="example" class="display" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Name</th>
      <th>Position</th>
      <th>Office</th>
      <th>Age</th>
      <th>Start date</th>
      <th>Salary</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>Name</th>
      <th>Position</th>
      <th>Office</th>
      <th>Age</th>
      <th>Start date</th>
      <th>Salary</th>
    </tr>
  </tfoot>
  <tbody>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>$320,800</td>
    </tr>
    <tr>
      <td>Garrett Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$170,750</td>
    </tr>
    <tr>
      <td>Ashton Cox</td>
      <td>Junior Technical Author</td>
      <td>San Francisco</td>
      <td>66</td>
      <td>2009/01/12</td>
      <td>$86,000</td>
    </tr>                         
  </tbody>
</table>

/*Add jquery for datatable search multiple value filtering select dropdown in each column*/

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.12/b-1.2.2/fh-3.1.2/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.12/b-1.2.2/fh-3.1.2/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css"></script>
<script type="text/javascript"></script>
$(document).ready(function() {
  $('#example').DataTable({
    initComplete: function() {
      this.api().columns().every(function() {
        var column = this;
        /*added class "select"*/
        var select = $('<select class="select" multiple="multiple"><option value=""></option></select>')
          .appendTo($(column.footer()).empty())
          .on('change', function() {
            var vals = $('option:selected', this).map(function(index, element) {
              return $.fn.dataTable.util.escapeRegex($(element).val());
            }).toArray().join('|');

            column
              .search(vals.length > 0 ? '^(' + vals + ')$' : '', true, false)
              .draw();
          });
        column.data().unique().sort().each(function(d, j) {
          select.append('<option value="' + d + '">' + d + '</option>')
        });
      });
      /*select2 init for .select class */
      $(".select").select2();
    }
  });
});
</script>