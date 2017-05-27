$(function(){
	//fixes
	fixFirefox();
});

function fixFirefox(){
	/*fix para o autocomplete=off*/
	$("input[autocomplete=off]").attr('readonly', true);
	$("input[autocomplete=off]").attr('onfocus', 'this.removeAttribute("readonly")');
}
