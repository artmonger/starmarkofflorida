
<?php include(dirname(__FILE__)."/includes/header.php"); ?>
<?php include(dirname(__FILE__)."/includes/navigation.php"); ?>
<div class="container">
     <section class="section columns">
        <div class="container has-text-centered column is-10 is-offset-1">
            <h2 class="title">Contact us,</h2> <p>we'd love to hear from you!</span>

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
                <div class="field is-horizontal">
                    <div class="field-body">
                        <div class="field">
                            <p class="control">
                                <input class="input" type="text" placeholder="Name" required>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <input class="input" type="email" placeholder="Email" required>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <textarea class="textarea" placeholder="Message us" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <button class="button is-primary">
                                    Send message
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
</body>
</html>
