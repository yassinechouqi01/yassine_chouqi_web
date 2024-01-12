document.addEventListener('DOMContentLoaded', function () {
    const productList = document.getElementById('product-list');

    function fetchProducts() {
        fetch('process.php')
            .then(response => response.json())
            .then(products => {
                productList.innerHTML = '';
                products.forEach(product => {
                    const li = document.createElement('li');
                    li.innerHTML = `
                        ${product.nom} - Prix: ${product.prix} - Quantité: ${product.quantite}
                        <button onclick="editProduct(${product.id})">Modifier</button>
                        <button onclick="deleteProduct(${product.id})">Supprimer</button>
                    `;
                    productList.appendChild(li);
                });
            });
    }

    fetchProducts();

    document.querySelector('form').addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(this);

        fetch('process.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(fetchProducts);
    });

    window.editProduct = function (id) {
        fetch('process.php', {
            method: 'POST',
            body: new URLSearchParams({ id }),
        })
            .then(response => response.json())
            .then(product => {
                document.getElementById('id').value = product.id;
                document.getElementById('nom').value = product.nom;
                document.getElementById('prix').value = product.prix;
                document.getElementById('quantite').value = product.quantite;
            });
    };

    window.deleteProduct = function (id) {
        fetch('process.php', {
            method: 'POST',
            body: new URLSearchParams({ id, delete: true }),
        })
            .then(fetchProducts);
    };
});
