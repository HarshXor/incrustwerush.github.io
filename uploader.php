<!DOCTYPE html>
<html>
<head>
    <title>Upload File - incrustwerush.org</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000000;
            color: #ffffff;
            font-family: monospace;
            padding-top: 5%;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        #result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .progress {
            height: 25px;
        }

        .progress-bar {
            text-align: center;
            line-height: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload File - incrustwerush.org</h1>
        <form id="uploadForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">File:</label>
                <input type="file" class="form-control-file" id="file" name="file">
            </div>
            <div class="form-group">
                <label for="extension">Extension:</label>
                <input type="text" class="form-control" id="extension" name="extension" placeholder="txt">
            </div>
            <button type="button" class="btn btn-primary" onclick="submitForm()">Upload</button>
        </form>
        <div id="result"></div>
        <div class="progress" style="display:none;">
            <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
        </div>
    </div>

    <script>
        function submitForm() {
            var fileInput = document.getElementById('file');
            var extensionInput = document.getElementById('extension');
            var fileName = fileInput.value.split('\\').pop();
            var extension = extensionInput.value.trim();

            if (!fileName || !extension) {
                alert('Please fill in all fields.');
                return;
            }

            var formData = new FormData();
            formData.append('file', fileInput.files[0]);
            formData.append('extension', extension);

            var progress = document.querySelector('.progress');
            var progressBar = document.querySelector('.progress-bar');

            fetch('http://api.incrustwerush.org/nitipgit/' + extension, {
                method: 'POST',
                body: formData,
                onprogress: function(event) {
                    if (event.lengthComputable) {
                        var percent = (event.loaded / event.total) * 100;
                        progressBar.style.width = percent + '%';
                        progressBar.textContent = percent.toFixed(2) + '%';
                    }
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'error') {
                    document.getElementById('result').innerHTML = 'Error: ' + data.message;
                } else {
                    document.getElementById('result').innerHTML = '<b>Status:</b> ' + data.status + '<br><b>Result:</b> <a href="' + data.result + '" target="_blank">' + data.result + '</a>';
                }
            })
            .catch(error => {
                document.getElementById('result').innerHTML = 'Error: ' + error.message;
            });
        }
    </script>
</body>
</html>
