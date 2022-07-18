<?php 
function list_categories ($data,$selected,$parents = 0,$str = "") {
    foreach ($data as $key => $value) {
        if ($value->parent == $parents) {
            $selected_option = '';
            if ($value->id== $selected) {
                $selected_option = "selected";
            }
            echo '<option value="'.$value->id.'" '.$selected_option.'>'.$str.$value->name.'</option>';
            unset($data[$key]);
            list_categories ($data,$selected,$value->id,$str."---| ");
        }
    }
}


function categorySelect($data,$parents = 0,$str="") {
    foreach ($data as $value) {
        if ($value->parent == $parents) {
            $id = $value->id;
        
            echo'<tr>
                    <td>' .$id. '</td>
                    <td>'.$str.$value->name.'</td>
                    <td>'.date('Y-m-d : H:i:s', strtotime($value->created_at)).'</td>
                    <td><a onClick="return confirmDelete()" href="http://localhost:8000/admin/category/delete/'.$value->id.'">Delete</a></td>
                    <td><a href="http://localhost:8000/admin/category/edit/'.$value->id.'">Edit</a></td>
                </tr>';
                unset($value->id);

                categorySelect($data,$id,$str.'---|');
        }
}
}

?>