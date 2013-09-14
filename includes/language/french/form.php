<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/

This file is part of Commentics.

Commentics is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Commentics is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Commentics. If not, see <http://www.gnu.org/licenses/>.

Text to help preserve UTF-8 file encoding: 汉语漢語.
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }

/* Anchors */
define('CMTX_ANCHOR_FORM', '#cmtx_form');

/* Heading */
define('CMTX_FORM_HEADING', 'Ajouter un Commentaire');

/* Form disabled messages */
define('CMTX_ALL_FORMS_DISABLED', 'L\'ajout de commentaires a été désactivé.');
define('CMTX_THIS_FORM_DISABLED', 'L\'ajout de commentaires a été désactivé pour cette page.');

/* Open form link */
define('CMTX_OPEN_FORM', 'Afficher le formulaire');

/* JavaScript disabled message */
define('CMTX_JAVASCRIPT_DISABLED', 'JavaScript doit être activé pour que certaines fonctionnalités puissent fonctionner.');

/* Reply */
define('CMTX_REPLY_MESSAGE', 'Vous répondez à');
define('CMTX_REPLY_CANCEL', '[annuler]');
define('CMTX_REPLY_NOBODY', 'Vous êtes pas vous répondez.');

/* Required */
define('CMTX_REQUIRED_SYMBOL', '*');
define('CMTX_REQUIRED_SYMBOL_MESSAGE', CMTX_REQUIRED_SYMBOL . ' Informations obligatoires');

/* Field labels */
define('CMTX_LABEL_NAME', 'Nom:');
define('CMTX_LABEL_EMAIL', 'Email:');
define('CMTX_LABEL_WEBSITE', 'Site web:');
define('CMTX_LABEL_TOWN', 'Ville:');
define('CMTX_LABEL_COUNTRY', 'Pays:');
define('CMTX_LABEL_RATING', 'Vote:');
define('CMTX_LABEL_COMMENT', 'Commentaire:');
define('CMTX_LABEL_QUESTION', 'Question:');
define('CMTX_LABEL_CAPTCHA', 'Captcha:');

/* Field titles */
define('CMTX_TITLE_NAME', 'Entrez le nom');
define('CMTX_TITLE_EMAIL', 'Entrez l\'adresse email');
define('CMTX_TITLE_WEBSITE', 'Entrez l\'adresse site web');
define('CMTX_TITLE_TOWN', 'Entrez dans la ville');
define('CMTX_TITLE_COMMENT', 'Entrez un commentaire');
define('CMTX_TITLE_QUESTION', 'Entrez réponse à la question');
define('CMTX_TITLE_NOTIFY', 'Recevoir des notifications par email');
define('CMTX_TITLE_REMEMBER', 'Rappelez-vous mes données du formulaire');
define('CMTX_TITLE_PRIVACY', 'J\'accepte la politique de confidentialité');
define('CMTX_TITLE_TERMS', 'J\'accepte les termes et conditions');
define('CMTX_TITLE_SUBMIT', 'Ajouter commentaire');
define('CMTX_TITLE_PREVIEW', 'Aperçu');

/* Note displayed after email field */
define('CMTX_NOTE_EMAIL', '(ne sera pas publiée)');

/* Text displayed for BB Code bullet dialog */
define('CMTX_BULLET_DIALOG_HEADING', 'Insert Bullet List');
define('CMTX_BULLET_DIALOG_CONTENT_1', 'Please enter at least one item.');
define('CMTX_BULLET_DIALOG_CONTENT_2', 'Item:');
define('CMTX_BULLET_DIALOG_INSERT', 'Insert');
define('CMTX_BULLET_DIALOG_CANCEL', 'Cancel');

/* Text displayed for BB Code numeric dialog */
define('CMTX_NUMERIC_DIALOG_HEADING', 'Insert Numeric List');
define('CMTX_NUMERIC_DIALOG_CONTENT_1', 'Please enter at least one item.');
define('CMTX_NUMERIC_DIALOG_CONTENT_2', 'Item:');
define('CMTX_NUMERIC_DIALOG_INSERT', 'Insert');
define('CMTX_NUMERIC_DIALOG_CANCEL', 'Cancel');

