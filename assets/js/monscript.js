function checkLibelle(libelle,lb_libelle){
	if(libelle.value==""){
		lb_libelle.innerHTML="* Champ libellé vide";
		return false;
	}else if(libelle.value.length<=3){
		lb_libelle.innerHTML="* Champ libellé trop court. Longueur minimale autorisée : 4";
		return false;
	}
	lb_libelle.innerHTML="";
	return true;
}

function checkDescription_act(description,lb_description){
	if(description.value==""){
		lb_description.innerHTML="* Facultatif";
	}
}

function checkDescription_act(description,lb_description){
	if(description.value==""){
		lb_description.innerHTML="* Facultatif";
	}
}

function checkDescription_img(description,lb_description){
	if(description.value==""){
		lb_description.innerHTML="* Champ description ogligatoire";
		return false;
	}else if(description.value.length<=2){
		lb_description.innerHTML="* Champ description trop court. Longueur minimale autorisée : 3";
		return false;
	}
	lb_description.innerHTML="";
	return true;
}

// ============================================================================ UTILISATEUR

function checkNom_uti(nom,lb_nom){
	if(nom.value==""){
		lb_nom.innerHTML="* Champ nom vide";
		return false;
	}else if(nom.value.length<=1){
		lb_nom.innerHTML="* Champ nom trop court. Longueur minimale autorisée : 2";
		return false;
	}
	lb_nom.innerHTML="";
	return true;
}

function checkPrenom_uti(prenom,lb_prenom){
	if(prenom.value==""){
		lb_prenom.innerHTML="* Champ prenom vide";
		return false;
	}else if(prenom.value.length<=1){
		lb_prenom.innerHTML="* Champ prenom trop court. Longueur minimale autorisée : 2";
		return false;
	}
	lb_prenom.innerHTML="";
	return true;
}

function checkNaissance(naissance,lb_naissance){
	if(naissance.value==""){
		lb_naissance.innerHTML="* Champ date de naissance vide";
		return false;
	}else if(naissance.value.length<5 || naissance.value.length>10){
		lb_naissance.innerHTML="* Erreur de saisie de la date de naissance";
		return false;
	}
	lb_naissance.innerHTML="";
	return true;
}

function checkLnaissance_uti(lnaissance,lb_lnaissance){
	if(lnaissance.value==""){
		lb_lnaissance.innerHTML="* Champ lieu de naissance vide";
		return false;
	}else if(lnaissance.value.length<=3){
		lb_lnaissance.innerHTML="* Champ lieu de naissance trop court. Longueur minimale autorisée : 4";
		return false;
	}
	lb_lnaissance.innerHTML="";
	return true;
}

function checkAdresse_uti(adresse,lb_adresse){
	if(adresse.value==""){
		lb_adresse.innerHTML="* Champ adresse vide";
		return false;
	}else if(adresse.value.length<=3){
		lb_adresse.innerHTML="* Champ adresse trop court. Longueur minimale autorisée : 4";
		return false;
	}
	lb_adresse.innerHTML="";
	return true;
}

function checkVille_uti(ville,lb_ville){
	if(ville.value==""){
		lb_ville.innerHTML="* Champ ville vide";
		return false;
	}else if(ville.value.length<=3){
		lb_ville.innerHTML="* Champ ville trop court. Longueur minimale autorisée : 4";
		return false;
	}
	lb_ville.innerHTML="";
	return true;
}

function checkProvince_uti(province,lb_province){
	if(province.value==""){
		lb_province.innerHTML="* Champ province vide";
		return false;
	}else if(province.value.length<=3){
		lb_province.innerHTML="* Champ province trop court. Longueur minimale autorisée : 4";
		return false;
	}
	lb_province.innerHTML="";
	return true;
}

function checkPays_uti(pays,lb_pays){
	if(pays.value==""){
		lb_pays.innerHTML="* Champ pays vide";
		return false;
	}else if(pays.value.length<=3){
		lb_pays.innerHTML="* Champ pays trop court. Longueur minimale autorisée : 4";
		return false;
	}
	lb_pays.innerHTML="";
	return true;
}

function checkPseudo_uti(pseudo,lb_pseudo){
	if(pseudo.value==""){
		lb_pseudo.innerHTML="* Champ pseudo vide";
		return false;
	}else if(pseudo.value.length<=3){
		lb_pseudo.innerHTML="* Champ pseudo trop court. Longueur minimale autorisée : 4";
		return false;
	}
	lb_pseudo.innerHTML="";
	return true;
}

function checkPassword_uti(pass,lb_password){
	if(pass.value==""){
		lb_password.innerHTML="* Champ mot de passe vide";
		return false;
	}else if(pass.value.length<=3){
		lb_password.innerHTML="* Champ mot de passe trop court. Longueur minimale autorisée : 4";
		return false;
	}
	lb_password.innerHTML="";
	return true;
}

function checkVerifpassword_uti(verifpassword,lb_verifpassword, pass){
	if(verifpassword.value==''){
		lb_verifpassword.innerHTML="* Vous devez confirmer votre mot de passe";
		return false;
	}
	else if(verifpassword.value!=pass.value){
		lb_verifpassword.innerHTML="* Vérifiez que vous avez entré correctement les mots de passe";
		return false;
	}
	lb_verifpassword.innerHTML="";
	return true;
}

// ==================================================== VERIFIER TOUT (UTILISATEUR)

/*
function checkAll(form, nom, lbnom, prenom, lbprenom, dnaiss, lbdnaiss, lnaiss, lblnaiss, adrr, lbadrr, vi, lbvi, pro, lbpro, pa, lbpa, log, lblog, pass, lbpass, conf, lbconf){
	//if(checkNom_uti(nom,lbnom) && checkPrenom_uti(prenom, lbprenom) && checkNaissance(dnaiss,lbdnaiss) && checkLnaissance_uti(lnaiss,lblnaiss) && checkAdresse_uti(adrr,lbadrr) && checkVille_uti(vi,lbvi) && checkProvince_uti(pro,lbpro) && checkPays_uti(pa,lbpa) && checkPseudo_uti(log,lblog) && checkPassword_uti(pass,lbpass) && checkVerifpassword_uti(conf,lbconf,pass)){
		document.forms[form].submit();
	//}
}

*/