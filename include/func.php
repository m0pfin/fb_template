<?php
/**
 * Created by PhpStorm.
 * User: m0pfin
 * Date: 11.07.2020
 * Time: 20:45
 */

function gender($gender){
    if($gender == 'All'){
        echo '<span class="badge badge-info"><i class="fas fa-venus-mars"></i></span>';
    }elseif ($gender == 'Men'){
        echo '<span class="badge badge-info"><i class="fas fa-mars"></i></span>';
    }elseif ($gender == 'Women'){
        echo '<span class="badge badge-info"><i class="fas fa-venus"></i></span>';
    }
}

function device($device){
    if($device == 'mobile, desktop'){
        echo '<span class="badge badge-info"><i class="fas fa-mobile-alt"></i>  <i class="fas fa-desktop"></i></span>';
    }elseif ($device == 'desktop'){
        echo '<span class="badge badge-info"><i class="fas fa-desktop"></i></span>';
    }elseif ($device == 'mobile'){
        echo '<span class="badge badge-info"><i class="fas fa-mobile-alt"></i></span>';
    }
}