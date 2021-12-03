<?php
    function Logo($resultado1){
        while($row1 = $resultado1 ->fetch_array()){
            echo $row1['Logo'];
        }
    }