<?php include('includes/send_email.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="content">
        <section>
            <h1>contact me</h1>
            <p>
                <!-- Show a success message if form submission is successful -->
                <?php echo (!empty($result)) ? $result : "Want to collaborate? Got suggestions for improvement? Book recommendations? Let me know!"; ?>
            </p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your name..." value="<?php echo $params["name"]; ?>" />
                    <small><?php echo (!empty($errors["name"])) ? $errors["name"] : "*Required field"; ?></small>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your email address..." value="<?php echo $params["email"]; ?>" />
                    <small><?php echo (!empty($errors["email"])) ? $errors["email"] : "*Required field"; ?></small>
                </div>
                <div>
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" placeholder="Subject..." value="<?php echo $params["subject"]; ?>" />
                    <small><?php echo (!empty($errors["subject"])) ? $errors["subject"] : "*Required field"; ?></small>
                </div>
                <div>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" placeholder="Your message..." value="<?php echo $params["message"]; ?>"></textarea>
                    <small><?php echo (!empty($errors["message"])) ? $errors["message"] : "*Required field"; ?></small>
                </div>
                <div id="submit">
                    <button type="submit" name="email_submit">Send Message</button>
                </div>
            </form>
        </section>
    </div><!-- END .content -->
<?php include('includes/footer.php'); ?>