<?php
/*
	RSVP shortcode
*/

$shortcode = '

	<div class="col-xs-12 mb40">
		<div class="col-xs-10 col-xs-offset-1 text-left no-padding">
			<h3 class="text-center mb40">RSVP</h3>
			<form>
				<legend>My Details</legend>
				<div class="form-group">
					<label for="inputName" class="col-lg-4 control-label">Name</label>
					<div class="col-lg-8">
						<input type="text" class="form-control" id="inputName" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label">In need of transportation from church to Villa Haka</label>
					<div class="col-lg-8">
						<div class="radio">
							<label>
								<input type="radio" name="optionsTransportation" id="optionsTransportation1" value="true" checked>
								No
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="optionsTransportation" id="optionsTransportation2" value="false">
								Yes
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="textareaAllergies" class="col-lg-4 control-label">Allergies / Message</label>
					<div class="col-lg-8">
						<textarea class="form-control" rows="3" id="textareaAllergies" placeholder="Allergies / Message"></textarea>
					</div>
				</div>
				<legend>&nbsp;</legend>
				<div class="form-group">
					<label class="col-lg-4 control-label">I want to RSVP another invited guest</label>
					<div class="col-lg-8">
						<div class="radio">
							<label>
								<input type="radio" name="optionsAnother" id="optionsAnother1" value="true" checked />
								No
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="optionsAnother" id="optionsAnother2" value="false" />
								Yes
							</label>
						</div>
					</div>
				</div>
				<legend>My Contact Info</legend>
				<div class="form-group">
					<label for="inputEmail" class="col-lg-4 control-label">Email</label>
					<div class="col-lg-8">
						<input type="text" class="form-control" id="inputEmail" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-4 col-lg-offset-4">
						<button type="submit" class="btn btn-primary btn-lg btn-block center-block mt40">Send</button>
					</div>
				</div>
			</form>
		</div>
	</div>

';