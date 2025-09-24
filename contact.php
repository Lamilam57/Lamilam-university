<?php
    include_once 'main-partials/menu.php';
?>    
        
        <section class="location">
            <iframe src="https://www.google.com/maps/d/embed?mid=1HbhwDuOAHVIAz001eBPzxaynhOw&hl=en&ehbc=2E312F" width="640" height="480"></iframe>
            
        </section>
        
        <section class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <h3>Contact Us At</h3>
                    <div>
                        <span>
                            <h5>Address</h5>
                            <p>Redemption camp lagos-ibadan express road ogun state, nigeria</p>
                        </span>                       
                    </div>
                    <div>
                        <span>
                            <h5>Phone-No</h5>
                            <p>+1 0123456789</p>
                        </span>                       
                    </div>
                    <div>
                        <span>
                            <h5>Email-Address</h5>
                            <p>yourmane@gmail.com</p>
                        </span>                       
                    </div>
                </div>
                
                <div class="contact-col">
                    <form action="formhandler.php" method="post">
                        <input type="text" name="name" placeholder="Enter your Name" required>
                        <input type="email" name="email" placeholder="Enter your Email-Address" required>
                        <input type="text" name="subject" placeholder="Enter your Subject" required>
                        <textarea rows="8" name="message" placeholder="Message" required></textarea>
                        <button type="submit" class="hero-btn red-btn">Message</button>
                    </form>
                    
                </div>
            </div>
        </section>
        
<?php
    include_once 'main-partials/footer.php';
?>