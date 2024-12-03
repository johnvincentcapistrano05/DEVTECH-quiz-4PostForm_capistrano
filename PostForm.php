<!DOCTYPE html>
<html>
<head>
  <title>Post Form</title>
</head>
<body>

  <h1>Post Form</h1>

  <form action="postform_submitted.php" method="post">
    <label for="name">My name is:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="movie">My favorite movie is:</label>
    <input type="text" id="movie" name="movie" required><br><br>

    <label for="degree">My degree is:</label>
    <select id="degree" name="degree">
      <option value="Bachelor">Bachelor</option>
      <option value="Master">Master</option>
      <option value="PhD">PhD</option>
    </select><br><br>

    <label for="gender">Gender:</label>
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label><br><br>

    <label for="units">My favorite unit(s):</label>
    <select id="units" name="units[]" multiple>
      <option value="FILIPINO">FILIPINO</option>
      <option value="ENGLISH">ENGLISH</option>
      <option value="AUTOMOTIVE">AUTOMOTIVE</option>
      <option value="MUSIC">MUSIC</option>
    </select><br><br>

    <input type="submit" value="Submit">
  </form>

</body>
</html>
