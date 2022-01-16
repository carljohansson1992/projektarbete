<?php require ('views/components/header.php')?>

<main class="login-container">
                <div class="login-header">
                    <h1>Registrera dig</h1>
                </div>
                <div class="login-wrapper">
                    <div class="form-container">
                        <form action="register-user.php" method="POST">
                            <label>Användarnamn</label>
                            <input type="text" name="username" placeholder="Ditt användarnamn.." required>
                            <label>email</label>
                            <input type="text" name="email" placeholder="Din mail.." required>
                            <label>Lösenord</label>
                            <input type="password" name="password" required>
                            <button class="blog-btn" type="submit">Registrera dig</button>
                        </form>
                    </div>


                </div>
            </main>


<?php require ('views/components/footer.php')?>