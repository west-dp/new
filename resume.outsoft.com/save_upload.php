<?php
  $target_filepath = "/tmp/" . basename($_FILES['upload_scn']['name']);
 
  if (move_uploaded_file($_FILES['upload_scn']['tmp_name'], $target_filepath)) {
    $result = ....
  }
 
echo json_encode($result);
?>