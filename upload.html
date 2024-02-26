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

        #result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            word-wrap: break-word;
        }

        #result a {
            color: #007bff;
            text-decoration: none;
        }

        .progress {
            height: 30px;
        }

        .progress-bar {
            background-color: #28a745;
            text-align: center;
            line-height: 30px;
            color: #ffffff;
            width: 0%;
            transition: width 0.1s ease;
        }
    </style>
</head>
<body>
    <div class="m-5">
        <b class="text-center">Upload File - incrustwerush.org</b>
        <form id="uploadForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">File:</label>
                <input type="file" class="form-control-file" id="file" name="file">
            </div>
            <div class="mt-3 mb-3">
            	<p>Allowed file extensions: txt, lst, zip, jpg, png, gif, mp4, mp3, wav, pptx, docx, pdf, xls, xlsx, csv, html, css, js, php, java, c, cpp, h, hpp, py, rb, go, swift, kt, json, xml, sql, bat, sh, ini, md, tsv, log, msg, ppt, rtf, dat, key, db, apk, exe, dll, jar, tar, gz, tgz, 7z, deb</p>

            </div>
            <button type="button" class="btn btn-primary btn-block" onclick="submitForm()">Upload</button>
            <div class="progress mt-3" style="display: none;">
                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
            </div>
        </form>

        <div id="result"></div>
    </div>

    <script>
        function submitForm() {
            var fileInput = document.getElementById('file');
            var fileName = fileInput.value.split('\\').pop();
            var extension = fileName.split('.').pop();

            if (!fileName || !extension) {
                alert('Please select a file.');
                return;
            }

            var formData = new FormData();
            formData.append('file', fileInput.files[0]);
            formData.append('extension', extension);

            var progressBar = document.querySelector('.progress-bar');
            var progressContainer = document.querySelector('.progress');
            progressContainer.style.display = 'block';

            fetch('http://api.incrustwerush.org/nitipgit/' + extension, {
                method: 'POST',
                body: formData
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
            })
            .finally(() => {
                progressContainer.style.display = 'none';
                progressBar.style.width = '0%';
                progressBar.innerHTML = '0%';
            });

            var totalSize = fileInput.files[0].size;
            var uploadedSize = 0;

            var updateProgress = setInterval(() => {
                if (uploadedSize >= totalSize) {
                    clearInterval(updateProgress);
                    return;
                }

                uploadedSize += 1024 * 1024;
                if (uploadedSize > totalSize) {
                    uploadedSize = totalSize;
                }
                var percent = Math.round((uploadedSize / totalSize) * 100);
                progressBar.style.width = percent + '%';
                progressBar.innerHTML = percent + '%';
            }, 1000);
        }
    </script>

</body>
</html>
