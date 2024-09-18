<div>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button>Upload</button>
    </form>
</div>
