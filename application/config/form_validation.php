<?php

$config = array(

	'inscription' => array(
		array(
			'field'=>'nom',
			'label'=>'Nom',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'prenom',
			'label'=>'Prénom',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'dnaissance',
			'label'=>'Date de naissance',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'lnaissance',
			'label'=>'Lieu de naissance',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'adresse',
			'label'=>'Adresse',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'ville',
			'label'=>'Ville',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'province',
			'label'=>'Province',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'pays',
			'label'=>'Pays',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'pseudo',
			'label'=>'Pseudo',
			'rules'=>'trim|xss_clean|callback_checkfield|callback_checklogin'
		),
		array(
			'field'=>'password',
			'label'=>'Mot de passe',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'verifpassword',
			'label'=>'Confirmation du mot de passe',
			'rules'=>'trim|xss_clean|callback_checkfield'
		)
	),

	'modif_inscription' => array(
		array(
			'field'=>'nom',
			'label'=>'Nom',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'prenom',
			'label'=>'Prénom',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'dnaissance',
			'label'=>'Date de naissance',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'lnaissance',
			'label'=>'Lieu de naissance',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'adresse',
			'label'=>'Adresse',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'ville',
			'label'=>'Ville',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'province',
			'label'=>'Province',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'pays',
			'label'=>'Pays',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'pseudo',
			'label'=>'Pseudo',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'password',
			'label'=>'Mot de passe',
			'rules'=>'trim|xss_clean|callback_checkfield'
		),
		array(
			'field'=>'verifpassword',
			'label'=>'Confirmation du mot de passe',
			'rules'=>'trim|xss_clean|callback_checkfield'
		)
	),

	'categorie'=>array(
		array(
			'field'=>'libelle',
			'label'=>'Libellé',
			'rules'=>'trim|xss_clean|callback_checkfield'
			),
		array(
			'field'=>'description',
			'label'=>'Description',
			'rules'=>'trim|xss_clean'
			)
		),
	
	'centre'=>array(
		array(
			'field'=>'libelle',
			'label'=>'Libellé',
			'rules'=>'trim|xss_clean|callback_checkfield'
			),
		array(
			'field'=>'description',
			'label'=>'Description',
			'rules'=>'trim|xss_clean'
			),
		array(
			'field'=>'donneetech',
			'label'=>'Données techniques',
			'rules'=>'trim|xss_clean'
			)
		),
        
    'connexion'=>array(
        array(
            'field'=>'login',
            'label'=>'Login',
            'rules'=>'trim|xss_clean|callback_checkfield'
        ),
        array(
            'field'=>'pass',
            'label'=>'Mot de passe',
            'rules'=>'trim|xss_clean|callback_checkfield'
        )
    )
);
?>