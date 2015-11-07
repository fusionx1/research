<?php

/**
 * Implements theme_menu_tree().
 */
function proventra_menu_tree($variables) {
  return '<div class="menu clearfix">' . $variables['tree'] . '</div>';
}


function proventra_form_alter(&$form, &$form_state, $form_id) {

    if ($form['#form_id'] == 'search_block_form') {
//print '<pre>' ;print_r($form); die();
//dsm($form);
        $form['search_block_form']['#attributes'] = array('class' => array('search-text'),
            'placeholder' => array('Search'),);
        $form['actions']['submit']['#value'] = t('');
	$form['actions']['submit']['#attributes'] = array('class' => array('search-button'));

    }


}

function proventra_theme() {
    $items = array();

    $items['user_login_block'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'proventra') . '/templates',
        'template' => 'user-login',
        'preprocess functions' => array(
            'proventra_preprocess_user_login_block'
        ),
    );

    $items['user_register_form'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'proventra') . '/templates',
        'template' => 'user-register-form',
        'preprocess functions' => array(
            'proventra_preprocess_user_register_form'
        ),
    );
    $items['user_profile_form'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'proventra') . '/templates',
        'template' => 'user-profile-form',
        'preprocess functions' => array(
            'proventra_preprocess_user_profile_form'
        ),
    );
    $items['user_pass'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'proventra') . '/templates',
        'template' => 'user-pass',
        'preprocess functions' => array(
            'proventra_preprocess_user_pass'
        ),
    );

    $items['user_profile'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'proventra') . '/templates',
        'template' => 'user-profile',
        'preprocess functions' => array(
            'proventra_preprocess_user_profile'
        ),
    );

      $items['whitepaper_node_form'] = array(
	    'render element' => 'form',
	    'path'=> drupal_get_path('theme' , 'proventra') .'/templates',
	     'template' => 'whitepaper-node-form',
	     'preprocess functions' => array(
		'proventra_preprocess_whitepaper_node_form'
	     ),
	     );


    $items['comment_form__node_webinars'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'proventra') . '/templates',
        'template' => 'comment-form--node-webinars',
        'preprocess functions' => array(
            'proventra_preprocess_comment_form__node_webinars'
        ),
        );


    $items['comment_form__node_community_discussions'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'proventra') . '/templates',
        'template' => 'comment-form--node-community_discussions',
        'preprocess functions' => array(
            'proventra_preprocess_comment_form__node_community_discussions'
        ),
        );

    $items['comment_form__node_whitepaper'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'proventra') . '/templates',
        'template' => 'comment-form--node-whitepaper',
        'preprocess functions' => array(
            'proventra_preprocess_comment_form__node_whitepaper'
        ),
        );

	$items['newsletter_manage_subscriptions_form'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'proventra') . '/templates',
        'template' => 'newsletter-manage-subscriptions-form',
        'preprocess functions' => array(
            'proventra_preprocess_newsletter_manage_subscriptions_form'
        ),
        );

	$items['privatemsg_new'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'proventra') . '/templates',
        'template' => 'privatemsg-view',
        'preprocess functions' => array(
            'proventra_preprocess_privatemsg_view'
        ),
        );

        $items['search_form'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'proventra') . '/templates',
        'template' => 'search-form',
        'preprocess functions' => array(
            'proventra_preprocess_search_form'
        ),
        );



    return $items;
}

function proventra_preprocess_search_form(&$vars){
//print '<pre>'; print_r($vars); die;
$vars['form']['basic']['keys']['#title']= t('');
$vars['form']['basic']['keys']['#attributes'] = array('placeholder' => t('Enter your keywords'));
$vars['form']['basic']['keys']['#attributes']['class'][] = 'inputarea';
$vars['basic'] = $vars['form']['basic']['keys'] ;
unset($vars['form']['basic']['keys']);


$vars['form']['basic']['submit']['#value'] = t('Search');
    $vars['form']['basic']['submit']['#attributes']['class'][] = 'btn mrtop';
    $vars['actions'] = $vars['form']['basic']['submit'] ;
    unset($vars['form']['basic']['submit']);
}


