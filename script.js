// script.js

document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('myForm');

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    // Validate form fields (add your validation logic here)

    // Get form data
    const formData = new FormData(form);

    // Send AJAX request
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'insert.php', true);

    xhr.onload = function () {
      if (xhr.status === 200) {
        // Handle the response (if needed)
        console.log(xhr.responseText);

        // Reset the form
        form.reset();
      }
    };

    xhr.send(formData);
  });
});
