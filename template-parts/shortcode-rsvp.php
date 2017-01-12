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

	$shortcode = '<h2 class="mb40">' . __( 'Thank you for your sign up!', 'wordpress-wedding-theme' ) . '</h2>';

} else {

	$shortcode = '

		<div class="col-xs-12 mb40">
			<div class="col-xs-10 col-xs-offset-1 text-left no-padding">
				<h3 class="text-center mb40">' . __( 'RSVP', 'wordpress-wedding-theme' ) . '</h3>
				<form method="post">
					<legend>' . __( 'My Details', 'wordpress-wedding-theme' ) . '</legend>
					<div class="form-group">
						<label for="inputName" class="col-lg-4 control-label">' . __( 'Name', 'wordpress-wedding-theme' ) . '</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="inputName" placeholder="' . __( 'Name', 'wordpress-wedding-theme' ) . '" name="wpwt_name_1" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">' . __( 'In need of transportation from church to Villa Haka', 'wordpress-wedding-theme' ) . '</label>
						<div class="col-lg-8">
							<div class="radio">
								<label for="optionsTransportation1">
									<input type="radio" name="wpwt_transportation_1" id="optionsTransportation1" value="' . __( 'No', 'wordpress-wedding-theme' ) . '" checked>
									' . __( 'No', 'wordpress-wedding-theme' ) . '
								</label>
							</div>
							<div class="radio">
								<label for="optionsTransportation2">
									<input type="radio" name="wpwt_transportation_1" id="optionsTransportation2" value="' . __( 'Yes', 'wordpress-wedding-theme' ) . '">
									' . __( 'Yes', 'wordpress-wedding-theme' ) . '
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="textareaAllergies" class="col-lg-4 control-label">' . __( 'Allergies / Additional Info', 'wordpress-wedding-theme' ) . '</label>
						<div class="col-lg-8">
							<textarea class="form-control" rows="3" id="textareaAllergies" placeholder="' . __( 'Allergies / Additional Info', 'wordpress-wedding-theme' ) . '" name="wpwt_allergies_1"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">' . __( 'I want to RSVP another invited guest', 'wordpress-wedding-theme' ) . '</label>
						<div class="col-lg-8">
							<div class="radio">
								<label for="optionsAvec1">
									<input type="radio" name="wpwt_avec" id="optionsAvec1" value="' . __( 'No', 'wordpress-wedding-theme' ) . '" class="js-rsvp-avec-toggle" checked />
									' . __( 'No', 'wordpress-wedding-theme' ) . '
								</label>
							</div>
							<div class="radio">
								<label for="optionsAvec2">
									<input type="radio" name="wpwt_avec" id="optionsAvec2" value="' . __( 'Yes', 'wordpress-wedding-theme' ) . '" class="js-rsvp-avec-toggle" />
									' . __( 'Yes', 'wordpress-wedding-theme' ) . '
								</label>
							</div>
						</div>
					</div>
					<div class="js-rsvp-avec-info hidden">
						<div class="form-group">
							<label for="inputName2" class="col-lg-4 control-label">' . __( 'His/Her Name', 'wordpress-wedding-theme' ) . '</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="inputName2" placeholder="' . __( 'His/Her Name', 'wordpress-wedding-theme' ) . '" name="wpwt_name_2">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-4 control-label">' . __( 'In need of transportation from church to Villa Haka', 'wordpress-wedding-theme' ) . '</label>
							<div class="col-lg-8">
								<div class="radio">
									<label for="optionsTransportation2_1">
										<input type="radio" name="wpwt_transportation_2" id="optionsTransportation2_1" value="' . __( 'No', 'wordpress-wedding-theme' ) . '" checked>
										' . __( 'No', 'wordpress-wedding-theme' ) . '
									</label>
								</div>
								<div class="radio">
									<label for="optionsTransportation2_2">
										<input type="radio" name="wpwt_transportation_2" id="optionsTransportation2_2" value="' . __( 'Yes', 'wordpress-wedding-theme' ) . '">
										' . __( 'Yes', 'wordpress-wedding-theme' ) . '
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="textareaAllergies2" class="col-lg-4 control-label">' . __( 'Allergies / Additional Info', 'wordpress-wedding-theme' ) . '</label>
							<div class="col-lg-8">
								<textarea class="form-control" rows="3" id="textareaAllergies2" placeholder="' . __( 'Allergies / Additional Info', 'wordpress-wedding-theme' ) . '" name="wpwt_allergies_2"></textarea>
							</div>
						</div>
					</div>
					<legend>' . __( 'My Contact Info', 'wordpress-wedding-theme' ) . '</legend>
					<div class="form-group">
						<label for="inputEmail" class="col-lg-4 control-label">' . __( 'Email', 'wordpress-wedding-theme' ) . '</label>
						<div class="col-lg-8">
							<input type="email" class="form-control" id="inputEmail" placeholder="' . __( 'Email', 'wordpress-wedding-theme' ) . '" name="wpwt_email" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-4 col-lg-offset-4">
							<button type="submit" class="btn btn-primary btn-lg btn-block center-block mt40">' . __( 'Send', 'wordpress-wedding-theme' ) . '</button>
						</div>
					</div>
				</form>
			</div>
		</div>

	';
}