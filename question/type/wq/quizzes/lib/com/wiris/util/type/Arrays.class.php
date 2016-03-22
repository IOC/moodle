<?php

class com_wiris_util_type_Arrays {
	public function __construct() { 
	}
	static function contains($array, $element) {
		$i = null;
		{
			$_g1 = 0; $_g = $array->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($array[$i1] !== null && $array[$i1] == $element) {
					return true;
				}
				unset($i1);
			}
		}
		return false;
	}
	static function containsInt($array, $element) {
		$i = null;
		{
			$_g1 = 0; $_g = $array->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($array[$i1] === $element) {
					return true;
				}
				unset($i1);
			}
		}
		return false;
	}
	static function clear($a) {
		$i = $a->length - 1;
		while($i >= 0) {
			$a->remove($a[$i]);
			$i--;
		}
	}
	function __toString() { return 'com.wiris.util.type.Arrays'; }
}
