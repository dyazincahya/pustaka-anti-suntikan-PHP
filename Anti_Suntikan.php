<?php 
	/**
	 * Pustaka PHP Anti Suntikan
	 * Di Test Jeung Di Jieun Dina PHP VERSI 5.4
	 */

	class Anti_Suntikan {
		public function jaga($data){
			$saring = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
			return $saring;
		}
	}
?>
