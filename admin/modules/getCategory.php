<?php
	require('../../config/config.php');

	$sql="SELECT * FROM loaisp";

	$result = $mysqli -> query($sql);
	
	while ($row = $result->fetch_assoc()) {

        echo "
        <tr class='text-center'>
            <td class='align-middle'>
                <input class='checkMulti' name='deleteMulti[]' type='checkbox' value=".$row['LOAISP_MA'].">
            </td>
            <td class='align-middle'>".$row['LOAISP_MA']."</td>
            <td class='align-middle'>".$row['LOAISP_TEN']."</td>

            <td class='project-actions text-right text-center align-middle'>

                <button onclick = 'edit('".$row['LOAISP_MA']."', '".$row['LOAISP_TEN']."', '".$row['LOAISP_TRANGTHAI']."')' type='button' class='btn btn-info btn-sm btnEdit' data-toggle='modal' data-target='#modal-sm-edit' value=".$row['LOAISP_MA']."> 
                        <i class='fas fa-pencil-alt'>
                        </i>
                        Edit
                </button>
                <button type='submit' class='btn btn-danger btn-sm btnDelete' value=".$row['LOAISP_MA'].">
                        <i class='fas fa-trash'>
                        </i>
                        Delete
                </button>
            </td>
        </tr>
        ";
    }
	
	 
	$mysqli->close();
?>