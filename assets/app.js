

console.log('js op');

document.addEventListener('mousemove', e => {
    let x = e.clientX / innerWidth;
    let y = e.clientY / innerHeight;
    console.log(x,y);
});
console.log('bitee');