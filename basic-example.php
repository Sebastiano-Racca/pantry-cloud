<?php

require_once "pantry.php";

// Add your first few people to your basket
update_basket("people", ["Harry" => "Style", "Keanu" => "Reeves", "Taylor" => "Swift", "Marilyn" => "Monroe"]);

// Ups, it's spelled 'Styles', not 'Style', I have to change that
update_basket("people", ["Harry" => "Styles"]);

// Print the results
print_r(get_basket("people"));

?>