function proventra_preprocess_newsletter_manage_subscriptions_form(&$vars){
  //dpm($vars);
//print '<pre>'; print_r($vars); die;
    $vars['form']['mail']['#title'] = t('');
    //unset($vars['form']['field_newsletter_list']['und']);


    $vars['form']['mail']['email']['#description'] = t('');
    $vars['form']['mail']['email']['#attributes'] = array('placeholder' => t('Email'));
    $vars['form']['mail']['email']['#attributes']['class'][] = 'inputarea';
    $vars['email'] = $vars['form']['mail']['email'];
    unset($vars['form']['mail']['email']);


    $vars['form']['info']['#title'] = t('');
    $vars['form']['info']['firstname']['#title'] = t('');
    $vars['form']['info']['firstname']['#description'] = t('');
    $vars['form']['info']['firstname']['#attributes'] = array('placeholder' => t('First name'));
    $vars['form']['info']['firstname']['#attributes']['class'][] = 'inputarea';
    $vars['firstname'] = $vars['form']['info']['firstname'];
    unset($vars['form']['info']['firstname']);

    $vars['form']['info']['lastname']['#title'] = t('');
    $vars['form']['info']['lastname']['#description'] = t('');
    $vars['form']['info']['lastname']['#attributes'] = array('placeholder' => t('Last name'));
    $vars['form']['info']['lastname']['#attributes']['class'][] = 'inputarea';
    $vars['lastname'] = $vars['form']['info']['lastname'];
    unset($vars['form']['info']['lastname']);

    $vars['form']['info']['gender']['#title'] = t('');
    $vars['form']['info']['gender']['#description'] = t('');
    $vars['form']['info']['gender']['#attributes']['class'][] = 'inputarea';
    $vars['gender'] = $vars['form']['info']['gender'];
    unset($vars['form']['info']['gender']);


    $vars['form']['info']['receive_format']['#title'] = t('');
    $vars['form']['info']['receive_format']['#description'] = t('');
    $vars['form']['info']['receive_format']['#attributes']['class'][] = 'inputarea';
    $vars['format'] = $vars['form']['info']['receive_format'];
    unset($vars['form']['info']['receive_format']);

    $vars['form']['submit']['#value'] = t('Send');
    $vars['form']['submit']['#attributes']['class'][] = 'btn';
    $vars['actions'] = $vars['form']['submit'] ;
    unset($vars['form']['submit']);

}

function proventra_preprocess_privatemsg_view(&$vars){
    //dsm($vars);
//print '<pre>'; print_r($vars);die;
$vars['form']['recipient']['#attributes']['class']= 'inputarea';
 $vars['form']['recipient']['#attributes']['class'][0] = 'btn';
 $vars['form']['recipient']['#description']=t('');
$vars['recipient'] = $vars['form']['recipient'] ;

 $vars['form']['actions']['submit']['#value'] = t('Send message');
 $vars['form']['actions']['submit']['#attributes']['class'][0] = 'btn';
 $vars['submit'] = $vars['form']['actions']['submit'];

$vars['form']['actions']['cancel']['#value'] = t('Cancel');

}

function proventra_preprocess_comment_form__node_webinars(&$vars)
{
 //dsm($vars);
 $vars['form']['comment_body']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
 $vars['form']['comment_body']['und'][0]['value']['#attributes'] = array('placeholder'=>t('Add comments'));
 $vars['form']['comment_body']['und'][0]['value']['#title'] = t('');
 $vars['form']['actions']['submit']['#value'] = t('Add Comments');
 $vars['form']['actions']['submit']['#attributes']['class'][] = 'btn';
 $vars['actions'] = $vars['form']['actions'] ;
 unset($vars['form']['author']);
}


