<?php require ('views/components/header.php')?>

<div class="contact-container">
                <div class="contact-text">
                  <h2>Kontakta mig</h2>
                  <p>Kom förbi på en kopp kaffe, eller skicka iväg ett meddeland här!</p>
                </div>
                <div class="row">
                  <div class="form-image">
                    <img class="full-logo" src="images/full-logo.svg">
                  </div>
                  <div class="form-container">
                    <form action="">
                      <label for="fname">Förnamn</label>
                      <input type="text" id="fname" name="firstname" placeholder="Ditt namn..">
                      <label for="lname">Efternamn</label>
                      <input type="text" id="lname" name="lastname" placeholder="Ditt efternamn..">
                      <label for="email">Mailadress</label>
                      <input type="email" id="email" name="email" placeholder="Din mailadress..">
                      <label for="subject">Vad har du på hjärtat?</label>
                      <textarea id="subject" name="subject" placeholder="Skriv något.." style="height:170px"></textarea>
                      <input type="submit" value="Skicka">
                    </form>
                  </div>
                </div>
                <div class="adress-container">
                    <ul>
                        <li>Telefon: 0703194072</li>
                        <li>Adress: Norragrängesbergsgatan 4</li>
                        <li>Mail: carljohansson.1992@gmail.com</li>
                    </ul>
                  </div>
              </div>

<?php require ('views/components/footer.php')?>