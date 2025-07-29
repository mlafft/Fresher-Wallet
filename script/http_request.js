const URL     = 'https://fresher-wallet/';
const addres  = 'http_requests/income.php';

const tag     = document.querySelector ('.name');
const form    = document.querySelector ('form');
const button  = document.querySelector ('button');

options = {
    method: 'POST',
    body: new FormData (form)
}

// http_request (URL + addres, options);

form.addEventListener ('submit', () => http_request (URL + addres, options));

async function http_request (URL, options)
{
    let response = await fetch (URL, options);
    let content  = await response.json ();
    
    console.log (response.status);
    console.log (content);
}