<?php require ('views/components/header.php')?>

<main class="login-container">
                <div class="login-header">
                    <h1>Logga in</h1>
                </div>
                <div class="login-wrapper">
                    <div class="form-container">
                        <form action="login-user.php" method="POST">
                            <label for="">Användarnamn</label>
                            <input type="text" id="username" name="email" placeholder="Ditt användarnamn.." required>
                            <label for="password">Lösenord</label>
                            <input type="text" id="password" name="password" required>
                            <input type="submit" value="Skicka">
                        </form>
                    </div>


                </div>
            </main>


<?php require ('views/components/footer.php')?>