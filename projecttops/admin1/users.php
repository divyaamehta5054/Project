<div class="container">
  <h2>All Users</h2>
  <!-- <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>             -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Bio</th>
        <th>Gender</th>
        <th>Language</th>
        <th>Country</th>
        <th>Action</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($user as $u)
      {
      ?>
      <tr>
        <td><?php echo $u->id;?></td>
        <td><?php echo $u->name;?></td>
        <td><?php echo $u->email;?></td>
        <td><?php echo $u->bio;?></td>
        <td><?php echo $u->gender;?></td>
        <td><?php echo $u->lan;?></td>
        <td><?php echo $u->country;?></td>
        <td><a href="delete_user?did=<?php echo $u->id;?>">Delete</a>/ <a href="edit_user?eid=<?php echo $u->id;?>">Update</a></td>
        <td><a href="status?sid=<?php echo $u->id?>&&sta=<?php echo $u->status;?>"><?php echo $u->status;?></a></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
