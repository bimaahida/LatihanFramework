<div class="container">
	<div class="row">
	<?php for ($i=0; $i < $jumlah ; $i++) {  ?>
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="<?php echo $image ?>" alt="Image">
	      <div class="caption">
	        <h3><?php echo $judul ?></h3>
	        <p><?php echo $label ?></p>
	        <p><a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon glyphicon-zoom-in" aria-hidden="true"></span> Detail</a></p>
	      </div>
	    </div>
	  </div>
	<?php } ?>
	</div>
</div>