function proventra_preprocess_comment_form__node_community_discussions(&$vars)
{

 //dsm($vars);
 $vars['form']['comment_body']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
 $vars['form']['comment_body']['und'][0]['value']['#attributes'] = array('placeholder'=>t('Add comments'));
 $vars['form']['comment_body']['und'][0]['value']['#title'] = t('');
 $vars['form']['actions']['submit']['#value'] = t('Add Comments');
 $vars['form']['actions']['submit']['#attributes']['class'][] = 'btn';
 $vars['actions'] = $vars['form']['actions'] ;
 unset($vars['form']['author']);
}

function proventra_preprocess_comment_form__node_whitepaper(&$vars)
{
  //print '<pre>';print_r($vars); die;
 //dsm($vars);
 $vars['form']['comment_body']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
 $vars['form']['comment_body']['und'][0]['value']['#attributes'] = array('placeholder'=>t('Add comments'));
 $vars['form']['comment_body']['und'][0]['value']['#title'] = t('');
 $vars['form']['actions']['submit']['#value'] = t('Add Comments');
 $vars['form']['actions']['submit']['#attributes']['class'][] = 'btn';
 $vars['actions'] = $vars['form']['actions'] ;
 unset($vars['form']['subject']);
 unset($vars['form']['author']);
}



function proventra_preprocess_user_profile(&$vars) {

 //print '<pre>'; print_r($vars); die;

    $root_element = $vars['form']['#account'];
    $vars['user_page_title'] = t('Member profile');

    $vars['first_name_title'] = $vars['form']['field_first_name']['#title'];
    $vars['first_name_value'] = $root_element->field_first_name['und'][0]['value'];

    $vars['last_name_title'] = $vars['form']['field_last_name']['#title'];
    $vars['last_name_value'] = $root_element->field_last_name['und'][0]['value'];

    $vars['job_title'] = $vars['form']['field_job_title']['#title'];
    $vars['job_title_value'] = $root_element->field_job_title['und'][0]['value'];

    $vars['company_title'] = $vars['form']['field_company']['#title'];
    $vars['company_value'] = $root_element->field_company['und'][0]['value'];

    $vars['expertise_title'] = $vars['form']['field_area_of_expertises']['#title'];
    $vars['expertise_value'] = $root_element->field_area_of_expertises['und'][0]['value'];

    $vars['description_title'] = $vars['form']['field_description']['#title'];
    $vars['description_value'] = $root_element->field_description['und'][0]['value'];

}

