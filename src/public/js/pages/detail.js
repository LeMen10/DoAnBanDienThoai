$(document).ready(() => {
    document.getElementById("sizeSelect").addEventListener("change", handleSizeChange);
    document.getElementById("colorSelect").addEventListener("change", handleColorChange);
    document.getElementById("moreInfoBtn").addEventListener('click', handleMoreInformation);
})
function handleSizeChange() {
    const phoneID = document.querySelector(`.product-desc`).getAttribute('data-id');
    const sizeID = document.getElementById("sizeSelect").value;
    loadAllColor(phoneID, sizeID);
}
function handleColorChange() {
    const phoneID = document.querySelector(`.product-desc`).getAttribute('data-id');
    const sizeID = document.getElementById("sizeSelect").value;
    const colorID = document.getElementById("colorSelect").value;
    loadVariant(phoneID, sizeID, colorID);

}
function handleMoreInformation() {
    var productDesc = document.querySelector('.product-desc');
    var moreInfoBtn = document.getElementById('moreInfoBtn');
    if (moreInfoBtn.textContent === 'Xem thêm') {
        productDesc.style.maxHeight = 'none';
        moreInfoBtn.textContent = 'Ẩn bớt';
    } else {
        productDesc.style.maxHeight = '10em';
        moreInfoBtn.textContent = 'Xem thêm';
    }
}
const loadAllColor = (phoneID, sizeID) => {
    return $.ajax({
        type: 'post',
        url: 'index.php?ctrl=detail&act=getAllColor',
        data: { phoneID, sizeID },
        dataType: 'json',
        success: res => {
            changeVariant(res.variant);
            changeColorSelect(res.colors);
        },
        error: err => {
            console.log(err);
        }
    })
}
const loadVariant = (phoneID, sizeID, colorID) => {
    return $.ajax({
        type: 'post',
        url: 'index.php?ctrl=detail&act=getVariant',
        data: { phoneID, sizeID, colorID },
        dataType: 'json',
        success: res => {
            changeVariant(res.variant);
        },
        error: err => {
            console.log(err);
        }
    })
}
const changeColorSelect = (Colors) => {
    var colorSelect = document.getElementById('colorSelect');
    if (colorSelect != null) {
        clearSelect(colorSelect);
        Colors.forEach(color => {
            var option = document.createElement('option');
            option.text = color["color"];
            option.value = color["colorID"];
            colorSelect.appendChild(option);
        });
    }
}

const changeVariant = (Variant) => {
    const priceElement = document.getElementById('price-value');
    const quantityElement = document.getElementById('quantity-value');
    if (priceElement != null) priceElement.innerHTML = "<span>đ</span>" + Variant["price"];
    if (quantityElement != null) quantityElement.innerHTML = "Quantity: " + Variant["quantity"];
}

function clearSelect(selectElement) {
    while (selectElement.options.length > 0) {
        selectElement.remove(0);
    }
}