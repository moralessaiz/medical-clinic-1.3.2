<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.1.7
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */

 //add_filter('https_ssl_verify', '__return_false');

/*** START EDIT THEME PARAMETERS HERE ***/
// Theme Settings System Fonts List
update_option('siteurl', 'subred.subredsur.gov.co');
update_option('home', 'subred.subredsur.gov.co');
if (!function_exists('medical_clinic_system_fonts_list')) {
	function medical_clinic_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('medical_clinic_text_decoration_list')) {
	function medical_clinic_text_decoration_list() {
		$list = array( 
			'none' => esc_html__('none', 'medical-clinic'), 
			'underline' => esc_html__('underline', 'medical-clinic'), 
			'overline' => esc_html__('overline', 'medical-clinic'), 
			'line-through' => esc_html__('line-through', 'medical-clinic'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('medical_clinic_custom_color_schemes_list')) {
	function medical_clinic_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'medical-clinic'), 
			'second' => esc_html__('Custom 2', 'medical-clinic'), 
			'third' => esc_html__('Custom 3', 'medical-clinic') 
		);
		
		
		return apply_filters('medical_clinic_custom_color_schemes_list_filter', $list);
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/



// Require Files Function
if (!function_exists('medical_clinic_locate_template')) {
	function medical_clinic_locate_template($template_names, $require_once = true, $load = true) {
		$located = '';
		
		
		foreach ((array) $template_names as $template_name) {
			if (!$template_name) {
				continue;
			}
			
			
			if (file_exists(get_stylesheet_directory() . '/' . $template_name)) {
				$located = get_stylesheet_directory() . '/' . $template_name;
				
				
				break;
			} elseif (file_exists(get_template_directory() . '/' . $template_name)) {
				$located = get_template_directory() . '/' . $template_name;
				
				
				break;
			}
		}
		
		
		if ($load && $located != '') {
			if ($require_once) {
				require_once($located);
			} else {
				require($located);
			}
		}
		
		
		return $located;
	}
}



// CMSMasters Content Composer Plugin Compatibility
define('CMSMASTERS_CONTENT_COMPOSER', true);

// CMSMasters Donations Plugin Compatibility
define('CMSMASTERS_DONATIONS', false);

// CMSMasters Events Schedule Plugin Compatibility
define('CMSMASTERS_EVENTS_SCHEDULE', false);

// CMSMasters Contact Form Builder Plugin Compatibility
define('CMSMASTERS_CONTACT_FORM_BUILDER', true);

// CMSMasters Mega Menu Plugin Compatibility
define('CMSMASTERS_MEGA_MENU', true);

// CMSMasters Sermons Plugin Compatibility
define('CMSMASTERS_SERMONS', false);

// CMSMasters Importer Compatibility
define('CMSMASTERS_IMPORTER', true);

// CMSMasters Custom Fonts Compatibility
define('CMSMASTERS_CUSTOM_FONTS', true);

// Woocommerce Plugin Compatibility
define('CMSMASTERS_WOOCOMMERCE', class_exists('woocommerce') ? true : false);

// Yith Woocommerce Ajax Search Plugin Compatibility
define('CMSMASTERS_WCAS', class_exists('YITH_WCAS') && CMSMASTERS_WOOCOMMERCE ? false : false);

// The Events Calendar Plugin Compatibility
define('CMSMASTERS_TRIBE_EVENTS', class_exists('Tribe__Events__Main') ? false : false);

// Timetable Responsive Schedule For WordPress Plugin Compatibility
define('CMSMASTERS_TIMETABLE', function_exists('timetable_events_init') ? true : false);

// MP Timetable and Event Schedule Plugin Compatibility
define('CMSMASTERS_MP_TIMETABLE', class_exists('Mp_Time_Table') ? true : false);

// LearnPress Plugin Compatibility
define('CMSMASTERS_LEARNPRESS', class_exists('LearnPress') ? false : false);

// WordPress Event Ticketing Plugin Compatibility
define('CMSMASTERS_TC_EVENTS', class_exists('TC') ? false : false);

// Instagram Feed Plugin Compatibility
define('CMSMASTERS_INSTAGRAM_FEED', function_exists('sb_instagram_activate') ? false : false);

// MailPoet Plugin Compatibility
define('CMSMASTERS_MAILPOET', (class_exists('WYSIJA') || class_exists('\MailPoet\Config\Initializer')) ? true : false);

// Theme Style Compatibility
define('CMSMASTERS_THEME_STYLE_COMPATIBILITY', false);

// Theme Style
define('CMSMASTERS_THEME_STYLE', (CMSMASTERS_THEME_STYLE_COMPATIBILITY && get_option('cmsmasters_medical-clinic_theme_style') ? get_option('cmsmasters_medical-clinic_theme_style') : ''));

// Theme Colored Categories Compatibility
define('CMSMASTERS_COLORED_CATEGORIES', false);

// Theme Categories Icon Compatibility
define('CMSMASTERS_CATEGORIES_ICON', false);

// Theme Projects Compatibility
define('CMSMASTERS_PROJECT_COMPATIBLE', true);

// Theme Profiles Compatibility
define('CMSMASTERS_PROFILE_COMPATIBLE', true);

// Theme Developer Mode
define('CMSMASTERS_DEVELOPER_MODE', false);

// Change FS Method
if (!defined('FS_METHOD')) {
	define('FS_METHOD', 'direct');
}



// Theme Settings All Theme Styles
if (!function_exists('medical_clinic_all_theme_styles')) {
	function medical_clinic_all_theme_styles() {
		$out = array( 
			'Default|', 
			'Theme Style 1|1', 
			'Theme Style 2|2' 
		);
		
		
		return $out;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('medical_clinic_all_color_schemes_list')) {
	function medical_clinic_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'medical-clinic'), 
			'header' => 		esc_html__('Header', 'medical-clinic'), 
			'navigation' => 	esc_html__('Navigation', 'medical-clinic'), 
			'header_top' => 	esc_html__('Header Top', 'medical-clinic'), 
			'footer' => 		esc_html__('Footer', 'medical-clinic') 
		);
		
		
		$out = array_merge($list, medical_clinic_custom_color_schemes_list());
		
		
		return apply_filters('cmsmasters_all_color_schemes_list_filter', $out);
	}
}



