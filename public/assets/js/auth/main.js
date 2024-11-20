const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

registerBtn.addEventListener('click', () => {
    container.classList.add('active');
})

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
})
document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

    fetch(this.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Accept': 'application/json',
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href = data.redirect;
        } else {
            alert(data.message || "Something went wrong.");
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
document.getElementById('register-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

    fetch(this.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Accept': 'application/json',
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href = data.redirect;
        } else {
            alert(data.message || "Something went wrong.");
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
