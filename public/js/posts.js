document.addEventListener('DOMContentLoaded', function() {
  // Toggle comments section
  const commentButtons = document.querySelectorAll('.toggle-comments');

  commentButtons.forEach(button => {
      button.addEventListener('click', function() {
          const commentsSection = this.closest('.osahan-post').querySelector('.comments-section');
          if (commentsSection.style.display === 'none' || commentsSection.style.display === '') {
              commentsSection.style.display = 'block';
          } else {
              commentsSection.style.display = 'none';
          }
      });
  });

  // AJAX to handle comment form submission
  $('form[id^="commentForm-"]').on('submit', function(event) {
  event.preventDefault(); // Prevent form from refreshing the page
  const form = $(this);
  const postId = form.attr('id').split('-')[1]; // Extract post ID from form ID
  const formData = form.serialize(); // Serialize the form data for submission

  $.ajax({
      url: form.attr('action'), // The form action URL
      type: 'POST',
      data: formData,
      success: function(response) {
          if (response.success) {
              // Dynamically insert the new comment into the comment section
              const newComment = `
                  <div class="comments">
                      <strong>${response.user}</strong>
                      <p>${response.comment.content}</p>
                  </div>
              `;
              // Insert the new comment before the form
              $(`#commentForm-${postId}`).before(newComment);
              
              // Clear the textarea
              form.find('textarea').val('');
          }
      },
      error: function(xhr) {
          console.log('Error:', xhr.responseText); // Log errors for debugging
      }
  });
});

});


