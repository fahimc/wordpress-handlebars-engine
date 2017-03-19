<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Fahim
 * @since 1.0
 * @version 1.0
 */

get_header(); 
?>
<body>
<?php 
echo fahim_get_page_template();
$pagename = get_query_var('pagename');  
 var_dump($pagename);
?>

get_footer();

</body>