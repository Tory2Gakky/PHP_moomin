<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
	<style type="text/css">
		ul li {
			marin : 0;
			padding :0;
		}
		ul{
			width : 700;
			overflow : hidden;
		}
		.sol{
			clear:both;
		}
		li {
			display : block;
			pading 10 20 10 10; 
			border-color : #333;
			borser-width : 2px;
			border-style : dotto;
			/*border-collapse: collapse;*/		
		}
		.move{
			dispplay : non;
		}
	</style>
</head>
<body>
<!-- 
list�\����� (layer�ɂ��鎞�͏㕔��؂藣��
�{�^���R���g���[���F���Ή�
�@�㕔��search.php��FORM���R���g���[��
�@
-->
<?php
			$moomin = array(
					array(1,'檜垣','颯','宝町','長男','横美','大学','http://','販促デスクの王'),
					array(2,'檜垣','光','宝町','次男','磯高','高校','http://','自称進学校'),
					array(3,'檜垣','瑠那','宝町','長女','江中','中学','http://','ソフテニ部')
			);
?>
<ul>
<!-- 項目　-->
<li>No.</li>
<li>名前</li>
<li>所属</li>
<li>種族</li>

<!-- データ -->
<?php foreach ($moomin as $papa){;
/*debug::dump($moomin);*/ ?>
<li Class="sol"><?php echo "$papa['id']"; ?></li>
<li><?php echo "$papa[1]"."$papa[2]"; ?></li>
<li><?php echo "$papa[3]"." "."$papa[4]"." "."$papa[5]"; ?></li>
<li><?php echo "$papa[6]"; ?></li>
<li>変更</li>
<li >削除</li>
<li class="sol mobve"><img src=<?php echo "$papa[7]"?> /></li>
<li><?php echo "$papa[8]"?></li>
<?php }; ?>
</ul>


</body>
</html>