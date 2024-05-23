<?php require_once 'include/header.php'?>

    
    <div class="contact-container">
        <h1>Contact Us</h1>
        <div class="contact-grid">
            <div class="contact-form">
                <form action="#" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    
                    <button type="submit">Send Message</button>
                </form>
            </div>
            <div class="contact-details">
                <h2>Our Address</h2>
                <p>123 Fashion Street, Sydney, NSW 2000</p>
                <p>Phone: (02) 1234 5678</p>
                <p>Email: contact@onlineshoestore.com.au</p>
            </div>
            <div class="map">
                <h2>Find Us Here</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207.06177276992491!2d151.21647403345887!3d-33.86419074372092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae6b60dda459%3A0xf017d68f9f1e7a0!2sRoyal%20Botanic%20Garden%20Sydney!5e0!3m2!1sen!2snp!4v1715092695391!5m2!1sen!2snp" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
<?php require_once 'include/footer.php'?>

