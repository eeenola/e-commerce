const product = [
    {
      id: 0,
      image: 'images/antiquetemple.png',
      title: 'Antique temple',
      price: 48.99,
    },
    {
      id: 1,
      image: 'images/bed.jpg',
      title: 'Bed',
      price: 32.99,
    },
    {
      id: 2,
      image: 'images/bed2.jpeg',
      title: 'Bed',
      price: 45.99,
    },
    {
      id: 3,
      image: 'images/bookshelfa.jpg',
      title: 'Book Shelf',
      price: 222,
    },
    {
      id: 4,
      image: 'images/bookshelfb.jpg',
      title: 'Book Shelf',
      price: 222,
    },
    {
      id: 5,
      image: 'images/bookshelfc.jpg',
      title: 'Book Shelf',
      price: 222,
    },
    {
      id: 6,
      image: 'images/chair.jpg',
      title: 'Chair',
      price: 222,
    },
    {
      id: 7,
      image: 'images/coffeetable.jpg',
      title: 'Coffee Table',
      price: 222,
    },
    {
      id: 8,
      image: 'images/fooddeliver.jfif',
      title: 'Hand Truck Trolley Luggage Cart',
      price: 222,
    },
    {
      id: 9,
      image: 'images/hangingchair1.jpg',
      title: 'Hanging Chair',
      price: 222,
    },
    {
      id: 10,
      image: 'images/lamp.jfif',
      title: 'Lamp',
      price: 222,
    },
    {
      id: 11,
      image: 'images/sofa.jpg',
      title: 'Sofa',
      price: 222,
    },
    {
      id: 12,
      image: 'images/sofa1.jpg',
      title: 'Sofa',
      price: 222,
    },
    {
      id: 13,
      image: 'images/sofa2.jpg',
      title: 'Sofa',
      price: 222,
    },
    {
      id: 14,
      image: 'images/sofa3.jpg',
      title: 'Sofa',
      price: 222,
    },
    {
      id: 15,
      image: 'images/table.jpg',
      title: 'Table',
      price: 222,
    },
    {
      id: 16,
      image: 'images/table1.jpg',
      title: 'Table',
      price: 222,
    },
    {
      id: 17,
      image: 'images/bookshelfd.jpg',
      title: 'BookShelf',
      price: 222,
    },
    {
      id: 18,
      image: 'images/bookshelfe.jpg',
      title: 'BookShelf',
      price: 222,
    },
    {
      id: 19,
      image: 'images/hangingchair.jpg',
      title: 'Hanging Chair',
      price: 222,
    },
   
  ];
 
  const categories = [...new Set(product.map(item => item.title))].map(title => {
    return product.find(item => item.title === title);
  });
  
  
  let i = 0;
  document.getElementById('root').innerHTML = product.map((item, index) => {
    var { image, title, price } = item;
    return (
      `<div class='box'>
        <div class='img-box'>
          <img class='images' src=${image}></img>
        </div>
        <div class='bottom'>
          <p>${title}</p>
          <h2>$ ${price}.00</h2>
          <button onclick='addtocart(${index})'>Add to Cart</button>
        </div>
      </div>`
    );
  }).join('');
  
  
  var cart = [];
  
  function addtocart(index) {
    cart.push({ ...product[index] });
    displaycart();
  }
  
  
  
  function delElement(a) {
    cart.splice(a, 1);
    displaycart();
  }
  
  function displaycart(a) {
    let j = 0,
      total = 0;
    document.getElementById('count').innerHTML = cart.length;
    if (cart.length == 0) {
      document.getElementById('cartitem').innerHTML = "Your cart is empty";
      document.getElementById("total").innerHTML = "$ " + 0 + ".00";
    } else {
      document.getElementById('cartitem').innerHTML = cart
        .map((items) => {
          var { image, title, price } = items;
          total = total + price;
          document.getElementById("total").innerHTML = "$ " + total + ".00";
          return (
            `<div class='cart-item'>
               <div class='row-img'>
                 <img class ='rowimg' src=${image}>
               </div>
               <p style='font-size:12px;'>${title}</p>
               <h2 style='font-size: 15px;'>$ ${price}.00</h2>
               <i onclick='delElement(${j})' class='fas fa-trash'></i>
             </div>`
          );
        })
        .join('');
      j++;
    }
  }
  