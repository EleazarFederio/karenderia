<div class="container">
    <form class="needs-validation" novalidate style="margin-top:5%">
    <div class="form-row">
        <div class="col-md-4 mb-3" style="margin-left:10%">
            <label for="validationCustom01">Product Name</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="form-group" style="margin-top:15%">
                <label for="validationCustom02">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <div class="form-group" style="margin-top:15%">
                <label for="exampleFormControlSelect2">Category</label>
                <select class="form-control" id="exampleFormControlSelect2" required>
                <option>Dish</option>
                <option>Drink</option>
                <option>Snack</option>
                <option>Others</option>
                </select>
            </div>
        </div>
        <div class="col-md-4 mb-3" style="margin-left:10%">
            <div class="media">
                <img src="<?php echo base_url().'assets/foodImages/no_food.jpg' ?>" class="mr-3" alt="..." width="250">
                
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Choose Product Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" >
                </div>
            </form>
            <button class="btn btn-primary" type="submit">ADD PRODUCT</button>
        </div>
        
    </div>
    </form>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>