// CMSMasters Framework Directories Constants
define('CMSMASTERS_FRAMEWORK', get_template_directory() . '/framework');
define('CMSMASTERS_ADMIN', CMSMASTERS_FRAMEWORK . '/admin');
define('CMSMASTERS_SETTINGS', CMSMASTERS_ADMIN . '/settings');
define('CMSMASTERS_OPTIONS', CMSMASTERS_ADMIN . '/options');
define('CMSMASTERS_ADMIN_INC', CMSMASTERS_ADMIN . '/inc');
define('CMSMASTERS_CLASS', CMSMASTERS_FRAMEWORK . '/class');
define('CMSMASTERS_FUNCTION', CMSMASTERS_FRAMEWORK . '/function');
define('CMSMASTERS_VARS', get_template_directory() . '/theme-vars');
define('CMSMASTERS_VARS_STYLE', CMSMASTERS_VARS . '/theme-style' . CMSMASTERS_THEME_STYLE);
define('CMSMASTERS_DEMO_FILES_PATH', CMSMASTERS_VARS_STYLE . '/admin/demo-content/');



// Load Framework Parts
require_once(CMSMASTERS_CLASS . '/browser.php');

if (class_exists('Cmsmasters_Theme_Importer')) {
	require_once(CMSMASTERS_VARS_STYLE . '/admin/demo-content-importer.php');
}

require_once(CMSMASTERS_VARS_STYLE . '/admin/theme-settings-defaults.php');

