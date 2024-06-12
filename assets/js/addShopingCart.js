export function addToCarts() {
    const buttons = document.querySelectorAll('.add');

    buttons.forEach(button => {
        button.addEventListener('click', async event => {
            try {
                // console.log(`Button ID: ${event.target.id}`);
                const id = event.target.id.replace('addProduct_', '');
                // console.log(`Product ID:${id}`);

                const response = await fetch('http://localhost/project/az-store/assets/backend/php/addToCart.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({id:id}),
                });
                // console.log(response);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                // console.log(response.json());
                const data = await response.json(); 

                console.log(data);  

                alert(JSON.parse(data).message);  
            } catch (error) {
                console.error('An error occurred:', error);
            }
        });
    });
}

