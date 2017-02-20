
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#profileImage').attr("src",e.target.result);
           $('#imageUploadLabel').attr("style" , "display:none;")
           
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo-up").change(function(){
    readURL(this);
});

(function localFileVideoPlayer() {
	'use strict'
  var URL = window.URL || window.webkitURL

  var playSelectedFile = function (event) {
    var file = this.files[0]
    var type = file.type
    var videoNode = document.querySelector('video')
    var fileURL = URL.createObjectURL(file)
    videoNode.src = fileURL
    $('#videoFrame').attr("style" , "display:block;width:100%;height:95%;");
    $('#videoLabel').attr("style" , "display:none;")
    
    

  }
  var inputNode = document.querySelector('input')
  inputNode.addEventListener('change', playSelectedFile, false)
})()