<a class="nav-link" href="<?php echo site_url('User/addform')?>">adduser</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">add</th>
      <th scope="col">tel</th>
      <th scope="col">email</th>
      <th scope="col">facebook</th>
      <th scope="col">line</th>
      <th scope="col">Update</th>
      <th scope="col">Del</th>


    </tr>
  </thead>
  <tbody>
      <?php  $i = 1;
      if($data_user != false){
      foreach($data_user->result_array() as $row_2){?> <!--result_array คล้าย fetch_array -->
            <tr>
      <th scope="row"><?php echo $i++;?></th>
      <td><?php echo $row_2['name'];?></td>
      <td><?php echo $row_2['add']?></td>
      <td><?php echo $row_2['tel'];?></td>
      <td><?php echo $row_2['email'];?></td>
      <td><?php echo $row_2['facebook'];?></td>
      <td><?php echo $row_2['line'];?></td>
      <td><a href="<?php echo site_url("user/update_2/".$row_2['tel']);?>"><button type="button" class="btn ">update</button></a></td>
      <td><a href="<?php echo site_url("user/delete_2/".$row_2['tel'])?>"><button type="button" class="btn btn-danger">Delete</button></a></td><!--ส่งค่า username ไปที่ class user->funtion delete-->
    </tr>
      <?php } } ?>
  </tbody>
</table> 
