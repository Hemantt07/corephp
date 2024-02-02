<?php
/**
 * This is the district page
 */

include('src/header.php')

?>
    <div class="container not-found d-flex justify-content-center align-items-center">
        <h1><strong>404:</strong>&nbsp;Page Not found</h1>
    </div>
    <style>
        .not-found {
            height: 70vh;
        }

        .not-found h1 {
            font-size: 2.8vw;
            color: var(--green);
        }

        .not-found h1 strong {
            color: var(--darkGreen);
        }
    </style>

<?php include('src/footer.php') ?>