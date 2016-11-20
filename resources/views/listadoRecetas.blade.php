<?php

	if(isset($recetas)) {
    	foreach ($recetas as $user) {
    		echo $user->title;
		}

	} else {
		echo "Hola";
	}
