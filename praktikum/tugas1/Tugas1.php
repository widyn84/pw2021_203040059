<?php
/*
Widy Nugraha
203040059
Jum'at 10
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-salmon {
            background-color : salmon;
        }

        .warna-lightblue {
            background-color : lightblue;
        }
    </style>
</head>
<body>
<table border = "1" cellpadding = "10" cellspacing = "0">
<?php for ($i = 1; $i <= 6; $i++) : ?>
	<tr>
	<?php for ($j = 1; $j <=6; $j++) : ?>
		<?php if ($i % 2 == 1) : ?>
			<?php if ($j %2 == 1) : ?>
				<td class="warna-lightblue"></td>
			<?php else :?>
				<td class="warna-salmon"></td>
			<?php endif; ?>
		<?php else : ?>
			<?php if ($j % 2 == 1) : ?>
				<td class="warna-salmon"></td>
			<?php else :?>
				<td class="warna-lightblue"></td>
			<?php endif; ?>
		<?php endif; ?>
	<?php endfor; ?>
	</tr>
<?php endfor; ?>
</table>

</table>

</body>
</html>