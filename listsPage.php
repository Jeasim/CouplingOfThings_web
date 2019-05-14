<?php
	require_once("action/ListsPageAction.php");
	$action = new ListsPageAction();
	$action->execute();

	require_once("partial/header.php");
?>
<script src="js/lists.js"></script>
<script src="js/jquerry.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<div class="btn-group-lists">

	<div class="btn-VoirListes">voir listes</div>
	<div class="btn-AjouterListe" onclick="addList()">ajouter une liste</div>

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
	<ul class="list sortable"></ul>
	<input type="text" name="new-list-name" id="new-list-name" onkeypress="manageInput()" placeholder="Titre de la liste" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Titre de la liste'" >
	<div id="validation-info"></div>
	<input type="text" name="new-list-elelment" id="new-list-elelment" onkeypress="addElementList()" placeholder="Nouvelle élément" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nouvelle élément'" >

</div>


<?php
	require_once("partial/footer.php");