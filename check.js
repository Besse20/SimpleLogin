<script>
document.getElementById('loginForm').addEventListener('submit', function(event) {
    // Clear previous errors
    document.getElementById('usernameError').textContent = '';
    document.getElementById('passwordError').textContent = '';

    // Get username and password values
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    
    let isValid = true;

    // Check if username is empty
    if (!username) {
        document.getElementById('usernameError').textContent = 'Username is required';
        isValid = false;
    }

    // Check if password is empty
    if (!password) {
        document.getElementById('passwordError').textContent = 'Password is required';
        isValid = false;
    }

    // If any field is invalid, prevent form submission
    if (!isValid) {
        event.preventDefault();
    }
});
</script>