<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Banner and Video</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Upload Banner and Video</h2>
    <form action="{{ route('insertBanner') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Title Input -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
        </div>

        <!-- Image Input -->
        <div class="form-group">
            <label for="image">Banner Image</label>
            <input type="file" class="form-control-file" id="image" name="image_url" accept="image/*" required>
            <small class="form-text text-muted">Upload an image file (jpeg, png, jpg, gif, svg).</small>
        </div>

        <!-- Video Input -->
        <div class="form-group">
            <label for="video">Video</label>
            <input type="file" class="form-control-file" id="video" name="video" accept="video/*" required>
            <small class="form-text text-muted">Upload a video file (mp4, mov, ogg, qt).</small>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
