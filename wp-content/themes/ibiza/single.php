<?php get_header(); ?>
<?php //global $post; ?>

<?php
if (is_single(123)) {
    include(TEMPLATEPATH . '/single-entrada1.php');
} elseif (in_category(5)) {
    include(TEMPLATEPATH . '/single-villa.php');
    include(TEMPLATEPATH . '/sections/villas.php');
} elseif (in_category(14)) {
    include(TEMPLATEPATH . '/single-yacht.php');
    include(TEMPLATEPATH . '/sections/yachts.php');
} else {
    include(TEMPLATEPATH . '/single-default.php');
}
?>
<?php get_footer(); ?>