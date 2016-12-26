<?php
/**
 * Comment types triggers
 */

namespace Notification\Triggers\WordPress\CommentTypes;

use Notification\Settings;

/**
 * Templates
 */

function added_template( $comment_type = 'comment' ) {

	$html = '<p>' . __( 'Howdy!', 'notification' ) . '</p>';

	/* translators: please do not translate strings in { } */
	$html .= '<p>' . sprintf( __( 'There is new %s to your article sent by {author_name}:', 'notification' ), $comment_type ) . '</p>';

	/* translators: please do not translate strings in { } */
	$html .= '<p>{' . $comment_type . '_content}</p>';

	return $html;

}

function approved_template( $comment_type = 'comment' ) {

	$html = '<p>' . __( 'Howdy!', 'notification' ) . '</p>';
	$html .= '<p>' . __( ucfirst( $comment_type ), 'notification' ) . ':</p>';

	$html .= '<p>{' . $comment_type . '_content}</p>';

	/* translators: please do not translate strings in { } */
	$html .= '<p>' . __( 'from {author_name} has been approved.', 'notification' ) . '</p>';

	return $html;

}

function unapproved_template( $comment_type = 'comment' ) {

	$html = '<p>' . __( 'Howdy!', 'notification' ) . '</p>';
	$html .= '<p>' . __( ucfirst( $comment_type ), 'notification' ) . ':</p>';
	$html .= '<p>{' . $comment_type . '_content}</p>';

	/* translators: please do not translate strings in { } */
	$html .= '<p>' . __( 'from {author_name} has been unapproved.', 'notification' ) . '</p>';

	return $html;

}

function trashed_template( $comment_type = 'comment' ) {

	$html = '<p>' . __( 'Howdy!', 'notification' ) . '</p>';
	$html .= '<p>' . __( ucfirst( $comment_type ), 'notification' ) . ':</p>';
	$html .= '<p>{' . $comment_type . '_content}</p>';

	/* translators: please do not translate strings in { } */
	$html .= '<p>' . __( 'from {author_name} has been moved to trash.', 'notification' ) . '</p>';

	return $html;

}

function spam_template( $comment_type = 'comment' ) {

	$html = '<p>' . __( 'Howdy!', 'notification' ) . '</p>';
	$html .= '<p>' . __( ucfirst( $comment_type ), 'notification' ) . ':</p>';
	$html .= '<p>{' . $comment_type . '_content}</p>';

	/* translators: please do not translate strings in { } */
	$html .= '<p>' . __( 'from {author_name} has been moved to trash.', 'notification' ) . '</p>';

	return $html;

}

/**
 * Notification functions
 */

function added( $ID, $comment ) {

	global $notification_comment_type;

	notification( 'wordpress/' . $notification_comment_type . '/added', array(
		'ID'               => $ID,
		'post_ID'          => $comment->comment_post_ID,
		'author_name'      => $comment->comment_author,
		'author_email'     => $comment->comment_author_email,
		'author_url'       => $comment->comment_author_url,
		'author_IP'        => $comment->comment_author_IP,
		'author_user_id'   => $comment->user_id,
		'author_agent'     => $comment->comment_agent,
		'comment_date'     => $comment->comment_date,
		'comment_content'  => $comment->comment_content,
		'comment_approved' => $comment->comment_approved,
		'comment_type'     => $comment->comment_type,
	) );

}

function approved( $ID, $comment ) {

	global $notification_comment_type;

	notification( 'wordpress/' . $notification_comment_type . '/approved', array(
		'ID'               => $ID,
		'post_ID'          => $comment->comment_post_ID,
		'author_name'      => $comment->comment_author,
		'author_email'     => $comment->comment_author_email,
		'author_url'       => $comment->comment_author_url,
		'author_IP'        => $comment->comment_author_IP,
		'author_user_id'   => $comment->user_id,
		'author_agent'     => $comment->comment_agent,
		'comment_date'     => $comment->comment_date,
		'comment_content'  => $comment->comment_content,
		'comment_approved' => $comment->comment_approved,
		'comment_type'     => $comment->comment_type,
	) );

}

function unapproved( $ID, $comment ) {

	global $notification_comment_type;

	notification( 'wordpress/' . $notification_comment_type . '/unapproved', array(
		'ID'               => $ID,
		'post_ID'          => $comment->comment_post_ID,
		'author_name'      => $comment->comment_author,
		'author_email'     => $comment->comment_author_email,
		'author_url'       => $comment->comment_author_url,
		'author_IP'        => $comment->comment_author_IP,
		'author_user_id'   => $comment->user_id,
		'author_agent'     => $comment->comment_agent,
		'comment_date'     => $comment->comment_date,
		'comment_content'  => $comment->comment_content,
		'comment_approved' => $comment->comment_approved,
		'comment_type'     => $comment->comment_type,
	) );

}

