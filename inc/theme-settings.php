<?php

/**
 * Theme Settings
 */

function display_who_we_are_element()
{
    $settings = get_editor_settings('who_we_are');
    wp_editor( get_option('who_we_are') , 'who_we_are', $settings );
}

function display_what_we_offer_element()
{
    $settings = get_editor_settings('what_we_offer');
    wp_editor( get_option('what_we_offer') , 'what_we_offer', $settings );
}

function display_classic_sport_element()
{
    $settings = get_editor_settings('classic_sport');
    wp_editor( get_option('classic_sport') , 'classic_sport', $settings );
}

function display_classic_sport_image_element()
{
	?>
        <img src="<?php echo get_option('classic_sport_image'); ?>" width="250">
        <input type="file" name="classic_sport_image" />
    <?php
}

function display_classic_element()
{
    $settings = get_editor_settings('classic');
    wp_editor( get_option('classic') , 'classic', $settings );
}

function display_classic_image_element()
{
	?>
        <img src="<?php echo get_option('classic_image'); ?>" width="250">
        <input type="file" name="classic_image" />
    <?php
}


function display_disclaimer_element()
{
    $settings = get_editor_settings('disclaimer');
    wp_editor( get_option('disclaimer') , 'disclaimer', $settings );
}

function handle_logo_upload($option)
{
    if(!empty($_FILES["classic_sport_image"]["tmp_name"])) {
        $urls = wp_handle_upload($_FILES["classic_sport_image"], array('test_form' => FALSE));
        $temp = $urls["url"];

        return $temp;
    }

    return get_option('classic_sport_image');
}

function handle_logo_upload_classic($option)
{
    if(!empty($_FILES["classic_image"]["tmp_name"])) {
        $urls = wp_handle_upload($_FILES["classic_image"], array('test_form' => FALSE));
        $temp = $urls["url"];

        return $temp;
    }

    return get_option('classic_image');
}

function get_editor_settings($id)
{
    $settings = array(
        'wpautop' => false,
        'media_buttons' =>  false,
        'textarea_name' => $id,
        'textarea_rows' => 7,
        'tabindex' => '',
        'editor_css' => '',
        'editor_class' => '',
        'teeny' => true,
        'tinymce' => array(
              'theme_advanced_buttons1' => 'bold,italic,underline'
        ),
        'quicktags' => true
    );

    return $settings;
}

function display_theme_panel_fields()
{
    add_settings_section(
        "homepage_section",
        "Home Page Settings",
        null,
        "zeppieri-options"
    );
    add_settings_field(
        "who_we_are",
        "Who We Are",
        "display_who_we_are_element",
        "zeppieri-options",
        "homepage_section"
    );
    add_settings_field(
        "what_we_offer",
        "What We Offer",
        "display_what_we_offer_element",
        "zeppieri-options",
        "homepage_section"
    );
    add_settings_field(
        "classic_sport",
        "Classic Sport",
        "display_classic_sport_element",
        "zeppieri-options",
        "homepage_section"
    );

    add_settings_field(
        "classic_sport_image",
        "Classic Sport Image",
        "display_classic_sport_image_element",
        "zeppieri-options",
        "homepage_section"
    );

    add_settings_field(
        "classic",
        "Classic",
        "display_classic_element",
        "zeppieri-options",
        "homepage_section"
    );
    add_settings_field(
        "classic_sport_image",
        "Classic Sport Image",
        "display_classic_sport_image_element",
        "zeppieri-options",
        "homepage_section"
    );
    add_settings_field(
        "classic_image",
        "Classic Sport Image",
        "display_classic_image_element",
        "zeppieri-options",
        "homepage_section"
    );
    add_settings_field(
        "disclaimer",
        "Disclaimer",
        "display_disclaimer_element",
        "zeppieri-options",
        "homepage_section"
    );

    register_setting("homepage_section", "who_we_are");
    register_setting("homepage_section", "what_we_offer");
    register_setting("homepage_section", "classic_sport");
    register_setting("homepage_section", "classic_sport_image", "handle_logo_upload");
    register_setting("homepage_section", "classic");
    register_setting("homepage_section", "classic_image", "handle_logo_upload_classic");
    register_setting("homepage_section", "disclaimer");
}

add_action("admin_init", "display_theme_panel_fields");


// Settings Page
function zeppieri_settings_page()
{
    ?>
        <div class="wrap">
        <h1>Theme Settings</h1>
        <hr>
        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php
                settings_fields("homepage_section");
                do_settings_sections("zeppieri-options");
                submit_button();
            ?>
        </form>
        </div>
    <?php
}

function add_theme_menu_item()
{
	add_menu_page("Theme Panel", "Theme Settings", "manage_options", "theme-panel", "zeppieri_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");