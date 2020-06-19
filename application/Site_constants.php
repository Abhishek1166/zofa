<?php defined('BASEPATH') or exit('No direct script access allowed');

/** Check `ErrorMsg.php` Exists */
file_exists(APPPATH . 'third_party/errorMsg.php') or exit("<center style='color: #3a4161'><h1 style='margin: 25% 0%;font-family: serif; font-size: 40px'>`ErrorMsg.php` Not Exists.</h1></center>");

/** Include `ErrorMsg.php` */
require_once APPPATH . 'third_party/errorMsg.php';

/** Check PHP Version */
version_compare(PHP_VERSION, '7.0.0', '>=') or errorMsg::Show('Your PHP Version is ' . PHP_VERSION . ', To Continue Please Update Your PHP Version to 7.0.0');

/** Get Protocol */
errorMsg::get_protocol() or errorMsg::Show('Protocol Not Define');

/** Site name : `Base Project` */
defined('SITE_NAME') or define('SITE_NAME', 'twstechnology/Zofa');

/** Site Url : `$_SERVER['HTTP_HOST']` */
defined('SITE_URL') or define('SITE_URL', errorMsg::get_protocol() . $_SERVER['HTTP_HOST'] . '/zofa/');

defined('PASSWORD_SALT') or define('PASSWORD_SALT', md5(SITE_NAME . '-TwsTechies'));

define('DEFAULT_CONTROLLER', 'page/view');

define('DEFAULT_VIEW', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'public');
file_exists(APPPATH . '../temp/') or mkdir(APPPATH . '../temp/', 0777);

defined('SESS_PATH') or define('SESS_PATH', APPPATH . '../temp/');

if ($_SERVER['HTTP_HOST'] === 'base.dev') {

	define("DB_HOST", 'localhost');
	define("DB_USER", 'root');
	define("DB_PASS", 'root');
	define("DB_NAME", 'base_dev');
} elseif ($_SERVER['HTTP_HOST'] === 'localhost') {

	define("DB_HOST", 'localhost');
	define("DB_USER", 'root');
	define("DB_PASS", '');
	define("DB_NAME", 'demo_base');
} elseif ($_SERVER['HTTP_HOST'] === 'basedev.twstechnology.com') {

	define("DB_HOST", 'localhost');
	define("DB_USER", 'twstetmh_base');
	define("DB_PASS", 'TwsGroup$123');
	define("DB_NAME", 'twstetmh_base_dev');
} elseif (strstr($_SERVER['HTTP_HOST'], 'proplive.in')) {

	define("DB_HOST", 'localhost');
	define("DB_USER", 'proplive_base');
	define("DB_PASS", 'TwsGroup$123');
	define("DB_NAME", 'proplive_base');
}

