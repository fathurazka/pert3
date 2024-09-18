<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>File Uploaded</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-4xl">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">File Uploaded Successfully</h1>
        <div class="mb-4 flex justify-center space-x-4">
            <button onclick="rotateImage(-90)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Rotate Left
            </button>
            <button onclick="rotateImage(90)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Rotate Right
            </button>
        </div>
        <div class="flex justify-center overflow-hidden" style="height: 70vh;">
            <img id="uploadedImage" class="max-w-full max-h-full object-contain" src="{{ url('storage/'.$path) }}" alt="Uploaded file">
        </div>
    </div>

    <script>
        let rotation = 0;
        const image = document.getElementById('uploadedImage');

        function rotateImage(degrees) {
            rotation = (rotation + degrees + 360) % 360;
            image.style.transform = `rotate(${rotation}deg)`;
        }
    </script>
</body>
</html>
