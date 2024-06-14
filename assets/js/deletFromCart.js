export async function delFromCart() {
    const delbuttons = document.querySelectorAll('.del_button');
    

    let url = 'http://localhost/Becode/az-store/assets/backend/php/deletFromCart.php'; // replace with your URL

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
                let data = await response.json();
                console.log(data);

                if (!response.ok) {
                    let error = await response.text();
                    throw new Error(error);
                }
                if (data.status === 'success') {
                    console.log(data.message);
                    console.log('Received data:', data.data);
                } else {
                    console.error(data.message);
                }
                location.reload();
            } catch (error) {
                console.error('Error:', error);
            }
        });
    });


// ====================================================================================== btn add and del quantity
    const btn_add = document.querySelectorAll('.add_qt');
    btn_add.forEach(btn =>{
        btn.addEventListener('click',event=>{
            console.log(btn.id);
        })
    });

    const btn_del = document.querySelectorAll('.del_qt');
    btn_del.forEach(btn =>{
        btn.addEventListener('click',event=>{
            console.log(btn.id);
        })
    });


}

            