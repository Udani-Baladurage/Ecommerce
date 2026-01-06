<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Search Products</title>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="search.css">


<style>
.search-input {
  width: 60%;
  padding: 15px;
  font-size: 18px;
  margin: 30px auto;
  display: block;
}
.product-container {
  display: grid;
  grid-template-columns: repeat(auto-fill,minmax(250px,1fr));
  gap: 20px;
}
</style>
</head>

<body>

<input type="text" id="searchInput" class="search-input" placeholder="Search products...">

<section id="searchResults">
  <div class="product-container" id="results"></div>
</section>

<script>
const pages = [
  'index.php',
  'tops.php',
  'Dresses.php',
  'bottoms.php',
  'party.php',
  'office.php',
  'bestsell.php',
  'newarrivals.php',
  'shop.php'
];

const results = document.getElementById('results');

document.getElementById('searchInput').addEventListener('keyup', function () {
  const query = this.value.toLowerCase();
  results.innerHTML = '';

  if (query.length < 2) return;

  pages.forEach(page => {
    fetch(page)
      .then(res => res.text())
      .then(html => {
        const temp = document.createElement('div');
        temp.innerHTML = html;

        const products = temp.querySelectorAll('.pro.product-box');

        products.forEach(product => {
  const titleEl = product.querySelector('.product-title');
  if (!titleEl) return;

  const title = titleEl.innerText.toLowerCase();

  if (title.includes(query)) {
    const clone = product.cloneNode(true);

    // Replace add-cart button content with icon
    const btn = clone.querySelector('.add-cart');
    if (btn) {
      btn.innerHTML = '<i class="ri-shopping-bag-line"></i>'; // icon
      btn.addEventListener('click', () => {
        addToCartFromSearch(clone);
      });
    }

    results.appendChild(clone);
  }
});

      });
  });
});
</script>

<script src="script.js"></script>
</body>
</html>

