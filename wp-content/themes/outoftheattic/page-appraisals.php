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

<?= the_content(); ?>

      </div>
    </div>
</main>

<?php get_footer(); ?>
