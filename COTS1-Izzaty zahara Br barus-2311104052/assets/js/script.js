// script.js — product data, rendering, search, detail page rendering, cart (localStorage), alerts

// === Product data (each product has 3 images and rich "natural" description) ===
const PRODUCTS = {
  arabica: {
    key: 'arabica',
    name: 'Kopi Arabica',
    origin: 'Aceh Gayo',
    price: '65.000',
    images: ['kopi arabica.png', 'kopi arabika 2.png', 'kopi medium roast.png'],
    taste: ['Floral', 'Chocolate', 'Bright acidity'],
    desc: `Kopi Arabica dari dataran tinggi Gayo menghadirkan aroma bunga yang lembut berpadu dengan manis cokelat. Teksturnya halus, aftertaste terasa caramel ringan — cocok untuk yang mencari pengalaman seduhan elegan namun hangat.`,
    reviews: [
      "Aroma bunga yang menenangkan — pas untuk santai pagi.",
      "Balance antara asam dan manis, enak disajikan manual brew."
    ]
  },

  gayao: {
    key: 'gayao',
    name: 'Kopi Gayao',
    origin: 'Aceh Gayo (Varietas Gayo)',
    price: '70.000',
    images: ['Kopi gayao.png', 'kopi gayao 2.png', 'kopi arabica.png'],
    taste: ['Earthy', 'Nutty', 'Full body'],
    desc: `Kopi Gayao menawarkan karakter tanah dan kacang, dengan body yang penuh dan aftertaste cokelat pekat. Sempurna bagi penikmat kopi yang suka cita rasa kuat dan memikat.`,
    reviews: [
      "Body-nya penuh, cocok diseduh kental.",
      "Aroma tanah dan kacang yang khas, nikmat."
    ]
  },

  luwak: {
    key: 'luwak',
    name: 'Kopi Luwak',
    origin: 'Luwak Specialty',
    price: '80.000',
    images: ['Kopi luwak.png', 'kopi arabica.png', 'Kopi gayao.png'],
    taste: ['Complex', 'Velvety', 'Sweet finish'],
    desc: `Kopi Luwak menghadirkan rasa kompleks dengan tekstur velvet dan sentuhan manis alami pada aftertaste. Elegan dan eksklusif — cocok untuk momen istimewa.`,
    reviews: [
      "Halus dan kompleks — rasa premium.",
      "Aftertaste manis yang lembut, memorable."
    ]
  },

  gajah: {
    key: 'gajah',
    name: 'Kopi Gajah',
    origin: 'Sumatera (Gajah)',
    price: '72.000',
    images: ['kopi gajah.png', 'kopi gajah 2.png', 'kopi medium roast.png'],
    taste: ['Bold', 'Chocolate', 'Low acidity'],
    desc: `Kopi Gajah dikenal karena tubuhnya yang bertenaga dan rasa cokelat pekat. Keasaman rendah membuatnya nyaman dinikmati dengan susu atau espresso pekat.`,
    reviews: [
      "Kuat dan stabil, enak untuk espresso.",
      "Cokelatnya dominan, cocok untuk milk-based."
    ]
  },

  medium: {
    key: 'medium',
    name: 'Kopi Medium Roast',
    origin: 'Blend Nusantara',
    price: '68.000',
    images: ['kopi medium roast.png', 'kopi arabica.png', 'Kopi gayao.png'],
    taste: ['Balanced', 'Sweet caramel', 'Smooth finish'],
    desc: `Blend sangrai medium ini menawarkan keseimbangan rasa: manis caramel, aroma kacang, dan aftertaste yang halus. Pilihan serba guna untuk berbagai metode seduh.`,
    reviews: [
      "Serba bisa, cocok untuk daily brew.",
      "Rasa seimbang dan mudah disukai banyak orang."
    ]
  }
};

// ------------------- Utilities -------------------
function qs(selector){ return document.querySelector(selector); }
function qsa(selector){ return Array.from(document.querySelectorAll(selector)); }
function el(tag, props = {}){ const e = document.createElement(tag); Object.assign(e, props); return e; }