function proventra_preprocess_user_register_form(&$vars) {
  //print '<pre>'; print_r($vars); die;

    $vars['first_heading'] = t('Register using any of the following services:');
    $vars['signup'] = t('Register using Proventa Community');
    $vars['community'] = t('Fill up your Proventa Community profile');
    $vars['expertise'] = t('Area of expertise');

    $vars['form']['account']['name']['#title'] = t('');
    $vars['form']['account']['name']['#description'] = t('');
    $vars['form']['account']['name']['#attributes'] = array('placeholder' => t('Username'));
    $vars['form']['account']['name']['#attributes']['class'][] = 'inputarea';
    $vars['name'] = $vars['form']['account']['name'];
    unset($vars['form']['account']['name']);

    //$vars['form']['account']['mail']['#title']=t();
    $vars['form']['account']['mail']['#title'] = t('');
    $vars['form']['account']['mail']['#description'] = t('');
    $vars['form']['account']['mail']['#attributes'] = array('placeholder' => t('Enter email address'));
    $vars['form']['account']['mail']['#attributes']['class'][] = 'inputarea';
    $vars['mail'] = $vars['form']['account']['mail'];
    unset($vars['form']['account']['mail']);

    $vars['form']['account']['pass']['pass1']['#title'] = t('');
    $vars['form']['account']['pass']['#description'] = t('');
    $vars['form']['account']['pass']['pass1']['#description'] = t('');
    $vars['form']['account']['pass']['pass1']['#attributes'] = array('placeholder' => t('Password'));
    $vars['form']['account']['pass']['pass1']['#attributes']['class'][] = 'inputarea';
    $vars['pass'] = $vars['form']['account']['pass']['pass1'];
    unset($vars['form']['account']['pass']['pass1']);

    $vars['form']['account']['pass']['pass2']['#title'] = t('');
    $vars['form']['account']['pass']['pass2']['#description'] = t('');
    $vars['form']['account']['pass']['pass2']['#attributes'] = array('placeholder' => t('Repeat password'));
    $vars['form']['account']['pass']['pass2']['#attributes']['class'][] = 'inputarea';
    $vars['pass2'] = $vars['form']['account']['pass']['pass2'];
    unset($vars['form']['account']['pass']['pass2']);

    unset($vars['form']['account']['status']);
    unset($vars['form']['account']['roles']);
    unset($vars['form']['account']['notify']);
    unset($vars['form']['account']['timezone']);
    unset($vars['form']['picture']);


    $vars['form']['field_first_name']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_first_name']['und'][0]['value']['#attributes'] = array('placeholder' => t('First name'));
    $vars['form']['field_first_name']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_first_name'] = $vars['form']['field_first_name'];
    unset($vars['form']['field_first_name']);

    $vars['form']['field_last_name']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_last_name']['und'][0]['value']['#attributes'] = array('placeholder' => t('Last name'));
    $vars['form']['field_last_name']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_last_name'] = $vars['form']['field_last_name'];
    unset($vars['form']['field_last_name']);

    $vars['form']['field_job_title']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_job_title']['und'][0]['value']['#attributes'] = array('placeholder' => t('Job title'));
    $vars['form']['field_job_title']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_job_title'] = $vars['form']['field_job_title'];
    unset($vars['form']['field_job_title']);

    $vars['form']['field_company']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_company']['und'][0]['value']['#attributes'] = array('placeholder' => t('Company'));
    $vars['form']['field_company']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_company'] = $vars['form']['field_company'];
    unset($vars['form']['field_company']);

    $vars['form']['field_country']['und']['#title'] = t('');
    $vars['form']['field_country']['#attributes']['class'][3] = 'inputarea';
    $vars['field_company'] = $vars['form']['field_country'];
    unset($vars['form']['field_country']);

    $vars['form']['field_sector']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_sector']['und'][0]['value']['#attributes'] = array('placeholder' => t('Sector'));
    $vars['form']['field_sector']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_sector'] = $vars['form']['field_sector'];
    unset($vars['form']['field_sector']);

    $vars['form']['field_address_line_1']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_address_line_1']['und'][0]['value']['#attributes'] = array('placeholder' => t('Address line 1'));
    $vars['form']['field_address_line_1']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_address_line_1'] = $vars['form']['field_address_line_1'];
    unset($vars['form']['field_address_line_1']);

    $vars['form']['field_address_line_2']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_address_line_2']['und'][0]['value']['#attributes'] = array('placeholder' => t('Address line 2'));
    $vars['form']['field_address_line_2']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_address_line_2'] = $vars['form']['field_address_line_2'];
    unset($vars['form']['field_address_line_2']);

    $vars['form']['field_zip']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_zip']['und'][0]['value']['#attributes'] = array('placeholder' => t('Zip'));
    $vars['form']['field_zip']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_zip'] = $vars['form']['field_zip'];
    unset($vars['form']['field_zip']);

    $vars['form']['field_city']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_city']['und'][0]['value']['#attributes'] = array('placeholder' => t('City'));
    $vars['form']['field_city']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_city'] = $vars['form']['field_city'];
    unset($vars['form']['field_city']);

    $vars['form']['field_telephone']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_telephone']['und'][0]['value']['#attributes'] = array('placeholder' => t('Telephone'));
    $vars['form']['field_telephone']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_telephone'] = $vars['form']['field_telephone'];
    unset($vars['form']['field_telephone']);

    $vars['form']['field_web_address']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_web_address']['und'][0]['value']['#attributes'] = array('placeholder' => t('Website'));
    $vars['form']['field_web_address']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_web_address'] = $vars['form']['field_web_address'];
    unset($vars['form']['field_web_address']);

    $vars['field_area_of_expertise'] = $vars['form']['field_area_of_expertises'];
    unset($vars['form']['field_area_of_expertises']);

    $vars['form']['actions']['submit']['#value'] = t('Create Account');
    $vars['actions'] = $vars['form']['actions'];
    unset($vars['form']['actions']);
}

