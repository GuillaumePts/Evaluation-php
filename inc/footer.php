
    <footer>
        <p>Mon footer</p>
    </footer>
</body>
<script src="./assets/app.js"></script>
<script>
    let root = document.documentElement;
    let body = document.querySelector('body');
document.addEventListener('mousemove', e => {
    let x = Math.round(e.clientX / innerWidth *1000000);
    let y = Math.round(e.clientY / innerHeight*1000000);
    console.log(x,y);

    root.style.setProperty('--mouse-x', '#'+x);
    root.style.setProperty('--mouse-y', '#'+y);


});
console.log('bitee');</script>
</html>