function trashed( $ID, $comment ) {

	global $notification_comment_type;

	notification( 'wordpress/' . $notification_comment_type . '/trashed', array(
		'ID'               => $ID,
		'post_ID'          => $comment->comment_post_ID,
		'author_name'      => $comment->comment_author,
		'author_email'     => $comment->comment_author_email,
		'author_url'       => $comment->comment_author_url,
		'author_IP'        => $comment->comment_author_IP,
		'author_user_id'   => $comment->user_id,
		'author_agent'     => $comment->comment_agent,
		'comment_date'     => $comment->comment_date,
		'comment_content'  => $comment->comment_content,
		'comment_approved' => $comment->comment_approved,
		'comment_type'     => $comment->comment_type,
	) );

}

function spam( $ID, $comment ) {

	global $notification_comment_type;

	notification( 'wordpress/' . $notification_comment_type . '/spam', array(
		'ID'               => $ID,
		'post_ID'          => $comment->comment_post_ID,
		'author_name'      => $comment->comment_author,
		'author_email'     => $comment->comment_author_email,
		'author_url'       => $comment->comment_author_url,
		'author_IP'        => $comment->comment_author_IP,
		'author_user_id'   => $comment->user_id,
		'author_agent'     => $comment->comment_agent,
		'comment_date'     => $comment->comment_date,
		'comment_content'  => $comment->comment_content,
		'comment_approved' => $comment->comment_approved,
		'comment_type'     => $comment->comment_type,
	) );

}

/**
 * Triggers
 */

global $notification_comment_type;

$settings = Settings::get()->get_settings();

