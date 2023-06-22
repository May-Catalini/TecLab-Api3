$(document).ready(function() {
    $("form").submit(function(event) {
      event.preventDefault();
      
      let name = $(this).find(".name-input").val().trim();
      let description = $(this)?.find(".description-input")?.val()?.trim();
      
      if ((name === "") && (description === "")) {
        alert("Please enter a valid name and description. \n Mailen Catalini");
      } 

      else if (name === "") {
        alert("Please enter a valid name. \n Mailen Catalini"); 
      } 
      
      else if (description === "") {
        alert("Please enter a valid description. \n Mailen Catalini");
      }
  
      this.submit();
    });
  });

  