function proventra_preprocess_user_pass(&$vars) {
    //dpm($vars);
    $vars['intro_text'] = t('Request New Password');
    $vars['form']['name']['#title'] = t('');
    $vars['form']['name']['#attributes'] = array('placeholder' => t('Username or e-mail address '));
    $vars['form']['name']['#attributes']['class'][] = 'inputarea';
    $vars['name'] = $vars['form']['name'];
    unset($vars['form']['name']);

     $vars['form']['actions']['submit']['#value'] = t('SEND');
   $vars['form']['actions']['submit']['#attributes']['class'][] = 'custom-send';
    $vars['actions'] = $vars['form']['actions'];
    unset($vars['form']['actions']);
}

/* Preprocess hook for user login ... */

function proventra_preprocess_user_login_block(&$vars) {
dpm($vars);
//die('failed');
    $vars['intro_text'] = t('Sign in using Proventa Community');
    $vars['form']['hybridauth']['#title'] = t('Sign in using any of the following services');
    $vars['form']['name']['#attributes'] = array('placeholder' => t('Email address'));
    $vars['form']['name']['#title'] = t('');
    $vars['form']['name']['#required'] = FALSE;
    $vars['form']['name']['#description'] = t('');
    $vars['form']['name']['#attributes']['class'][] = 'inputarea';
    $vars['name'] = $vars['form']['name'];
    unset($vars['form']['name']);


    $vars['form']['pass']['#attributes'] = array('placeholder' => t('Password'));
    $vars['form']['pass']['#title'] = t('');
    $vars['form']['pass']['#required'] = FALSE;
    $vars['form']['pass']['#description'] = t('');
    $vars['form']['pass']['#attributes']['class'][] = 'inputarea';
    $vars['pass'] = $vars['form']['pass'];
    unset($vars['form']['pass']);


   // print '<pre>'; print_r($vars['form']['actions']);die;
    $vars['form']['actions']['submit']['#value'] = t('Login');
    $vars['actions'] = $vars['form']['actions'];
    unset($vars['form']['actions']);

    unset($vars['form']['remember_me']);
}

/* Preprocess hook for user profile */