// ------------------- Render product cards on index.html -------------------
function renderProductCards() {
  const container = qs('#productList');
  if(!container) return;
  container.innerHTML = '';
  Object.values(PRODUCTS).forEach(prod => {
    const col = el('div'); col.className = 'col-md-4 col-lg-3 mb-4';
    col.innerHTML = `
      <div class="card">
        <img src="assets/img/${encodeURIComponent(prod.images[0]).replace(/%20/g,' ')}" class="card-img-top" alt="${prod.name}">
        <div class="card-body">
          <h5 class="card-title">${prod.name}</h5>
          <p class="small text-muted mb-2">${prod.origin} • Rp ${prod.price}</p>
          <div class="d-flex justify-content-between align-items-center">
            <button class="btn-detail" data-key="${prod.key}">Lihat Detail</button>
            <button class="btn-accent btn-sm" data-add="${prod.key}">Tambah</button>
          </div>
        </div>
      </div>`;
    container.appendChild(col);
  });

  // attach listeners
  qsa('.btn-detail').forEach(btn => {
    btn.addEventListener('click', (e) => {
      const key = e.currentTarget.dataset.key;
      window.location.href = `detail.html?product=${encodeURIComponent(key)}`;
    });
  });
  qsa('[data-add]').forEach(btn => {
    btn.addEventListener('click', (e) => {
      const key = e.currentTarget.dataset.add;
      addToCartByKey(key);
    });
  });
}

// ------------------- Search -------------------
document.addEventListener('click', (ev) => {
  if(ev.target && ev.target.id === 'btnSearch'){
    const q = qs('#search').value.trim().toLowerCase();
    filterProducts(q);
  }
});
qs && qs('#search') && qs('#search').addEventListener('keyup', (e) => {
  if(e.key === 'Enter') filterProducts(e.target.value.trim().toLowerCase());
});
function filterProducts(query){
  const container = qs('#productList');
  if(!container) return;
  container.innerHTML = '';
  const results = Object.values(PRODUCTS).filter(p => {
    return p.name.toLowerCase().includes(query) || p.origin.toLowerCase().includes(query);
  });
  if(results.length === 0){
    container.innerHTML = `<div class="col-12 text-center text-muted">Tidak ada produk sesuai pencarian.</div>`;
    return;
  }
  results.forEach(p => {
    const col = el('div'); col.className='col-md-4 col-lg-3 mb-4';
    col.innerHTML = `
      <div class="card">
        <img src="assets/img/${encodeURIComponent(p.images[0]).replace(/%20/g,' ')}" class="card-img-top" alt="${p.name}">
        <div class="card-body">
          <h5 class="card-title">${p.name}</h5>
          <p class="small text-muted mb-2">${p.origin} • Rp ${p.price}</p>
          <div class="d-flex justify-content-between align-items-center">
            <button class="btn-detail" data-key="${p.key}">Lihat Detail</button>
            <button class="btn-accent btn-sm" data-add="${p.key}">Tambah</button>
          </div>
        </div>
      </div>`;
    container.appendChild(col);
  });
  // re-attach listeners
  qsa('.btn-detail').forEach(btn => btn.addEventListener('click', (e)=> {
    const key = e.currentTarget.dataset.key;
    window.location.href = `detail.html?product=${encodeURIComponent(key)}`;
  }));
  qsa('[data-add]').forEach(btn => btn.addEventListener('click', (e)=> {
    addToCartByKey(e.currentTarget.dataset.add);
  }));
}

