var ckClassicEditor=document.querySelectorAll(".ckeditor-classic");ckClassicEditor&&Array.from(ckClassicEditor).forEach(function(){ClassicEditor.create(document.querySelector(".ckeditor-classic")).then(function(c){c.ui.view.editable.element.style.height="200px"}).catch(function(c){console.error(c)})});

