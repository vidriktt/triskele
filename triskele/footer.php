    <!-- Contact Section -->
    <section id="contact" class="second-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Contacts</h2>
                    <hr>
                    <br>
                    <p>
                        +372 5567 1134 &#160 | &#160 +372 5559 0468<br>
                        <a href="mailto:ansambel.triskele@gmail.com">ansambel.triskele@gmail.com</a><br>
                        <a href="https://www.facebook.com/ansambeltriskele/" class="fa fa-facebook"></a>
                        <a href="https://www.youtube.com/channel/UCCHqMoqPVEEp_oG85SbEvaw/" class="fa fa-youtube"></a>
                    </p>
                    <br>
                    <br>
                    <p>
                        <!-- <a href="http://sircorp.ee"><img src="<?php echo get_template_directory_uri() ?>/assets/images/sircorp_logo.png" alt="..." style="max-width: 100%; max-height: 90px;" /></a><br> -->
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/sircorp_logo.png" alt="..." style="max-width: 100%; max-height: 90px;" /><br>
                        <span class="boldd">Siiri Siimer</span><br>
                        +372 501 8971<br>
                        <a href="mailto:siiri@sircorp.ee">siiri@sircorp.ee</a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p><a href="<?php echo get_template_directory_uri() ?>/assets/font-awesome/css/PoorlevKuup.html" style="color: white;">&copy;</a> Triskele 2023</p>
        </div>
        <?php wp_footer(); ?>
    </footer>

    <script>
        var audio = new Audio("<?php echo get_template_directory_uri() ?>/assets/audio/101_mu_suda.mp3");

        let playPauseButton = document.getElementById('play-pause-button');

        playPauseButton.onclick = function() {
            if (playPauseButton.classList.contains('fa-play')) {
                playPauseButton.classList.remove('fa-play');
                playPauseButton.classList.add('fa-pause');
                audio.play();
            } else {
                playPauseButton.classList.remove('fa-pause');
                playPauseButton.classList.add('fa-play');
                audio.pause();
            }
        };

        audio.onended = function() {
            playPauseButton.classList.remove('fa-pause');
            playPauseButton.classList.add('fa-play');
        };
    </script>


    </body>

    </html>