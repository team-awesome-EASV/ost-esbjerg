<?php

function ostPracticeResources()
{
    wp_enqueue_style( 'fonts', 'https://use.typekit.net/wny5ldn.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'ostPracticeResources');

// function loadScripts() {
//     wp_enqueue_script( 'theme',  get_stylesheet_directory_uri() . '/scripts/theme.js',  [
//         'jquery',
        
//       ], time(), true );
// }

// add_action( 'wp_enqueue_scripts', 'loadScripts' );

//navigation menus

function setup_menus()
{
    register_nav_menu("header_menu", __("Header menu"));
    register_nav_menu("mobile_menu", __("Mobile menu"));

}
add_action("init", "setup_menus");

function mobile_nav_menu_scripts() {
     
    wp_enqueue_script( 'mobile-nav-script', get_stylesheet_directory_uri() . '/scripts/mobile-nav.js', array( 'jquery' ) );
  
}
add_action( 'wp_enqueue_scripts', 'mobile_nav_menu_scripts' );


//add_action( 'wp_enqueue_scripts', 'add_font_awesome' );
 
function setup_field_groups() {
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_5fbe814d3d5e1',
            'title' => 'Posts',
            'fields' => array(
                array(
                    'key' => 'field_5fbe8175631d7',
                    'label' => 'sub header',
                    'name' => 'sub_header',
                    'type' => 'text',
                    'instructions' => 'Write 3-4 sentences, summing up the post.',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt, ut labore et dolore magna aliqua.',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => 120,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'acf_after_title',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
    
        acf_add_local_field_group(array(
            'key' => 'group_5fc78e1f08cf6',
            'title' => 'about',
            'fields' => array(
                array(
                    'key' => 'field_5fc78e2600d60',
                    'label' => 'about text one title',
                    'name' => 'about_text_one_title',
                    'type' => 'text',
                    'instructions' => 'enter a title for the first paragraph, 20 characters',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Part',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_5fc78eac00d61',
                    'label' => 'about text one content',
                    'name' => 'about_text_one_content',
                    'type' => 'textarea',
                    'instructions' => 'enter content for paragraph one',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Man kan fremad se, at de har været udset til at læse, at der skal dannes par af ligheder. Dermed kan der afsluttes uden løse ender, og de kan optimeres fra oven af at formidles stort uden brug fra presse. I en kant af landet går der blandt om, at de vil sætte den over forbehold for tiden.',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                ),
                array(
                    'key' => 'field_5fc78f0500d62',
                    'label' => 'about text two title',
                    'name' => 'about_text_two_title',
                    'type' => 'text',
                    'instructions' => 'enter a title for the second paragraph, 20 characters',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Our cheese',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_5fc78f3700d63',
                    'label' => 'about text two content',
                    'name' => 'about_text_two_content',
                    'type' => 'textarea',
                    'instructions' => 'enter content for paragraph two',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Man kan fremad se, at de har været udset til at læse, at der skal dannes par af ligheder. Dermed kan der afsluttes uden løse ender, og de kan optimeres fra oven af at formidles stort uden brug fra presse. I en kant af landet går der blandt om, at de vil sætte den over forbehold for tiden.',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                ),
                array(
                    'key' => 'field_5fc78f8b00d64',
                    'label' => 'about katherine title',
                    'name' => 'about_katherine_title',
                    'type' => 'text',
                    'instructions' => 'enter a title for the second paragraph, 20 characters',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Katherine',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_5fc78fbf00d65',
                    'label' => 'about katherine content',
                    'name' => 'about_katherine_content',
                    'type' => 'textarea',
                    'instructions' => 'enter content for the paragraph about Katherine',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Man kan fremad se, at de har været udset til at læse, at der skal dannes par af ligheder. Dermed kan der afsluttes uden løse ender, og de kan optimeres fra oven af at formidles stort uden brug fra presse. I en kant af landet går der blandt om, at de vil sætte den over forbehold for tiden.',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page',
                        'operator' => '==',
                        'value' => '12',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));

        acf_add_local_field_group(array(
                'key' => 'group_5fc72ff08b8a6',
                'title' => 'products',
                'fields' => array(
                    array(
                        'key' => 'field_5fc730c8be579',
                        'label' => 'Tapas price',
                        'name' => 'tapas_price',
                        'type' => 'text',
                        'instructions' => 'insert the tapas price here',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 120,
                        'placeholder' => 120,
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5fc73abbf8606',
                        'label' => 'tapas title',
                        'name' => 'tapas_title',
                        'type' => 'text',
                        'instructions' => 'small title for the tapas presentation',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Tapas anretning',
                        'placeholder' => 'tapas title presentation',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => 20,
                    ),
                    array(
                        'key' => 'field_5fc7393cb58d2',
                        'label' => 'tapas description',
                        'name' => 'tapas_description',
                        'type' => 'textarea',
                        'instructions' => 'enter a small description for the tapas product',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Vores lækre tapas anretning kan bestilles fra en person og op efter, nok til en hel måltid Du får forskellige oste og charcuteri. Samt syltet grønt frugte. Vi tager også hensyn til allergi. Sig til når du bestiller.',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                    ),
                    array(
                        'key' => 'field_5fc73123be57a',
                        'label' => 'pizza price',
                        'name' => 'pizza_price',
                        'type' => 'text',
                        'instructions' => 'insert the pizza price here',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 60,
                        'placeholder' => 60,
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5fc73b0df8607',
                        'label' => 'pizza title',
                        'name' => 'pizza_title',
                        'type' => 'text',
                        'instructions' => 'small title for the pizza presentation',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Pizza dage',
                        'placeholder' => 'small title for the pizza presentation',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => 20,
                    ),
                    array(
                        'key' => 'field_5fc739fbb58d3',
                        'label' => 'pizza description',
                        'name' => 'pizza_description',
                        'type' => 'textarea',
                        'instructions' => 'enter a small description for the pizza product',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Vi sælger pizzakits to dage om ugen, Torsdag og Fredag. Du køber en kit fra os, som du selv kan lave. Vi har instruktionelle videoer hernede. Gerne ordr fremadrettet, sådan så vi kan forberede din kit',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                    ),
                    array(
                        'key' => 'field_5fc73b74f8608',
                        'label' => 'cheese title',
                        'name' => 'cheese_title',
                        'type' => 'text',
                        'instructions' => 'title for the cheese intro text max 25 charcters',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Bred vifte af oste',
                        'placeholder' => 'title for the cheese intro text',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => 25,
                    ),
                    array(
                        'key' => 'field_5fc73bfff8609',
                        'label' => 'cheese intro text',
                        'name' => 'cheese_intro_text',
                        'type' => 'textarea',
                        'instructions' => 'cheese intro text max 200 characters',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Vi sælger pizzakits to dage om ugen, Torsdag og Fredag. Du køber en kit fra os, som du selv kan lave. Vi har instruktionelle videoer hernede. Gerne ordr fremadrettet, sådan så vi kan forberede din kit',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                    ),
                    array(
                        'key' => 'field_5fc73c82b7a77',
                        'label' => 'about cheese first paragraph title',
                        'name' => 'about_cheese_first_paragraph_title',
                        'type' => 'text',
                        'instructions' => 'enter a title for the first about cheese paragraph',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Lorem ipsum',
                        'placeholder' => 'enter a title for the first about cheese paragraph',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => 20,
                    ),
                    array(
                        'key' => 'field_5fc73ce9b7a78',
                        'label' => 'about cheese first paragraph text',
                        'name' => 'about_cheese_first_paragraph_text',
                        'type' => 'textarea',
                        'instructions' => 'input text for the first about cheese paragraph',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit veniam voluptatem illum eveniet pariatur dolore, consectetur delectus illo ut. Quidem corporis explicabo officia possimus quae iure debitis voluptatem commodi eius!',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                    ),
                    array(
                        'key' => 'field_5fc73d79b7a79',
                        'label' => 'about cheese second paragraph title',
                        'name' => 'about_cheese_second_paragraph_title',
                        'type' => 'text',
                        'instructions' => 'enter a title for the second about cheese paragraph',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Lorem ipsum',
                        'placeholder' => 'enter a title for the first about cheese paragraph',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => 20,
                    ),
                    array(
                        'key' => 'field_5fc73e0bb7a7a',
                        'label' => 'about cheese second paragraph text',
                        'name' => 'about_cheese_second_paragraph_text',
                        'type' => 'textarea',
                        'instructions' => 'input text for the first second cheese paragraph',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit veniam voluptatem illum eveniet pariatur dolore, consectetur delectus illo ut. Quidem corporis explicabo officia possimus quae iure debitis voluptatem commodi eius!',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'page',
                            'operator' => '==',
                            'value' => '13',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
        ));

        acf_add_local_field_group(array(
            'key' => 'group_5fc8dff2a2558',
            'title' => 'home page',
            'fields' => array(
                array(
                    'key' => 'field_5fc8dff68a0d2',
                    'label' => 'homepage video',
                    'name' => 'homepage_video',
                    'type' => 'url',
                    'instructions' => 'paste url from youtube embed code',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_5fc8f9d01563a',
                    'label' => 'homepage header',
                    'name' => 'homepage_header',
                    'type' => 'text',
                    'instructions' => 'Type in the header of home page products section',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Vores produkter',
                    'placeholder' => 'Vores produkter',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => 30,
                ),
                array(
                    'key' => 'field_5fc8fa571563b',
                    'label' => 'homepage products p',
                    'name' => 'homepage_products_p',
                    'type' => 'textarea',
                    'instructions' => 'Type in short text about Ost products selection',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Man kan fremad se, at de har været udset til at læse, at der skal dannes par af ligheder. Dermed kan der afsluttes uden løse ender, og de kan optimeres fra oven af at formidles stort uden brug fra presse. I en kant af landet går der blandt om, at de vil sætte den over forbehold for tiden.',
                    'placeholder' => '',
                    'maxlength' => 300,
                    'rows' => '',
                    'new_lines' => '',
                ),
                array(
                    'key' => 'field_5fc8fabf1563c',
                    'label' => 'homepage instagram header',
                    'name' => 'homepage_instagram_header',
                    'type' => 'text',
                    'instructions' => 'type in call to action for instagram',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Tjek vores instagram!',
                    'placeholder' => 'Tjek vores instagram !',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => 30,
                ),
                array(
                    'key' => 'field_5fc8fed332202',
                    'label' => 'homepage products button txt',
                    'name' => 'homepage_products_button_txt',
                    'type' => 'text',
                    'instructions' => 'type in inner button text - it should be call t action',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'Check it out!',
                    'placeholder' => 'Check it out!',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => 15,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page',
                        'operator' => '==',
                        'value' => '80',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
        

endif;
}
add_action("acf/init", "setup_field_groups");

function get_top_ancestor_id()
{

    global $post;

    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];

    }
    ;

    return $post->ID;

}

function get_first_image() {
    global $post, $posts;
    $first_img = '';
    $post_index = $wp_query->current_post +1 .'';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
  
    if(empty($first_img)){ //Defines a default image
            
      $first_img = get_template_directory_uri() .'/static-assets/chese-wine.jpg';
    }
    return $first_img;
  }

  function random_ornament() {
      $random =get_template_directory_uri() .'/static-assets/svg/rando/'. rand(1,7) . '.svg';
      return $random;

  }

  function random_inline_svg() {
      $random_svg = rand(1,6) . '.svg';
      return $random_svg;
  }

  ?>