<?php

    function peseta2euros($pesetas, $factor=166.386) {
        $euros = $pesetas/$factor;
        $euros = round($euros, 2);
        return $euros;
    }

    function euros2pesetas ($euros, $factor=166.386){
        $pesetas = $euros*$factor;
        $pesetas = round($pesetas, 2);
        return $pesetas;
    }

?>