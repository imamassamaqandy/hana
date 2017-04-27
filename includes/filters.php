<?php

	/*	Untitled Filter */

	function hana_post_title($title) {

		if ($title == '') {

			return 'Untitled';

		} else {

			return $title;

		}
	}
	add_filter( 'the_title', 'hana_post_title' );



	/*	Post Format : Quote Filter */

	function hana_avatar($class) {
		$class = str_replace("class='avatar", "class='avatar alignleft", $class) ;
		return $class;
	}
	add_filter( 'get_avatar', 'hana_avatar' );



	/*	Post Format : Quote Filter */

	function hana_quote( $content ) {

		/* Check if we're displaying a 'quote' post. */
		if ( has_post_format( 'quote' ) ) {

			/* Match any <blockquote> elements. */
			preg_match( '/<blockquote.*?>/', $content, $matches );

			/* If no <blockquote> elements were found, wrap the entire content in one. */
			if ( empty( $matches ) )
				$content = "<blockquote>{$content}</blockquote>";
		}

		return $content;
	}
	add_filter( 'the_content', 'hana_quote' );



	/*	Post Format : Aside Filter */

	function hana_aside( $content ) {

		if ( has_post_format( 'aside' ) && !is_singular() )
			$content .= ' &sdot; <a href="' . get_permalink() . '">&#8734;</a>';

		return $content;
	}
	add_filter( 'the_content', 'hana_aside', 9 );



	/*	Post Format : Link Filter */

	function hana_link( $content ) {

		if ( has_post_format( 'link' ) && !is_singular() )
			$content .= ' &sdot; <a href="' . get_permalink() . '">&#8734;</a>';

		return $content;
	}
	add_filter( 'the_content', 'hana_link', 9 );

?>