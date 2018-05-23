			<div class="footer">
	            <div class="pull-right">
	                <?php echo lang('footer_kanan');?>
	            </div>
	            <div>
	                <?php echo lang('footer_kiri');?>
	            </div>
	        </div>
	    </div>
	</div>

	<?php foreach ($js as $src) :  ?>
		<script type="text/javascript" src="<?= $src ?>" charset="utf-8"></script>
	<?php endforeach; ?>

</body>
</html>
