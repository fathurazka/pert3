<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>File Upload</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Image Upload</h1>
        <form action="/upload" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div class="flex items-center justify-center w-full">
                <label for="file-upload" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <div id="upload-text" class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span></p>
                        <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF</p>
                    </div>
                    <p id="file-name" class="text-sm text-gray-500 text-center hidden"></p>
                    <input id="file-upload" type="file" name="file" class="hidden" />
                </label>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">
                Upload
            </button>
        </form>
    </div>

    <script>
        const fileUpload = document.getElementById('file-upload');
        const fileName = document.getElementById('file-name');
        const uploadText = document.getElementById('upload-text');

        fileUpload.addEventListener('change', function(e) {
            if (this.files && this.files.length > 0) {
                fileName.textContent = this.files[0].name;
                fileName.classList.remove('hidden');
                uploadText.classList.add('hidden');
            } else {
                fileName.textContent = '';
                fileName.classList.add('hidden');
                uploadText.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>

