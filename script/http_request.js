const URL  = 'https://fresher-wallet/main.php';
const tag = document.querySelector ('.name');

http_request (URL);

async function http_request (URL)
{
    let response = await fetch (URL);
    let content  = await response.json ();
    
    tag.textContent = content[0].name;
}