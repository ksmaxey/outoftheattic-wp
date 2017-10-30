<?php
/*
Template Name: Appraisals
*/
get_header(); ?>
<main class="appraisals">
  <h1>Appraisals</h1>
    <!-- Here is the area that allows users to drag and drop files to upload, or just click and select them from their computer -->
    <div class="appraisals-container">
      <div class="app-item1">
        <form action="/file-upload" class="dropzone">
          <div class="fallback">
            <input name="file" type="file" multiple />
          </div>
        </form>
        <div class="app-first">
          <p>First</p>
          <p>Show Us Some Photos (click or drag files to upload)</p>
        </div>
    </div>
      <div class="app-message">
        <textarea name="name" rows="8" cols="80" placeholder="Description"></textarea>
        <div class="app-second">
          <p>Then</p>
          <p>Tell Us About Your Item</p>
        </div>
      </div>
      <div class="app-contact">
        <div>
          <input type="text" name="name" placeholder="Name" size="25" maxlength="25"/>
        </div>
        <div>
          <input type="email" name="email" placeholder="Email" size="50" maxlength="50"/>
        </div>
        <div>
          <input type="text" name="name" placeholder="Phone" size="25" maxlength="12"/>
        </div>
          <p>Lastly</p>
          <p>Provide Your Information</p>
      </div>
      <div class="app-button">
        <!-- User will get a pop up message once this button is clicked -->
        <button type="button" name="button" id="myBtn">Submit</button>
      </div>
      <!-- Modal -->
      <div id="myModal" class="modal">
      <!-- Modal Content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <p>Appraisals normally take 3-5 business days because we want to ensure your treasure is accurately appraised!</p>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
