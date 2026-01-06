document.addEventListener("DOMContentLoaded", function () {

  /* ---------------- CART CLEAR AFTER ORDER ---------------- */
// Check if the URL has ?order=success
if (window.location.search.includes("order=success")) {
    localStorage.removeItem(CART_KEY); // clear cart immediately
}
 
 
 
  /* ---------------- HERO SLIDER ---------------- */
  const slides = document.querySelectorAll(".hero-slide");
  let index = 0;

  if (slides.length) {
    slides.forEach(slide => slide.classList.remove("active"));
    slides[0].classList.add("active");

    setInterval(() => {
      slides[index].classList.remove("active");
      index = (index + 1) % slides.length;
      slides[index].classList.add("active");
    }, 4000);
  }

  /* ---------------- CART OPEN / CLOSE ---------------- */
const cartIcon = document.querySelector('#cart-icon');
const cart = document.querySelector('.cart');
const cartClose = document.querySelector('#cart-close');
const cartContent = document.querySelector('.cart-content');

if (cartIcon && cart && cartClose) {
  cartIcon.addEventListener("click", () => cart.classList.add("active"));
  cartClose.addEventListener("click", () => cart.classList.remove("active"));
}

/* ---------------- CART FUNCTIONS ---------------- */
function updateCartBadge() {
  const badge = document.querySelector(".cart-item-count");
  const cartData = JSON.parse(localStorage.getItem(CART_KEY)) || [];
  const total = cartData.reduce((sum, item) => sum + item.quantity, 0);

  if (!badge) return;

  badge.style.visibility = total > 0 ? "visible" : "hidden";
  badge.innerText = total > 0 ? total : "";
}

function updateTotal() {
  let total = 0;
  document.querySelectorAll('.cart-box').forEach(cartBox => {
    const price = parseFloat(
      cartBox.querySelector('.Cartprice').innerText.replace(/[^0-9.]/g, "")
    );
    const qty = parseInt(cartBox.querySelector('.number').innerText);
    total += price * qty;
  });

  const totalPriceEl = document.querySelector('.total-price');
  if (totalPriceEl) {
    totalPriceEl.innerText = `LKR ${total.toFixed(2)}`;
  }
}

function saveCart() {
  const cartArr = [];
  document.querySelectorAll('.cart-box').forEach(box => {
    cartArr.push({
      title: box.querySelector('.cart-product-title').innerText,
      price: parseFloat(
        box.querySelector('.Cartprice').innerText.replace(/[^0-9.]/g, "")
      ),
      quantity: parseInt(box.querySelector('.number').innerText),
      image: box.querySelector('img').src
    });
  });

  localStorage.setItem(CART_KEY, JSON.stringify(cartArr));
}

function updateCartUI() {
  const cartEmpty = document.getElementById('cart-empty');
  const totalBox = document.querySelector('.total');
  const checkoutBtn = document.querySelector('.btn-buy');

  if (!cartContent) return;

  if (!cartContent.children.length) {
    if (cartEmpty) cartEmpty.style.display = "block";
    if (totalBox) totalBox.style.display = "none";
    if (checkoutBtn) checkoutBtn.style.display = "none";
  } else {
    if (cartEmpty) cartEmpty.style.display = "none";
    if (totalBox) totalBox.style.display = "flex";
    if (checkoutBtn) checkoutBtn.style.display = "block";
  }
}

function attachCartEvents(cartBox) {
  cartBox.querySelector('.cart-remove').addEventListener("click", () => {
    cartBox.remove();
    saveCart();
    updateCartBadge();
    updateTotal();
    updateCartUI();
  });

  cartBox.querySelector('.cart-quantity').addEventListener("click", e => {
    const numberEl = cartBox.querySelector('.number');
    let qty = parseInt(numberEl.innerText);

    if (e.target.classList.contains('decrement') && qty > 1) qty--;
    if (e.target.classList.contains('increment')) qty++;

    numberEl.innerText = qty;
    saveCart();
    updateCartBadge();
    updateTotal();
    updateCartUI();
  });
}

function loadCartFromStorage() {
  if (!cartContent) return;

  const storedCart = JSON.parse(localStorage.getItem(CART_KEY)) || [];
  cartContent.innerHTML = "";

  storedCart.forEach(item => {
    const cartBox = document.createElement('div');
    cartBox.classList.add('cart-box');
    cartBox.innerHTML = `
      <img src="${item.image}" class="cart-img">
      <div class="cart-details">
        <h3 class="cart-product-title">${item.title}</h3>
        <span class="Cartprice">LKR ${item.price}</span>
        <div class="cart-quantity">
          <button class="decrement">-</button>
          <span class="number">${item.quantity}</span>
          <button class="increment">+</button>
        </div>
      </div>
      <i class="ri-delete-bin-7-line cart-remove"></i>
    `;
    cartContent.appendChild(cartBox);
    attachCartEvents(cartBox);
  });

  updateCartBadge();
  updateTotal();
  updateCartUI();
}

/* ---------------- ADD TO CART ---------------- */
document.querySelectorAll('.add-cart').forEach(btn => {
  btn.onclick = (e) => {
    const productBox = e.currentTarget.closest('.product-box');
    if (!productBox) return;

    const title = productBox.querySelector('.product-title').innerText;
    const price = parseFloat(
      productBox.querySelector('.price').innerText.replace(/[^0-9.]/g, "")
    );
    const image = productBox.querySelector('img').src;

    const cartData = JSON.parse(localStorage.getItem(CART_KEY)) || [];

    const existing = cartData.find(item => item.title === title);
    if (existing) existing.quantity += 1;
    else cartData.push({ title, price, quantity: 1, image });

    localStorage.setItem(CART_KEY, JSON.stringify(cartData));
    loadCartFromStorage();

    cart.classList.add("active");
  };
});

/* ---------------- CHECKOUT ---------------- */
const checkoutBtn = document.querySelector('.btn-buy');
if (checkoutBtn) {
  checkoutBtn.addEventListener("click", () => {
    const cartItems = JSON.parse(localStorage.getItem(CART_KEY)) || [];
    if (!cartItems.length) {
      alert("Your cart is empty!");
      return;
    }
    window.location.href = "checkout.php";
  });
}


 /* ---------------- SUBSCRIBE MODAL ---------------- */
  // 1. Declarations (Keep these at the top of the section)
  const subscribeModal = document.getElementById("subscribe-modal");
  const subscribeBtns = document.querySelectorAll(".cta-button");
  const subscribeClose = document.querySelector(".close");
  const subscribeForm = document.getElementById("subscribe-form");
  const globalMsg = document.getElementById("global-subscribe-message");

  // 2. Event Listeners for Opening/Closing
  subscribeBtns.forEach(btn => {
    btn.addEventListener("click", e => {
      e.preventDefault();
      subscribeModal.style.display = "block";
    });
  });

  if (subscribeClose) {
    subscribeClose.addEventListener("click", () => subscribeModal.style.display = "none");
  }

  window.addEventListener("click", e => {
    if (e.target === subscribeModal) subscribeModal.style.display = "none";
  });

  // 3. Helper Function
  function showGlobalMessage(text, type = "success") {
    globalMsg.innerText = text;
    globalMsg.style.display = "block";
    globalMsg.style.color = type === "success" ? "green" : "red";
    setTimeout(() => {
      globalMsg.style.display = "none";
    }, 3000);
  }

  // 4. THE UPDATED SUBMIT LOGIC (Paste this version below)
  if (subscribeForm) {
    let isSubmitting = false; 

    subscribeForm.addEventListener("submit", function(e) {
      // 1. Prevent the default form submission and stop event bubbling
      e.preventDefault();
      e.stopImmediatePropagation(); 
      
      // 2. Check if we are already in the middle of a request
      if (isSubmitting) return; 
      isSubmitting = true;

      const submitBtn = subscribeForm.querySelector('button');
      const originalBtnText = submitBtn.innerText;
      
      submitBtn.innerText = "Processing..."; 
      submitBtn.disabled = true;

      const formData = new FormData(subscribeForm);

      fetch("subscribe.php", { 
        method: "POST", 
        body: formData,
        // Optional: ensures the browser doesn't use a cached response
        cache: "no-store" 
      })
        .then(async res => {
          const rawText = await res.text();
          try {
            return JSON.parse(rawText);
          } catch (err) {
            console.error("Server Error Detail:", rawText);
            throw new Error("Invalid server response");
          }
        })
        .then(data => {
          // 3. Show message from the server
          showGlobalMessage(data.message, data.status === "success" ? "success" : "error");
          
          if (data.status === "success") {
            subscribeForm.reset();
            setTimeout(() => {
                subscribeModal.style.display = "none";
            }, 1000); // Give user a second to see the success message
          }
        })
        .catch((error) => {
          showGlobalMessage("Server error. Try again.", "error");
        })
        .finally(() => {
          // 4. Unlock the form only after everything is done
          isSubmitting = false; 
          submitBtn.innerText = originalBtnText;
          submitBtn.disabled = false;
        });
    });
  }

  /* ---------------- INITIAL LOAD ---------------- */
  loadCartFromStorage();
});