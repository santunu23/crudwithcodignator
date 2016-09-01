<h2 class="page-header">Pagination Example</h2>

<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Class</th>
        <th>Date of Admission</th>
    </tr>
    
        <?php 
          foreach ($results as $data)
          {
              echo "<tr>";
              echo "<td>$data->fname</td>";
              echo "<td>$data->gender<td>";
              echo "<td>$data->class<td>";
              echo "<td>$data->create_date<td>";
              echo "</tr>";
         }
        echo "<tr>"; 
        echo "<td>";
      
            echo'<nav aria-label="Page navigation">';
            echo '<ul class="pagination">';
            echo '<li>';
            echo '<a href="#" aria-label="Previous">';
            echo '<span aria-hidden="true">&laquo;</span>';
            echo '</a>';
            echo '</li>';
            echo "<li>$links</li>";
            echo  '<li>';
            echo  ' <a href="#" aria-label="Next">';
            echo  '<span aria-hidden="true">&raquo;</span>';
            echo  '</a>';
            echo  '</li>';
            echo  '</ul>';
            echo  '</nav>';
            echo '</td>';
            echo '</tr>';
           
?>
 
  
</table>


