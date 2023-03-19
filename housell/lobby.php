<!DOCTYPE html>
<html>
    <head>
        <title>Housell - Sell and rent your house</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,600&display=swap" rel="stylesheet">

        <script src="js/script.js"></script>


    </head>
    <body>

        <header>
            <a href="#" class="logo"><i class="ri-home-smile-fill"></i><span>Housell</span></a>
        <nav>
            <ul class="navbar">
                <li><a href="lobby.php" class="active">Home</a></li>
                <li><a href="buy.php">Buy</a></li>
                <li><a href="sell.php">Sell</a></li>
                <li><a href="rent.php">Rent</a></li>
                <li><a href="#" onclick="showForm()">Contact</a></li>
                
            </ul>
        </nav>

            <div class="form-container">
                <form action="proses.php" method="post">
                <h2>Contact Us</h2>
                <span class="icon-close"><i class="ri-close-line"></i></span>
                <ul>
                    <li>
                        <label for="name">Name:</label>
                        <input type="text" placeholder="Name" id="name" name="user_name">
                    </li>
                    <li>
                        <label for="mail">E-mail:</label>
                        <input type="email" placeholder="E-mail" id="mail" name="user_email">
                    </li>
                    <li>
                        <label for="msg">Message:</label>
                        <textarea id="msg" placeholder="Message"name="user_message"></textarea>
                    </li>
                    <li class="button">
                        <input type="submit" name="button" id="button"
                        value="Send"/>
                    </li>
                </ul>

                </form> 
            </div>

            <script>
                function checkFormIsFilled() {
                var name = document.getElementById('name').value;
                var email = document.getElementById('mail').value;
                var message = document.getElementById('msg').value;

                 if (name == '' || email == '' || message == '') {
                    alert('Could you please to input data');
                 return false;
                }

                return true;
                }

                var form = document.querySelector('form');
                form.addEventListener('submit', function(event) {
                if (!checkFormIsFilled()) {
                    event.preventDefault();
                }
                });

                function showForm(){
                var formContainer = document.querySelector('.form-container');
                formContainer.style.display = 'block';
                }

                function hideForm(){
                var formContainer = document.querySelector('.form-container');
                formContainer.style.display = 'none';
                }

                var contactLink = document.querySelector('.navbar li:last-child a');
                contactLink.addEventListener('click', function(){
                showForm();
                });

                var iconClose = document.querySelector('.icon-close');
                iconClose.addEventListener('click', function(){
                hideForm();
                });

            </script>

        <div class="main">
                <a href="#" class="user"><i class="ri-user-fill"></i>Sign In</a>
                <div class="bx bx-menu" id="icon-menu"></div>

        </div>


        </header>

        <div class="content">
            <h1>SELL OR RENT YOUR HOUSE</h1>
            <p>Housell, we were able to easily and seure
                a great house to rent<br>with high class quality. </p>
        </div>

    </body>
</html>