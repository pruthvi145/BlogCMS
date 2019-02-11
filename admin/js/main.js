$(document).ready(function () {
	//Editor PLUGIN
	ClassicEditor
		.create(document.querySelector('#editor'))
		.catch(error => {
			console.error(error);
		});
	
	$('#checkAll').click(function(){
		if(this.checked){
			$('.checkBox').each(function(){
				this.checked = true;
			});
		}else{
			$('.checkBox').each(function(){
				this.checked = false;
			});
		}
		
	});
		
	
});