/* Text displayed for BB Code link dialog */
define('CMTX_LINK_DIALOG_HEADING', 'Insert Link');
define('CMTX_LINK_DIALOG_CONTENT_1', 'Please enter the link of the website');
define('CMTX_LINK_DIALOG_CONTENT_2', 'Optionally you can add display text');
define('CMTX_LINK_DIALOG_INSERT', 'Insert');
define('CMTX_LINK_DIALOG_CANCEL', 'Cancel');

/* Text displayed for BB Code email dialog */
define('CMTX_EMAIL_DIALOG_HEADING', 'Insert Email');
define('CMTX_EMAIL_DIALOG_CONTENT_1', 'Please enter the email address');
define('CMTX_EMAIL_DIALOG_CONTENT_2', 'Optionally add any display text');
define('CMTX_EMAIL_DIALOG_INSERT', 'Insert');
define('CMTX_EMAIL_DIALOG_CANCEL', 'Cancel');

/* Text displayed for BB Code image dialog */
define('CMTX_IMAGE_DIALOG_HEADING', 'Insert Image');
define('CMTX_IMAGE_DIALOG_CONTENT', 'Please enter the link of the image');
define('CMTX_IMAGE_DIALOG_INSERT', 'Insert');
define('CMTX_IMAGE_DIALOG_CANCEL', 'Cancel');

/* Text displayed for BB Code video dialog */
define('CMTX_VIDEO_DIALOG_HEADING', 'Insert Video');
define('CMTX_VIDEO_DIALOG_CONTENT_1', 'Please enter the link of the video. Supports:');
define('CMTX_VIDEO_DIALOG_CONTENT_2', 'YouTube - Vimeo - MetaCafe - Dailymotion');
define('CMTX_VIDEO_DIALOG_INSERT', 'Insert');
define('CMTX_VIDEO_DIALOG_CANCEL', 'Cancel');

/* Text displayed before/after the counter */
define('CMTX_TEXT_COUNTER', '%s');

/* Text displayed before question field */
define('CMTX_TEXT_QUESTION', 'Entrez la réponse:');

/* Text displayed for Securimage captcha */
define('CMTX_TEXT_SECURIMAGE', 'Enter code:');
define('CMTX_TITLE_SECURIMAGE', 'Enter code from image');
define('CMTX_TITLE_SECURIMAGE_AUDIO', 'Audio');
define('CMTX_TITLE_SECURIMAGE_REFRESH', 'Refresh');

/* Text displayed if ReCaptcha key missing */
define('CMTX_RECAPTCHA_NO_KEY', 'API key(s) missing in ReCaptcha admin page');

/* Text displayed after notify checkbox */
define('CMTX_TEXT_NOTIFY', 'Avertissez-moi des nouveaux commentaires par e-mail.');

/* Text displayed after remember checkbox */
define('CMTX_TEXT_REMEMBER', 'Se souvenir de moi sur cet ordinateur.');

/* Text displayed after privacy checkbox */
define('CMTX_TEXT_PRIVACY', 'J\'ai lu et j\'ai compris la <a href="' . cmtx_comments_folder() . 'agreement/french/privacy_policy.html" class="cmtx_privacy_link" title="Lire politique de confidentialité" target="_blank" rel="nofollow">politique de confidentialité</a>.');

/* Text displayed after terms checkbox */
define('CMTX_TEXT_TERMS', 'J\'ai lu et j\'approuve les <a href="' . cmtx_comments_folder() . 'agreement/french/terms_and_conditions.html" class="cmtx_terms_link" title="Lire termes et conditions" target="_blank" rel="nofollow">termes et conditions</a>.');

/* Text for form submit button */
define('CMTX_SUBMIT_BUTTON', 'Ajouter commentaire');

/* Text for form preview button */
define('CMTX_PREVIEW_BUTTON', 'Aperçu');

/* Text for form buttons when processing */
define('CMTX_PROCESSING_BUTTON', 'Veuillez patienter..');

/* Text for 'powered by' statement */
define('CMTX_POWERED_BY', 'Powered by');

?>