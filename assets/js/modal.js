var modal = document.getElementById('simpleModal');
      //get open modal button
      var modalBtn = document.getElementById('modalBtn');
      // get close button
      var closeBtn = document.getElementsByClassName('close')[0];

      // Listen for open click 
      modalBtn.addEventListener('click', openModal);
      // Listen for close click 
      modalBtn.addEventListener('click', closeModal);

      // listen for outside click
      window.addEventListener('click', outsideClick)

      //funftion to open modal
      function openModal(){
        modal.style.display = 'block';
      }

      //function toclose modal
      function closeModal(){
        modal.style.display = 'none';
      }

      // function to close modal if outside
      function outsideClick(e){
        if(e.target == modal){
          modal.style.display = 'none';
        }
      }