<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Comments</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }

      .nav-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
      }

      .nav-bar h1 {
        margin: 0;
        font-size: 20px;
        cursor: pointer;
      }

      .nav-bar i {
        font-size: 24px;
        cursor: pointer;
      }

      .comments-section {
        padding: 20px;
      }

      .comment-form {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
      }

      .comment-form input {
        flex: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      .comment-form button {
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        border: 0;
        border-radius: 4px;
        cursor: pointer;
      }

      .comment-list {
        margin-top: 20px;
      }

      .comment {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
      }

      .comment-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 20px;
      }

      .comment-content {
        flex: 1;
      }

      .comment-name {
        font-size: 16px;
        font-weight: bold;
        color: #333;
      }

      .comment-date {
        color: #999;
        font-size: 14px;
      }
    </style>
  </head>
  <body>
    <div class="nav-bar">
      <h1>Comments</h1>
      <i class="fa fa-arrow-left" onclick="goBack()"></i>
    </div>

    <div class="comments-section">
      <div class="comment-form">
        <input type="text" placeholder="Add a comment" />
        <button>Post</button>
      </div>

      <div class="comment-list">
        <div class="comment">
          <div class="comment-avatar">
            <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt="" />
          </div>
          <div class="comment-content">
            <div class="comment-name">Agustin Ortiz</div>
            <div class="comment-date">20 minutes ago</div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
          </div>
        </div>

        <div class="comment">
          <div class="comment-avatar">
            <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt="" />
          </div>
          <div class="comment-content">
            <div class="comment-name">Lorena Rojero</div>
            <div class="comment-date">10 minutes ago</div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
          </div>
        </div>

        <div class="comment">
          <div class="comment-avatar">
            <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt="" />
          </div>
          <div class="comment-content">
            <div class="comment-name">Agustin Ortiz</div>
            <div class="comment-date">10 minutes ago</div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
          </div>
        </div>

        <div class="comment">
          <div class="comment-avatar">
            <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt="" />
          </div>
          <div class="comment-content">
            <div class="comment-name">Lorena Rojero</div>
            <div class="comment-date">10 minutes ago</div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
          </div>
        </div>
      </div>
    </div>

    <script>
      function goBack() {
        window.history.back();
      }
    </script>
  </body>
</html>