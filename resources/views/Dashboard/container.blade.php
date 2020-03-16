<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Tedbus Admin</title>

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/zabuto_calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-datepicker/css/datepicker.css')}}" />
<link rel="stylesheet" href="css/theme.default.min.css" />
<style type="text/css">
  
  .tdh:hover{
    font-weight: bold;
    color: #20826B;
  }

   
  .search {
    width: 200px;
    border-radius: 5px;
    text-align: center;
    border: 1px solid #212121;
    height: 40px;
}

 
</style>

  <script src="{{asset('lib/chart-master/Chart.js')}}"></script>

</head>

<body>
  <section id="container">
    
    <!--header start-->
      @include('Dashboard.header')
    <!--header end-->
     
    <!--sidebar start-- Queue a smart way for this--> 
    @yield('sider')
    <!-- include('Dashboard.sidebar') -->
    <!--sidebar end-->
     
     @yield('maincontent')
    <!--main content start-->
    
    <!--main content end-->

 
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/table_search.js')}}"></script>
<script src="{{asset('js/jquery.tablesorter.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
   <script type="text/javascript" src="{{asset('lib/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>


<script src="{{asset('lib/advanced-form-components.js')}}"></script>
  <script type="application/javascript">
    $(document).ready(function() {
      $('table').tablesorter();
      $('#principal').on('keyup', function(){
          var principal = parseFloat($('#principal').val());
         var interest =  parseFloat($('#interestRate').val()/100);
         var multi = principal*interest
         var total = multi + principal; 
         $('#totalAmount').val(total);
         $('#totalPayment').val(total);
      }); 
      $('#interestRate').on('keyup', function(){
          var principal = parseFloat($('#principal').val());
         var interest =  parseFloat($('#interestRate').val()/100);
         var multi = principal*interest
         var total = multi + principal; 
         $('#totalAmount').val(total);
         $('#totalPayment').val(total);
      }); 
      
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
         
      });


    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
 {{--  <script type="text/javascript">
    function sortTable(table, col, reverse) {
    var tb = table.tBodies[0], // use `<tbody>` to ignore `<thead>` and `<tfoot>` rows
        tr = Array.prototype.slice.call(tb.rows, 0), // put rows into array
        i;
    reverse = -((+reverse) || -1);
    tr = tr.sort(function (a, b) { // sort rows
        return reverse // `-1 *` if want opposite order
            * (a.cells[col].textContent.trim() // using `.textContent.trim()` for test
                .localeCompare(b.cells[col].textContent.trim())
               );
    });
    for(i = 0; i < tr.length; ++i) tb.appendChild(tr[i]); // append each row in order
}

function makeSortable(table) {
    var th = table.tHead, i;
    th && (th = th.rows[0]) && (th = th.cells);
    if (th) i = th.length;
    else return; // if no `<thead>` then do nothing
    while (--i >= 0) (function (i) {
        var dir = 1;
        th[i].addEventListener('click', function () {sortTable(table, i, (dir = 1 - dir))});
    }(i));
}

function makeAllSortable(parent) {
    parent = parent || document.body;
    var t = parent.getElementsByTagName('table'), i = t.length;
    while (--i >= 0) makeSortable(t[i]);
}

window.onload = function () {makeAllSortable();};
  </script>
   --}}
</body>

</html>
