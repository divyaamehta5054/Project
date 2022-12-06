<div class="container">
  <h2>All users</h2>
  <!-- <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>             -->
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone no</th>
        <th>Email</th>
        <th>Massage</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($user1 as $e)
      {
      ?>
      <tr>
        <td><?php echo $e->cid;?></td>
        <td><?php echo $e->Name;?></td>
        <td><?php echo $e->pno;?></td>
        <td><?php echo $e->email;?></td>
        <td><?php echo $e->msg;?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>