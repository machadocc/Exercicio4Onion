document.getElementById('calculaSono').addEventListener('click', (ev) => {
    let trSono = document.getElementById('trSono');

    if(ev.target.checked){
        trSono.style.display = 'contents';

        return;
    }

    trSono.style.display = 'none';
});