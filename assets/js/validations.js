$(document).ready(function() {
    $("form").submit(function(event) {
      event.preventDefault();
      
      let name = $(this).find(".name-input").val().trim();
      let description = $(this)?.find(".description-input")?.val()?.trim();
      let image = $(this)?.find(".image-input")?.val()?.trim();
      let price = $(this)?.find(".price-input")?.val()?.trim();
    
      if (name === "") {
        alert("Please enter a valid name. \n Mailen Catalini"); 
      } 
      
      else if (description === "") {
        alert("Please enter a valid description. \n Mailen Catalini");
      }

      else if (image === "") {
        alert("Please enter a valid image. \n Mailen Catalini");
      }

      else if (price === "") {
        alert("Please enter a valid price. \n Mailen Catalini");
      }
      
      else {
        window.location.href = $(this).attr("action");
      }

    });
  });

  