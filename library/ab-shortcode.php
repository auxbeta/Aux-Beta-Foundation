<?php
/************* PULL POSTS SHORTCODE *************/

function ab_cpt($atts, $content = null) {
        extract(shortcode_atts(array(
                "num" => '3',
                "cat" => ''
        ), $atts));
        global $post;
        ob_start();
        $myposts = get_posts('post_type=portfolio&numberposts='.$num.'&order=DESC&orderby=modified&category='.$cat.'%echo=0' );
        foreach($myposts as $post) :
                setup_postdata($post);
             $retour.=' '.get_template_part( 'template-parts/content', 'post-embed' ).' ';
        endforeach;
        $retour = ob_get_clean();
        return $retour;
        }
add_shortcode("ab_portfolio", "ab_cpt");

function ab_blog($atts, $content = null) {
        extract(shortcode_atts(array(
                "num" => '3',
                "cat" => ''
        ), $atts));
        global $post;
        ob_start();
        $myposts = get_posts('numberposts='.$num.'&order=DESC&orderby=post_date&category='.$cat);
        foreach($myposts as $post) :
                setup_postdata($post);
             $retour.=' '.get_template_part( 'template-parts/content', 'post-embed' ).' ';
        endforeach;
        $retour = ob_get_clean();
		return $retour;
}
add_shortcode("ab_posts", "ab_blog");

?>