<?php include 'header.php'; ?>
    <main id="main-content">
      <h1>The Perfect Form</h1>
      <form novalidate>
        <div class="form-item">
          <label for="name">First Name</label>
          <input id="first-name" name="first-name" type="text" placeholder="" autocomplete="given-name" required>
          <p class="form-help"></p>
        </div>

        <div class="form-item">
          <label for="name">Last Name</label>
          <input id="name" name="last-name" type="text" placeholder="" autocomplete="family-name" required>
          <p class="form-help"></p>
        </div>

        <div class="form-item">
          <label for="email">Email</label>
          <input id="email" name="email" required type="email" placeholder="" autocomplete="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Please enter a valid email address">
          <p class="form-help">Please use your myWimbledon account email</p>
        </div>

        <div class="form-item">
          <label for="phone">Phone</label>
          <input id="phone" name="phone" type="tel" placeholder="" autocomplete="tel" pattern="^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$" title="Please enter a valid UK mobile number (e.g., 07719314762 or +44 7719 314 762)" required>
          <p class="form-help">Please enter 07719314762</p>
        </div>

        <div class="form-item">
          <label for="type">Type</label>
          <select name="type" id="type" required>
            <option value="admin">Admin</option>
            <option value="customer">Customer</option>
          </select>
        </div>

        <div class="form-item">
          <label for="city"><input type="radio" name="city-countryside" id="city" required> I prefer the city centre</label>
          <label for="countryside"><input type="radio" name="city-countryside" id="countryside" required> I prefer the countryside</label>
        </div>

        <div class="form-item">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="" autocomplete="off"></textarea>
          <p class="form-help">Please enter a message</p>
        </div>

        <div class="form-item">
          <label for="optin"><input type="checkbox" id="optin" name="opt-in">Would you like to opt in?</label>
        </div>

        <div class="form-item">
          <label for="doesagree"><input type="checkbox" id="doesagree" name="doesagree" required>I understand the terms and conditions</label>
        </div>

        <button type="submit">Submit</button>
      </form>
    </main>
<?php include 'footer.php'; ?>