let insertPass  = document.getElementById('insertPass');
        let confirmPass = document.getElementById('confirmPass');
        
        function ValidarSenha() {
          if (insertPass.value != confirmPass.value) {
            confirmPass.setCustomValidity("Senhas diferentes!");
            confirmPass.reportValidity();
            return false;
          } else {
            confirmPass.setCustomValidity("");
            return true;
          }
        }
        confirmPass.addEventListener('input', ValidarSenha);
        
        
let arr = [1,2,3,4,5,6,7,8,9,10];
console.log(arr);
