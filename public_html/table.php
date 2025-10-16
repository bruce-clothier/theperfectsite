<?php include 'header.php'; ?>
    <main id="main-content">
      <h1>The Perfect Table</h1>
      <p>The role attributes are used to make the table accessible to screen readers. They are particularly useful when we change the display of tables for small screens and use display:grid. Doing that messes up the semantics of the table for screen readers. The scope attribute is used to indicate the relationship between the header and the cell.</p>
      <p>The role attributes on table, thead, and tbody are redundant as we do not change their display style for mobile, so are excluded as the can actually cause accessibility issues.</p>
      <h2>The Table</h2>
      <div class="table-wrapper">
          <table>
            <caption role="caption">This is a table of the perfect people</caption>
            <thead>
              <tr role="row">
                <th role="columnheader" scope="col">Name</th>
                <th role="columnheader" scope="col">Email</th>
                <th role="columnheader" scope="col">Phone</th>
                <th role="columnheader" scope="col">Preference</th>
                <th role="columnheader" scope="col">Type</th>
                <th role="columnheader" scope="col">Optted in</th>
              </tr>
            </thead>
            <tbody>
              <tr role="row">
                <td data-label="Name" role="cell">John Doe</td>
                <td data-label="Email" role="cell">john.doe@example.com</td>
                <td data-label="Phone" role="cell">07719314762</td>
                <td data-label="Preference" role="cell">City</td>
                <td data-label="Type" role="cell">Admin</td>
                <td data-label="Optted in" role="cell">Yes</td>
              </tr>
              <tr>
                <td data-label="Name" role="cell">Jane Smith</td>
                <td data-label="Email" role="cell">jane.smith@example.com</td>
                <td data-label="Phone" role="cell">07719314763</td>
                <td data-label="Preference" role="cell">Countryside</td>
                <td data-label="Type" role="cell">Customer</td>
                <td data-label="Optted in" role="cell">No</td>
              </tr>
              <tr>
                <td data-label="Name" role="cell">Jonathan Banana</td>
                <td data-label="Email" role="cell">jonathan.banana@example.com</td>
                <td data-label="Phone" role="cell">07719314764</td>
                <td data-label="Preference" role="cell">Countryside</td>
                <td data-label="Type" role="cell">Customer</td>
                <td data-label="Optted in" role="cell">No</td>
              </tr>
              <tr>
                <td data-label="Name" role="cell">Jill Apple</td>
                <td data-label="Email" role="cell">jill.apple@example.com</td>
                <td data-label="Phone" role="cell">07719314765</td>
                <td data-label="Preference" role="cell">City</td>
                <td data-label="Type" role="cell">Admin</td>
                <td data-label="Optted in" role="cell">Yes</td>
              </tr>
            </tbody>
          </table>
      </div>
    </main>
<?php include 'footer.php'; ?>