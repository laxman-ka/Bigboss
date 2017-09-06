<?php include "header.php"; ?>
<div class="container-fluid">
	<div class="row sms">
		<div class="col-lg-2">
			<h3>Send SMS</h3>
		</div>
		<div class="col-lg-8">
			<div class="row sms-type">
				<div class="col-lg-2"><label><input type="radio" name="smstype">Single</label></div>
				<div class="col-lg-2"><label><input type="radio" name="smstype">Bulk</label></div>
				<div class="col-lg-2"><label><input type="radio" name="smstype">Customise</label></div>
			</div>
		</div>
		<div class="col-lg-2">
			<div class="row">
				<div class="col-lg-4">
					<a href="#" class="btn btn-default btn-sms">Send </a>
				</div>
				<div class="col-lg-8">
					<a href="#" class="btn btn-default btn-sms">Schedule Later </a>
				</div>
			</div>
		</div>
	</div>

<form  role="form">
	<div class="row">
		<div class="col-lg-2 form-group form-first">
			<label>To Mobile no.</label>
			<div>
				<div class="special"><a href="http://www.googel.com/" class="btn btn-primary link">+ Add Number</a></div>
			</div>
			<div>
				<a href="#" class="btn btn-primary btn-block">+ Bulk Upload</a>
				<a href="#" class="btn btn-primary btn-block">+ Add From Phonebook</a>
			</div>
		</div>
		<div class="col-lg-4 form-second">
			<div class="form-group">
				<label>Campaign Name</label>
				<input type="text" class="form-control" name="data[campaign]">
			</div>
			<div class="form-group">
				<label>Sender Id</label>
				<select class="form-control" name="data[sender]">
					<option value="">Select A Sender Id</option>
					<option value="Laxman">LAXMAN</option>
					<option value="Laxman">LAXMAN</option>
					<option value="Laxman">LAXMAN</option>
					<option value="Laxman">LAXMAN</option>
					<option value="Laxman">LAXMAN</option>
				</select>
			</div>
			<div class="form-group">
				<label>Message Type</label>
				<div>
					<label class="radio-inline"><input type="radio" name="optradio">SMS</label>
					<label class="radio-inline"><input type="radio" name="optradio">UNICODE</label>
					<label class="radio-inline"><input type="radio" name="optradio">FLASH</label>
				</div>
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea  class="form-control" name="data[message]" rows="5"></textarea>
				<div class="hint">
					<small>Max of 1000 Chars</small>
					<small class="pull-right">0/1000</small>
				</div>
			</div>
			<div class="form-group">
				<label>Signature</label>
				<select class="form-control" name="data[signature]">
					<option value="">Select A Signature</option>
					<option value="Laxman">I am signature</option>
					<option value="Laxman">LAXMAN</option>
					<option value="Laxman">LAXMAN</option>
					<option value="Laxman">LAXMAN</option>
					<option value="Laxman">LAXMAN</option>
				</select>
			</div>
		</div>
	</div>
</div></form>