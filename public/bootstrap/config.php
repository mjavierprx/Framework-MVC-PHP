    <?php

    $containerBuilder->addDeﬁnitions(__DIR__ . '/../../bootstrap/config.php');

    use Application\Controllers\HomeController;
    use Application\Controllers\ContactController;

    return [
        HomeController::class => function() {
            return new HomeController;
        },
        ContactController::class => function() {
            return new ContactController;
        }];