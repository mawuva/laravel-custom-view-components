<?php

if (!function_exists('set_title')) {
    /**
     * Set page's title
     * 
     * @param string $title
     * @param string $section
     * 
     * @return string
     */
    function set_title(string $title = '', $section = ''): string {
        $tag_struct = '<title>%s</title>';
        $app_name = config('customponents.app_name');

        if (!empty($title)) {
            return (!empty($section))
                    ? sprintf($tag_struct, $app_name. "|". $section . " - ". ucfirst($title))
                    : sprintf($tag_struct, $app_name . " - ". ucfirst($title));
        }

        else {
            return (!empty($section))
                    ? sprintf($tag_struct, $app_name. "|". $section)
                    : sprintf($tag_struct, $app_name);
        }
    }
}

if (!function_exists('set_description')) {
    /**
     * Set page's description
     * 
     * @param string $description
     * 
     * @return string
     */
    function set_description(string $description = ''): string {
        $tag_struct = '<meta name="description" content="%s">';
        $app_name = config('customponents.app_name');

        return (!empty($description))
                ? sprintf($tag_struct, ucfirst($description))
                : sprintf($tag_struct, $app_name);
    }
}

if (!function_exists('set_responsive_meta')) {
    /**
     * Set website's responsive meta tag
     * 
     * @param string $content
     * 
     * @return string
     */
    function set_responsive_meta(): string {
        return '<meta name="viewport" content="width=device-width, initial-scale=1">';
    }
}

if (!function_exists('set_open_graph')) {
    /**
     * Set page's open graph tag
     * 
     * @param string $content
     * 
     * @return string
     */
    function set_open_graph(string $content = ''): string {
        $tag_struct = '<meta name="og:title" property="og:title" content="%s">';
        $app_name = config('customponents.app_name');

        return (!empty($content))
                ? sprintf($tag_struct, ucfirst($content))
                : sprintf($tag_struct, $app_name);
    }
}

if (!function_exists('set_twitter_card')) {
    /**
     * Set page's twitter card tag
     * 
     * @param string $content
     * 
     * @return string
     */
    function set_twitter_card(string $content = ''): string {
        $tag_struct = '<meta name="twitter:card" content="%s">';

        return (!empty($content))
                ? sprintf($tag_struct, ucfirst($content))
                : sprintf($tag_struct, "summary");
    }
}

if (!function_exists('set_canonical')) {
    /**
     * Set website's canonical tag
     * 
     * @param string $content
     * 
     * @return string
     */
    function set_canonical(string $content): string {
        $tag_struct = '<link rel="canonical" href="%s">';

        if (!empty($content)) {
            return sprintf($tag_struct, ucfirst($content));
        }
    }
}
