export async function delFromCart() {
    const delbuttons = document.querySelectorAll('.del_button');
    let url = 'http://localhost/project/az-store/assets/backend/php/deleteFromCart.php'; // replace with your URL

    delbuttons.forEach(delbutton => {
        delbutton.addEventListener('click', async event => {
            let id = delbutton.id;
            console.log(delbutton.id);

            let options = {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({id})
            };

            try {
                let response = await fetch(url, options);
                if (!response.ok) {
                    let error = await response.text();
                    throw new Error(error);
                }
                let data = await response.json();
                console.log(data);
            } catch (error) {
                console.error('Error:', error);
            }
        });
    });
}

delFromCart();

            