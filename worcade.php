<?php
/*
* Plugin Name: Worcade
* Version: 1.1.1
* Description: Adds the shortcode <code>[worcade]</code> to WordPress so you can insert a <a href="https://www.worcade.com/?utm_source=wordpress&utm_medium=referrer&utm_campaign=wordpress-widget">Worcade</a> contact form in any page, post or widget.
* Author: Worcade
* Author URI: https://www.worcade.com/?utm_source=wordpress&utm_medium=referral&utm_campaign=homepage
* Plugin URI: https://wordpress.org/plugins/worcade
*/

function worcade_form($atts){
    $a = shortcode_atts(array('width'=>'500px','height'=>'575px','targetuser'=>'-1','targetgroup'=>'-1','subject'=>'Worcade widget conversation','language'=>'en'), $atts);
    
    $target = "";
    // Check for targetUser
    if(strcmp($a['targetuser'], '-1') != 0) {
        $target = "targetUser=" . $a['targetuser'];
    }
    // Check for targetGroup
    if(strcmp($a['targetgroup'], '-1') != 0) {
        $target = "targetGroup=" . $a['targetgroup'];
    }
    // If no targetUser or targetGroup is supplied (or both are), return instructions
    if ($target == "" or (strcmp($a['targetgroup'], '-1') and strcmp($a['targetuser'], '-1'))) {
        return "<p><em>Please provide an id for a targetuser OR targetgroup.</em></p>";
    }

    $css = '<style>
            .worcade-iframe {
                display:block;
                margin-left: auto;
                margin-right: auto;
                width: ' . $a['width'] . ';
                height: ' . $a['height'] . ';
            }

            @media (max-width: 768px) {
                .worcade-iframe {
                    width:100%;
                }
            }
            </style>';

    $html = '<iframe class="worcade-iframe" frameBorder="0" src="https://worcade.net/widget?' . $target . '&subject=' . $a['subject'] . '&language=' . $a['language'] . '"></iframe>';

    return $css . $html;
}
add_shortcode('worcade', 'worcade_form');

?>