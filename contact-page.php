<?php

/*
Template Name: Contact
*/

get_header(); ?>

<!-- Hero Section -->

<section class="book-demo-hero contact-hero">
   <div class="row-container">
      <div class="book-demo-hero-text">
         <h3>Contact Us</h3>
         <p>Experience the software for yourself with a personalised demo tailored to your organisation's specific health and safety needs.</p>
      </div>
      <form action="" class="book-demo-form">
         <div class="name">
            <label for="">First name* <br>
                <input type="text" name="first-name" size="30" required>
            </label>
            <label for="">Last name* <br>
                <input type="text" name="last-name" size="30" required>
            </label>
         </div>
         <div class="credentials">
            <label for="">Email* <br>
                <input type="email" name="email" size="30" required>
            </label>
            <label for="">Phone Number* <br>
                <input type="tel" name="phone-number" size="30" required>
            </label>
         </div>
         <div class="optional">
            <label for="">Company Name <br>
                <input type="text" name="company-name" size="30">
            </label>
            <label for="">Best contact time? <br>
            <input type="datetime-local" id="meeting-time" name="meeting-time">
            </label>
         </div>
         <div class="message">
            <label for="">Message <br>
                <textarea name="message" cols="72" rows="8"></textarea>
            </label>
         </div><br>
         <div style="text-align: center;" class="book-demo-btn">
            <button class="primary-btn" type="submit">book a demo</button>
         </div>
      </form>
   </div>
</section>

<!-- Testimonial Section -->

<section class="testimonial-section">
      <div class="row-container">
        <div class="testimonial-img">
            <img src="<?php echo get_theme_file_uri('/images/MGC-identity-landscape.png'); ?>" alt="">
        </div>
        <div class="testimonial-text">
            <h5>Emily Stenhouse</h5>
            <h6>Deputy Principal, Marlborough Girls College</h6>
            <p>The GonoGo platform for reporting and recording incidents and issues in our school has instantly increased the number of reports due to the ease of use for our staff members.  We can now be more proactive in addressing health and safety concerns around the school.  It has also improved our follow up procedures to ensure the risk of incidents reoccurring are decreased.  Craig is fantastic to work with and any questions or changes to the platform are made almost instantly to suit our context and needs.</p>
            <svg class="arrow-left" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
               <circle cx="20" cy="20" r="19.5" stroke="#FF9734"/>
               <path d="M10 19.5L9.65095 19.142L9.28377 19.5L9.65095 19.858L10 19.5ZM30 20C30.2761 20 30.5 19.7761 30.5 19.5C30.5 19.2239 30.2761 19 30 19V20ZM16.3176 12.642L9.65095 19.142L10.3491 19.858L17.0157 13.358L16.3176 12.642ZM9.65095 19.858L16.3176 26.358L17.0157 25.642L10.3491 19.142L9.65095 19.858ZM10 20H30V19H10V20Z" fill="#FF9734"/>
            </svg>
            <svg class="arrow-right" style="transform: rotate(180deg);" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
               <circle cx="20" cy="20" r="19.5" fill="#FF9734" stroke="#FF9734"/>
               <path d="M10 19.5L9.65095 19.142L9.28377 19.5L9.65095 19.858L10 19.5ZM30 20C30.2761 20 30.5 19.7761 30.5 19.5C30.5 19.2239 30.2761 19 30 19V20ZM16.3176 12.642L9.65095 19.142L10.3491 19.858L17.0157 13.358L16.3176 12.642ZM9.65095 19.858L16.3176 26.358L17.0157 25.642L10.3491 19.142L9.65095 19.858ZM10 20H30V19H10V20Z" fill="#FFFFFF"/>
            </svg>
        </div>
      </div>
</section>

<?php get_footer(); ?>