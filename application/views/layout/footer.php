<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login & Signup</title>
    <style>
        .login_signup {
            position: fixed;
            top: 20%;
            left: 40%;
            width: 300px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            background: #fff;
            z-index: 999;
            display: none;
        }

        .login_signup .signupBx, .login_signup .loginBx {
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .login_signup form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login_signup form input {
            padding: 10px;
            margin-top: 10px;
            border-radius: 8px;
            border: none;
            color: #000;
            box-shadow: 0 0 20px rgb(0, 0, 0, 0.1);
            width: 100%;
        }

        .login_signup form button {
            padding: 10px 15px;
            margin-top: 10px;
            border-radius: 8px;
            border: none;
            background: #037b83;
            color: #fff;
            box-shadow: 0 0 20px rgb(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .input {
            margin-top: 30px;
        }

        .input input {
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .input button {
            padding: 10px;
            background: #037b83;
            color: white;
            border: none;
            border-radius: 8px;
            margin-left: 10px;
            cursor: pointer;
        }

        footer {
            margin-top: 200px;
            text-align: center;
            padding: 20px;
            background-color: #f2f2f2;
        }

        footer ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        footer li {
            margin: 10px 20px;
        }
    </style>
</head>
<body>

<!-- Popup for Login & Signup -->
<div class="login_signup" id="popup">
    <div class="signupBx">
        <h2>Register</h2>
        <form id="signupForm">
            <input type="text" id="signup_name" placeholder="Name" required>
            <input type="number" id="signup_mobile" placeholder="Mobile" required>
            <input type="password" id="signup_password" placeholder="Password" required>
            <button type="submit" id="signup">Signup</button>
        </form>
    </div>

    <div class="loginBx">
        <h2>Login</h2>
        <form id="loginForm">
            <input type="number" id="login_mobile" placeholder="Mobile" required>
            <input type="password" id="login_password" placeholder="Password" required>
            <button type="submit" id="login">Login</button>
        </form>
    </div>
</div>

<!-- Footer -->
<footer>
    <h2>Subscribe & <br> get special discount</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat laudantium deserunt sit nam nisi, officia autem quas voluptatum laboriosam eum!</p>
    <div class="input">
        <input type="text" placeholder="Enter your Email Address">
        <button>Subscribe</button>
    </div>
    <ul>
        <li>7823 <br> <h6>Years serving the travel industry</h6></li>
        <li>6374 <br> <h6>Global <br> Partnership</h6></li>
        <li>1496 <br> <h6>Industry Awards Since 2023</h6></li>
        <li>5889 <br> <h6>Subscribe</h6></li>
    </ul>
</footer>

<!-- JavaScript -->
<script>
    const loginBtn = document.getElementById('loginBtn');
    const signupBtn = document.getElementById('signupBtn');
    const loginBox = document.querySelector('.loginBx');
    const signupBox = document.querySelector('.signupBx');
    const popup = document.getElementById('popup');

    // You can still use these buttons elsewhere in your HTML (e.g., in a navbar or header)
    // Sample external usage:
    // <button id="loginBtn">Login</button>
    // <button id="signupBtn">Signup</button>

    if (loginBtn && signupBtn) {
        loginBtn.addEventListener('click', () => {
            popup.style.display = 'block';
            loginBox.style.display = 'flex';
            signupBox.style.display = 'none';
        });

        signupBtn.addEventListener('click', () => {
            popup.style.display = 'block';
            signupBox.style.display = 'flex';
            loginBox.style.display = 'none';
        });
    }

    // Replace with actual base_url in PHP
    let base_url = "<?php echo base_url('user/');?>";

    // Signup
    document.getElementById('signup').addEventListener('click', async (e) => {
        e.preventDefault();

        let form = new FormData();
        form.append('name', document.getElementById('signup_name').value);
        form.append('mobile', document.getElementById('signup_mobile').value);
        form.append('password', document.getElementById('signup_password').value);

        try {
            const response = await fetch(base_url + 'signup', {
                method: "POST",
                body: form
            });
            const result = await response.json();
            alert(result.message);
            popup.style.display = 'none';
        } catch (error) {
            console.log(error);
        }
    });

    // Login
    document.getElementById('login').addEventListener('click', async (e) => {
        e.preventDefault();

        let form = new FormData();
        form.append('mobile', document.getElementById('login_mobile').value);
        form.append('password', document.getElementById('login_password').value);

        try {
            const response = await fetch(base_url + 'login', {
                method: "POST",
                body: form
            });
            const result = await response.json();
            alert(result.message);
            popup.style.display = 'none';
             location.reload();
        } catch (error) {
            console.log(error);
        }
    });

    // Logout
    document.getElementById('logoutBtn').addEventListener('click', async (e) => {
        e.preventDefault();


        try {
            const response = await fetch(base_url + 'logout', 
                
        );
            const result = await response.json();
            alert(result.message);
             location.reload();
           
            
        } catch (error) {
            console.log(error);
        }
    });
</script>
</body>
</html>