function proventra_preprocess_user_profile_form(&$vars) {

   // print'<pre>' ; print_r($vars); die;

    $vars['form']['account']['name']['#title'] = t('');
    $vars['form']['account']['name']['#attributes']['placeholder'] = t('Profile username');
    $vars['form']['account']['name']['#attributes']['class'][1] = t('inputarea');
    $vars['name'] = $vars['form']['account']['name'];
    unset($vars['form']['account']['name']);

   $vars['form']['picture']['#title'] = t('');
   $vars['form']['picture']['picture_delete']['#description'] = t('');
   $vars['form']['picture']['picture_upload']['#description'] = t('');
    $vars['picture'] = $vars['form']['picture'];
    unset($vars['form']['picture']);


    /*$vars['form']['account']['mail']['#title'] = t('');
    $vars['form']['account']['mail']['#description'] = t('');
    $vars['form']['account']['mail']['#attributes']['placeholder'] = t('username@test.com');
    $vars['form']['account']['mail']['#attributes']['class'][0] = 'inputarea';
    //$vars['form']['account']['mail']['#attributes']['disabled'] = TRUE;
    $vars['mail'] = $vars['form']['account']['mail'];
    unset($vars['form']['account']['mail']);*/

    $vars['form']['account']['pass']['pass1']['#title'] = t('');
    $vars['form']['account']['pass']['pass1']['#description'] = t('');
    $vars['form']['account']['pass']['#description'] = t('');
    $vars['form']['account']['pass']['pass1']['#attributes']['placeholder'] = t('New Password');
    $vars['form']['account']['pass']['pass1']['#attributes']['class'][0] = 'inputarea';
    $vars['pass1'] = $vars['form']['account']['pass']['pass1'];
    unset($vars['form']['account']['pass']['pass1']);

    $vars['form']['account']['pass']['pass2']['#title'] = t('');
    $vars['form']['account']['pass']['pass2']['#description'] = t('');
    $vars['form']['account']['pass']['pass2']['#attributes']['placeholder'] = t('Repeat password');
    $vars['form']['account']['pass']['pass2']['#attributes']['class'][0] = 'inputarea';
    $vars['pass2'] = $vars['form']['account']['pass']['pass2'];
    unset($vars['form']['account']['pass']['pass2']);

    $vars['form']['account']['current_pass']['#title'] = t('');
    $vars['form']['account']['current_pass']['#description'] = t('');
    $vars['form']['account']['current_pass']['#attributes']['placeholder'] = t('Current password');
    $vars['form']['account']['current_pass']['#attributes']['class'][0] = 'inputarea';
    $vars['current_pass'] = $vars['form']['account']['current_pass'];
    unset($vars['form']['account']['current_pass']);

    unset($vars['form']['status']);
    unset($vars['form']['roles']);
    unset($vars['form']['notify']);
   unset($vars['form']['timezone']);




//print '<pre>';print_r($vars['form']['field_first_name']['und'][0]['value']['#attributes']['class'][0]); die;

    $vars['form']['field_first_name']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_first_name']['und'][0]['value']['#attributes'] = array('placeholder' => t('First name'));
    $vars['form']['field_first_name']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_first_name'] = $vars['form']['field_first_name'];
    unset($vars['form']['field_first_name']);



    $vars['form']['field_last_name']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_last_name']['und'][0]['value']['#attributes'] = array('placeholder' => t('Last name'));
    $vars['form']['field_last_name']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_last_name'] = $vars['form']['field_last_name'];
    unset($vars['form']['field_last_name']);

    $vars['form']['field_job_title']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_job_title']['und'][0]['value']['#attributes'] = array('placeholder' => t('Job title'));
    $vars['form']['field_job_title']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_job_title'] = $vars['form']['field_job_title'];
    unset($vars['form']['field_job_title']);

    $vars['form']['field_company']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_company']['und'][0]['value']['#attributes'] = array('placeholder' => t('Company'));
    $vars['form']['field_company']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_company'] = $vars['form']['field_company'];
    unset($vars['form']['field_company']);

    $vars['form']['field_area_of_expertises']['und'][0]['value']['#attributes'];
    $vars['form']['field_area_of_expertises']['und'][0]['value']['#attributes'];
    $vars['field_area_of_expertise'] = $vars['form']['field_area_of_expertises'];
    unset($vars['form']['field_area_of_expertises']);

    $vars['form']['field_description']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_description']['und'][0]['value']['#attributes'] = array('placeholder' => t('Description'));
    $vars['form']['field_description']['und'][0]['value']['#attributes']['class'][0] = 'inputarea ltw5';
    $vars['field_description'] = $vars['form']['field_description'];
    unset($vars['form']['field_description']);

    $vars['form']['field_sector']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_sector']['und'][0]['value']['#attributes'] = array('placeholder' => t('Sector'));
    $vars['form']['field_sector']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_sector'] = $vars['form']['field_sector'];
    unset($vars['form']['field_sector']);

    $vars['form']['field_address_line_1']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_address_line_1']['und'][0]['value']['#attributes'] = array('placeholder' => t('Address line 1'));
    $vars['form']['field_address_line_1']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_address_line_1'] = $vars['form']['field_address_line_1'];
    unset($vars['form']['field_address_line_1']);

    $vars['form']['field_address_line_2']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_address_line_2']['und'][0]['value']['#attributes'] = array('placeholder' => t('Address line 2'));
    $vars['form']['field_address_line_2']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_address_line_2'] = $vars['form']['field_address_line_2'];
    unset($vars['form']['field_address_line_2']);

    $vars['form']['field_zip']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_zip']['und'][0]['value']['#attributes'] = array('placeholder' => t('Zip'));
    $vars['form']['field_zip']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_zip'] = $vars['form']['field_zip'];
    unset($vars['form']['field_zip']);

    $vars['form']['field_city']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_city']['und'][0]['value']['#attributes'] = array('placeholder' => t('City'));
    $vars['form']['field_city']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_city'] = $vars['form']['field_city'];
    unset($vars['form']['field_city']);

    $vars['form']['field_telephone']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_telephone']['und'][0]['value']['#attributes'] = array('placeholder' => t('Telephone'));
    $vars['form']['field_telephone']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_telephone'] = $vars['form']['field_telephone'];
    unset($vars['form']['field_telephone']);

    $vars['form']['field_web_address']['und'][0]['value']['#title'] = t('');
    $vars['form']['field_web_address']['und'][0]['value']['#attributes'] = array('placeholder' => t('Website'));
    $vars['form']['field_web_address']['und'][0]['value']['#attributes']['class'][0] = 'inputarea';
    $vars['field_web_address'] = $vars['form']['field_web_address'];
    unset($vars['form']['field_web_address']);

    $vars['form']['field_country']['und']['#title'] = t('');
    $vars['form']['field_country']['und']['#attributes']['class'][0] = 'inputarea';
    $vars['field_country'] = $vars['form']['field_country'];
    unset($vars['form']['field_country']);


    $vars['form']['actions']['submit']['#value'] = t('Update');
    $vars['form']['actions']['submit']['#attributes']['class'][] = 'btn';
    $vars['actions'] = $vars['form']['actions'];
    unset($vars['form']['actions']);

    /*$vars['form']['actions']['cancel']['#value'] = t('Delete');
    $vars['form']['actions']['cancel']['#attributes']['class'][] = 'btn canel-btn';
    $vars['cancel'] = $vars['form']['actions']['cancel'];
    unset($vars['form']['actions']['cancel']);*/
}


