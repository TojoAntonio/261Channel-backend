/* ========================== INSERTION =============================== */

function insertTag(startTag, endTag, textareaId, tagType) {
		var field  = document.getElementById(textareaId); 
		var scroll = field.scrollTop;
		field.focus();
		
		/* === Partie 1 : on récupère la sélection === */
		if (window.ActiveXObject) {
				var textRange = document.selection.createRange();            
				var currentSelection = textRange.text;
		} else {
				var startSelection   = field.value.substring(0, field.selectionStart);
				var currentSelection = field.value.substring(field.selectionStart, field.selectionEnd);
				var endSelection     = field.value.substring(field.selectionEnd);               
		}

		
		/* === Partie 2 : on analyse le tagType === */
		if (tagType) {
			switch (tagType) {
				case "image":
					<?php echo "var chem = \"".base_url().'assets/images/'."\""; ?>;
					var URL = prompt("Quel est le chemin de l'image (répertoire, nom de l'image avec extension) ?") || "";
					startTag = "<img src=\"" + chem + URL + "\" />";
					currentSelection = "";
					endTag = "";
					break;
				case "gras":
					startTag = "<b>";
					endTag = "</b>";
					break;
				case "soustitre":
					startTag = "<b><u>";
					endTag = "</u></b>";
					break;
				case "titre":
					startTag = "<span style=\"font-size:1.3em\"><b><u>";
					endTag = "</u></b></span>";
					break;
				case "alaligne":
					startTag = "<br/>";
					endTag = "";
					break;
				case "paragraphe":
					startTag = "<p>";
					endTag = "</p>";
					break;
			}
		}
		
		/* === Partie 3 : on insère le tout === */
		if (window.ActiveXObject) {
				textRange.text = startTag + currentSelection + endTag;
				textRange.moveStart("character", -endTag.length - currentSelection.length);
				textRange.moveEnd("character", -endTag.length);
				textRange.select();     
		} else {
				field.value = startSelection + startTag + currentSelection + endTag + endSelection;
				field.focus();
				field.setSelectionRange(startSelection.length + startTag.length, startSelection.length + startTag.length + currentSelection.length);
		} 

		field.scrollTop = scroll;     
}