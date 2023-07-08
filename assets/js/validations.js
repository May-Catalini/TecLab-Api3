let errorArray = [];
$(document).ready(function() {

    $("form").submit(function(event) {
      event.preventDefault();

      let name = $(this).find(".name-input").val().trim();
      let description = $(this)?.find(".description-input")?.val()?.trim();
      let image = $(this)?.find(".image-input")?.val()?.trim();
      let price = $(this)?.find(".price-input")?.val()?.trim();
      let category = $(this)?.find(".categories")?.val();
      

      errorArray = [];
      
      validateName(name);
      validateImage(image);
      validateDescription(description);
      validatePrice(price);
      validateCategory(category);

      if (errorArray.length > 0) {
      alert(errorArray.join('\n') + '\n Mailen Catalini');
      return;
      }
      
      window.location.href = $(this).attr("action");
  
    });
});


  function validateName(name) {
    if (!name && name != '') return;

    let regex =  /^.{3,150}$/;
    let isValid = name !== '' && regex.test(name);

    if (!isValid) {
    errorArray.push("Please enter a valid name.");
    }
  }


  function validateImage(image) {
    if (!image && image != '') return;

    let regex =  /\.(jpg|jpeg|png|gif|svg|webp)$/i;
    let isValid = image !== '' && regex.test(image);

    if (!isValid) {
    errorArray.push("Please enter a valid image.");
    }
  }


  function validateDescription(description) {
    if (!description && description != '') return;

    let regex = /^.{3,500}$/;
    let isValid = description !== '' && regex.test(description);

    if (!isValid) {
    errorArray.push("Please enter a valid description.");
    }
  }


  function validatePrice(price) {
    if (!price && price != '') return;

    let regex =  /^(?!0\d)\d*(,\d{1,2})?$/;
    let isValid = price !== '' && regex.test(price);

    if (!isValid) {
    errorArray.push("Please enter a valid price.");
    }
  }

  function validateCategory(category) {
    if (category === "" || category === null) {
      errorArray.push("Please select a valid category.");
    }
  }