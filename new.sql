INSERT INTO unbeleadsablev1.`users` (`user_id`,`main_user`,`username`,`password`,`email`,`name`,`user_country`,`level`,`last_login`,`changed_password`,`status`) VALUES (176,NULL,'NANDHINI','a6235d809e3f4888bc228c7239f47105','nandhini@unbeleadsable.com','Nandhini','CA',100,'2018-08-14 09:34:13',1,1);

CREATE TABLE unbeleadsablev1.`agent_leads` (
  `lead_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `internal_id` varchar(20) NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `lead_name` varchar(150) NOT NULL,
  `lead_email` varchar(50) NOT NULL,
  `lead_phone` varchar(20) NOT NULL,
  `lead_areas` text NOT NULL,
  `lead_agency` varchar(100) NOT NULL,
  `lead_lang` varchar(10) NOT NULL,
  `lead_license` varchar(100) DEFAULT NULL,
  `lead_board` varchar(100) DEFAULT NULL,
  `lead_ref` varchar(25) DEFAULT NULL,
  `lead_country` varchar(50) NOT NULL,
  `lead_type` varchar(50) NOT NULL,
  `lead_status` tinyint(3) NOT NULL DEFAULT '1',
  `lead_comments` text,
  `lead_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`lead_id`)
) ENGINE=MyISAM AUTO_INCREMENT=300 DEFAULT CHARSET=latin1