// ------------------- Detail page rendering -------------------
function renderDetailFromURL(){
  const params = new URLSearchParams(window.location.search);
  const key = params.get('product') || Object.keys(PRODUCTS)[0];
  const prod = PRODUCTS[key];
  if(!prod) return;

  // title, origin, desc, price
  const titleEl = qs('#productTitle'); if(titleEl) titleEl.textContent = prod.name;
  const originEl = qs('#productOrigin'); if(originEl) originEl.textContent = `Asal: ${prod.origin}`;
  const descEl = qs('#productDesc'); if(descEl) descEl.textContent = prod.desc;
  const priceEl = qs('#productPrice'); if(priceEl) priceEl.textContent = prod.price;

  // taste chips
  const tasteWrap = qs('#tasteNotes');
  if(tasteWrap){
    tasteWrap.innerHTML = '';
    prod.taste.forEach(t => {
      const c = el('div'); c.className = 'chip'; c.textContent = t;
      tasteWrap.appendChild(c);
    });
  }

  // mini reviews
  const revWrap = qs('#miniReviews');
  if(revWrap){
    revWrap.innerHTML = prod.reviews.map(r => `<div>• ${r}</div>`).join('');
  }

  // carousel images
  const carousel = qs('#carouselImages');
  if(carousel){
    carousel.innerHTML = '';
    prod.images.forEach((img, idx) => {
      const div = el('div'); div.className = `carousel-item ${idx===0 ? 'active' : ''}`;
      div.innerHTML = `<img src="assets/img/${encodeURIComponent(img).replace(/%20/g,' ')}" class="d-block w-100" style="height:420px;object-fit:cover;border-radius:6px;" alt="${prod.name}">`;
      carousel.appendChild(div);
    });
  }

  // populate other products quick-switch
  const otherWrap = qs('#otherProducts');
  if(otherWrap){
    otherWrap.innerHTML = '';
    Object.values(PRODUCTS).forEach(p => {
      const btn = el('button'); btn.className = 'chip';
      btn.textContent = p.name;
      btn.onclick = () => { window.location.href = `detail.html?product=${p.key}`; };
      otherWrap.appendChild(btn);
    });
  }
}

// ------------------- Cart actions & alerts -------------------
function showToast(message = 'Produk berhasil ditambahkan') {
  const t = qs('#toastAlert') || qs('#alertBox') || null;
  if(!t){
    alert(message);
    return;
  }
  t.textContent = message;
  t.style.display = 'block';
  t.style.opacity = '1';
  setTimeout(()=> {
    t.style.transition = 'opacity 300ms';
    t.style.opacity = '0';
    setTimeout(()=> { t.style.display = 'none'; }, 350);
  }, 1600);
}

function getCart(){
  try {
    return JSON.parse(localStorage.getItem('kopilokal_cart')||'[]');
  } catch(e){ return []; }
}
function saveCart(cart){
  localStorage.setItem('kopilokal_cart', JSON.stringify(cart));
}

function addToCartByKey(key){
  const p = PRODUCTS[key];
  if(!p) { showToast('Produk tidak ditemukan'); return; }
  const cart = getCart();
  const found = cart.find(i => i.key === key);
  if(found) found.qty = (found.qty || 1) + 1;
  else cart.push({ key: p.key, name: p.name, price: p.price, qty: 1 });
  saveCart(cart);
  showToast(`${p.name} ditambahkan ke keranjang`);
}

// wrapper for Add button in detail page
function addToCart(){
  const params = new URLSearchParams(window.location.search);
  const key = params.get('product') || Object.keys(PRODUCTS)[0];
  addToCartByKey(key);
}

// initialize listing on index if present
document.addEventListener('DOMContentLoaded', () => {
  if(qs('#productList')) renderProductCards();
  if(qs('#productTitle')) renderDetailFromURL();
});
// Dalam fungsi renderSortedProducts, update bagian card HTML:
// Update bagian render produk di script.js
col.innerHTML = `
  <div class="card h-100">
    <div class="position-relative">
      <img src="assets/img/${encodeURIComponent(prod.images[0]).replace(/%20/g,' ')}" class="card-img-top" alt="${prod.name}">
      ${badge}
    </div>
    <div class="card-body d-flex flex-column">
      <h5 class="card-title">${prod.name}</h5>
      <p class="origin-text">${prod.origin}</p>
      <div class="price-tag">Rp ${prod.price}</div>
      <p class="card-text">${prod.desc.substring(0, 100)}...</p>
      
      <div class="button-container">
        <button class="btn-detail" data-key="${prod.key}">Lihat Detail</button>
        <button class="btn-accent btn-sm" data-add="${prod.key}">+ Keranjang</button>
      </div>
    </div>
  </div>`;