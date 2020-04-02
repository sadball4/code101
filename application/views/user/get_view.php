<a class="nav-link" href="<?php echo site_url('User/addform2')?>">adduser</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">name</th>
      <th scope="col">age</th>
      <th scope="col">Update</th>
      <th scope="col">Del</th>
    </tr>
  </thead>
  <tbody>
      <?php  $i = 1;
      if($data_user != false){
      foreach($data_user->result_array() as $row){?> <!--result_array คล้าย fetch_array -->
            <tr>
      <th scope="row"><?php echo $i++;?></th>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['password']?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['age'];?></td>
      <td><a href="<?php echo site_url("user/update/".$row['username']);?>"><button type="button" class="btn ">update</button></a></td>
      <td><a href="<?php echo site_url("user/delete/".$row['username'])?>"><button type="button" class="btn btn-danger">Delete</button></a></td><!--ส่งค่า username ไปที่ class user->funtion delete-->
    </tr>
      <?php } } ?>
  </tbody>
</table> 

