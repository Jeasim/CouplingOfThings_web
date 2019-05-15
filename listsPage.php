<?php
	require_once("action/ListsPageAction.php");
	$action = new ListsPageAction();
	$action->execute();

	require_once("partial/header.php");
?>
<script src="js/lists.js"></script>
<script src="js/jquerry.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<div class="btn-group-lists">

	<div class="view-lists-btn" onclick="viewListsMode()">voir listes</div>
	<div class="add-list-btn" onclick="addListMode()">ajouter une liste</div>

</div>

<div class="all-lists">
	
	<template id="list-template">
		<div class="list-name"></div>
		<div class="list-elements"></div>
	</template>

</div>

<div class="new-list">
	<p>Nouvelle liste</p>
	<p class="list-title"></p>
	<input type="text" name="new-list-name" id="new-list-name" onkeypress="manageInput()" placeholder="Titre de la liste" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Titre de la liste'" >
	<ul class="list">
		<li id="new-list-element"><input type="text" name="new-list-element-input" id="new-list-element-input" onkeypress="addElementList()" placeholder="Nouvelle élément" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nouvelle élément'"></li>
	</ul>
	<div id="validation-info"></div>
	<div class="btn-submit-list" onclick="submitNewList()">Créer liste</div>
</div>




<?php
	require_once("partial/footer.php");