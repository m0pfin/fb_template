<?php
/**
 * Created by PhpStorm.
 * User: m0pfin
 * Date: 06.09.2020
 * Time: 05:04
 */

include 'db.php';

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $db->query('DELETE FROM `template` WHERE id='.$id.'');
    header("Location: ../template.php?delete=success");
}