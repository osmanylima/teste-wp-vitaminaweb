import 'jquery-mask-plugin';

const formMask = {
  cpf() {
    $('.cpf').mask('000.000.000-00');
  },
  phone() {
    const behavior = function(val){
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    }

    const options = {
      onKeyPress: function (val, e, field, options) {
        field.mask(behavior.apply({}, arguments), options);
      },
    }

    $('input[type="tel"]').mask(behavior, options);
  },
  phoneWithoutDDD() {
    const behavior = function(val){
      return val.replace(/\D/g, '').length === 9 ? '00000-0000' : '0000-00009';
    }

    const options = {
      onKeyPress: function (val, e, field, options) {
        field.mask(behavior.apply({}, arguments), options);
      },
    }

    $('input#withoutDDD').mask(behavior, options);
  },
  ddd() {
    $('.ddd').mask(99);
  },
  cep() {
    $('.cep').mask(99999-999);
  },
}

export default formMask;
