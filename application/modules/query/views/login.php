<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


foreach($data as $key=>$value){
    ?><strong><?=$value->username;?></strong> : <?php 
        print is_null($value->id)?'Null':$value->id;
    ?> : <?php print $value->name;?><br><?php
}