function proventra_preprocess_item_list(&$vars) {

    $count = count($vars);
    for ($i = 0; $i <= $count; $i++) {
        if ($i == 0) {
            $items[$i]['class'][1] = 'read-btn';
        }
        if ($i == 1) {
            $items[$i]['class'][1] = 'test';
        }
    }
    unset($items);
}

function proventra_preprocess_whitepaper_node_form(&$vars){
   // dpm($vars);
    $vars['form']['title']['#title'] = t('');
    $vars['form']['title']['#attributes'] = array('placeholder'=>'Title');
    $vars['form']['title']['#attributes']['class'][] = 'inputarea';
    $vars['title'] = $vars['form']['title'];
    unset($vars['form']['title']);

   $vars['form']['body']['und'][0]['value']['#title'] = t('');
$vars['form']['body']['und'][0]['value']['#attributes']['class'][] = 'inputarea';
$vars['form']['body']['und'][0]['value']['#attributes'] = array('placeholder'=>'Body');
    $vars['body'] = $vars['form']['body'];
    unset($vars['form']['body']);

    $vars['form']['field_pdf_upload']['und']['#file_upload_title'] = t('');
   $vars['form']['field_pdf_upload']['und'][0]['upload']['#attributes']['class'][] = 'browse';
    $vars['form']['field_pdf_upload']['und'][0]['upload_button']['#attributes']['class'][] = 'btn';

     $vars['field_pdf_upload'] = $vars['form']['field_pdf_upload'] ;
     unset($vars['form']['field_pdf_upload']);
       //dpm($vars);
}

/**
 * Override or insert variables into the page template for specific content types.
 */
function proventra_preprocess_page(&$variables) {
  if (isset($variables['node']->type)) {
    $nodetype = $variables['node']->type;
    $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
  }

  drupal_add_js((drupal_get_path('theme', 'proventra') . '/assets/plugins/backstretch/jquery.backstretch.js'), array('type' => 'file', 'scope' => 'footer', 'weight' => 1));
  drupal_add_js('jQuery.backstretch([
    "sites/all/themes/proventra/images/mainbg.png"
    ])', array('type' => 'inline', 'scope' => 'footer', 'weight' => 17)); //end inline sticky-header


    $variables['scripts'] = drupal_get_js();
  }


?>
