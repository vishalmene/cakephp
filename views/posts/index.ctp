<!-- File: app/views/posts/index.ctp -->
<?php echo $this->Html->link('Logout',
      array('controller' => 'users', 'action' => 'logout')); ?><br>
<h1>Blog posts</h1>
<?php echo $this->Html->link('Add Post', 
array('controller' => 'posts', 'action' => 'add')); ?><br>
<table>
  <tr>
    <th>Id</th>
     <th>Title</th>
     <th>Actions</th>
     <th>Created</th>
  </tr>
<!-- Here is where we loop through our $posts array and 
                             printing out post info -->
  <?php foreach ($posts as $post): ?>
  <tr>
    <td><?php echo $post['Post']['id']; ?></td>
    <td><?php echo $this->Html->link($post['Post']['title'],
                      array('controller' => 'posts', 'action' => 'view',
                                          $post['Post']['id'])); ?></td>
    <td>
      <?php echo $this->Html->link('Delete', 
                       array('action' => 'delete', $post['Post']['id']),
                                               null, 'Are you sure?') ?>
      <?php echo $this->Html->link('Edit', 
                      array('action' => 'edit', $post['Post']['id']));?>
    </td>
    <td><?php echo $post['Post']['created']; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