/** Svg Sidebar Icons */
const ICONS = [
	"dashboard"    => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>',
	"test"         => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 512 512" width="24" height="24" xml:space="preserve" style="fill: currentColor" enable-background="new 0 0 512 512" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M407.023 138.373l-.016-.017-66.732-66.732c-6.515-6.516-17.079-6.516-23.594 0l-66.732 66.732-.016.017c-3.203 3.212-4.874 7.563-4.874 11.783V250.26c0 9.214 7.47 16.684 16.684 16.684h133.471c9.214 0 16.684-7.47 16.684-16.684V150.156a16.841 16.841 0 0 0-4.875-11.783zm-78.546-31.358l26.456 26.457H302.02l26.457-26.457zm50.052 126.561h-33.368v-16.684c0-9.214-7.47-16.684-16.684-16.684s-16.684 7.47-16.684 16.684v16.684h-33.368V166.84h100.104v66.736z" /><path d="M328.477.001c-101.195 0-183.523 82.329-183.523 183.523 0 44.603 16.001 85.535 42.555 117.374l-23.127 23.127-11.798-11.798c-6.515-6.516-17.079-6.516-23.594 0L14.673 426.544c-19.563 19.561-19.564 51.221 0 70.783 19.561 19.561 51.221 19.564 70.783 0L199.773 383.01c6.516-6.516 6.516-17.079 0-23.594l-11.798-11.798 23.127-23.127c31.84 26.555 72.771 42.556 117.375 42.556C429.672 367.047 512 284.719 512 183.524S429.672.001 328.477.001zM61.861 473.734c-6.506 6.506-17.09 6.506-23.594 0-6.505-6.506-6.505-17.09 0-23.594l58.067-58.067 23.594 23.594-58.067 58.067zm81.661-81.661l-23.594-23.594 20.859-20.859 23.594 23.594-20.859 20.859zm184.955-58.393c-82.796 0-150.155-67.36-150.155-150.155S245.682 33.37 328.477 33.37s150.155 67.36 150.155 150.155S411.273 333.68 328.477 333.68z" /></svg>',
	"project"      => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 512.003 512.003" width="24" height="24" xml:space="preserve" style="fill: currentColor" enable-background="new 0 0 512.003 512.003" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M489.74.001H155.827c-9.22 0-16.696 7.475-16.696 16.696V361.74c0 9.22 7.475 16.696 16.696 16.696H489.74c9.22 0 16.696-7.475 16.696-16.696V16.696c0-9.22-7.475-16.695-16.696-16.695zm-16.695 133.565h-50.087c-9.22 0-16.696 7.475-16.696 16.696s7.475 16.696 16.696 16.696h50.087v178.087H261.566v-50.087c0-9.22-7.475-16.696-16.696-16.696s-16.696 7.475-16.696 16.696v50.087h-55.652V33.392h55.652v183.652c0 9.22 7.475 16.696 16.696 16.696s16.696-7.475 16.696-16.696v-50.087h83.478c9.22 0 16.696-7.475 16.696-16.696s-7.475-16.696-16.696-16.696h-83.478V33.392h211.478v100.174z" /><path d="M501.543 450.105l-33.388-33.389c-6.519-6.52-17.091-6.52-23.611 0s-6.52 17.091 0 23.611l4.89 4.891H129.351l4.89-4.891c6.52-6.519 6.52-17.09.001-23.61-6.519-6.52-17.091-6.52-23.611 0l-33.388 33.389c-6.565 6.558-6.452 17.171 0 23.617l33.388 33.389c6.519 6.52 17.091 6.521 23.611 0 6.52-6.52 6.52-17.091 0-23.611l-4.891-4.892h320.082l-4.89 4.891c-6.52 6.52-6.52 17.091 0 23.611 6.519 6.52 17.091 6.521 23.611 0l33.388-33.389c6.511-6.504 6.496-17.129.001-23.617z" /><path d="M77.24 349.935l-4.891 4.89V57.003l4.891 4.89c6.519 6.52 17.091 6.521 23.611 0 6.52-6.519 6.521-17.091 0-23.611L67.459 4.89c-6.519-6.52-17.091-6.52-23.611 0L10.457 38.281c-6.52 6.519-6.521 17.091 0 23.611 6.519 6.52 17.091 6.52 23.611 0l4.89-4.89v297.821l-4.89-4.89c-6.519-6.52-17.091-6.52-23.611 0-6.52 6.519-6.521 17.091 0 23.611l33.391 33.391c6.519 6.52 17.091 6.521 23.611 0l33.391-33.391c6.52-6.519 6.521-17.091 0-23.611-6.518-6.518-17.09-6.518-23.61.002z" /></svg>',
	"property"     => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" fill="none" enable-background="new 0 0 512 512" style="fill: currentColor"><path d="M495.304 100.174c9.22 0 16.696-7.475 16.696-16.696s-7.475-16.696-16.696-16.696h-16.696V33.391h16.696c9.22 0 16.696-7.475 16.696-16.696S504.525 0 495.304 0h-66.783c-9.22 0-16.696 7.475-16.696 16.696s7.475 16.696 16.696 16.696h16.696v33.391h-16.696c-9.22 0-16.696 7.475-16.696 16.696s7.475 16.696 16.696 16.696h16.696v33.391H233.739V16.696c0-9.22-7.475-16.696-16.696-16.696H16.696C7.475 0 0 7.475 0 16.696v478.609C0 504.525 7.475 512 16.696 512h478.609c9.22 0 16.696-7.475 16.696-16.696V150.261c0-9.22-7.475-16.696-16.696-16.696h-16.696v-33.391h16.695zM200.348 478.609H33.391V33.391h166.957v445.218zm211.478 0H300.522v-33.391h111.304v33.391zm0-66.783H300.522v-33.391h111.304v33.391zm0-66.783H300.522v-33.391h111.304v33.391zm66.783 133.566h-33.391V294.957c0-9.22-7.475-16.696-16.696-16.696H283.826c-9.22 0-16.696 7.475-16.696 16.696v183.652h-33.391V166.957h244.87v311.652z" /><path d="M150.261 66.783H83.478c-9.22 0-16.696 7.475-16.696 16.696v133.565c0 9.22 7.475 16.696 16.696 16.696h66.783c9.22 0 16.696-7.475 16.696-16.696V83.478c0-9.22-7.476-16.695-16.696-16.695zm-16.696 133.565h-33.391v-33.391h33.391v33.391zm0-66.783h-33.391v-33.391h33.391v33.391z" /><path d="M150.261 267.13H83.478c-9.22 0-16.696 7.475-16.696 16.696v133.565c0 9.22 7.475 16.696 16.696 16.696h66.783c9.22 0 16.696-7.475 16.696-16.696V283.826c0-9.22-7.476-16.696-16.696-16.696zm-16.696 133.566h-33.391v-33.391h33.391v33.391zm0-66.783h-33.391v-33.391h33.391v33.391z" /><path d="M428.522 200.348H283.826c-9.22 0-16.696 7.475-16.696 16.696 0 9.22 7.475 16.696 16.696 16.696h144.696c9.22 0 16.696-7.475 16.696-16.696-.001-9.221-7.476-16.696-16.696-16.696z" /></svg>',
	"product"      => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21" /><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" /><polyline points="3.27 6.96 12 12.01 20.73 6.96" /><line x1="12" y1="22.08" x2="12" y2="12" /></svg>',
	"order"        => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13" /><polygon points="16 8 20 8 23 11 23 16 16 16 16 8" /><circle cx="5.5" cy="18.5" r="2.5" /><circle cx="18.5" cy="18.5" r="2.5" /></svg>',
	"review"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>',
	"category"     => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2" /><polyline points="2 17 12 22 22 17" /><polyline points="2 12 12 17 22 12" /></svg>',
	"filter"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders"><line x1="4" y1="21" x2="4" y2="14" /><line x1="4" y1="10" x2="4" y2="3" /><line x1="12" y1="21" x2="12" y2="12" /><line x1="12" y1="8" x2="12" y2="3" /><line x1="20" y1="21" x2="20" y2="16" /><line x1="20" y1="12" x2="20" y2="3" /><line x1="1" y1="14" x2="7" y2="14" /><line x1="9" y1="8" x2="15" y2="8" /><line x1="17" y1="16" x2="23" y2="16" /></svg>',
	"post"         => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9" /><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" /></svg>',
	"blog"         => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9" /><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" /></svg>',
	"comment"      => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" /></svg>',
	"notification" => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13" /><polygon points="22 2 15 22 11 13 2 9 22 2" /></svg>',
	"customer"     => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
	"user"     => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
	"userrole"         => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2" /><rect x="2" y="14" width="20" height="8" rx="2" ry="2" /><line x1="6" y1="6" x2="6.01" y2="6" /><line x1="6" y1="18" x2="6.01" y2="18" /></svg>',
	"misc"         => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codesandbox"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" /><polyline points="7.5 4.21 12 6.81 16.5 4.21" /><polyline points="7.5 19.79 7.5 14.6 3 12" /><polyline points="21 12 16.5 14.6 16.5 19.79" /><polyline points="3.27 6.96 12 12.01 20.73 6.96" /><line x1="12" y1="22.08" x2="12" y2="12" /></svg>',
	"lead"         => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>',
	"operation"    => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2" /><rect x="9" y="9" width="6" height="6" /><line x1="9" y1="1" x2="9" y2="4" /><line x1="15" y1="1" x2="15" y2="4" /><line x1="9" y1="20" x2="9" y2="23" /><line x1="15" y1="20" x2="15" y2="23" /><line x1="20" y1="9" x2="23" y2="9" /><line x1="20" y1="14" x2="23" y2="14" /><line x1="1" y1="9" x2="4" y2="9" /><line x1="1" y1="14" x2="4" y2="14" /></svg>',
	"log"          => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" /><polyline points="14 2 14 8 20 8" /><line x1="16" y1="13" x2="8" y2="13" /><line x1="16" y1="17" x2="8" y2="17" /><polyline points="10 9 9 9 8 9" /></svg>',
	"trash"        => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6" /><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /></svg>',
	"setting"      => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3" /><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" /></svg>',
	"dot"          => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
	"right"        => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>',
	"list"         => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>'
];

const RUPEE = '&#8377 ';

 
/* End of file Site_constants.php */
