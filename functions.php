// Add this code on your functions.php of your theme
wp_register_script( 'Howler', 'https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js', null, null, true );
wp_enqueue_script('Howler');

function ajouter_script_audio() {
    ?>
    <script>
    jQuery(document).ready(function($) {
        var sound = new Howl({
            src: ['/wp-content/uploads/2023/02/musique.mp3'], // Here add the name of your audio file stored in media of Wordpress 
            autoplay: true,
            loop: true,
            onend: function() {
                console.log('Finished!');
            }
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'ajouter_script_audio');
