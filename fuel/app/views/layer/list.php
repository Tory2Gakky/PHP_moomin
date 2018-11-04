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
<ul>
<!-- ���o�� -->
<li>No.</li>
<li>名前</li>
<li>所属</li>
<li>種族</li>

<!-- �f�[�^�\���G���A -->
<?php foreach ($moomin as $papa){;
 ?>
<li Class="sol"><?php echo "$papa[0]"; ?></li>
<li><?php echo "$papa[1]"."$papa[2]"; ?></li>
<li><?php echo "$papa[3]"." "."$papa[4]"." "."$papa[5]"; ?></li>
<li><?php echo "$papa[6]"; ?></li>
<li>修正</li>
<li >削除</li>
<li class="sol mobve"><img src=<?php echo "$papa[7]"?> /></li>
<li><?php echo "$papa[8]"?></li>
<?php }; ?>
</ul>


</body>
</html>