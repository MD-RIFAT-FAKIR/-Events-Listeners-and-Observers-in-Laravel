<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create a New Blog Post</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
    body {
      background: linear-gradient(to bottom, #ffffff, #dcdcdc);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .form-container {
      background-color: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 800px;
    }

    h1 {
      font-weight: bold;
      margin-bottom: 30px;
    }

    .form-label {
      font-weight: 500;
    }

    .btn-create {
      float: right;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Create a New Blog Post</h1>
    <form>
      <div class="mb-3">
        <label for="postTitle" class="form-label">Post Title</label>
        <input type="text" class="form-control" id="postTitle" placeholder="Enter post title">
      </div>
      <div class="mb-4">
        <label for="postContent" class="form-label">Post Content</label>
        <textarea class="form-control" id="postContent" rows="5" placeholder="Enter post content"></textarea>
      </div>
      <button type="submit" class="btn btn-success btn-create">Create Post</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
