<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<link rel="stylesheet" href="styles.css">
<body>

<div class="w3-container">
  <div><br></br>      </div>
  <input class="w3-input w3-border w3-padding" type="text" placeholder="Search for names.." id="myInput" onkeyup="myFunction()">

  <table class="w3-table-all w3-margin-top" id="myTable">
    <tr>
      <th style="width:60%; background-color:black;color:white;">Number</th>
      <th style="width:40%; background-color:black;color:white;">Text Number</th>
    </tr>
    <tr>
      <td>1</td>
      <td>One</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Two</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Three</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Four</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Five</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Six</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Seven</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Eight</td>
    </tr>
  </table>

</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</body>
</html>
