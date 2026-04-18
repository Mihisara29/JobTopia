<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Job</title>
</head>
<body>
  <h1>Create New Job</h1>
  <!-- Form for creating a new job would go here -->
  <form action="/jobs" method="POST">
  
    <label for="title">Job Title:</label>
    <input type="text" id="title" name="title" required>
    <br><br>
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>
    <br><br>
    <button type="submit">Create Job</button>
  </form>
</body>
</html>