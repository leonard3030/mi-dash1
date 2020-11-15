async function login(e) {
    const inputs = document.querySelectorAll('.form-input');
    let errors = [];

    inputs.forEach((input)=>{
        let erroP = input.parentElement;
        if (input.value == '') {
            erroP.children[2].style.display = 'block';
            errors.push('error');
        }else{
            erroP.children[2].style.display = 'none';
        }
    });
    if (errors.length > 0) {
        e.preventDefault();
    }
}