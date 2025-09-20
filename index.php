<?php
/**
 * Fichier principal du thème CADE.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <p><?php bloginfo( 'description' ); ?></p>
    </header>

    <main>
        <p>Le thème CADE est activé. Le site est en cours de construction.</p>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Collège Académie des Élites. Tous droits réservés.</p>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
