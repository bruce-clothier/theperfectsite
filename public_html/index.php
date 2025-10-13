<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <a href="#main-content" class="accessibility-only">Skip to main content</a>
  <div id="page-wrapper">
    <header>
      <nav>
        <div id="brand">Perfect.</div>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="#">Form</a></li>
        </ul>
      </nav>
    </header>
    <main id="main-content">
      <h1>The Perfect Site</h1>
      <p>Perfect CSS, perfect HTML, perfect JavaScript, perfect Accessibility.</p>
      <h2>The Perfect Form</h2>
      <form>
        <div class="form-item">
          <label for="name">Name</label>
          <input id="name" type="text" placeholder="">
          <p class="form-help"></p>
        </div>

        <div class="form-item">
          <label for="email">Email</label>
          <input id="email" type="text" placeholder="">
          <p class="form-help">Please use your myWimbledon account email</p>
        </div>

        <div class="form-item error">
          <label for="phone">Phone</label>
          <input id="phone" type="text" placeholder="" value="07719325">
          <p class="form-help">Please enter 07719314762</p>
        </div>

        <div class="form-item">
          <label for="type">Type</label>
          <select name="type" id="type">
            <option value="admin">Admin</option>
            <option value="customer">Customer</option>
          </select>
        </div>

        <div class="form-item">
          <label for="ishappy"><input type="checkbox" id="ishappy">Would you like to opt in?</label>
        </div>

        <button type="submit">Submit</button>
      </form>
    </main>
  </div>

  <script src="script.js"></script>
</body>

</html>