document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('openPopup').addEventListener('click', function () {
      document.getElementById('popup').classList.remove('hidden');
  });
  document.getElementById('closePopup').addEventListener('click', function () {
      document.getElementById('popup').classList.add('hidden');
  });

  document.addEventListener('mousedown', function(event) {
      var popup = document.getElementById('popup');
      if (event.target !== popup && !popup.contains(event.target)) {
          popup.classList.add('hidden');
      }
  });
});
