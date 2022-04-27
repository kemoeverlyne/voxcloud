 <?php  get_header(); ?>
 

 <section class="hero">
    <div class="u-wrapper">
      <div class="hero-grid">
        <div class="hero-imageContainer">
          <img class="hero-image" src="<?php bloginfo('template_directory');?>/images/illustration-hero.svg" alt="">
        </div>
        <div class="hero-content">
          <h1 class="u-h1">A Simple Bookmark Manager</h1>
          <p class="u-p">A clean and simple interface to organize your favourite websites. Open a new
            browser tab and see your sites load instantly. Try it for free.</p>
          <div class="hero-buttons">
            <button class="u-button">Get it on Chrome</button>
            <button class="u-button is-gray">Get it on Firefox</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="features">
    <div class="u-wrapper">
      <h2 class="u-h2">
        Features
      </h2>
      <p class="u-p">
        Our aim is to make it quick and easy for you to access your favourite websites.
        Your bookmarks sync between your devices so you can access them on the go.
      </p>
      <div class="tabs">
        <input type="radio" value="bookmarking" name="tabs" id="bookmarking" checked>
        <input type="radio" name="tabs" value="searching" id="searching">
        <input type="radio" name="tabs" value="sharing" id="sharing">
        <ul>
          <li class="tabs-link">
            <label for="bookmarking">
              Simple Bookmarking
            </label>
          </li>
          <li class="tabs-link">
            <label for="searching">
              Speedy Searching
            </label>
          </li>
          <li class="tabs-link">
            <label for="sharing">
              Easy Sharing
            </label>
          </li>
        </ul>
        <div class="tabs-grid">
          <div class="tabs-content" id="tab-bookmarking">
            <img src="<?php bloginfo('template_directory');?>/images/illustration-features-tab-1.svg" alt="">
            <div>
              <h2 class="u-h2">
                Bookmark in one click
              </h2>
              <p class="u-p">
                Organize your bookmarks however you like. Our simple drag-and-drop interface
                gives you complete control over how you manage your favourite sites.
              </p>
              <button class="u-button">More Info</button>
            </div>
          </div>
          <div class="tabs-content" id="tab-searching">
            <img src="<?php bloginfo('template_directory');?>/images/illustration-features-tab-2.svg" alt="">
            <div>
              <h2 class="u-h2">
                Intelligent search
              </h2>
              <p class="u-p">
                Our powerful search feature will help you find saved sites in no time at all.
                No need to trawl through all of your bookmarks.
              </p>
              <button class="u-button">More Info</button>

            </div>
          </div>
          <div class="tabs-content" id="tab-sharing">
            <img src="<?php bloginfo('template_directory');?>/images/illustration-features-tab-3.svg" alt="">
            <div>
              <h2 class="u-h2">
                Share your bookmarks
              </h2>
              <p class="u-p">
                Easily share your bookmarks and collections with others. Create a shareable
                link that you can send at the click of a button.
              </p>
              <button class="u-button">More Info</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <?php $extension = get_field['extension']; ?>
 <?php $leftside = get_field['leftside']; ?>
  <?php $middleside = get_field['middleside']; ?>
 <?php $rightside = get_field['rightside']; ?>



  <section class="download">
    <div class="u-wrapper">
      <h2 class="u-h2">
        Download the extension
      </h2>
      <p class="u-p">
        We’ve got more browsers in the pipeline. Please do let us know if you’ve
        got a favourite you’d like us to prioritize.
      </p>
      <div class="download-grid">
        <div class="download-item">
          <img src="<?php bloginfo('template_directory');?>/images/logo-chrome.svg" alt="">
          <h3 class="u-h3">
             <?php echo $leftside['title']; ?>
          </h3>
          <p class="u-p">
             <?php echo $leftside['description']; ?>
          </p>
          <button class="u-button is-fullWidth">
          <?php echo $leftside['link_text']; ?>

          </button>
        </div>
        <div class="download-item">
          <img src="<?php bloginfo('template_directory');?>/images/logo-firefox.svg" alt="">
          <h3 class="u-h3">
           <?php echo $middleside['title']; ?>          
          </h3>
          <p class="u-p">
          <?php echo $middleside['description']; ?>
          </p>
          <button class="u-button is-fullWidth">
           <?php echo $middleside['link_text']; ?>
          </button>
        </div>
        <div class="download-item">
          <img src="<?php bloginfo('template_directory');?>/images/logo-opera.svg" alt="">
          <h3 class="u-h3">
           <?php echo $rightside['title']; ?>
          </h3>
          <p class="u-p">
           <?php echo $rightside['description']; ?>
          </p>
          <button class="u-button is-fullWidth">
         <?php echo $rightside['link_text']; ?>
          </button>
        </div>
      </div>
    </div>
  </section>

 <?php $faqs = get_field['faqs']; ?>

  <section class="questions">
    <div class="u-wrapper">
      <h2 class="u-h2">
        Frequently Asked Questions
      </h2>
      <p class="u-p">
        Here are some of our FAQs. If you have any other questions you’d like
        answered please feel free to email us.
      </p>
      <div class="carousel">
        <div class="carousel-item">
          <details class="carousel-content">
            <summary class="carousel-header">
              <?php echo $faqs['title']; ?>
            </summary>
            <p class="u-p">
               <?php echo $faqs['description']; ?>
            </p>
          </details>
          <details class="carousel-content">
            <summary class="carousel-header">
              How can I request a new browser?
            </summary>
            <p class="u-p">
              Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa, ultricies non ligula.
              Suspendisse imperdiet. Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa,
              ultricies non ligula. Suspendisse imperdie tVivamus luctus eros aliquet convallis ultricies.
              Mauris augue massa, ultricies non ligula. Suspendisse imperdiet.
            </p>
          </details>
          <details class="carousel-content">
            <summary class="carousel-header">
              Is there a mobile app?
            </summary>
            <p class="u-p">
              Sed consectetur quam id neque fermentum accumsan. Praesent luctus vestibulum dolor, ut condimentum
              urna vulputate eget. Cras in ligula quis est pharetra mattis sit amet pharetra purus. Sed
              sollicitudin ex et ultricies bibendum.
            </p>
          </details>
          <details class="carousel-content">
            <summary class="carousel-header">
              What about other Chromium browsers?
            </summary>
            <p class="u-p">
              Integer condimentum ipsum id imperdiet finibus. Vivamus in placerat mi, at euismod dui. Aliquam
              vitae neque eget nisl gravida pellentesque non ut velit.
            </p>
          </details>
        </div>

      </div>
      <button class="u-button">More Info</button>
    </div>
  </section>
  <section class="join">
    <div class="u-wrapper">
      <small>35,000+ already joined</small>
      <h4 class="u-h4">Stay up-to-date with what we’re doing</h4>
      <form name="myForm" action="" class="form">
        <input  name="email" placeholder="Enter your email address" type="text" class="form-input" required/>
        <input type="submit" class="u-button is-red is-fullWidth" value="Contact Us">
      </form>
    </div>
  </section>
<script>
function validateform() {
var x = documents.forms["myForm"]["email"].value;

if (x == "" || x == null){
   alert("Name must be filled out");
    return false;
}
}
  </script>
<?php get_footer(); ?>