require_once(get_template_directory() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/theme-settings-defaults.php');

require_once(CMSMASTERS_ADMIN_INC . '/config-functions.php');

require_once(CMSMASTERS_FUNCTION . '/general-functions.php');

require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/theme-functions.php');

require_once(get_template_directory() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/theme-vars-functions.php');

require_once(CMSMASTERS_VARS_STYLE . '/theme-vars-functions.php');

require_once(CMSMASTERS_VARS . '/plugin-activator.php');

require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings.php');

require_once(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options.php');

require_once(CMSMASTERS_ADMIN_INC . '/admin-scripts.php');

require_once(CMSMASTERS_FUNCTION . '/breadcrumbs.php');

require_once(CMSMASTERS_FUNCTION . '/likes.php');

require_once(CMSMASTERS_FUNCTION . '/views.php');

require_once(CMSMASTERS_FUNCTION . '/pagination.php');


$cmsmasters_wp_version = get_bloginfo('version');

if (version_compare($cmsmasters_wp_version, '5', '>=') || function_exists('is_gutenberg_page')) {
	require_once(get_template_directory() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-module-functions.php');
}


// Theme Colored Categories functions
if (CMSMASTERS_COLORED_CATEGORIES) {
	require_once(CMSMASTERS_FUNCTION . '/theme-colored-categories.php');
}

// Theme Categories Icon functions
if (CMSMASTERS_CATEGORIES_ICON) {
	require_once(CMSMASTERS_FUNCTION . '/theme-categories-icon.php');
}

// CMSMASTERS Donations functions
if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
	require_once(get_template_directory() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// CMSMasters Events Schedule functions
if (CMSMASTERS_EVENTS_SCHEDULE && class_exists('Cmsmasters_Events_Schedule')) {
	require_once(get_template_directory() . '/cmsmasters-events-schedule/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// CMSMasters Sermons functions
if (CMSMASTERS_SERMONS && class_exists('Cmsmasters_Sermons')) {
	require_once(get_template_directory() . '/cmsmasters-sermons/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// Woocommerce functions
if (CMSMASTERS_WOOCOMMERCE) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// Yith Woocommerce Ajax Search functions
if (CMSMASTERS_WCAS) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/cmsmasters-plugin-functions.php');
}

// Tribe Events functions
if (CMSMASTERS_TRIBE_EVENTS) {
	require_once(get_template_directory() . '/tribe-events/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// Timetable functions
if (CMSMASTERS_TIMETABLE) {
	require_once(get_template_directory() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// MP Timetable functions
if (CMSMASTERS_MP_TIMETABLE) {
	require_once(get_template_directory() . '/mp-timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// LearnPress functions
if (CMSMASTERS_LEARNPRESS) {
	require_once(get_template_directory() . '/learnpress/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// TC Events functions
if (CMSMASTERS_TC_EVENTS) {
	require_once(get_template_directory() . '/tc-events/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}

// Instagram Feed functions
if (CMSMASTERS_INSTAGRAM_FEED) {
	require_once(get_template_directory() . '/instagram-feed/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-plugin-functions.php');
}



// Load Theme Local File
if (!function_exists('medical_clinic_load_theme_textdomain')) {
	function medical_clinic_load_theme_textdomain() {
		load_theme_textdomain('medical-clinic', CMSMASTERS_VARS . '/languages');
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'medical_clinic_load_theme_textdomain')) {
	add_action('after_setup_theme', 'medical_clinic_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('medical_clinic_theme_activation')) {
	function medical_clinic_theme_activation() {
		if (get_option('cmsmasters_active_theme') != 'medical-clinic') {
			add_option('cmsmasters_active_theme', 'medical-clinic', '', 'yes');
			
			
			medical_clinic_add_global_options();
			
			
			medical_clinic_add_global_icons();
			
			
			wp_redirect(esc_url(admin_url('admin.php?page=cmsmasters-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'medical_clinic_theme_activation');



// Framework Deactivation
if (!function_exists('medical_clinic_theme_deactivation')) {
	function medical_clinic_theme_deactivation() {
		delete_option('cmsmasters_active_theme');
	}
}

add_action('switch_theme', 'medical_clinic_theme_deactivation');



// Plugin Activation Regenerate Styles
if (!function_exists('medical_clinic_plugin_activation')) {
	function medical_clinic_plugin_activation($plugin, $network_activation) {
		update_option('cmsmasters_plugin_activation', 'true');
		
		
		if ($plugin == 'classic-editor/classic-editor.php') {
			update_option('classic-editor-replace', 'no-replace');
		}
	}
}

add_action('activated_plugin', 'medical_clinic_plugin_activation', 10, 2);


if (!function_exists('medical_clinic_plugin_activation_regenerate')) {
	function medical_clinic_plugin_activation_regenerate() {
		if (!get_option('cmsmasters_plugin_activation')) {
			add_option('cmsmasters_plugin_activation', 'false');
		}
		
		if (get_option('cmsmasters_plugin_activation') != 'false') {
			medical_clinic_regenerate_styles();
			
			medical_clinic_add_global_options();
			
			medical_clinic_add_global_icons();
			
			
			update_option('cmsmasters_plugin_activation', 'false');
		}
	}
}

add_action('init', 'medical_clinic_plugin_activation_regenerate');


function medical_clinic_run_reinit_import_options($post_id, $key, $value) {
	if (!get_post_meta($post_id, 'cmsmasters_heading', true)) {
		$custom_post_meta_fields = medical_clinic_get_custom_all_meta_fields();
		
		foreach ($custom_post_meta_fields as $field) {
			if ( 
				$field['type'] != 'tabs' && 
				$field['type'] != 'tab_start' && 
				$field['type'] != 'tab_finish' && 
				$field['type'] != 'content_start' && 
				$field['type'] != 'content_finish' 
			) {
				update_post_meta($post_id, $field['id'], $field['std']);
			}
		}
	}
	
	
	if ($key === 'cmsmasters_composer_show' && $value === 'true') {
		update_post_meta($post_id, 'cmsmasters_gutenberg_show', 'true');
	}
}

add_action('import_post_meta', 'medical_clinic_run_reinit_import_options', 10, 3);

// MODIFICADO -> Remover del menú de Rol: comunicaciones
function custom_menu_modifications_comunicaciones() {
    // Obtener el usuario actual
    $user = wp_get_current_user();

    // Condiciones para un rol específico, por ejemplo 'editor'
    if (in_array('comunicaciones', $user->roles)) {
        // Remover menús específicos
        remove_menu_page('tools.php');  // Herramientas
        remove_menu_page('edit-comments.php');  // Comentarios
        remove_menu_page('plugins.php');  // Plugins
		remove_menu_page('options-general.php');
		remove_menu_page('elementor');
		remove_menu_page('WP-Optimize');
		remove_menu_page('cmsmasters-settings');
		remove_menu_page('accessibility-settings');
		remove_menu_page('unlimitedelements');
		remove_menu_page('cmtt_menu_options');
		remove_menu_page('embedpress');
		remove_menu_page('eael-settings');
		remove_menu_page('cookie-law-info');
		remove_menu_page('edit.php?post_type=calendar');
		remove_menu_page('edit.php?post_type=profile');
		remove_menu_page('edit.php?post_type=project');
		remove_menu_page('edit.php?post_type=elementor_library');
		remove_menu_page('edit.php?post_type=docs-investigacion');
		remove_menu_page('cptui_main_menu');
		remove_menu_page('searchandfilter-settings');

        // Si quieres modificar otros menús, puedes usar:
        // remove_submenu_page('slug-del-menu-padre', 'slug-del-submenu');
    }
}
add_action('admin_menu', 'custom_menu_modifications_comunicaciones', 99);

// MODIFICADO -> Incluir widgets.js de Twitter directamente en el template
function add_twitter_widgets_js() {
    // Incluir el script widgets.js de Twitter
    wp_enqueue_script(
        'twitter-widgets', // Nombre del script
        'https://platform.twitter.com/widgets.js', // URL del script
        array(), // Dependencias
        null, // Versión
        true // Cargar en el footer para mejor rendimiento
    );
}
add_action('wp_enqueue_scripts', 'add_twitter_widgets_js');

// MODIFICADO para gargar jQuery en tema o plugin
function enqueue_jquery_on_login() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}
add_action('login_enqueue_scripts', 'enqueue_jquery_on_login');

// MODIFICADO -> imprimir todos los slugs en la pagina de administrador index.php
/*function list_all_menu_slugs() {
    global $menu;
    echo '<pre>';
    print_r($menu);
    echo '</pre>';
}
add_action('admin_menu', 'list_all_menu_slugs'); */

/* Eliminar metaetiquetas (version de wordpress) en código fuente de las páginas */
remove_action('wp_head', 'wp_generator');

/* interceptar solicitudes HTTP y las cambia a HTTPS antes de que se realicen */
function force_https_urls( $args, $url ) {
    if (strpos($url, 'http://') === 0) {
        $url = str_replace('http://', 'https://', $url);
    }
    return $args;
}
add_filter('http_request_args', 'force_https_urls', 10, 2);

/* Probar conexion exterior en el archivo debug.log */
function test_http_connection() {
    $response = wp_remote_get( 'https://api.wordpress.org/plugins/info/1.0/' );
    if ( is_wp_error( $response ) ) {
        error_log( 'Error de conexión: ' . $response->get_error_message() );
    } else {
        error_log( 'Conexión exitosa a wordpress.org' );
    }
}
add_action('admin_init', 'test_http_connection');

/* Retrasar la carga de codigo despues del init */
add_action('init', function() {
    load_theme_textdomain('medical-clinic', get_template_directory() . '/languages');
});

/* Agregar la opción de order en las Categorias */
/* function agregar_orden_categoria($tag) {
    $orden = get_term_meta($tag->term_id, 'orden', true);
    ?>
    <tr class="form-field">
        <th scope="row"><label for="orden">Orden</label></th>
        <td>
            <input type="number" name="orden" id="orden" value="<?php echo esc_attr($orden); ?>">
        </td>
    </tr>
    <?php
}
add_action('category_edit_form_fields', 'agregar_orden_categoria');
add_action('category_add_form_fields', 'agregar_orden_categoria'); */

/* function guardar_orden_categoria($term_id) {
    if (isset($_POST['orden'])) {
        update_term_meta($term_id, 'orden', sanitize_text_field($_POST['orden']));
    }
}
add_action('edited_category', 'guardar_orden_categoria');
add_action('create_category', 'guardar_orden_categoria'); */

/* Ordenar en todo el sitio por el # de orden */
/* function ordenar_categorias_wp($query) {
    if (is_admin() || !$query->is_main_query() || !$query->is_category()) {
        return;
    }

    $query->set('meta_key', 'orden');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
}
add_action('pre_get_posts', 'ordenar_categorias_wp'); */

/* Ordenar en Categorias en la pagina de administrador */
/* function ordenar_categorias_admin($query) {
    if (is_admin() && $query->query_vars['taxonomy'] === 'category') {
        $query->query_vars['meta_key'] = 'orden';
        $query->query_vars['orderby'] = 'meta_value_num';
        $query->query_vars['order'] = 'ASC';
    }
}
add_action('pre_get_terms', 'ordenar_categorias_admin'); */