foreach ( $settings['general']['post_types_triggers']['comment_types'] as $comment_type ) :

	/**
	 * @deprecated 2.0 Do not use this filter
	 */
	if ( ! apply_filters( 'notification/triggers/default/wordpress/' . $comment_type, true ) ) {
		continue;
	}

	if ( ! apply_filters( 'notification/triggers/default/wordpress/comment_types/' . $comment_type, true ) ) {
		continue;
	}

	$notification_comment_type = $comment_type;

	// Added

	if ( apply_filters( 'notification/triggers/default/wordpress/comment_types/' . $comment_type . '/added', true ) ) :

		register_trigger( array(
			'slug'     => 'wordpress/' . $comment_type . '/added',
			'name'     => sprintf( __( '%s added', 'notification' ), __( ucfirst( $comment_type ), 'notification' ) ),
			'group'    => sprintf( __( 'WordPress : %s', 'notification' ), __( ucfirst( $comment_type ), 'notification' ) ),
			'template' => call_user_func( __NAMESPACE__ . '\\approved_template', $comment_type ),
			'tags'     => array(
				'ID'               => 'integer',
				'post_ID'          => 'integer',
				'author_name'      => 'string',
				'author_email'     => 'email',
				'author_url'       => 'url',
				'author_IP'        => 'string',
				'author_user_id'   => 'integer',
				'author_agent'     => 'string',
				'comment_date'     => 'string',
				'comment_content'  => 'string',
				'comment_approved' => 'string',
				'comment_type'     => 'string',
			)
		) );

		if ( is_notification_defined( 'wordpress/' . $comment_type . '/added' ) ) {
			add_action( 'wp_insert_comment', __NAMESPACE__ . '\\added', 10, 2 );
		}

	endif;

	// Approved

	if ( apply_filters( 'notification/triggers/default/wordpress/comment_types/' . $comment_type . '/approved', true ) ) :

		register_trigger( array(
			'slug'     => 'wordpress/' . $comment_type . '/approved',
			'name'     => sprintf( __( '%s approved', 'notification' ), __( ucfirst( $comment_type ), 'notification' ) ),
			'group'    => sprintf( __( 'WordPress : %s', 'notification' ), __( ucfirst( $comment_type ), 'notification' ) ),
			'template' => call_user_func( __NAMESPACE__ . '\\approved_template', $comment_type ),
			'tags'     => array(
				'ID'               => 'integer',
				'post_ID'          => 'integer',
				'author_name'      => 'string',
				'author_email'     => 'email',
				'author_url'       => 'url',
				'author_IP'        => 'string',
				'author_user_id'   => 'integer',
				'author_agent'     => 'string',
				'comment_date'     => 'string',
				'comment_content'  => 'string',
				'comment_approved' => 'string',
				'comment_type'     => 'string',
			)
		) );

		if ( is_notification_defined( 'wordpress/' . $comment_type . '/approved' ) ) {
			add_action( 'comment_approved_' . $comment_type, __NAMESPACE__ . '\\approved', 10, 2 );
		}

	endif;

	// Unapproved

	if ( apply_filters( 'notification/triggers/default/wordpress/comment_types/' . $comment_type . '/unapproved', true ) ) :

		register_trigger( array(
			'slug'     => 'wordpress/' . $comment_type . '/unapproved',
			'name'     => sprintf( __( '%s unapproved', 'notification' ), __( ucfirst( $comment_type ), 'notification' ) ),
			'group'    => sprintf( __( 'WordPress : %s', 'notification' ), __( ucfirst( $comment_type ), 'notification' ) ),
			'template' => call_user_func( __NAMESPACE__ . '\\unapproved_template', $comment_type ),
			'tags'     => array(
				'ID'               => 'integer',
				'post_ID'          => 'integer',
				'author_name'      => 'string',
				'author_email'     => 'email',
				'author_url'       => 'url',
				'author_IP'        => 'string',
				'author_user_id'   => 'integer',
				'author_agent'     => 'string',
				'comment_date'     => 'string',
				'comment_content'  => 'string',
				'comment_approved' => 'string',
				'comment_type'     => 'string',
			)
		) );

		if ( is_notification_defined( 'wordpress/' . $comment_type . '/unapproved' ) ) {
			add_action( 'comment_unapproved_' . $comment_type, __NAMESPACE__ . '\\unapproved', 10, 2 );
		}

	endif;

	// Trashed

	if ( apply_filters( 'notification/triggers/default/wordpress/comment_types/' . $comment_type . '/trashed', true ) ) :

		register_trigger( array(
			'slug'     => 'wordpress/' . $comment_type . '/trashed',
			'name'     => sprintf( __( '%s trashed', 'notification' ), __( ucfirst( $comment_type ), 'notification' ) ),
			'group'    => sprintf( __( 'WordPress : %s', 'notification' ), __( ucfirst( $comment_type ), 'notification' ) ),
			'template' => call_user_func( __NAMESPACE__ . '\\trashed_template', $comment_type ),
			'tags'     => array(
				'ID'               => 'integer',
				'post_ID'          => 'integer',
				'author_name'      => 'string',
				'author_email'     => 'email',
				'author_url'       => 'url',
				'author_IP'        => 'string',
				'author_user_id'   => 'integer',
				'author_agent'     => 'string',
				'comment_date'     => 'string',
				'comment_content'  => 'string',
				'comment_approved' => 'string',
				'comment_type'     => 'string',
			)
		) );

		if ( is_notification_defined( 'wordpress/' . $comment_type . '/trashed' ) ) {
			add_action( 'comment_trashed_' . $comment_type, __NAMESPACE__ . '\\trashed', 10, 2 );
		}

	endif;

	// Marked as spam

	if ( apply_filters( 'notification/triggers/default/wordpress/comment_types/' . $comment_type . '/spam', true ) ) :

		register_trigger( array(
			'slug'     => 'wordpress/' . $comment_type . '/spam',
			'name'     => sprintf( __( '%s marked as spam', 'notification' ), __( ucfirst( $comment_type ), 'notification' ) ),
			'group'    => sprintf( __( 'WordPress : %s', 'notification' ), __( ucfirst( $comment_type ), 'notification' ) ),
			'template' => call_user_func( __NAMESPACE__ . '\\spam_template', $comment_type ),
			'tags'     => array(
				'ID'               => 'integer',
				'post_ID'          => 'integer',
				'author_name'      => 'string',
				'author_email'     => 'email',
				'author_url'       => 'url',
				'author_IP'        => 'string',
				'author_user_id'   => 'integer',
				'author_agent'     => 'string',
				'comment_date'     => 'string',
				'comment_content'  => 'string',
				'comment_approved' => 'string',
				'comment_type'     => 'string',
			)
		) );

		if ( is_notification_defined( 'wordpress/' . $comment_type . '/spam' ) ) {
			add_action( 'comment_spam_' . $comment_type, __NAMESPACE__ . '\\spam', 10, 2 );
		}

	endif;

endforeach;