CREATE TABLE unbeleadsablev1.`emails_templates` (
  `email_template_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `slug` varchar(50) NOT NULL,
  `status` smallint(5) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`email_template_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4

CREATE TABLE unbeleadsablev1.`areas` (
  `area_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_name` varchar(100) NOT NULL,
  `area_latlng` varchar(100) NOT NULL,
  `area_status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=latin1


CREATE TABLE unbeleadsablev1.`agent_landing_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `agent_fk` int(11) NOT NULL,
  `city_fr` varchar(50) NOT NULL DEFAULT 'Montréal',
  `city_en` varchar(50) NOT NULL DEFAULT 'Montreal',
  `title_fr` varchar(200) NOT NULL DEFAULT 'Quelle est la valeur de votre maison?',
  `title_en` varchar(200) NOT NULL DEFAULT 'What''s Your Home Worth?',
  `sub_title_1_fr` varchar(200) NOT NULL DEFAULT 'Votre maison a été trouvée!<br> <small>Où aimeriez-vous recevoir votre rapport d''évaluation?</small>',
  `sub_title_1_en` varchar(200) NOT NULL DEFAULT ' Property Found! <br><small>Where would you like us to send your Free Home Evaluation Report?</small>',
  `sub_title_2_fr` varchar(200) NOT NULL DEFAULT 'Obtenez une opinion de la valeur de votre maison par un expert d''immobilier!',
  `sub_title_2_en` varchar(200) NOT NULL DEFAULT 'Get an opinion of value from your local area real estate expert!',
  `bg_img` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `agent_title_fr` varchar(100) NOT NULL DEFAULT 'Courtier Immobilier',
  `agent_title_en` varchar(100) NOT NULL DEFAULT 'Real Estate Broker',
  `final_text_fr` varchar(1000) NOT NULL DEFAULT 'Nous préparons actuellement votre Rapport d''Évaluation Gratuit ! Nous vous l''enverrons sous peu. Un de nos experts en évaluation vous contacteras pour vous poser quelques questions qui nous aideront à vous fournir un rapport l''évaluation précis.',
  `final_text_en` varchar(1000) NOT NULL DEFAULT 'We are currently preparing your Free Home Evaluation Report! We will be sending it to you shortly. One of our home evaluation experts may contact you to ask a few clarifying questions which will help us provide you with the most precise Home Evaluation Report.',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;


CREATE TABLE unbeleadsablev1.`blacklists` (
  `email` varchar(150) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE unbeleadsablev1.`buyers_landing_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `agent_fk` int(10) unsigned NOT NULL,
  `title_en` varchar(255) NOT NULL DEFAULT 'Get Your Free, List of [city] Homes for Sales!',
  `title_fr` varchar(255) NOT NULL DEFAULT 'Obtenez gratuitement la liste des maison à vendre à [city]',
  `sub_title_en` varchar(255) NOT NULL DEFAULT 'Get List of Homes in your inbox in seconds!',
  `sub_title_fr` varchar(255) NOT NULL DEFAULT 'Obtenez une liste de maisons dans votre boîte de réception en très peu de temps!',
  `email_field_en` varchar(132) NOT NULL DEFAULT 'Email Address',
  `email_field_fr` varchar(132) NOT NULL DEFAULT 'Adresse courriel',
  `next_button_en` varchar(132) NOT NULL DEFAULT 'Get your list',
  `next_button_fr` varchar(132) NOT NULL DEFAULT 'Obtenez la liste',
  `bedroom_label_en` varchar(255) NOT NULL DEFAULT 'How many bedrooms are you looking for?',
  `bedroom_label_fr` varchar(255) NOT NULL DEFAULT 'Combien de chambres recherchez-vous?',
  `buying_frame_en` varchar(255) NOT NULL DEFAULT 'When are you looking to buy?',
  `buying_frame_fr` varchar(255) NOT NULL DEFAULT 'Quand cherchez-vous à acheter?',
  `city` varchar(132) DEFAULT '',
  `name_label_en` varchar(255) NOT NULL DEFAULT 'What''s your name?',
  `name_label_fr` varchar(255) NOT NULL DEFAULT 'Quel est votre nom?',
  `name_field_en` varchar(132) NOT NULL DEFAULT 'Your name',
  `name_field_fr` varchar(132) NOT NULL DEFAULT 'Votre nom',
  `phone_label_en` varchar(255) NOT NULL DEFAULT 'Should we text the list to you?',
  `phone_label_fr` varchar(255) NOT NULL DEFAULT 'Devrions-nous vous transmettre la liste par téléphone?',
  `phone_field_en` varchar(132) NOT NULL DEFAULT 'Number to text to',
  `phone_field_fr` varchar(132) NOT NULL DEFAULT 'Votre numéro de téléphone',
  `thank_you_en` varchar(255) NOT NULL DEFAULT 'List will be sent to you shortly',
  `thank_you_fr` varchar(255) NOT NULL DEFAULT 'La liste vous sera envoyée sous peu',
  `bg_img` varchar(132) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

CREATE TABLE unbeleadsablev1.`calls` (
  `call_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `call_name` varchar(50) NOT NULL,
  `call_phone` varchar(50) NOT NULL,
  `call_source` varchar(100) NOT NULL,
  `call_desired_area` varchar(100) NOT NULL,
  `call_country` varchar(50) NOT NULL,
  `call_notes` varchar(500) NOT NULL,
  `call_state` int(11) NOT NULL,
  `call_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`call_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


CREATE TABLE unbeleadsablev1.`credit_cards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `num` varchar(50) NOT NULL,
  `mm` varchar(2) NOT NULL,
  `year` varchar(4) NOT NULL,
  `cvv` varchar(4) NOT NULL,
  `payment` tinyint(4) NOT NULL,
  `selected` tinyint(1) NOT NULL DEFAULT '1',
  `agent_fk` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=179 DEFAULT CHARSET=latin1;

CREATE TABLE unbeleadsablev1.`emails` (
  `email_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `to` text NOT NULL,
  `content` text NOT NULL,
  `email_sent_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB AUTO_INCREMENT=352 DEFAULT CHARSET=utf8mb4;

CREATE TABLE unbeleadsablev1.`emails_groups` (
  `email_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(150) NOT NULL,
  `group_emails` text NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`email_group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

CREATE TABLE unbeleadsablev1.`evaluations` (
  `id_e` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lead_fk` int(10) unsigned NOT NULL,
  `agent_fk` int(10) unsigned NOT NULL,
  `low` varchar(15) NOT NULL,
  `high` varchar(15) NOT NULL,
  `municipality` varchar(15) NOT NULL,
  `comments` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_e`)
) ENGINE=MyISAM AUTO_INCREMENT=521 DEFAULT CHARSET=latin1;

CREATE TABLE unbeleadsablev1.`funnel_category` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `agent` int(11) NOT NULL,
  `agent_type` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=195 DEFAULT CHARSET=latin1;

CREATE TABLE unbeleadsablev1.`funnels` (
  `funnel_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `interval` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `language` varchar(2) NOT NULL,
  `agent` int(10) unsigned NOT NULL,
  `status` smallint(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`funnel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6751 DEFAULT CHARSET=utf8mb4;


CREATE TABLE unbeleadsablev1.`funnels_off` (
  `funnel_fk` int(10) unsigned NOT NULL,
  `agent_fk` int(10) unsigned NOT NULL,
  UNIQUE KEY `unique_funnel_delete` (`funnel_fk`,`agent_fk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE unbeleadsablev1.`funnels_sent` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lead` int(10) unsigned NOT NULL,
  `funnels` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lead` (`lead`)
) ENGINE=MyISAM AUTO_INCREMENT=12694 DEFAULT CHARSET=latin1;

CREATE TABLE unbeleadsablev1.`home_buyers` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `agent_fk` int(10) unsigned NOT NULL,
  `name` varchar(150) NOT NULL DEFAULT '',
  `phone` varchar(25) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `funnels` tinyint(3) unsigned DEFAULT NULL,
  `funnel_switch` tinyint(1) DEFAULT '1',
  `buying` varchar(200) DEFAULT NULL,
  `bedrooms` varchar(10) DEFAULT NULL,
  `source` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'Buyer',
  `comments` text,
  `status` tinyint(3) NOT NULL DEFAULT '-1',
  `lang` varchar(1) NOT NULL DEFAULT 'e',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

CREATE TABLE unbeleadsablev1.`home_sellers` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `agent_fk` int(10) unsigned NOT NULL,
  `address` varchar(255) NOT NULL,
  `name` varchar(150) NOT NULL DEFAULT '',
  `phone` varchar(25) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `funnels` tinyint(3) unsigned DEFAULT NULL,
  `funnel_switch` tinyint(1) DEFAULT '1',
  `selling` varchar(200) DEFAULT NULL,
  `source` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'Seller',
  `comments` text NOT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '-1',
  `lang` varchar(1) NOT NULL DEFAULT 'e',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79440 DEFAULT CHARSET=latin1;


CREATE TABLE `home_sellers_meta` (
  `value_range` varchar(100) DEFAULT NULL,
  `value_epp` varchar(100) DEFAULT NULL,
  `beds` varchar(100) DEFAULT NULL,
  `baths` varchar(100) DEFAULT NULL,
  `sqft` varchar(100) DEFAULT NULL,
  `buying_frame` varchar(100) DEFAULT NULL,
  `price_range` varchar(100) DEFAULT NULL,
  `neighborhood` varchar(100) DEFAULT NULL,
  `prequalified` varchar(100) DEFAULT NULL,
  `lender` varchar(100) DEFAULT NULL,
  `lender_phone` varchar(100) DEFAULT NULL,
  `lender_email` varchar(100) DEFAULT NULL,
  `loan_type` varchar(100) DEFAULT NULL,
  `credit` varchar(100) DEFAULT NULL,
  `planning_sell` varchar(100) DEFAULT NULL,
  `alert_setup` varchar(100) DEFAULT NULL,
  `other_contact` varchar(100) DEFAULT NULL,
  `other_contact_phone` varchar(100) DEFAULT NULL,
  `other_contact_email` varchar(100) DEFAULT NULL,
  `home_lead_fk` int(10) unsigned NOT NULL,
  UNIQUE KEY `primary_id` (`home_lead_fk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE unbeleadsablev1.`invoices` (
  `invoice_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `invoice_num` varchar(100) NOT NULL,
  `invoice_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `install` float(7,2) unsigned NOT NULL,
  `monthly` float(7,2) unsigned NOT NULL,
  `ads` float(7,2) unsigned NOT NULL,
  `agent_fk` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`invoice_id`),
  KEY `student_unique` (`agent_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=520 DEFAULT CHARSET=utf8mb4;


CREATE TABLE unbeleadsablev1.`messagehistory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lead_fk` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=120397 DEFAULT CHARSET=latin1;


CREATE TABLE unbeleadsablev1.`other_invoices` (
  `invoice_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `invoice_num` varchar(100) NOT NULL,
  `invoice_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(128) NOT NULL,
  `address` varchar(254) NOT NULL,
  `email` varchar(128) NOT NULL,
  `description` varchar(254) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `lang` varchar(8) NOT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

CREATE TABLE unbeleadsablev1.`reccurent` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `agent_fk` int(10) unsigned NOT NULL,
  `next_billing` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `next_try` timestamp NULL DEFAULT NULL,
  `counter` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;


CREATE TABLE unbeleadsablev1.`status` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(100) NOT NULL,
  `name_fr` varchar(100) NOT NULL,
  `agent_fk` int(10) unsigned NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;


CREATE TABLE unbeleadsablev1.`tasks` (
  `task_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `note` tinytext NOT NULL,
  `importance` tinyint(3) unsigned NOT NULL,
  `dateTime` datetime NOT NULL,
  `lead_fk` int(10) unsigned NOT NULL,
  `agent_fk` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`task_id`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

SHOW ENGINE INNODB STATUS;
set foreign_key_checks=0;
CREATE TABLE unbeleadsablev1.`users_keys` (
  `user_key_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(50) NOT NULL DEFAULT '',
  `creation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_access_time` timestamp NULL DEFAULT NULL,
  `user_fk` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_key_id`),
  KEY `user_unique` (`user_fk`),
  CONSTRAINT `users_keys_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES unbeleadsablev1.`users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=774 DEFAULT CHARSET=utf8mb4;


CREATE TABLE unbeleadsablev1.`users` (
  `user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `main_user` int(10) unsigned DEFAULT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `user_country` varchar(50) NOT NULL,
  `level` smallint(5) unsigned NOT NULL DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `changed_password` tinyint(1) NOT NULL DEFAULT '0',
  `status` smallint(5) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=utf8mb4;


CREATE TABLE unbeleadsablev1.`subscriber` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `agent_fk` int(10) unsigned NOT NULL,
  `name` varchar(150) NOT NULL DEFAULT '',
  `phone` varchar(25) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL,
  `funnels` tinyint(3) unsigned DEFAULT NULL,
  `funnel_switch` tinyint(1) DEFAULT '1',
  `source` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'subscriber',
  `comments` text,
  `status` tinyint(3) NOT NULL DEFAULT '-1',
  `lang` varchar(1) NOT NULL DEFAULT 'e',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1

CREATE TABLE `sponsor` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
 
 `agent_fk` int(10) unsigned NOT NULL,
  `address` varchar(255) NOT NULL,

  `name` varchar(150) NOT NULL DEFAULT '',
  `phone` varchar(25) NOT NULL DEFAULT '',

  `email` varchar(50) NOT NULL DEFAULT '',
  `funnels` tinyint(3) unsigned DEFAULT NULL,

  `funnel_switch` tinyint(1) DEFAULT '1',
  `source` varchar(30) NOT NULL,
  
`type` varchar(30) NOT NULL DEFAULT 'sponsor',
  `comments` text NOT NULL,

  `status` tinyint(3) NOT NULL DEFAULT '-1',
  `lang` varchar(1) NOT NULL DEFAULT 'e',
 
 `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79440 DEFAULT CHARSET=latin1

ALTER TABLE unbeleadsablev1.`sponsor` 
ADD (`messages` varchar(255), `company` varchar(100));
