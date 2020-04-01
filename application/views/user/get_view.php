<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">name</th>
      <th scope="col">age</th>
    </tr>
  </thead>
  <tbody>
      <?php  $i = 1;
      foreach($data_user->result_array() as $row){?>
            <tr>
      <th scope="row"><?php echo $i++;?></th>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['password']?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['age'];?></td>
    </tr>
      <?php } ?>
  </tbody>
</table> 