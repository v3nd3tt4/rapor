$(document).ready(function() {
	
    for (instance in CKEDITOR.instances) {
				CKEDITOR.instances[instance].updateElement();
	}
	
	
});    
