<?php 
//https://support.advancedcustomfields.com/forums/topic/register-fields-via-php/
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'OptionPage',
	'title' => 'Option General Tao',
	'fields' => array (
		array (
			'key' => 'etsy_link',
			'label' => 'Etsy Link',
			'name' => 'etsy_link',
			'type' => 'text',
			'default_value' => 'https://www.etsy.com/',
		),
		array (
			'key' => 'society6_link',
			'label' => 'Society6 Link',
			'name' => 'society6_link',
			'type' => 'text',
			'default_value' => 'https://www.society6.com/darveelicious',
		),
		array (
			'key' => 'facebook_link',
			'label' => 'Facebook Link',
			'name' => 'facebook_link',
			'type' => 'text',
			'default_value' => 'https://www.facebook.com/',
		),
		array (
			'key' => 'instagram_link',
			'label' => 'Instagram Link',
			'name' => 'instagram_link',
			'type' => 'text',
			'default_value' => 'https://www.instagram.com/',
		),
		array (
			'key' => 'linkedin_link',
			'label' => 'Linkedin Link',
			'name' => 'linkedin_link',
			'type' => 'text',
			'default_value' => 'https://www.linkedin.com/',
		),
		array (
			'key' => 'local_link',
			'label' => 'local Link',
			'name' => 'local_link',
			'type' => 'text',
			'default_value' => '',
		),
		array (
			'key' => 'email_adress',
			'label' => 'Email',
			'name' => 'email_adress',
			'type' => 'text',
			'default_value' => 'email@info.ca',
		),
		array (
			'key' => 'darveelicious_logo_black',
			'label' => 'Darveelicious Logo black',
			'name' => 'darveelicious_logo_black',
			'type' => 'image',
			'preview_size' => 'medium',
		),
		array (
			'key' => 'darveelicious_logo_white',
			'label' => 'Darveelicious Logo white',
			'name' => 'darveelicious_logo_white',
			'type' => 'image',
			'preview_size' => 'medium',
		),
		array (
			'key' => 'darvee_logo_black',
			'label' => 'Darvee Logo black',
			'name' => 'darvee_logo_black',
			'type' => 'image',
			'preview_size' => 'medium',
		),
		array (
			'key' => 'darvee_logo_white',
			'label' => 'Darvee Logo white',
			'name' => 'darvee_logo_white',
			'type' => 'image',
			'preview_size' => 'medium',
		),
		array (
			'key' => 'banner_offer',
			'label' => 'Banner offer text',
			'name' => 'banner_offer',
			'type' => 'text',
			'default_value' => '',
		),
		array (
			'key' => 'banner_link',
			'label' => 'Banner link',
			'name' => 'banner_link',
			'type' => 'text',
			'default_value' => '',
		),
		array (
			'key' => 'field_58ce923cf46e8',
			'label' => 'Banner offer checkbox',
			'name' => 'banner_offer_true',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array (
			'key' => 'footer_text',
			'label' => 'Footer text',
			'name' => 'footer_text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array (
			'key' => 'image_map',
			'label' => 'Image de la map',
			'name' => 'image_map',
			'type' => 'image',
			'preview_size' => 'medium',
		),


	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'darvee-general-settings',
			),
		),
	),
));
acf_add_local_field_group(array(
	'key' => 'shop_page',
	'title' => 'Shop page',
	'fields' => array (
		array (
			'key' => 'field_58cb20e679c20',
			'label' => 'Produit 1',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'titre_store_1',
			'label' => 'Titre store 1',
			'name' => 'titre_store_1',
			'type' => 'text',
			'default_value' => '',
		),
		array (
			'key' => 'sous_titre_store_1',
			'label' => 'Sous-titre store 1',
			'name' => 'sous_titre_store_1',
			'type' => 'text',
			'default_value' => '',
		),
		array (
			'key' => 'image_store_1',
			'label' => 'Image store 1',
			'name' => 'image_store_1',
			'type' => 'image',
			'preview_size' => 'small',
		),
		array (
			'key' => 'link_store_1',
			'label' => 'Link store 1',
			'name' => 'link_store_1',
			'type' => 'text',
			'default_value' => '',
		),
		array (
			'key' => 'field_58cb210479c20',
			'label' => 'Produit 2',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'titre_store_2',
			'label' => 'Titre store 2',
			'name' => 'titre_store_2',
			'type' => 'text',
			'default_value' => '',
		),
		array (
			'key' => 'sous_titre_store_2',
			'label' => 'Sous-titre store 2',
			'name' => 'sous_titre_store_2',
			'type' => 'text',
			'default_value' => '',
		),
		array (
			'key' => 'image_store_2',
			'label' => 'Image store 2',
			'name' => 'image_store_2',
			'type' => 'image',
			'preview_size' => 'small',
		),
		array (
			'key' => 'link_store_2',
			'label' => 'Link store 2',
			'name' => 'link_store_2',
			'type' => 'text',
			'default_value' => '',
		),array (
			'key' => 'field_58cb210479c21',
			'label' => 'Produit 3',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'titre_store_3',
			'label' => 'Titre store 3',
			'name' => 'titre_store_3',
			'type' => 'text',
			'default_value' => '',
		),
		array (
			'key' => 'sous_titre_store_3',
			'label' => 'Sous-titre store 3',
			'name' => 'sous_titre_store_3',
			'type' => 'text',
			'default_value' => '',
		),
		array (
			'key' => 'image_store_3',
			'label' => 'Image store 3',
			'name' => 'image_store_3',
			'type' => 'image',
			'preview_size' => 'small',
		),
		array (
			'key' => 'link_store_3',
			'label' => 'Link store 3',
			'name' => 'link_store_3',
			'type' => 'text',
			'default_value' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-shop.php',
			),
		),
	),
));
acf_add_local_field_group(array (
	'key' => 'group_58d7b8f3b6f3f',
	'title' => 'Checkbox',
	'fields' => array (
		array (
			'key' => 'field_58d7b8fc1210f',
			'label' => 'Widget',
			'name' => 'widget',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Slider' => 'Slider',
				'Google Map' => 'Google Map',
			),
			'allow_custom' => 0,
			'save_custom' => 0,
			'default_value' => array (
			),
			'layout' => 'vertical',
			'toggle' => 0,
			'return_format' => 'value',
		),
		array (
			'key' => 'field_58d7b92e12110',
			'label' => 'Slider Image',
			'name' => 'slider_image',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58d7b8fc1210f',
						'operator' => '==',
						'value' => 'Slider',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_58d7b94f12111',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => 'Format 1040 x 400',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'large',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_58d7b9a212112',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-two-column.php',
			),
		),
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'index.php',
			),
		),
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-shop.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_58c5bc66bf095',
	'title' => 'Content',
	'fields' => array (
		array (
			'key' => 'field_58c5bc762caea',
			'label' => 'left side',
			'name' => 'left_side',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-two-column.php',
			),
		),
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'index.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
acf_add_local_field_group(array (
	'key' => 'group_58c5bc66bf096',
	'title' => 'Content',
	'fields' => array (
		array (
			'key' => 'field_58c5bc842caeb',
			'label' => 'right side',
			'name' => 'rigth_side',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-two-column.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_58d7b0bee9683',
	'title' => '404',
	'fields' => array (
		array (
			'key' => 'field_58d7b0cbf9b0e',
			'label' => 'Liens de l\'image',
			'name' => 'liens_de_limage',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_58d7b0e7f9b0f',
					'label' => 'New image',
					'name' => 'new_image',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => '404.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'custom_fields',
		4 => 'discussion',
		5 => 'comments',
		6 => 'revisions',
		7 => 'slug',
		8 => 'author',
		9 => 'format',
		10 => 'page_attributes',
		11 => 'featured_image',
		12 => 'categories',
		13 => 'tags',
		14 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));
endif;
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_58d829867726a',
	'title' => 'Autres images',
	'fields' => array (
		array (
			'key' => 'field_58d8299522b32',
			'label' => 'Autres images',
			'name' => 'autres_images',
			'type' => 'repeater',
			'instructions' => 'Format: largeur 740px',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_58d829be22b33',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'large',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
 ?>