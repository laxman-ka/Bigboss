<?php include "header.php"; ?>
<div class="container-fluid">	
		<div class="col-lg-6">
			<div class="row head-title">
				<h3>23 Sound Files</h3>
				<!-- {foreach} foreach should atrat here   -->
				<div class="col-lg-12 well sounds-list">
					<div class="col-lg-1">
						<i class="fa fa-3x fa-play-circle icon"></i>
					</div>
					<div class="col-lg-9">
						<p>ID1234567</p>
						<p><div class="left"><small >Added On: 15-Jul-2015 7:28 AM</small></div>
							<div class="right">8Sec</div>
						</p>						 
						<img src="img/Sound-cut.jpg">
					</div>
					<div class="col-lg-1">
						<i class="fa fa-3x fa-download icon"></i>
					</div>
					<div class="col-lg-1">
						<i class="fa fa-3x fa-trash-o icon"></i>
					</div>
				</div>
				<!-- {foreach} foreach should end here   -->	
				<div class="col-lg-12 well sounds-list">
					<div class="col-lg-1">
						<i class="fa fa-3x fa-play-circle icon"></i>
					</div>
					<div class="col-lg-9">
						<p>ID7685345</p>
						<p><div class="left"><small >Added On: 15-Jul-2015 7:28 AM</small></div>
							<div class="right">10Sec</div>
						</p>						 
						<img src="img/Sound-cut.jpg">
					</div>
					<div class="col-lg-1">
						<i class="fa fa-3x fa-download icon"></i>
					</div>
					<div class="col-lg-1">
						<i class="fa fa-3x fa-trash-o icon"></i>
					</div>
				</div>	
		</div>
	</div>
	<div class="col-lg-6 upload-new">
		<h3>Upload a New Sound</h3>
		<div class="col-lg-12 upload">
			<form role="form" class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-lg-3">Title</label>
				   <div class="col-lg-9">
				   	<input type="text" class="form-control small">
				   </div>				
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3">Sound file</label>
					<div class="col-lg-9">
				   		<input type="file" name="data['sound']">
				   		<small>Any .mp3, .wav file will accepted.Max file size 2 MB </small>
				   	</div>
				</div>
					<div class="form-group"> 
				    <div class="col-sm-offset-3 col-sm-9">
				      <button type="submit" class="btn btn-default si-btn">Upload</button>
				    </div>
				 </div>
			</form>
		</div>
		
	</div>
</div>