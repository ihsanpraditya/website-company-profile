</main>
<footer class="bg-light">
    <div class="text-center p-3" style="background:#CCCCCC">
	Copyright &copy; 2024 
    </div>
</footer>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/popper.js"></script>
<script src="../assets/bootstrap/js/bootstrap.js"></script>
<script src="../assets/summernote/js/summernote-lite.js"></script>
<script src="../assets/summernote/plugin/summernote-image-list/summernote-image-list.js"></script>
<script src="../assets/summernote/lang/summernote-id-ID.js"></script>
<script>
    $(document).ready(function() {
	$('#summernote').summernote({
	    toolbar: [
		["style", ["bold", "italic", "underline", "clear"]],
		["fontname", ["fontname"]],
		["fontsize", ["fontsize"]],
		["color", ["color"]],
		["para", ["ul", "ol", "paragraph"]],
		["height", ["height"]],
		["insert", ["link", "picture", "imageList", "video", "hr"]],
		["help", ["help"]]
	    ],
	    dialogsInBody: true, // If you’re using Summernote within a modal dialog, please set this option as true.
	    // TODO icon image-list
	    // TODO koneksi fontawesome
	    // TODO nama dari list_image.php ganti jadi image_list.php biar mudah dicarinya pakai wildcard im*
	    imageList: {
		buttonHtml: '<i class="fa fa-file-image"></i>',
		endpoint: "list_image.php",
		fullUrlPrefix: "../assets/img/",
		thumbUrlPrefix: "../assets/img/"
	    },
	    callbacks: {
		onImageUpload: function(files) {
		    for(let i=0; i < files.length; i++) {
			$.upload(files[i]);
		    }
		}
	    },
	    lang: 'id-ID',
	    tabsize: 2,
	    minHeight: 200,
	    maxHeight: 250
	});

	$.upload = function (file) {
	    let out = new FormData();
	    out.append('file', file, file.name);

	    $.ajax({
		method: 'POST',
		url: 'upload_image.php',
		contentType: false,
		cache: false,
		processData: false,
		data: out,
		success: function(img) {
		    $('#summernote').summernote('insertImage', img);
		},
		error: function (jqXHR, textStatus, errorThrown) {
		    console.error(textStatus + " " + errorThrown);
		}
	    });
	};
    });
</script>
</body>
</html>
