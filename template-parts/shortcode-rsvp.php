<?php
/*
	RSVP shortcode
*/

if ( ! empty( $_REQUEST['wpwt_name_1'] ) ) {

	$post_title = $_REQUEST['wpwt_name_1'];

	if ( ! empty( $_REQUEST['wpwt_name_2'] ) ) {
		$post_title .= ' & ' . $_REQUEST['wpwt_name_2'];
	}

	// Create post object
	$sign_up = array(
		'post_type'   => 'wpwt_sign_up',
		'post_status' => 'publish',
		'post_author' => 1,
		'post_title'  => $post_title,
	);

	// Insert the post into the database
	$post_id = wp_insert_post( $sign_up );

	// Add name to database
	update_post_meta( $post_id, 'wpwt_name_1', $_REQUEST['wpwt_name_1'] );

	if ( ! empty( $_REQUEST['wpwt_transportation_1'] ) ) {
		update_post_meta( $post_id, 'wpwt_transportation_1', $_REQUEST['wpwt_transportation_1'] );
	}

	if ( ! empty( $_REQUEST['wpwt_allergies_1'] ) ) {
		update_post_meta( $post_id, 'wpwt_allergies_1', $_REQUEST['wpwt_allergies_1'] );
	}

	if ( ! empty( $_REQUEST['wpwt_avec'] ) ) {
		update_post_meta( $post_id, 'wpwt_avec', $_REQUEST['wpwt_avec'] );
	}

	if ( ! empty( $_REQUEST['wpwt_name_2'] ) ) {
		update_post_meta( $post_id, 'wpwt_name_2', $_REQUEST['wpwt_name_2'] );
	}

	if ( ! empty( $_REQUEST['wpwt_transportation_2'] ) ) {
		update_post_meta( $post_id, 'wpwt_transportation_2', $_REQUEST['wpwt_transportation_2'] );
	}

	if ( ! empty( $_REQUEST['wpwt_allergies_2'] ) ) {
		update_post_meta( $post_id, 'wpwt_allergies_2', $_REQUEST['wpwt_allergies_2'] );
	}

	if ( ! empty( $_REQUEST['wpwt_email'] ) ) {
		update_post_meta( $post_id, 'wpwt_email', $_REQUEST['wpwt_email'] );
	}

	$shortcode = '<h2 class="mb40">Thank you for your sign up!</h2>';

} else {

	$shortcode = '

		<div class="col-xs-12 mb40">
			<div class="col-xs-10 col-xs-offset-1 text-left no-padding">
				<h3 class="text-center mb40">RSVP</h3>
				<form method="post">
					<legend>My Details</legend>
					<div class="form-group">
						<label for="inputName" class="col-lg-4 control-label">Name</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="inputName" placeholder="Name" name="wpwt_name_1" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">In need of transportation from church to Villa Haka</label>
						<div class="col-lg-8">
							<div class="radio">
								<label for="optionsTransportation1">
									<input type="radio" name="wpwt_transportation_1" id="optionsTransportation1" value="No" checked>
									No
								</label>
							</div>
							<div class="radio">
								<label for="optionsTransportation2">
									<input type="radio" name="wpwt_transportation_1" id="optionsTransportation2" value="Yes">
									Yes
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="textareaAllergies" class="col-lg-4 control-label">Allergies / Message</label>
						<div class="col-lg-8">
							<textarea class="form-control" rows="3" id="textareaAllergies" placeholder="Allergies / Message" name="wpwt_allergies_1"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">I want to RSVP another invited guest</label>
						<div class="col-lg-8">
							<div class="radio">
								<label for="optionsAvec1">
									<input type="radio" name="wpwt_avec" id="optionsAvec1" value="No" class="js-rsvp-avec-toggle" checked />
									No
								</label>
							</div>
							<div class="radio">
								<label for="optionsAvec2">
									<input type="radio" name="wpwt_avec" id="optionsAvec2" value="Yes" class="js-rsvp-avec-toggle" />
									Yes
								</label>
							</div>
						</div>
					</div>
					<div class="js-rsvp-avec-info hidden">
						<legend>His/Her Details</legend>
						<div class="form-group">
							<label for="inputName2" class="col-lg-4 control-label">Name</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="inputName2" placeholder="Name" name="wpwt_name_2">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-4 control-label">In need of transportation from church to Villa Haka</label>
							<div class="col-lg-8">
								<div class="radio">
									<label for="optionsTransportation2_1">
										<input type="radio" name="wpwt_transportation_2" id="optionsTransportation2_1" value="No" checked>
										No
									</label>
								</div>
								<div class="radio">
									<label for="optionsTransportation2_2">
										<input type="radio" name="wpwt_transportation_2" id="optionsTransportation2_2" value="Yes">
										Yes
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="textareaAllergies2" class="col-lg-4 control-label">Allergies / Message</label>
							<div class="col-lg-8">
								<textarea class="form-control" rows="3" id="textareaAllergies2" placeholder="Allergies / Message" name="wpwt_allergies_2"></textarea>
							</div>
						</div>
					</div>
					<legend>My Contact Info</legend>
					<div class="form-group">
						<label for="inputEmail" class="col-lg-4 control-label">Email</label>
						<div class="col-lg-8">
							<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="wpwt_email" required>
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
}