<?php
//>conect to DB
$type = 1;
$id = 33;
?>

<script src="script.js"></script>
<script>
	// В то время как свойство (window.parent)
	// возвращает непосредственного родителя window, 
	// свойство window.top дает самое верхнее окно в иерархии.
	window.top.window.thisPage(<?php echo $type?>, <?php echo $id?>);
</script>