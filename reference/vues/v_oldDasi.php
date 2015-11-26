<html>

<head>

<!-- Bootstrap stylesheet -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- bootstrap widget theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.css">

<script src="../js/tablesorter-master/js/jquery-2.1.4.js"></script>

<!-- tablesorter plugin -->
<script src="../js/tablesorter-master/js/jquery.tablesorter.js"></script>
<!-- tablesorter widget file - loaded after the plugin -->
<script src="../js/tablesorter-master/js/jquery.tablesorter.widgets.js"></script>

<!-- pager plugin -->
<!-- <link rel="stylesheet" href="../js/tablesorter-master/css/jquery.tablesorter.pager.css">
<script src="../js/tablesorter-master/js/jquery.tablesorter.pager.js"></script> -->

</head>


<h1>Old Dasi</h1>

<a id="add_name">Ajouter son nom à la liste</a>

<br>

<form id="add">Essai</form>

<br>

<div style="width:60%; margin: auto">

<table> <!-- bootstrap classes added by the uitheme widget -->
  <thead>
    <tr>
      <th>Name</th>
      <th>Major</th>
      <th>Sex</th>
      <th>English</th>
      <th>Japanese</th>
      <th>Calculus</th>
      <th>Geometry</th></tr>
  </thead>

  <tbody>
    <tr><td>Student01</td><td>Languages</td><td>male</td><td>80</td><td>70</td><td>75</td><td>80</td></tr>
    <tr><td>Student02</td><td>Mathematics</td><td>male</td><td>90</td><td>88</td><td>100</td><td>90</td></tr>
    <tr><td>Student03</td><td>Languages</td><td>female</td><td>85</td><td>95</td><td>80</td><td>85</td></tr>
    <tr><td>Student04</td><td>Languages</td><td>male</td><td>60</td><td>55</td><td>100</td><td>100</td></tr>
    <tr><td>Student05</td><td>Languages</td><td>female</td><td>68</td><td>80</td><td>95</td><td>80</td></tr>
    <tr><td>Student06</td><td>Mathematics</td><td>male</td><td>100</td><td>99</td><td>100</td><td>90</td></tr>
    <tr><td>Student07</td><td>Mathematics</td><td>male</td><td>85</td><td>68</td><td>90</td><td>90</td></tr>
    <tr><td>Student08</td><td>Languages</td><td>male</td><td>100</td><td>90</td><td>90</td><td>85</td></tr>
    <tr><td>Student09</td><td>Mathematics</td><td>male</td><td>80</td><td>50</td><td>65</td><td>75</td></tr>
    <tr><td>Student10</td><td>Languages</td><td>male</td><td>85</td><td>100</td><td>100</td><td>90</td></tr>
  </tbody>
</table>

</div>

<script type="text/javascript">
$(function() {

	$("form#add").toggle();

	$('#add_name').on('click', function() {
		$("form#add").toggle();
	});

  // NOTE: $.tablesorter.theme.bootstrap is ALREADY INCLUDED in the jquery.tablesorter.widgets.js
  // file; it is included here to show how you can modify the default classes
  $.tablesorter.themes.bootstrap = {
    // these classes are added to the table. To see other table classes available,
    // look here: http://getbootstrap.com/css/#tables
    table        : 'table table-bordered table-striped',
    caption      : 'caption',
    // header class names
    header       : 'bootstrap-header', // give the header a gradient background (theme.bootstrap_2.css)
    sortNone     : '',
    sortAsc      : '',
    sortDesc     : '',
    active       : '', // applied when column is sorted
    hover        : '', // custom css required - a defined bootstrap style may not override other classes
    // icon class names
    icons        : '', // add "icon-white" to make them white; this icon class is added to the <i> in the header
    iconSortNone : '', // class name added to icon when column is not sorted
    iconSortAsc  : '', // class name added to icon when column has ascending sort
    iconSortDesc : '', // class name added to icon when column has descending sort
    filterRow    : '', // filter row class; use widgetOptions.filter_cssFilter for the input/select element
    footerRow    : '',
    footerCells  : '',
    even         : '', // even row zebra striping
    odd          : ''  // odd row zebra striping
  };

  // call the tablesorter plugin and apply the uitheme widget
  $("table").tablesorter({
    // this will apply the bootstrap theme if "uitheme" widget is included
    // the widgetOptions.uitheme is no longer required to be set
    theme : "bootstrap",

    widthFixed: true,

    headerTemplate : '{content} {icon}', // new in v2.7. Needed to add the bootstrap icon!

    // widget code contained in the jquery.tablesorter.widgets.js file
    // use the zebra stripe widget if you plan on hiding any rows (filter widget)
    widgets : [ "uitheme" ],

    widgetOptions : {
      // using the default zebra striping class name, so it actually isn't included in the theme variable above
      // this is ONLY needed for bootstrap theming if you are using the filter widget, because rows are hidden
      zebra : ["even", "odd"],

      // reset filters button
      filter_reset : ".reset",

      // extra css class name (string or array) added to the filter element (input or select)
      filter_cssFilter: "form-control",

      // set the uitheme widget to use the bootstrap theme class names
      // this is no longer required, if theme is set
      // ,uitheme : "bootstrap"

    }
  });
  // $.tablesorterPager({

  //   // target the pager markup - see the HTML block below
  //   container: $(".ts-pager"),

  //   // target the pager page select dropdown - choose a page
  //   cssGoto  : ".pagenum",

  //   // remove rows from the table to speed up the sort of large tables.
  //   // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
  //   removeRows: false,

  //   // output string - default is '{page}/{totalPages}';
  //   // possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
  //   output: '{startRow} - {endRow} / {filteredRows} ({totalRows})'

  // });

});
</script>