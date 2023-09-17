<?php

    /**
     * Get my theme static image
     *
     * @param [type] $name
     * @return void
     */
    function get_my_theme_custom_image($path) {
        return get_theme_file_uri('/dist/images/'.$path);
    }

    /**
     * display Excerpt Or Content
     * 
     * if is empty display content  instead of it
     * 
     * @param [type] $excerpt
     * @param [type] $content
     * @param [type] $number
     * @return void
     */
    function displayExcerptOrContent($excerpt, $content, $number = 20) {
        if ($excerpt) {
            return wp_trim_words($excerpt, $number);
        }

        if($content) {
            return wp_trim_words($content, $number);
        }

        return '';
    }
?>