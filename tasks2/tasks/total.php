<?

function score($real_1,$real_2,$pred_1,$pred_2){
	//счет угадан полностью
 if ($real_1==$pred_1 and $real_2==$pred_2) {
 	return 1;
 }
 elseif (($real_1>$real_2 and $pred_1>$pred_2) or($real_1<$real_2 and $pred_1<$pred_2)) {
 	return 0;
 }
  else{
  	return -1;
  }
}

echo(score(0, 1, 0, 1));echo("\n");// вернет 1 (счет угадан полностью)
echo(score(2, 1, 1, 0));echo("\n");// вернет 0 (угадано какая команда выиграла)
echo(score(0, 4, 2, 0));echo("\n");// вернет -1 (ничего не угадано)