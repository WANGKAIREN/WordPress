<?php

$tag_templates = array(
    'is_embed'             => 'get_embed_template',
    'is_404'               => 'get_404_template',
    'is_search'            => 'get_search_template',
    'is_front_page'        => 'get_front_page_template',
    'is_home'              => 'get_home_template',
    'is_privacy_policy'    => 'get_privacy_policy_template',
    'is_post_type_archive' => 'get_post_type_archive_template',
    'is_tax'               => 'get_taxonomy_template',
    'is_attachment'        => 'get_attachment_template',
    'is_single'            => 'get_single_template',
    'is_page'              => 'get_page_template',
    'is_singular'          => 'get_singular_template',
    'is_category'          => 'get_category_template',
    'is_tag'               => 'get_tag_template',
    'is_author'            => 'get_author_template',
    'is_date'              => 'get_date_template',
    'is_archive'           => 'get_archive_template',
);
$template      = false;

// Loop through each of the template conditionals, and find the appropriate template file.
foreach ( $tag_templates as $tag => $template_getter ) {

    echo $tag;
    echo " : ";
    echo $template_getter;
    echo "\n";
}