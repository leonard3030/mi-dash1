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


// dropdown

let dropdown = document.querySelectorAll('.dropdown');
dropdown.forEach((dropBtn)=>{
    dropBtn.addEventListener('click', (e)=>{
        e.preventDefault();
        let collapseElement = document.querySelector('#'+dropBtn.name);
        if (collapseElement.classList.contains('is-collapsed')) {
            collapseElement.style.height = 'auto';
            collapseElement.classList.remove('is-collapsed')
            dropBtn.classList.add('rotate')
        }else{
            collapseElement.style.height = '0px';
            collapseElement.classList.add('is-collapsed')
            dropBtn.classList.remove('rotate')
        }
    });
})




// navbarcollapse

let navColBtns = document.querySelectorAll('.nav-collapse-btn');
let bodyWidget = document.querySelector('.body-widget');
let hPhone = document.querySelectorAll('.h-phone');
console.log(hPhone);
navColBtns.forEach((Btn)=>{
    Btn.addEventListener('click', (e)=>{
        e.preventDefault();
        let collapseElement = document.querySelector('#'+Btn.name);
        if (collapseElement.classList.contains('is-collapsed')) {
            collapseElement.style.width = '260px';
            collapseElement.classList.remove('is-collapsed')
            Btn.style.rotate = '0deg';
            hPhone.forEach((hPhon)=>{
                hPhon.style.display = 'block';
            });
            bodyWidget.style.width = "calc(100vw - 260px)";
        }else{
            collapseElement.style.width = '64px';
            collapseElement.classList.add('is-collapsed')
            Btn.style.rotate = '180deg';
            hPhone.forEach((hPhon)=>{
                hPhon.style.display = 'none';
            });
            bodyWidget.style.width = "calc(100vw - 64px)";
        }
    });
})