<script>
  // Add event listeners to all "Add to Cart" buttons
  var addToCartButtons = document.querySelectorAll(".add-to-cart");
  addToCartButtons.forEach(function(button) {
    button.addEventListener("click", function() {
      // Get the modal associated with the clicked button
      var modal = button.closest(".modal");

      // Get the selected toppings from the modal
      var selectedToppings = [];
      var checkboxes = modal.querySelectorAll("input[name='topping']:checked");
      checkboxes.forEach(function(checkbox) {
        selectedToppings.push(checkbox.value);
      });

      // Get the pizza type from the modal
      var pizzaTypeElement = modal.querySelector(".pizza-type");
      var pizzaType = pizzaTypeElement.innerText;

      // Create a new pizza object with the selected toppings
      var pizza = {
        type: pizzaType,
        toppings: selectedToppings
      };

      // Add the pizza to the cart (you can replace this with your own cart implementation)
      addToCart(pizza);

      // Optionally, display a confirmation message
      alert("Pizza " + pizzaType + " with selected toppings added to the cart!");

      // Close the modal
      var modalBackdrop = document.querySelector(".modal-backdrop");
      modal.style.display = "none";
      modalBackdrop.style.display = "none";
    });
  });

  // Function to add the pizza to the cart
  function addToCart(pizza) {
    // Your code to add the pizza to the cart goes here
    console.log(pizza);
  }
</script>
