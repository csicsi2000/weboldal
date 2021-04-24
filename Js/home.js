const logo = document.querySelectorAll('#svg-nev path');

console.log(logo);

for(let i= 0;i < logo.length; i++){
    console.log(`Letter ${i} is ${logo[i].getTotalLength()}`)
}