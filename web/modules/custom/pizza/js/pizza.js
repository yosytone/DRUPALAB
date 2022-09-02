(function ($, Drupal, settings) {
  Drupal.behaviors.pizza = {
    attach: function (context) {
      if (context === document) {
        document.querySelectorAll('#pizza-form .form-select, #pizza-form .form-radio').forEach((element) => {
          element.addEventListener('change', () => {
            let totalPrice = 0
            document.querySelectorAll('#pizza-form .form-select.form-control').forEach((elem) => {
              totalPrice += Number(settings.typePrice[Number(elem.id.replace('edit-quantity-', ''))].Price) * Number(elem.value)
            })
            if (document.querySelector('input[name=district]:checked')) {
              totalPrice += Number(settings.distPrice[document.querySelector('input[name=district]:checked').value].Price)
            }
            document.querySelector('input[name=price]').value = totalPrice + settings.priceSuffix
          })
        })
      }
    }
  }
})(jQuery, Drupal, drupalSettings.pizza, );
