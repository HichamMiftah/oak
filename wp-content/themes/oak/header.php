<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oak
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.typekit.net/aqu0mlg.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <nav>
            <div class="menu-btn">
                <div class="menu-btn__icon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <span id="open">
                    <?php _e('menu', 'OAK'); ?>
                </span>
                <span id="close">
                    <?php _e('fermer', 'OAK'); ?>
                </span>
            </div>
            <div class="menu-container">
                <div class="menu-content">
                    <div class="top">
                        <ul class="lang-switch">
                            <?php
                                function language_header()
                                {
                                    $languages = icl_get_languages('skip_missing=0&orderby=code');
                                    if (!empty($languages)) {
                                        $class_current = '';
                                        foreach ($languages as $l) {
                                            if ($l['active']) {
                                                echo '<li class="active"><a href="' . $l['url'] . ' ">' . $l['code'] . '</a></li>';
                                            } else {
                                                echo '<li><a class="' . strtolower($l['native_name']) .'" href="' . $l['url'] . '">' . $l['code'] . '</a></li>';
                                            }
                                        }
                                    }
                                }
                            ?>
                            <?php language_header(); ?>
                        </ul>
                        <div class="menu-items">
                            <?php
                                $defaults = array(
                                    'menu_class'=> 'nav nav-tabs',                                
                                );
                                wp_nav_menu( $defaults );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34.539" height="65" viewBox="0 0 34.539 65">
                        <g id="Group_4" data-name="Group 4" transform="translate(-799.29 -256.648)">
                            <path id="Path_2" data-name="Path 2"
                                d="M229.2,80.086a5.092,5.092,0,1,0,5.145,5.025,5.07,5.07,0,0,0-5.145-5.025m.04,8.87a3.782,3.782,0,1,1,3.672-3.753,3.695,3.695,0,0,1-3.672,3.753"
                                transform="translate(578.558 227.39)" fill="#375481" />
                            <path id="Path_3" data-name="Path 3"
                                d="M239.366,80.3l-3.725,9.812h1.511l1.088-2.891h3.526l1.088,2.891h1.525L240.653,80.3Zm-.623,5.609L240,82.152h.027l1.247,3.753Z"
                                transform="translate(577.233 227.366)" fill="#375481" />
                            <path id="Path_4" data-name="Path 4"
                                d="M251.955,80.3l-3.726,4.866,3.726,4.946h1.764l-3.832-4.946,3.832-4.866Z"
                                transform="translate(575.785 227.366)" fill="#375481" />
                            <rect id="Rectangle_35" data-name="Rectangle 35" width="1.432" height="9.812"
                                transform="translate(822.555 307.661)" fill="#375481" />
                            <path id="Path_5" data-name="Path 5"
                                d="M254.829,53.893a.407.407,0,0,0-.01-.047v-14.2a17.014,17.014,0,0,0-16.995-16.995h-.53A17.014,17.014,0,0,0,220.3,39.643v14.2c0,.016-.01.03-.01.047s.009.03.01.046v16.6a.585.585,0,0,0,0,.1V87.08a.568.568,0,0,0,.568.568h33.383a.568.568,0,0,0,.568-.568V53.939a.434.434,0,0,0,.01-.046m-33.394.577h14.731L221.435,69.2ZM253.684,69.2,238.953,54.469h14.731ZM237.294,23.783h.53a15.878,15.878,0,0,1,15.859,15.859V53.315H243.207a14.413,14.413,0,1,0-11.3,0H221.435V39.643a15.878,15.878,0,0,1,15.859-15.859m.265,29.531a13.258,13.258,0,1,1,13.258-13.258A13.273,13.273,0,0,1,237.56,53.315m-16.125,33.2V70.832L237.56,54.708l16.124,16.124v15.68Z"
                                transform="translate(579 234)" fill="#375481" />
                        </g>
                    </svg>
                </a>
            </div>
            <div class="social">
                <a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.841" height="14.838" viewBox="0 0 14.841 14.838">
                        <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram"
                            d="M7.417,5.852a3.8,3.8,0,1,0,3.8,3.8A3.8,3.8,0,0,0,7.417,5.852Zm0,6.277A2.473,2.473,0,1,1,9.89,9.657,2.478,2.478,0,0,1,7.417,12.13ZM12.264,5.7a.887.887,0,1,1-.887-.887A.885.885,0,0,1,12.264,5.7Zm2.52.9a4.391,4.391,0,0,0-1.2-3.109,4.42,4.42,0,0,0-3.109-1.2c-1.225-.07-4.9-.07-6.122,0a4.414,4.414,0,0,0-3.109,1.2,4.405,4.405,0,0,0-1.2,3.109c-.07,1.225-.07,4.9,0,6.122a4.391,4.391,0,0,0,1.2,3.109,4.426,4.426,0,0,0,3.109,1.2c1.225.07,4.9.07,6.122,0a4.391,4.391,0,0,0,3.109-1.2,4.42,4.42,0,0,0,1.2-3.109c.07-1.225.07-4.894,0-6.119ZM13.2,14.03a2.5,2.5,0,0,1-1.41,1.41,16.352,16.352,0,0,1-4.374.3,16.48,16.48,0,0,1-4.374-.3,2.5,2.5,0,0,1-1.41-1.41,16.352,16.352,0,0,1-.3-4.374,16.48,16.48,0,0,1,.3-4.374,2.5,2.5,0,0,1,1.41-1.41,16.352,16.352,0,0,1,4.374-.3,16.48,16.48,0,0,1,4.374.3,2.5,2.5,0,0,1,1.41,1.41,16.352,16.352,0,0,1,.3,4.374A16.343,16.343,0,0,1,13.2,14.03Z"
                            transform="translate(0.005 -2.238)" fill="#375481" />
                    </svg>
                </a>
                <a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7.367" height="13.755" viewBox="0 0 7.367 13.755">
                        <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f"
                            d="M8.494,7.737l.382-2.489H6.487V3.633a1.245,1.245,0,0,1,1.4-1.345H8.977V.168A13.242,13.242,0,0,0,7.049,0,3.039,3.039,0,0,0,3.8,3.351v1.9H1.609V7.737H3.8v6.018H6.487V7.737Z"
                            transform="translate(-1.609)" fill="#375481" />
                    </svg>
                </a>
                <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.763" height="11.763" viewBox="0 0 11.763 11.763">
                        <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in"
                            d="M2.633,11.764H.194V3.91H2.633ZM1.412,2.839A1.419,1.419,0,1,1,2.825,1.413,1.424,1.424,0,0,1,1.412,2.839Zm10.348,8.925H9.327V7.941c0-.911-.018-2.08-1.268-2.08-1.268,0-1.462.99-1.462,2.014v3.889H4.161V3.91H6.5V4.981h.034A2.563,2.563,0,0,1,8.841,3.713c2.468,0,2.922,1.625,2.922,3.736v4.314Z"
                            transform="translate(0 -0.001)" fill="#375481" />
                    </svg>
                </a>
            </div>
        </nav>
    </header>