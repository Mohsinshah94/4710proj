<?php
function sqlEscape($str) {
  global $sql;
  return mysqli_real_escape_string($sql, $str);
}

function htmlEscape($str) {
  return htmlspecialchars($str);
}

function printHtml($str) {
  print(htmlEscape($str));
}

function printSql($str) {
  print(sqlEscape($str));
}

function noop(...$args) {}

$servername = "localhost";
$db = "csc4710";
$sql = mysqli_connect($servername, "root", "", $db);
if(mysqli_connect_errno()) {
  die("Connection failed: ".mysqli_connect_error());
}

function query($query, $fn='noop', $onBadNews='noop')
{
  global $sql;
  if($result = mysqli_query($sql, $query)) {
    if($result !== True) {
      while ($row = mysqli_fetch_row($result)) {
        call_user_func($fn, $row);
      }
      return $result;
    }
  } else {
    call_user_func($onBadNews);
  }
}

$rownumber=0;
$tableModel=[];
$command = 'NO_COMMAND';
$queryResult = 'RESULT_NOT_YET_SET';
if(array_key_exists("query", $_POST)) {
  global $command, $queryResult;
  $command = $_POST["query"];
  $queryResult = query($command,
    function($row){
      global $rownumber, $tableModel;
      $tableModel[$rownumber++] = $row;
    }
  );
} else {
  die("No query present in POST!");
}

printf('<code>%s</code>', htmlEscape($command));

?>
<!-- QUERY RESULTS TABLE -->
<table style='text-align: left; padding: 4px; border-collapse: collapse; width: 100%;'>
  <tr>
  <?php
    for($i = 0; $i < mysqli_num_fields($queryResult); $i++) {
      $field = mysqli_fetch_field_direct($queryResult, $i);
      $name = $field->name;
      $table = $field->table;
      printf('<th>%s.%s</th>', htmlEscape($table), htmlEscape($name));
    }
  ?>
  </tr>
<?php
  foreach ($tableModel as $i => $row) {
    printf('<tr style="border: 1px solid black;">');
    foreach($row as $j => $elem) {
      printf(
        '<td style="padding: 6px;">'
        .htmlEscape($elem).
        '</td>'
      );
    }
    printf('</tr>');
  }
?>
</table>
<?php mysqli_free_result($queryResult); mysqli_close($sql); ?>