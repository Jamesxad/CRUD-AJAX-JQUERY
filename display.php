<?php
include 'db.php';



	$sql="SELECT * FROM data";
	$result=mysqli_query($con,$sql);
	$number=1;
	$count_row = mysqli_num_rows($result);

if ($count_row >= 1)
{
	while($row=mysqli_fetch_array($result)){?>
		<tr>
		<tr class="tbl-record-tr" rowid="<?php echo $row['id']; ?>">
		<td scope="row"><?php echo $number?>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['phone']; ?></td>
		
		<td>
		<button id="btn-update" type="submit" class="bi bi-pencil-square" title="edit" onclick="loadRecord(<?php echo $row['id'];?>)"></button>
		<button id="btntable" type="submit"  class="bi bi-trash-fill" title="delete data?" onclick="deleteRecord(<?php echo $row['id'];?>)" ></button>
        
		</td>
		</tr>

		<?php
		
		$number++;
	}
}
else
{
	?>
	<tr>
		<td colspan="6">No Record Found.</td>
	</tr>
	<?php
}


$con->close();
?>