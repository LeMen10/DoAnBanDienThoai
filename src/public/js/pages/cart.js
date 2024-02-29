$(document).ready(() => {
    const qtyButton = document.getElementById('qtybutton-add');
    qtyButton.addEventListener('click', increaseQuantity);
});

const increaseQuantity = () => {
    const tagIp = document.getElementById('ip-quantity');
    const id = tagIp.getAttribute('data-id');
    const quantity = tagIp.value;

    return $.ajax({
        type: 'post',
        url: 'index.php?ctrl=cart&act=update_quantity',
        data: { quantity: 3, id },
        dataType: 'json',
        success: (res) => {
            console.log(res)
        },
        error: (err) => {
            console.log(err)
        }
    });
};
