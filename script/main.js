const links    = document.querySelectorAll ('link');
const body     = document.querySelector ('body');
const addNew   = document.querySelector ('.borders');
const table    = document.querySelector ('.balance-check');
const addCheck = document.querySelector ('.button');
const theme    = document.querySelector ('#switch-theme');
const sets     = document.querySelector ('#settings');

// links[2].disabled = true;
// table.classList.remove('hidden');

let date = new Date ();

if (date.getHours () > 20 || date.getHours () < 8) links[2].disabled = true;
else links[1].disabled = true;

theme.addEventListener ('click', switchTheme);
addNew.addEventListener ('click', inputs);
addCheck.addEventListener ('click', () => {table.classList.add('hidden')});

// console.log (date.getHours ());

function settings (d_l, check) 
{
    links[1].disabled = d_l[0];
    links[2].disabled = d_l[1];
    table.classList.remove(check);
}

function switchTheme ()
{
    if (links[1].disabled == true || links[2].disabled == false) 
    {
        links[2].disabled = true;
        links[1].disabled = false;
    }
    else if (links[1].disabled == false || links[2].disabled == true) 
    {
        links[1].disabled = true;
        links[2].disabled = false;
    }
}

function inputs () 
{
    if (table.classList[1] != 'hidden') table.classList.add('hidden');
    else if (table.classList[1] == 'hidden') table.classList.remove('hidden');
}