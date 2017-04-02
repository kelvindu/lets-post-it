$(document).ready(function() {
  $('#summernote').summernote({
    toolbar:[
      ['style',['style']],
      ['style', ['bold', 'italic', 'underline', 'clear']],
      ['fontname',['fontname']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['misc',['undo','redo']],
      ['fontsize', ['fontsize']],
      ['color', ['color']],
      ['insert',['table','link','hr']],
      ['height', ['height']],
      ['font', ['strikethrough', 'superscript', 'subscript']],
      ['misc', ['fullscreen','codeview','help']]
    ],
    height: 300,                 // set editor height
    minHeight: 200,             // set minimum height of editor
    maxHeight: 350,             // set maximum height of editor
    callbacks: {
      onPaste: function(e){
        console.log('called event paste');
      }
    },
    placeholder: 'Your awesome story here...'
  });
});
