<html>

    <head>
    <h2> Welcome Admin </h2>
    <title>Products Data</title>
</head>
<table>
    <thead>
    <th>Book ID</th>
    <th>Book Name</th>
    <th>Book Type</th>
    <th>Quantity</th>
    
</thead>

<?php 
    
        $this->db->select('*');
        $this->db->from('books');
        $result = $this->db->get();
        $query = $result->result();
        
foreach ($query as $row): ?> 
    <tr>
        <td> <?= $row->book_id ?></td>
        <td><?= $row->name ?></td>
        <td><?= $row->type ?></td>
        <td><?= $row->pcs ?></td>
    </tr>
<?php endforeach; ?>
</table> 

<a href ="c_admin/logout"> Log Out </a>
<br>
</body>
</html>