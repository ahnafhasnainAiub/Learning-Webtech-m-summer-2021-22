<?php
  session_start();
?>

<?php
  $file = fopen('orderproduct.txt', 'r');
  $totalData = array();

  while(!feof($file)){
    $data = fgets($file);
    $number = explode('|', $data);
    array_push($totalData, $number);
 
    if($number[0] === ""){
        continue;
    }
?>
  
  <?php
    //}
  }
?>
     <form method="post" action="confirmOrder.html" enctype="">
    </table>

     <h2>My Order List:</h2>
     <table border="1">
      <tr>
        <td>Vegetable Number</td>
        <td>Fruits Number   </td>
        <td>Animal Number   </td>
      </tr>
     <?php 
     $totalLength = count($totalData);
     ?>
     <tr>
    <td><?php echo $totalData[$totalLength-2][0]; ?></td>
    <td><?php echo $totalData[$totalLength-2][1]; ?></td>
    <td><?php echo $totalData[$totalLength-2][2]; ?></td>
  </tr>
  </table>
  <br>  

  
</form>
<br>
<h1>Delete your Order :-</h1>
<a href="deleteorder.php">Delete Order</a>
  
    </body>

</html>
