<?

 function StrRevers($str)
{
	$new_ser='';

	for ($i=0; $i<=mb_strlen($str) ; $i++) { 
		$new_ser.=mb_substr($str,mb_strlen($str)-$i,1 );
		echo $new_ser; echo "\n";
	}
	echo "\n";
	//echo $new_ser;
	return $new_ser;
}

function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}

//echo mb_strrev("abs");
echo StrRevers("abc");

?>