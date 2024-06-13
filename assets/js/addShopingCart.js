export function addToCarts() {
    const buttons = document.querySelectorAll('.add');
    let url = 'http://localhost/project/az-store/assets/backend/php/addToCart.php';
    buttons.forEach(button => {
        button.addEventListener('click', async event => {

            let id = button.id.replace('addProduct_','');
            let data = {
                "id":id
            }
            let options = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            };

            try {
               let response = await fetch(url, options);
               let data = await response.json();

               if (data.status === 'success') {
                   console.log(data.message);
                   console.log('Received data:', data.data);
               } else {
                   console.error(data.message);
               }
            } catch (error) {
                alert(error);
            }

        });
    });
}
