<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class dao extends CI_Upload{

    public function test($myname = 'noname')
    {
        print $myname;
        exit();
    }
}