<?php
function addPromo($cover,$title,$text)
{
    //Plan things out...
    try {
        //1. Build the DB connection
        include 'connect.php';
        //2. Validate File
        $file_type      = pathinfo($cover['name'], PATHINFO_EXTENSION);
        $accepted_types = array('gif', 'jpg', 'jpe', 'jpeg', 'png');
        if (!in_array($file_type, $accepted_types)) {
            throw new Exception('Wrong file type!');
        }
        //3. Movie file around
        $target_path = '../images/' . $cover['name'];
        if (!move_uploaded_file($cover['tmp_name'], $target_path)) {
            throw new Exception('Failed to move uploaded file, check permission!');
        }
        $th_copy = '../images/TH_' . $cover['name'];
        if (!copy($target_path, $th_copy)) {
            throw new Exception('Failed to move copy file, check permission!');
        }


        //4. Adding entries to database (both tbl_spread and tbl_mov_genre)
        $insert_promo_query = 'INSERT INTO tbl_spread(spread_img, spread_title, spread_text)';
        $insert_promo_query .= ' VALUES(:spread_cover, :spread_title, :spread_text)';
        $insert_promo  = $pdo->prepare($insert_promo_query);
        $insert_result = $insert_promo->execute(
            array(
                ':spread_cover'     => $cover['name'],
                ':spread_title'     => $title,
                ':spread_text'      => $text
               
            )
        );

       
        if (!$insert_promo->rowCount()) {
            throw new Exception('Failed to ...promo...s!');
        }
        //5. If all of above works fine, redirect user to index.php
        redirect_to('index.php');
    } catch (Exception $e) {
        $error = $e->getMessage();
        return $error;
    }
}

function deletePromo($id) {
    include 'connect.php';

    $delete_spread_query = 'DELETE FROM tbl_spread WHERE spread_id = :id';
    $delete_spread_set   = $pdo->prepare($delete_spread_query);
    $delete_spread_set->execute(
        array(
            ':id' => $id,
        )
    );

    if ($delete_spread_set) {
        redirect_to('../index.php');
    } else {
        $message = 'Not deleted yet..';
        return $message;
    }
}

function editPromo($id,$cover,$title,$text) {
    include 'connect.php';

    $update_spread_query = 'UPDATE tbl_spread
                            SET spread_img=:cover,
                                spread_title=:title,
                                spread_text=:text
                
                            WHERE spread_id = :id';
   
    $update_spread_set = $pdo->prepare($update_spread_query);
    $update_spread_set->execute(
        array(
            ':cover'   => $cover['name'],
            ':title'   => $title,
            ':text'    => $text,
            ':id'      => $id,
        )
    );

    //When update successfully, redirect gen to index.php
    if ($update_spread_set->rowCount()) {
        redirect_to('index.php');
    } else {
        //otherwise, return an error message
        $message = 'filed updtae spread ...';
        return $message;
    }
}

function selectEdit($id) {
    include 'connect.php';
    $query_spread_id = 'SELECT * FROM tbl_spread WHERE spread_id = ' . $id;

    $run_spread_id = $pdo->query($query_spread_id);
    if ($run_spread_id) {
        return $run_spread_id;
    } else {
        $error = 'There was a problem';
        return $error;
    }
}
